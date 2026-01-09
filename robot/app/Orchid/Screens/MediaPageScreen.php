<?php

declare(strict_types=1);

namespace App\Orchid\Screens;

use Illuminate\Http\Request;
use App\Models\Setting;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class MediaPageScreen extends Screen
{
    /**
     * Query data.
     */
    public function query(): iterable
    {
        return [
            'settings' => [
                'featured_video' => [
                    'title' => setting('media_page.featured_video.title', 'Introducing Matradee'),
                    'subtitle' => setting('media_page.featured_video.subtitle', 'Featured'),
                    'description' => setting('media_page.featured_video.description', 'The Matradee navigates any environment. Currently deployed in Casinos, Hotels, Restaurants, Senior Living, Movie Theaters & Hospitals.'),
                    'video_url' => setting('media_page.featured_video.video_url', 'https://www.youtube.com/embed/5NHPDFOam0o'),
                ],
                'quote' => [
                    'text' => setting('media_page.quote.text', '"At Richtech Robotics, we are leading the transformation of service industry workforces through seamless collaborative robotic integration. Our commitment to innovation and responsible automation creates synergies that empower human workers, increase productivity, enhance safety, and elevate job satisfaction."'),
                    'author' => setting('media_page.quote.author', 'Matt Casella'),
                    'author_title' => setting('media_page.quote.author_title', 'President, Richtech Robotics'),
                    'image' => setting('media_page.quote.image', 'uploads/2025/12/24/438439423ae07539a11a616a55f004740d9ba7c9.png'),
                ],
                'gallery' => [
                    'title' => setting('media_page.gallery.title', 'See How Spectrum Can Revolutionize Your Operations'),
                    'subtitle' => setting('media_page.gallery.subtitle', 'Videos'),
                    'description' => setting('media_page.gallery.description', 'The Spectrum and Richtech Robotics partnership provides complete robotic solutions for businesses with varying needs.'),
                ],
            ],
        ];
    }

    /**
     * Display header name.
     */
    public function name(): ?string
    {
        return 'Media Page Content';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Manage Media page text, video content, and quote section';
    }

    /**
     * Button commands.
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Save Changes')
                ->icon('save')
                ->method('save'),
        ];
    }

    /**
     * Views.
     */
    public function layout(): iterable
    {
        return [
            Layout::tabs([
                'Featured Video' => Layout::rows([
                    Input::make('settings.featured_video.subtitle')
                        ->title('Subtitle'),
                    Input::make('settings.featured_video.title')
                        ->title('Section Title'),
                    TextArea::make('settings.featured_video.description')
                        ->title('Description')
                        ->rows(3),
                    Input::make('settings.featured_video.video_url')
                        ->title('Video Embed URL')
                        ->help('Use YouTube Embed URL (e.g., https://www.youtube.com/embed/ID)'),
                ]),
                'Quote Section' => Layout::rows([
                    TextArea::make('settings.quote.text')
                        ->title('Quote Text')
                        ->rows(4),
                    Input::make('settings.quote.author')
                        ->title('Author Name'),
                    Input::make('settings.quote.author_title')
                        ->title('Author Title'),
                    Picture::make('settings.quote.image')
                        ->title('Author/Company Image')
                        ->targetRelativeUrl(),
                ]),
                'Gallery Header' => Layout::rows([
                    Input::make('settings.gallery.subtitle')
                        ->title('Subtitle'),
                    Input::make('settings.gallery.title')
                        ->title('Section Title'),
                    TextArea::make('settings.gallery.description')
                        ->title('Description')
                        ->rows(3),
                ]),
            ]),
        ];
    }

    /**
     * Save media page settings.
     */
    public function save(Request $request): void
    {
        $settings = $request->get('settings', []);
        $flatSettings = $this->flattenArray($settings);

        foreach ($flatSettings as $key => $value) {
            if (is_array($value)) {
                $value = json_encode($value);
            }

            Setting::updateOrCreate(
                ['key' => 'media_page.' . $key],
                ['value' => $value]
            );
        }

        Toast::info('Media page content updated successfully');
    }

    /**
     * Flatten a nested array with dot notation keys.
     */
    private function flattenArray(array $array, string $prefix = ''): array
    {
        $result = [];
        foreach ($array as $key => $value) {
            $newKey = $prefix === '' ? $key : $prefix . '.' . $key;
            if (is_array($value) && !empty($value) && !isset($value[0])) {
                $result = array_merge($result, $this->flattenArray($value, $newKey));
            } else {
                $result[$newKey] = $value;
            }
        }
        return $result;
    }
}
