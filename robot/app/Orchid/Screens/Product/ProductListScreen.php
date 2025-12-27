<?php

namespace App\Orchid\Screens\Product;

use App\Models\Product;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class ProductListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     */
    public function query(): iterable
    {
        return [
            'products' => Product::orderBy('sort_order')->orderBy('name')->paginate(15),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Products';
    }

    /**
     * The description is displayed on the user's screen under the heading.
     */
    public function description(): ?string
    {
        return 'Manage your robot products';
    }

    /**
     * The screen's action buttons.
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Create Product')
                ->icon('plus')
                ->route('platform.products.create'),
        ];
    }

    /**
     * The screen's layout elements.
     */
    public function layout(): iterable
    {
        return [
            Layout::table('products', [
                TD::make('id', 'ID')
                    ->width('80px')
                    ->sort(),

                TD::make('image', 'Image')
                    ->width('80px')
                    ->render(function (Product $product) {
                        if ($product->image) {
                            return '<img src="' . asset($product->image) . '" style="max-width: 60px; max-height: 60px; object-fit: contain;">';
                        }
                        return '<span class="text-muted">No image</span>';
                    }),

                TD::make('name', 'Name')
                    ->sort()
                    ->render(function (Product $product) {
                        return Link::make($product->name)
                            ->route('platform.products.edit', ['product' => $product->id]);
                    }),

                TD::make('category', 'Category')
                    ->sort(),

                TD::make('is_published', 'Published')
                    ->width('100px')
                    ->render(function (Product $product) {
                        return $product->is_published
                            ? '<span class="badge bg-success">Yes</span>'
                            : '<span class="badge bg-secondary">No</span>';
                    }),

                TD::make('sort_order', 'Order')
                    ->width('80px')
                    ->sort(),

                TD::make('updated_at', 'Updated')
                    ->width('150px')
                    ->sort()
                    ->render(function (Product $product) {
                        return $product->updated_at->diffForHumans();
                    }),

                TD::make(__('Actions'))
                    ->width('100px')
                    ->align(TD::ALIGN_CENTER)
                    ->render(function (Product $product) {
                        return Link::make('')
                            ->icon('pencil')
                            ->route('platform.products.edit', ['product' => $product->id]);
                    }),
            ]),
        ];
    }
}
