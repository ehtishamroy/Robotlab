<?php

namespace App\Orchid\Screens;

use App\Models\Setting;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class SettingScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Settings';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'Configure your website global settings.';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        $settings = Setting::all()->pluck('value', 'key')->toArray();
        return [
            'settings' => $settings,
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Save Changes')
                ->icon('check')
                ->method('save'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            Layout::tabs([
                'General' => Layout::rows([
                    Input::make('settings.site_name')
                        ->title('Site Name')
                        ->placeholder('Enter site name'),

                    Picture::make('settings.site_logo')
                        ->title('Site Logo')
                        ->storage('public_uploads')
                        ->targetUrl(),

                    Input::make('settings.logo_width')
                        ->title('Logo Width (px)')
                        ->type('number')
                        ->placeholder('150'),

                    Picture::make('settings.site_favicon')
                        ->title('Favicon')
                        ->storage('public_uploads')
                        ->targetUrl(),
                ]),

                'SEO' => Layout::rows([
                    Input::make('settings.meta_title')
                        ->title('Meta Title')
                        ->placeholder('Enter meta title'),

                    TextArea::make('settings.meta_description')
                        ->title('Meta Description')
                        ->rows(3)
                        ->placeholder('Enter meta description'),

                    TextArea::make('settings.meta_keywords')
                        ->title('Meta Keywords')
                        ->rows(2)
                        ->placeholder('Enter keywords separated by comma'),

                    TextArea::make('settings.google_analytics')
                        ->title('Google Analytics / Scripts')
                        ->rows(5)
                        ->placeholder('Paste your scripts here'),
                ]),

                'Header' => Layout::rows([
                    Input::make('settings.header_address')
                        ->title('Address')
                        ->placeholder('USA, New York - 1060 Str. First Avenue 1'),

                    Input::make('settings.header_phone_1')
                        ->title('Phone 1')
                        ->placeholder('800 100 975 20 34'),

                    Input::make('settings.header_phone_2')
                        ->title('Phone 2')
                        ->placeholder('+ (123) 1800-234-5678'),

                    Input::make('settings.header_email')
                        ->title('Email')
                        ->placeholder('aiero@mail.co'),

                    Input::make('settings.header_button_text')
                        ->title('Button Text')
                        ->placeholder('Get in Touch'),

                    Input::make('settings.header_button_link')
                        ->title('Button Link')
                        ->placeholder('#'),

                    Input::make('settings.facebook_link')
                        ->title('Facebook URL'),

                    Input::make('settings.twitter_link')
                        ->title('Twitter URL'),

                    Input::make('settings.linkedin_link')
                        ->title('LinkedIn URL'),

                    Input::make('settings.youtube_link')
                        ->title('YouTube URL'),
                ]),

                'Footer' => Layout::rows([
                    Input::make('settings.footer_since')
                        ->title('Footer Since Text')
                        ->placeholder('since 2025'),

                    TextArea::make('settings.footer_about')
                        ->title('Footer About Text')
                        ->rows(3),

                    Matrix::make('settings.footer_company_links')
                        ->title('Company Links')
                        ->columns([
                            'Title' => 'title',
                            'Link' => 'link',
                        ]),

                    Matrix::make('settings.footer_services_links')
                        ->title('Services Links')
                        ->columns([
                            'Title' => 'title',
                            'Link' => 'link',
                        ]),

                    Input::make('settings.footer_copyright')
                        ->title('Copyright Text')
                        ->placeholder('©Aiero 2025. All rights reserved.'),

                    Input::make('settings.terms_link')
                        ->title('Terms of Use Link')
                        ->placeholder('#'),

                    Input::make('settings.privacy_link')
                        ->title('Privacy Policy Link')
                        ->placeholder('#'),
                ]),
            ]),
        ];
    }

    /**
     * @param Request $request
     */
    public function save(Request $request)
    {
        $settings = $request->get('settings', []);

        foreach ($settings as $key => $value) {
            // If value is an array (from Matrix), encode it as JSON
            if (is_array($value)) {
                $value = json_encode($value);
            }

            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        Alert::info('Settings saved successfully.');
    }
}
