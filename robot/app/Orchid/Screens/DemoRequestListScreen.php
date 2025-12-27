<?php

namespace App\Orchid\Screens;

use App\Models\DemoRequest;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\TextArea;
use Illuminate\Http\Request;

class DemoRequestListScreen extends Screen
{
    /**
     * Query data.
     */
    public function query(): iterable
    {
        return [
            'requests' => DemoRequest::orderBy('created_at', 'desc')->paginate(20),
        ];
    }

    /**
     * Display header name.
     */
    public function name(): ?string
    {
        return 'Demo Requests';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'All demo requests submitted through the website. Track discount codes used by visitors.';
    }

    /**
     * Button commands.
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     */
    public function layout(): iterable
    {
        return [
            Layout::table('requests', [
                TD::make('id', 'ID')
                    ->sort()
                    ->width(60),

                TD::make('name', 'Name')
                    ->sort()
                    ->filter(Input::make()),

                TD::make('email', 'Email')
                    ->sort()
                    ->filter(Input::make()),

                TD::make('company', 'Company')
                    ->defaultHidden(),

                TD::make('phone', 'Phone')
                    ->defaultHidden(),

                TD::make('venue_type', 'Venue Type')
                    ->render(function (DemoRequest $request) {
                        return ucfirst($request->venue_type ?: '-');
                    }),

                TD::make('discount_code', 'Discount Code')
                    ->sort()
                    ->filter(Input::make())
                    ->render(function (DemoRequest $request) {
                        if ($request->discount_code) {
                            return '<span style="background: #448E91; color: white; padding: 4px 10px; border-radius: 12px; font-size: 12px; font-weight: 600;">' . e($request->discount_code) . '</span>';
                        }
                        return '<span style="color: #999;">-</span>';
                    }),

                TD::make('product_source', 'Product')
                    ->render(function (DemoRequest $request) {
                        return $request->product_source ?: '-';
                    }),

                TD::make('message', 'Message')
                    ->width(200)
                    ->render(function (DemoRequest $request) {
                        if ($request->message) {
                            return '<span title="' . e($request->message) . '">' . e(\Str::limit($request->message, 50)) . '</span>';
                        }
                        return '-';
                    }),

                TD::make('created_at', 'Submitted')
                    ->sort()
                    ->render(function (DemoRequest $request) {
                        return $request->created_at->format('M d, Y H:i');
                    }),

                TD::make('actions', 'Actions')
                    ->align(TD::ALIGN_CENTER)
                    ->width(150)
                    ->render(function (DemoRequest $request) {
                        return Group::make([
                            ModalToggle::make('View')
                                ->modal('viewDetailsModal')
                                ->method('markAsRead')
                                ->asyncParameters(['id' => $request->id])
                                ->icon('eye'),

                            Button::make('Delete')
                                ->icon('trash')
                                ->confirm('Are you sure you want to delete this demo request?')
                                ->method('delete', ['id' => $request->id]),
                        ]);
                    }),
            ]),

            Layout::modal('viewDetailsModal', Layout::rows([
                Input::make('request.name')
                    ->title('Name')
                    ->readonly(),

                Input::make('request.email')
                    ->title('Email')
                    ->readonly(),

                Input::make('request.company')
                    ->title('Company')
                    ->readonly(),

                Input::make('request.phone')
                    ->title('Phone')
                    ->readonly(),

                Input::make('request.venue_type')
                    ->title('Venue Type')
                    ->readonly(),

                Input::make('request.discount_code')
                    ->title('Discount Code')
                    ->readonly()
                    ->style('color: #448E91; font-weight: bold;'),

                Input::make('request.product_source')
                    ->title('Product Interest')
                    ->readonly(),

                Input::make('request.page_url')
                    ->title('Source URL')
                    ->readonly(),

                TextArea::make('request.message')
                    ->title('Message')
                    ->rows(5)
                    ->readonly(),

                Input::make('request.created_at')
                    ->title('Submitted Date')
                    ->readonly(),
            ]))
                ->title('Demo Request Details')
                ->async('asyncGetRequestDetails')
                ->withoutApplyButton(),
        ];
    }

    /**
     * Get request details for modal.
     */
    public function asyncGetRequestDetails(Request $request): array
    {
        $demoRequest = DemoRequest::find($request->get('id'));

        // Format date for display
        if ($demoRequest) {
            $demoRequest->created_at_formatted = $demoRequest->created_at->format('M d, Y H:i:s');
        }

        return [
            'request' => $demoRequest,
        ];
    }

    /**
     * Mark as read (optional action when opening modal).
     */
    public function markAsRead(Request $request)
    {
        $demoRequest = DemoRequest::find($request->get('id'));
        if ($demoRequest) {
            $demoRequest->is_read = true;
            $demoRequest->save();
        }
    }

    /**
     * Delete a demo request.
     */
    public function delete(Request $request)
    {
        $demoRequest = DemoRequest::findOrFail($request->get('id'));
        $demoRequest->delete();

        Toast::info('Demo request deleted.');

        return redirect()->route('platform.demo-requests');
    }
}
