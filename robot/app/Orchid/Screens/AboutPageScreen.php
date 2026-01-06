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

class AboutPageScreen extends Screen
{
    /**
     * Query data.
     */
    public function query(): iterable
    {
        return [
            'settings' => [
                'banner' => [
                    'title' => setting('about.banner.title', '/ About Spectrum Robotics /'),
                    'background_text' => setting('about.banner.background_text', 'Spectrum'),
                ],
                'intro' => [
                    'subtitle' => setting('about.intro.subtitle', 'About Us'),
                    'title' => setting('about.intro.title', 'The Journey Begins with Spectrum Robotics'),
                    'image' => setting('about.intro.image', 'frontend/assets/images/event/about1-1.png'),
                    'paragraph_1' => setting('about.intro.paragraph_1', 'Spectrum Robotics delivers enterprise robotic solutions to hospitality and commercial service markets with installations in restaurants, airports, casinos, universities, hotels and resorts, senior living homes, factories, retail centers, and more.'),
                    'paragraph_2' => setting('about.intro.paragraph_2', 'We are navigating a new era with uniquely positioned robotic solutions that complement environments where meeting customer needs efficiently is more important than ever. We help businesses generate revenue and save time by providing complete automation solutions.'),
                    'paragraph_3' => setting('about.intro.paragraph_3', 'Our nationwide team is professional, ethical, and results-oriented with familiarity in varied vertical markets to create exceptional customer experiences before, during, and after every purchase.'),
                ],
                'marquee' => [
                    'text' => setting('about.marquee.text', '/ Navigating A New Era with Intelligent Robotic Solutions.'),
                ],
                'why_spectrum' => [
                    'title' => setting('about.why_spectrum.title', 'Why Spectrum Robotics?'),
                    'description' => setting('about.why_spectrum.description', 'Our products have been successfully launched worldwide with proven results to improve the efficiency of production with partnerships in 120+ countries and a rapidly growing clientele of 1000+ US customers.'),
                    'benefit_1' => setting('about.why_spectrum.benefit_1', 'Labor Shortage Solutions'),
                    'benefit_2' => setting('about.why_spectrum.benefit_2', 'Reduced Heavy Work for Employees'),
                    'benefit_3' => setting('about.why_spectrum.benefit_3', 'Flexible Workforce Allocation'),
                    'benefit_4' => setting('about.why_spectrum.benefit_4', 'Attention-Grabbing Technology'),
                    'image' => setting('about.why_spectrum.image', 'frontend/assets/images/event/ser22-2.png'),
                    'tagline' => setting('about.why_spectrum.tagline', 'We deliver complete automation solutions using cutting-edge robotics and AI technology'),
                ],
            ],
        ];
    }

    /**
     * Display header name.
     */
    public function name(): ?string
    {
        return 'About Page Content';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Manage all About Us page sections, text, and images';
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
                'Page Banner' => Layout::rows([
                    Input::make('settings.banner.title')
                        ->title('Page Title')
                        ->placeholder('/ About Spectrum Robotics /'),

                    Input::make('settings.banner.background_text')
                        ->title('Background Text')
                        ->placeholder('Spectrum'),
                ]),

                'About Us Section' => Layout::rows([
                    Input::make('settings.intro.subtitle')
                        ->title('Subtitle'),

                    Input::make('settings.intro.title')
                        ->title('Section Title'),

                    Picture::make('settings.intro.image')
                        ->title('About Image')
                        ->targetRelativeUrl(),

                    TextArea::make('settings.intro.paragraph_1')
                        ->title('Paragraph 1')
                        ->rows(4),

                    TextArea::make('settings.intro.paragraph_2')
                        ->title('Paragraph 2')
                        ->rows(4),

                    TextArea::make('settings.intro.paragraph_3')
                        ->title('Paragraph 3')
                        ->rows(4),
                ]),

                'Marquee' => Layout::rows([
                    Input::make('settings.marquee.text')
                        ->title('Scrolling Text'),
                ]),

                'Why Spectrum Section' => Layout::rows([
                    Input::make('settings.why_spectrum.title')
                        ->title('Section Title'),

                    TextArea::make('settings.why_spectrum.description')
                        ->title('Description')
                        ->rows(4),

                    Input::make('settings.why_spectrum.benefit_1')
                        ->title('Benefit 1'),

                    Input::make('settings.why_spectrum.benefit_2')
                        ->title('Benefit 2'),

                    Input::make('settings.why_spectrum.benefit_3')
                        ->title('Benefit 3'),

                    Input::make('settings.why_spectrum.benefit_4')
                        ->title('Benefit 4'),

                    Picture::make('settings.why_spectrum.image')
                        ->title('Section Image')
                        ->targetRelativeUrl(),

                    Input::make('settings.why_spectrum.tagline')
                        ->title('Tagline'),
                ]),
            ]),
        ];
    }

    /**
     * Save about page settings.
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
                ['key' => 'about.' . $key],
                ['value' => $value]
            );
        }

        Toast::info('About page content updated successfully');
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
