<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Career;

use App\Models\Career;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CareerListScreen extends Screen
{
    /**
     * Query data.
     */
    public function query(): iterable
    {
        return [
            'careers' => Career::ordered()->paginate(15),
        ];
    }

    /**
     * Display header name.
     */
    public function name(): ?string
    {
        return 'Careers';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Manage job positions';
    }

    /**
     * Button commands.
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Add Position')
                ->icon('plus')
                ->route('platform.careers.create'),
        ];
    }

    /**
     * Views.
     */
    public function layout(): iterable
    {
        return [
            Layout::table('careers', [
                TD::make('order', 'Order')
                    ->sort()
                    ->width('80px'),

                TD::make('title', 'Position Title')
                    ->sort()
                    ->render(function (Career $career) {
                        return Link::make($career->title)
                            ->route('platform.careers.edit', ['career' => $career->id]);
                    }),

                TD::make('apply_email', 'Apply Email')
                    ->width('200px'),

                TD::make('is_active', 'Status')
                    ->width('100px')
                    ->render(function (Career $career) {
                        return $career->is_active
                            ? '<span class="text-success">Active</span>'
                            : '<span class="text-muted">Inactive</span>';
                    }),

                TD::make('actions', 'Actions')
                    ->width('100px')
                    ->render(function (Career $career) {
                        return Button::make('Delete')
                            ->icon('trash')
                            ->confirm('Are you sure you want to delete this position?')
                            ->method('delete', ['career' => $career->id]);
                    }),
            ]),
        ];
    }

    /**
     * Delete career.
     */
    public function delete(Career $career): void
    {
        $career->delete();
        Toast::info('Position deleted successfully');
    }
}
