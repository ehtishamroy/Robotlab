<?php

namespace App\Orchid\Screens\CarouselImage;

use App\Models\CarouselImage;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class CarouselImageListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'carouselImages' => CarouselImage::orderBy('sort_order', 'asc')->paginate(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Carousel Images';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Manage home page carousel images';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Add Image')
                ->icon('plus')
                ->route('platform.carousel-images.create'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('carouselImages', [
                TD::make('image_path', 'Preview')
                    ->width('150px')
                    ->render(
                        fn(CarouselImage $image) =>
                        "<img src='{$image->image_path}' alt='Carousel Image' style='width: 100px; height: auto; border-radius: 5px;'>"
                    ),
                TD::make('sort_order', 'Sort Order')->sort(),
                TD::make('is_active', 'Active')
                    ->render(fn(CarouselImage $image) => $image->is_active ? 'Yes' : 'No'),
                TD::make('created_at', 'Created')->render(fn($image) => $image->created_at->toDateTimeString()),
                TD::make('Actions')
                    ->alignRight()
                    ->render(fn(CarouselImage $image) => Link::make('Edit')
                        ->route('platform.carousel-images.edit', $image->id)
                        ->icon('pencil')),
            ]),
        ];
    }
}
