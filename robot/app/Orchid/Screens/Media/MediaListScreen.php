<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Media;

use App\Models\Media;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class MediaListScreen extends Screen
{
    /**
     * Query data.
     */
    public function query(): iterable
    {
        return [
            'media' => Media::ordered()->paginate(15),
        ];
    }

    /**
     * Display header name.
     */
    public function name(): ?string
    {
        return 'Media Videos';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Manage media videos displayed on the Media page';
    }

    /**
     * Button commands.
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Add Video')
                ->icon('plus')
                ->route('platform.media.create'),
        ];
    }

    /**
     * Views.
     */
    public function layout(): iterable
    {
        return [
            Layout::table('media', [
                TD::make('order', 'Order')
                    ->sort()
                    ->width('80px'),

                TD::make('title', 'Title')
                    ->sort()
                    ->render(function (Media $media) {
                        return Link::make($media->title)
                            ->route('platform.media.edit', ['media' => $media->id]);
                    }),

                TD::make('youtube_url', 'YouTube URL')
                    ->width('250px')
                    ->render(function (Media $media) {
                        return '<a href="' . $media->youtube_url . '" target="_blank" style="font-size: 12px;">' .
                            \Illuminate\Support\Str::limit($media->youtube_url, 40) . '</a>';
                    }),

                TD::make('is_active', 'Status')
                    ->width('100px')
                    ->render(function (Media $media) {
                        return $media->is_active
                            ? '<span class="text-success">Active</span>'
                            : '<span class="text-muted">Inactive</span>';
                    }),

                TD::make('actions', 'Actions')
                    ->width('100px')
                    ->render(function (Media $media) {
                        return Button::make('Delete')
                            ->icon('trash')
                            ->confirm('Are you sure you want to delete this video?')
                            ->method('delete', ['media' => $media->id]);
                    }),
            ]),
        ];
    }

    /**
     * Delete media.
     */
    public function delete(Media $media): void
    {
        $media->delete();
        Toast::info('Video deleted successfully');
    }
}
