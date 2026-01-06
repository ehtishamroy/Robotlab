<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Application;

use App\Models\Application;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ApplicationListScreen extends Screen
{
    /**
     * Query data.
     */
    public function query(): iterable
    {
        return [
            'applications' => Application::ordered()->paginate(15),
        ];
    }

    /**
     * Display header name.
     */
    public function name(): ?string
    {
        return 'Applications';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Manage robot applications';
    }

    /**
     * Button commands.
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Add Application')
                ->icon('plus')
                ->route('platform.applications.create'),
        ];
    }

    /**
     * Views.
     */
    public function layout(): iterable
    {
        return [
            Layout::table('applications', [
                TD::make('order', 'Order')
                    ->sort()
                    ->width('80px'),

                TD::make('title', 'Title')
                    ->sort()
                    ->render(function (Application $application) {
                        return Link::make($application->title)
                            ->route('platform.applications.edit', ['application' => $application->id]);
                    }),

                TD::make('duration', 'Duration')
                    ->width('120px'),

                TD::make('pricing', 'Pricing')
                    ->width('150px'),

                TD::make('is_active', 'Status')
                    ->width('100px')
                    ->render(function (Application $application) {
                        return $application->is_active
                            ? '<span class="text-success">Active</span>'
                            : '<span class="text-muted">Inactive</span>';
                    }),

                TD::make('actions', 'Actions')
                    ->width('100px')
                    ->render(function (Application $application) {
                        return Button::make('Delete')
                            ->icon('trash')
                            ->confirm('Are you sure you want to delete this application?')
                            ->method('delete', ['application' => $application->id]);
                    }),
            ]),
        ];
    }

    /**
     * Delete application.
     */
    public function delete(Application $application): void
    {
        $application->delete();
        Toast::info('Application deleted successfully');
    }
}
