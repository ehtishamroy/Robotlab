<?php

namespace App\Orchid\Screens\Brand;

use App\Models\Brand;
use Illuminate\Support\Str;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class BrandListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     */
    public function query(): iterable
    {
        return [
            'brands' => Brand::orderBy('sort_order')->orderBy('name')->paginate(20),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Partner Brands';
    }

    /**
     * The description is displayed on the user's screen under the heading.
     */
    public function description(): ?string
    {
        return 'Manage partner brand logos shown in the slider';
    }

    /**
     * The screen's action buttons.
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Add Brand')
                ->icon('plus')
                ->route('platform.brands.create'),
        ];
    }

    /**
     * The screen's layout elements.
     */
    public function layout(): iterable
    {
        return [
            Layout::table('brands', [
                TD::make('id', 'ID')
                    ->width('60px')
                    ->sort(),

                TD::make('logo', 'Logo')
                    ->width('100px')
                    ->render(function (Brand $brand) {
                        if ($brand->logo) {
                            return '<img src="' . asset($brand->logo) . '" style="max-width: 80px; max-height: 50px; object-fit: contain;">';
                        }
                        return '<span class="text-muted">No logo</span>';
                    }),

                TD::make('name', 'Name')
                    ->sort()
                    ->render(function (Brand $brand) {
                        return Link::make($brand->name)
                            ->route('platform.brands.edit', ['brand' => $brand->id]);
                    }),

                TD::make('url', 'URL')
                    ->render(function (Brand $brand) {
                        return $brand->url ? '<a href="' . $brand->url . '" target="_blank">' . (strlen($brand->url) > 30 ? substr($brand->url, 0, 30) . '...' : $brand->url) . '</a>' : '-';
                    }),

                TD::make('is_active', 'Active')
                    ->width('80px')
                    ->render(function (Brand $brand) {
                        return $brand->is_active
                            ? '<span class="badge bg-success">Yes</span>'
                            : '<span class="badge bg-secondary">No</span>';
                    }),

                TD::make('sort_order', 'Order')
                    ->width('70px')
                    ->sort(),

                TD::make(__('Actions'))
                    ->width('100px')
                    ->align(TD::ALIGN_CENTER)
                    ->render(function (Brand $brand) {
                        return Link::make('')
                            ->icon('pencil')
                            ->route('platform.brands.edit', ['brand' => $brand->id]);
                    }),
            ]),
        ];
    }
}
