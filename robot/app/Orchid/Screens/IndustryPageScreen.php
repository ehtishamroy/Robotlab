<?php

namespace App\Orchid\Screens;

use App\Models\Setting;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class IndustryPageScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Industry Pages';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'Manage content for industry-specific pages.';

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
                'Service Robots' => Layout::rows([
                    Picture::make('settings.service_robots_hero_image')
                        ->title('Hero Section Image')
                        ->help('Replace "Matradee Serving Robots" title with this image')
                        ->storage('public_uploads')
                        ->targetUrl(),

                    Picture::make('settings.service_robots_card1_bg')
                        ->title('Feature Card 1 Background')
                        ->help('Background image for "12 Hours Battery Life" card')
                        ->storage('public_uploads')
                        ->targetUrl(),

                    Picture::make('settings.service_robots_card5_bg')
                        ->title('Feature Card 5 Background')
                        ->help('Background image for "Smart Table Navigation" card')
                        ->storage('public_uploads')
                        ->targetUrl(),

                    Picture::make('settings.service_robots_app_icon_1')
                        ->title('Application Icon 1 - Restaurants')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.service_robots_app_icon_2')
                        ->title('Application Icon 2 - Casino Restaurants')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.service_robots_app_icon_3')
                        ->title('Application Icon 3 - Senior Living')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.service_robots_app_icon_4')
                        ->title('Application Icon 4 - University Dining')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.service_robots_app_icon_5')
                        ->title('Application Icon 5 - Buffet Service')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.service_robots_app_icon_6')
                        ->title('Application Icon 6 - Corporate Cafeterias')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.service_robots_app_icon_7')
                        ->title('Application Icon 7 - Stadium Concessions')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.service_robots_app_icon_8')
                        ->title('Application Icon 8 - Convention Centers')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),
                ]),

                'Hospitality Robots' => Layout::rows([
                    Picture::make('settings.hospitality_robots_hero_image')
                        ->title('Hero Section Image')
                        ->help('Replace "Richie Hotel Delivery Robot" title with this image')
                        ->storage('public_uploads')
                        ->targetUrl(),

                    Picture::make('settings.hospitality_robots_feature_icon_1')
                        ->title('Feature Icon 1 - Elevator Integration')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.hospitality_robots_feature_icon_2')
                        ->title('Feature Icon 2 - Secure Compartments')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.hospitality_robots_feature_icon_3')
                        ->title('Feature Icon 3 - Guest Notifications')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.hospitality_robots_feature_icon_4')
                        ->title('Feature Icon 4 - 24/7 Operation')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),
                ]),

                'Cleaning Robots' => Layout::rows([
                    Picture::make('settings.cleaning_robots_hero_image')
                        ->title('Hero Section Image')
                        ->help('Replace "CC1 Pro & DUST-E Series" title with this image')
                        ->storage('public_uploads')
                        ->targetUrl(),

                    Picture::make('settings.cleaning_robots_feature_icon_1')
                        ->title('Feature Icon 1 - Floor Washing')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.cleaning_robots_feature_icon_2')
                        ->title('Feature Icon 2 - Sweep, Suction & Push')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.cleaning_robots_feature_icon_3')
                        ->title('Feature Icon 3 - Carpet Vacuuming')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.cleaning_robots_feature_icon_4')
                        ->title('Feature Icon 4 - UV Disinfection')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.cleaning_robots_feature_icon_5')
                        ->title('Feature Icon 5 - 8,600 sq. ft./hour')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.cleaning_robots_feature_icon_6')
                        ->title('Feature Icon 6 - Silent Dust Push')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.cleaning_robots_feature_icon_7')
                        ->title('Feature Icon 7 - Fully Autonomous')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.cleaning_robots_feature_icon_8')
                        ->title('Feature Icon 8 - AI Perception')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),
                ]),

                'Delivery Robots' => Layout::rows([
                    Picture::make('settings.delivery_robots_hero_image')
                        ->title('Hero Section Image')
                        ->help('Replace "Your Journey Begins with Spectrum Robotics" title with this image')
                        ->storage('public_uploads')
                        ->targetUrl(),

                    Picture::make('settings.delivery_robots_feature_icon_1')
                        ->title('Feature Icon 1 - Food Delivery')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.delivery_robots_feature_icon_2')
                        ->title('Feature Icon 2 - Room Service')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.delivery_robots_feature_icon_3')
                        ->title('Feature Icon 3 - Medicine Delivery')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.delivery_robots_feature_icon_4')
                        ->title('Feature Icon 4 - Retail Fulfillment')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.delivery_robots_feature_icon_5')
                        ->title('Feature Icon 5 - 12 Hour Battery')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.delivery_robots_feature_icon_6')
                        ->title('Feature Icon 6 - 88 lbs Capacity')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.delivery_robots_feature_icon_7')
                        ->title('Feature Icon 7 - Smart Navigation')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),

                    Picture::make('settings.delivery_robots_feature_icon_8')
                        ->title('Feature Icon 8 - Multi-Floor Delivery')
                        ->storage('public_uploads')
                        ->acceptedFiles('image/png,image/jpeg,image/jpg')
                        ->targetUrl(),
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
            if (is_array($value)) {
                $value = json_encode($value);
            }

            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        Alert::info('Industry page settings saved successfully.');
    }
}
