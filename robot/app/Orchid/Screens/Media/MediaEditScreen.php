<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Media;

use App\Models\Media;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class MediaEditScreen extends Screen
{
    /**
     * @var Media
     */
    public $media;

    /**
     * Query data.
     */
    public function query(Media $media): iterable
    {
        return [
            'media' => $media,
        ];
    }

    /**
     * Display header name.
     */
    public function name(): ?string
    {
        return $this->media->exists ? 'Edit Video' : 'Add Video';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Add or edit media video details';
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
                ->confirm('Are you sure you want to delete this video?')
                ->method('delete')
                ->canSee($this->media->exists),
        ];
    }

    /**
     * Views.
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('media.title')
                    ->title('Title')
                    ->placeholder('Video title')
                    ->required(),

                Input::make('media.youtube_url')
                    ->title('YouTube URL')
                    ->placeholder('https://www.youtube.com/watch?v=...')
                    ->help('Paste the YouTube video URL. It will be automatically converted to embed format.')
                    ->required(),

                TextArea::make('media.description')
                    ->title('Description')
                    ->rows(3)
                    ->placeholder('Brief description of the video'),

                Input::make('media.order')
                    ->title('Display Order')
                    ->type('number')
                    ->value($this->media->order ?? 0)
                    ->help('Lower numbers appear first'),

                Switcher::make('media.is_active')
                    ->sendTrueOrFalse()
                    ->title('Active')
                    ->value($this->media->is_active ?? true)
                    ->help('Inactive videos will not be shown on the website'),
            ]),
        ];
    }

    /**
     * Save media.
     */
    public function save(Media $media, Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->get('media');

        $media->fill($data)->save();

        Toast::info('Video saved successfully');

        return redirect()->route('platform.media.list');
    }

    /**
     * Delete media.
     */
    public function delete(Media $media): \Illuminate\Http\RedirectResponse
    {
        $media->delete();

        Toast::info('Video deleted successfully');

        return redirect()->route('platform.media.list');
    }
}
