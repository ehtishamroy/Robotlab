<?php

namespace App\Orchid\Screens\CarouselImage;

use App\Models\CarouselImage;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class CarouselImageEditScreen extends Screen
{
    /**
     * @var CarouselImage
     */
    public $carouselImage;

    /**
     * Query data.
     *
     * @param CarouselImage $carouselImage
     *
     * @return array
     */
    public function query(CarouselImage $carouselImage): iterable
    {
        return [
            'carouselImage' => $carouselImage,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->carouselImage->exists ? 'Edit Carousel Image' : 'Create Carousel Image';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->carouselImage->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->carouselImage->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->carouselImage->exists),
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
            Layout::rows([
                Picture::make('carouselImage.image_path')
                    ->title('Image')
                    ->targetRelativeUrl()
                    ->required(),

                Input::make('carouselImage.sort_order')
                    ->title('Sort Order')
                    ->type('number')
                    ->value(0),

                CheckBox::make('carouselImage.is_active')
                    ->title('Is Active')
                    ->sendTrueOrFalse(),
            ]),
        ];
    }

    /**
     * @param CarouselImage $carouselImage
     * @param Request       $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(CarouselImage $carouselImage, Request $request)
    {
        $carouselImage->fill($request->get('carouselImage'))->save();

        Alert::info('You have successfully created/updated a carousel image.');

        return redirect()->route('platform.carousel-images.list');
    }

    /**
     * @param CarouselImage $carouselImage
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(CarouselImage $carouselImage)
    {
        $carouselImage->delete();

        Alert::info('You have successfully deleted the carousel image.');

        return redirect()->route('platform.carousel-images.list');
    }
}
