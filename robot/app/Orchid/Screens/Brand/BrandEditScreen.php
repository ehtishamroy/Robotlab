<?php

namespace App\Orchid\Screens\Brand;

use App\Models\Brand;
use Illuminate\Http\Request;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class BrandEditScreen extends Screen
{
    /**
     * @var Brand
     */
    public $brand;

    /**
     * Fetch data to be displayed on the screen.
     */
    public function query(Brand $brand): iterable
    {
        return [
            'brand' => $brand,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->brand->exists ? 'Edit Brand: ' . $this->brand->name : 'Add Brand';
    }

    /**
     * The description is displayed on the user's screen under the heading.
     */
    public function description(): ?string
    {
        return 'Create or edit a partner brand';
    }

    /**
     * The screen's action buttons.
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Save')
                ->icon('check')
                ->method('save'),

            Button::make('Delete')
                ->icon('trash')
                ->method('remove')
                ->confirm('Are you sure you want to delete this brand?')
                ->canSee($this->brand->exists),
        ];
    }

    /**
     * The screen's layout elements.
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('brand.name')
                    ->title('Brand Name')
                    ->placeholder('e.g., Pudu Robotics')
                    ->required(),

                Cropper::make('brand.logo')
                    ->title('Brand Logo')
                    ->width(400)
                    ->height(200)
                    ->targetRelativeUrl()
                    ->acceptedFiles('image/jpeg,image/png,image/webp,image/gif,image/svg+xml')
                    ->help('Recommended size: 400x200px. Accepts: PNG, JPG, WebP, GIF, SVG'),

                Input::make('brand.url')
                    ->title('Website URL')
                    ->type('url')
                    ->placeholder('https://example.com')
                    ->help('Optional link when the logo is clicked'),

                Group::make([
                    Switcher::make('brand.is_active')
                        ->title('Active')
                        ->sendTrueOrFalse()
                        ->value(true)
                        ->help('Only active brands will appear in the slider'),

                    Input::make('brand.sort_order')
                        ->title('Sort Order')
                        ->type('number')
                        ->value(0)
                        ->help('Lower numbers appear first'),
                ]),
            ]),
        ];
    }

    /**
     * Save the brand.
     */
    public function save(Brand $brand, Request $request)
    {
        $data = $request->get('brand');

        // Set default values
        if (!isset($data['sort_order']) || $data['sort_order'] === '') {
            $data['sort_order'] = 0;
        }
        if (!isset($data['is_active'])) {
            $data['is_active'] = true;
        }

        $brand->fill($data)->save();

        Toast::info('Brand saved successfully.');

        return redirect()->route('platform.brands.list');
    }

    /**
     * Delete the brand.
     */
    public function remove(Brand $brand)
    {
        $brand->delete();

        Toast::info('Brand deleted.');

        return redirect()->route('platform.brands.list');
    }
}
