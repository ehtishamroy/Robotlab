<?php

namespace App\Orchid\Screens;

use App\Models\DiscountCode;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Support\Facades\Toast;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiscountCodeScreen extends Screen
{
    /**
     * Query data.
     */
    public function query(): iterable
    {
        return [
            'codes' => DiscountCode::orderBy('created_at', 'desc')->paginate(20),
        ];
    }

    /**
     * Display header name.
     */
    public function name(): ?string
    {
        return 'Discount Codes';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Manage discount/referral codes for demo request tracking.';
    }

    /**
     * Button commands.
     */
    public function commandBar(): iterable
    {
        return [
            ModalToggle::make('Add New Code')
                ->modal('createCodeModal')
                ->method('createCode')
                ->icon('plus'),

            Button::make('Generate Random Code')
                ->icon('magic')
                ->method('generateCode'),
        ];
    }

    /**
     * Views.
     */
    public function layout(): iterable
    {
        return [
            Layout::table('codes', [
                TD::make('id', 'ID')
                    ->width(60),

                TD::make('code', 'Code')
                    ->render(function (DiscountCode $code) {
                        return '<code style="background: #f1f1f1; padding: 4px 8px; border-radius: 4px; font-weight: bold;">' . e($code->code) . '</code>';
                    }),

                TD::make('description', 'Description')
                    ->width(200),

                TD::make('is_active', 'Status')
                    ->render(function (DiscountCode $code) {
                        if ($code->isValid()) {
                            return '<span style="background: #28a745; color: white; padding: 4px 10px; border-radius: 12px; font-size: 12px;">Active</span>';
                        }
                        return '<span style="background: #dc3545; color: white; padding: 4px 10px; border-radius: 12px; font-size: 12px;">Inactive</span>';
                    }),

                TD::make('usage_count', 'Uses')
                    ->render(function (DiscountCode $code) {
                        $max = $code->max_uses ? '/' . $code->max_uses : '';
                        return $code->usage_count . $max;
                    }),

                TD::make('expires_at', 'Expires')
                    ->render(function (DiscountCode $code) {
                        if (!$code->expires_at) {
                            return '<span style="color: #999;">Never</span>';
                        }
                        $isPast = $code->expires_at->isPast();
                        $color = $isPast ? '#dc3545' : '#666';
                        return '<span style="color: ' . $color . ';">' . $code->expires_at->format('M d, Y') . '</span>';
                    }),

                TD::make('created_at', 'Created')
                    ->render(function (DiscountCode $code) {
                        return $code->created_at->format('M d, Y');
                    }),

                TD::make('actions', 'Actions')
                    ->align(TD::ALIGN_CENTER)
                    ->width(150)
                    ->render(function (DiscountCode $code) {
                        return Button::make($code->is_active ? 'Deactivate' : 'Activate')
                            ->icon($code->is_active ? 'close' : 'check')
                            ->method('toggleStatus', ['id' => $code->id])
                            ->class($code->is_active ? 'btn btn-sm btn-warning' : 'btn btn-sm btn-success');
                    }),
            ]),

            Layout::modal('createCodeModal', Layout::rows([
                Input::make('code')
                    ->title('Discount Code')
                    ->placeholder('e.g., ROBOT2024')
                    ->required()
                    ->help('Unique code that users will enter'),

                TextArea::make('description')
                    ->title('Description')
                    ->placeholder('e.g., Partner referral code for XYZ Company')
                    ->rows(2),

                Input::make('max_uses')
                    ->title('Max Uses (Optional)')
                    ->type('number')
                    ->placeholder('Leave empty for unlimited'),

                DateTimer::make('expires_at')
                    ->title('Expiration Date (Optional)')
                    ->format('Y-m-d')
                    ->allowEmpty(),
            ]))->title('Create Discount Code')
                ->applyButton('Create'),
        ];
    }

    /**
     * Create a new discount code.
     */
    public function createCode(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string|max:50|unique:discount_codes,code',
            'description' => 'nullable|string|max:255',
            'max_uses' => 'nullable|integer|min:1',
            'expires_at' => 'nullable|date',
        ]);

        DiscountCode::create([
            'code' => strtoupper($validated['code']),
            'description' => $validated['description'] ?? null,
            'max_uses' => $validated['max_uses'] ?? null,
            'expires_at' => $validated['expires_at'] ?? null,
        ]);

        Toast::info('Discount code created successfully.');
    }

    /**
     * Generate a random discount code.
     */
    public function generateCode()
    {
        $code = 'ROBOT' . strtoupper(Str::random(6));

        // Ensure uniqueness
        while (DiscountCode::where('code', $code)->exists()) {
            $code = 'ROBOT' . strtoupper(Str::random(6));
        }

        DiscountCode::create([
            'code' => $code,
            'description' => 'Auto-generated code',
        ]);

        Toast::info('Generated new code: ' . $code);
    }

    /**
     * Toggle discount code status.
     */
    public function toggleStatus(Request $request)
    {
        $code = DiscountCode::findOrFail($request->get('id'));
        $code->is_active = !$code->is_active;
        $code->save();

        Toast::info('Discount code ' . ($code->is_active ? 'activated' : 'deactivated') . '.');
    }
}
