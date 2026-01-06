<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Career;

use App\Models\Career;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CareerEditScreen extends Screen
{
    /**
     * @var Career
     */
    public $career;

    /**
     * Query data.
     */
    public function query(Career $career): iterable
    {
        return [
            'career' => $career,
        ];
    }

    /**
     * Display header name.
     */
    public function name(): ?string
    {
        return $this->career->exists ? 'Edit Position' : 'Add Position';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Add or edit job position details';
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
                ->confirm('Are you sure you want to delete this position?')
                ->method('delete')
                ->canSee($this->career->exists),
        ];
    }

    /**
     * Views.
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('career.title')
                    ->title('Position Title')
                    ->placeholder('e.g. Business Development Representative (BDR)')
                    ->required(),

                TextArea::make('career.about')
                    ->title('About Section')
                    ->rows(4)
                    ->placeholder('About Spectrum Robotics and the role...'),

                TextArea::make('career.overview')
                    ->title('General Overview')
                    ->rows(4)
                    ->placeholder('The role overview and expectations...'),

                TextArea::make('career.responsibilities')
                    ->title('Responsibilities')
                    ->rows(6)
                    ->placeholder('Enter each responsibility on a new line (one per line)'),

                TextArea::make('career.qualifications')
                    ->title('Qualifications')
                    ->rows(6)
                    ->placeholder('Enter each qualification on a new line (one per line)'),

                Input::make('career.apply_email')
                    ->title('Apply Email')
                    ->type('email')
                    ->placeholder('support@spectrumrobotics.co')
                    ->value($this->career->apply_email ?? 'support@spectrumrobotics.co'),

                Input::make('career.order')
                    ->title('Display Order')
                    ->type('number')
                    ->value($this->career->order ?? 0)
                    ->help('Lower numbers appear first'),

                Switcher::make('career.is_active')
                    ->sendTrueOrFalse()
                    ->title('Active')
                    ->value($this->career->is_active ?? true)
                    ->help('Inactive positions will not be shown on the website'),
            ]),
        ];
    }

    /**
     * Save career.
     */
    public function save(Career $career, Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->get('career');

        $career->fill($data)->save();

        Toast::info('Position saved successfully');

        return redirect()->route('platform.careers.list');
    }

    /**
     * Delete career.
     */
    public function delete(Career $career): \Illuminate\Http\RedirectResponse
    {
        $career->delete();

        Toast::info('Position deleted successfully');

        return redirect()->route('platform.careers.list');
    }
}
