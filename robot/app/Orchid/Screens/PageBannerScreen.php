<?php

declare(strict_types=1);

namespace App\Orchid\Screens;

use Illuminate\Http\Request;
use App\Models\Setting;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class PageBannerScreen extends Screen
{
    /**
     * Query data.
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * Display header name.
     */
    public function name(): ?string
    {
        return 'Page Banners';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Manage background images and videos for page banners';
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
        ];
    }

    /**
     * Views.
     */
    public function layout(): iterable
    {
        return [
            Layout::tabs([
                'Main Pages' => Layout::rows([
                    // About
                    Picture::make('banner_about_image')
                        ->title('About Us - Background Image')
                        ->value(setting('banner_about_image')),
                    Upload::make('banner_about_video_file')
                        ->title('About Us - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_about_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_about_youtube')
                        ->title('About Us - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_about_youtube')),

                    // Contact
                    Picture::make('banner_contact_image')
                        ->title('Contact Us - Background Image')
                        ->value(setting('banner_contact_image')),
                    Upload::make('banner_contact_video_file')
                        ->title('Contact Us - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_contact_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_contact_youtube')
                        ->title('Contact Us - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_contact_youtube')),

                    // FAQ
                    Picture::make('banner_faq_image')
                        ->title('FAQ - Background Image')
                        ->value(setting('banner_faq_image')),
                    Upload::make('banner_faq_video_file')
                        ->title('FAQ - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_faq_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_faq_youtube')
                        ->title('FAQ - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_faq_youtube')),

                    // Terms
                    Picture::make('banner_terms_image')
                        ->title('Terms of Use - Background Image')
                        ->value(setting('banner_terms_image')),
                    Upload::make('banner_terms_video_file')
                        ->title('Terms of Use - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_terms_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_terms_youtube')
                        ->title('Terms of Use - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_terms_youtube')),

                    // Privacy
                    Picture::make('banner_privacy_image')
                        ->title('Privacy Policy - Background Image')
                        ->value(setting('banner_privacy_image')),
                    Upload::make('banner_privacy_video_file')
                        ->title('Privacy Policy - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_privacy_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_privacy_youtube')
                        ->title('Privacy Policy - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_privacy_youtube')),
                ]),

                'Industries' => Layout::rows([
                    // Service Robots
                    Picture::make('banner_service_image')
                        ->title('Service Robots - Background Image')
                        ->value(setting('banner_service_image')),
                    Upload::make('banner_service_video_file')
                        ->title('Service Robots - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_service_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_service_youtube')
                        ->title('Service Robots - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_service_youtube')),

                    // Hospitality Robots
                    Picture::make('banner_hospitality_image')
                        ->title('Hospitality Robots - Background Image')
                        ->value(setting('banner_hospitality_image')),
                    Upload::make('banner_hospitality_video_file')
                        ->title('Hospitality Robots - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_hospitality_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_hospitality_youtube')
                        ->title('Hospitality Robots - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_hospitality_youtube')),

                    // Cleaning Robots
                    Picture::make('banner_cleaning_image')
                        ->title('Cleaning Robots - Background Image')
                        ->value(setting('banner_cleaning_image')),
                    Upload::make('banner_cleaning_video_file')
                        ->title('Cleaning Robots - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_cleaning_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_cleaning_youtube')
                        ->title('Cleaning Robots - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_cleaning_youtube')),

                    // Delivery Robots
                    Picture::make('banner_delivery_image')
                        ->title('Delivery Robots - Background Image')
                        ->value(setting('banner_delivery_image')),
                    Upload::make('banner_delivery_video_file')
                        ->title('Delivery Robots - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_delivery_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_delivery_youtube')
                        ->title('Delivery Robots - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_delivery_youtube')),
                ]),

                'Resources' => Layout::rows([
                    // Blog
                    Picture::make('banner_blog_image')
                        ->title('Blog / News - Background Image')
                        ->value(setting('banner_blog_image')),
                    Upload::make('banner_blog_video_file')
                        ->title('Blog / News - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_blog_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_blog_youtube')
                        ->title('Blog / News - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_blog_youtube')),

                    // Careers
                    Picture::make('banner_careers_image')
                        ->title('Careers - Background Image')
                        ->value(setting('banner_careers_image')),
                    Upload::make('banner_careers_video_file')
                        ->title('Careers - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_careers_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_careers_youtube')
                        ->title('Careers - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_careers_youtube')),

                    // Media
                    Picture::make('banner_media_image')
                        ->title('Media - Background Image')
                        ->value(setting('banner_media_image')),
                    Upload::make('banner_media_video_file')
                        ->title('Media - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_media_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_media_youtube')
                        ->title('Media - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_media_youtube')),

                    // Search
                    Picture::make('banner_search_image')
                        ->title('Search Results - Background Image')
                        ->value(setting('banner_search_image')),
                    Upload::make('banner_search_video_file')
                        ->title('Search Results - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_search_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_search_youtube')
                        ->title('Search Results - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_search_youtube')),

                    // Projects
                    Picture::make('banner_projects_image')
                        ->title('Projects - Background Image')
                        ->value(setting('banner_projects_image')),
                    Upload::make('banner_projects_video_file')
                        ->title('Projects - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_projects_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_projects_youtube')
                        ->title('Projects - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_projects_youtube')),
                ]),

                'Shop' => Layout::rows([
                    // Products
                    Picture::make('banner_products_image')
                        ->title('Products - Background Image')
                        ->value(setting('banner_products_image')),
                    Upload::make('banner_products_video_file')
                        ->title('Products - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_products_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_products_youtube')
                        ->title('Products - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_products_youtube')),

                    // Cart
                    Picture::make('banner_cart_image')
                        ->title('Cart - Background Image')
                        ->value(setting('banner_cart_image')),
                    Upload::make('banner_cart_video_file')
                        ->title('Cart - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_cart_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_cart_youtube')
                        ->title('Cart - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_cart_youtube')),

                    // Checkout
                    Picture::make('banner_checkout_image')
                        ->title('Checkout - Background Image')
                        ->value(setting('banner_checkout_image')),
                    Upload::make('banner_checkout_video_file')
                        ->title('Checkout - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_checkout_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_checkout_youtube')
                        ->title('Checkout - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_checkout_youtube')),

                    // Applications
                    Picture::make('banner_applications_image')
                        ->title('Applications - Background Image')
                        ->value(setting('banner_applications_image')),
                    Upload::make('banner_applications_video_file')
                        ->title('Applications - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_applications_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_applications_youtube')
                        ->title('Applications - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_applications_youtube')),

                    // Services (Hidden page but user asked for all)
                    Picture::make('banner_services_image')
                        ->title('Services - Background Image')
                        ->value(setting('banner_services_image')),
                    Upload::make('banner_services_video_file')
                        ->title('Services - Video Upload (MP4)')
                        ->value(json_decode(setting('banner_services_video_file', '[]'), true))
                        ->maxFiles(1)
                        ->acceptedFiles('video/mp4'),
                    Input::make('banner_services_youtube')
                        ->title('Services - YouTube URL')
                        ->placeholder('https://www.youtube.com/watch?v=...')
                        ->value(setting('banner_services_youtube')),
                ]),
            ]),
        ];
    }

    public function save(Request $request)
    {
        $settings = $request->except(['_token']);

        foreach ($settings as $key => $value) {
            if ($value === null) {
                Setting::setByKey($key, '', 'page_banners');
            } else {
                if (is_array($value)) {
                    $value = json_encode($value);
                }
                Setting::setByKey($key, $value, 'page_banners');
            }
        }

        Toast::info('Page banners updated successfully');
    }
}
