<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Application;

use App\Models\Application;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ApplicationEditScreen extends Screen
{
    /**
     * @var Application
     */
    public $application;

    /**
     * Query data.
     */
    public function query(Application $application): iterable
    {
        return [
            'application' => $application,
        ];
    }

    /**
     * Display header name.
     */
    public function name(): ?string
    {
        return $this->application->exists ? 'Edit Application' : 'Create Application';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Add or edit robot application details';
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
                ->confirm('Are you sure you want to delete this application?')
                ->method('delete')
                ->canSee($this->application->exists),
        ];
    }

    /**
     * Views.
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('application.title')
                    ->title('Title')
                    ->placeholder('Application title')
                    ->required(),

                Input::make('application.duration')
                    ->title('Duration')
                    ->placeholder('45 mins')
                    ->value($this->application->duration ?? '45 mins'),

                Input::make('application.pricing')
                    ->title('Pricing')
                    ->placeholder('Call for pricing')
                    ->value($this->application->pricing ?? 'Call for pricing'),

                TextArea::make('application.description')
                    ->title('Description')
                    ->rows(5)
                    ->required(),

                Input::make('application.order')
                    ->title('Display Order')
                    ->type('number')
                    ->value($this->application->order ?? 0)
                    ->help('Lower numbers appear first'),

                Switcher::make('application.is_active')
                    ->sendTrueOrFalse()
                    ->title('Active')
                    ->value($this->application->is_active ?? true)
                    ->help('Inactive applications will not be shown on the website'),
            ]),
        ];
    }

    /**
     * Save application.
     */
    public function save(Application $application, Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->get('application');

        $application->fill($data)->save();

        Toast::info('Application saved successfully');

        return redirect()->route('platform.applications.list');
    }

    /**
     * Delete application.
     */
    public function delete(Application $application): \Illuminate\Http\RedirectResponse
    {
        $application->delete();

        Toast::info('Application deleted successfully');

        return redirect()->route('platform.applications.list');
    }
}
