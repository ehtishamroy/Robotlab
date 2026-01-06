<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Faq;

use App\Models\Faq;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class FaqEditScreen extends Screen
{
    /**
     * @var Faq
     */
    public $faq;

    /**
     * Query data.
     */
    public function query(Faq $faq): iterable
    {
        return [
            'faq' => $faq,
        ];
    }

    /**
     * Display header name.
     */
    public function name(): ?string
    {
        return $this->faq->exists ? 'Edit FAQ' : 'Add FAQ';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Add or edit frequently asked question';
    }

    /**
     * Button commands.
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Save')
                ->icon('save')
                ->method('save'),

            Button::make('Delete')
                ->icon('trash')
                ->confirm('Are you sure you want to delete this FAQ?')
                ->method('delete')
                ->canSee($this->faq->exists),
        ];
    }

    /**
     * Views.
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('faq.question')
                    ->title('Question')
                    ->placeholder('Enter the question')
                    ->required(),

                TextArea::make('faq.answer')
                    ->title('Answer')
                    ->rows(5)
                    ->placeholder('Enter the answer')
                    ->required(),

                Input::make('faq.order')
                    ->title('Display Order')
                    ->type('number')
                    ->value($this->faq->order ?? 0)
                    ->help('Lower numbers appear first'),

                Switcher::make('faq.is_active')
                    ->sendTrueOrFalse()
                    ->title('Active')
                    ->value($this->faq->is_active ?? true)
                    ->help('Inactive FAQs will not be shown on the website'),
            ]),
        ];
    }

    /**
     * Save FAQ.
     */
    public function save(Faq $faq, Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->get('faq');

        $faq->fill($data)->save();

        Toast::info('FAQ saved successfully');

        return redirect()->route('platform.faqs.list');
    }

    /**
     * Delete FAQ.
     */
    public function delete(Faq $faq): \Illuminate\Http\RedirectResponse
    {
        $faq->delete();

        Toast::info('FAQ deleted successfully');

        return redirect()->route('platform.faqs.list');
    }
}
