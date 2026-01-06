<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Faq;

use App\Models\Faq;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class FaqListScreen extends Screen
{
    /**
     * Query data.
     */
    public function query(): iterable
    {
        return [
            'faqs' => Faq::ordered()->paginate(15),
        ];
    }

    /**
     * Display header name.
     */
    public function name(): ?string
    {
        return 'FAQs';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Manage frequently asked questions';
    }

    /**
     * Button commands.
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Add FAQ')
                ->icon('plus')
                ->route('platform.faqs.create'),
        ];
    }

    /**
     * Views.
     */
    public function layout(): iterable
    {
        return [
            Layout::table('faqs', [
                TD::make('order', 'Order')
                    ->sort()
                    ->width('80px'),

                TD::make('question', 'Question')
                    ->sort()
                    ->render(function (Faq $faq) {
                        return Link::make(\Illuminate\Support\Str::limit($faq->question, 60))
                            ->route('platform.faqs.edit', ['faq' => $faq->id]);
                    }),

                TD::make('is_active', 'Status')
                    ->width('100px')
                    ->render(function (Faq $faq) {
                        return $faq->is_active
                            ? '<span class="text-success">Active</span>'
                            : '<span class="text-muted">Inactive</span>';
                    }),

                TD::make('actions', 'Actions')
                    ->width('100px')
                    ->render(function (Faq $faq) {
                        return Button::make('Delete')
                            ->icon('trash')
                            ->confirm('Are you sure you want to delete this FAQ?')
                            ->method('delete', ['faq' => $faq->id]);
                    }),
            ]),
        ];
    }

    /**
     * Delete FAQ.
     */
    public function delete(Faq $faq): void
    {
        $faq->delete();
        Toast::info('FAQ deleted successfully');
    }
}
