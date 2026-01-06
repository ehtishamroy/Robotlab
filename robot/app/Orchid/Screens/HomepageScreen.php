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

class HomepageScreen extends Screen
{
    /**
     * Query data.
     */
    public function query(): iterable
    {
        return [
            'settings' => [
                'hero' => [
                    'title' => setting('homepage.hero.title', 'Revolutionizing Operations with Intelligent Robotic Solutions'),
                    'button_text' => setting('homepage.hero.button_text', 'Explore Products'),
                    'counter_1_value' => setting('homepage.hero.counter_1_value', '100'),
                    'counter_1_label' => setting('homepage.hero.counter_1_label', 'Robots deployed nationwide'),
                    'counter_2_value' => setting('homepage.hero.counter_2_value', '50'),
                    'counter_2_label' => setting('homepage.hero.counter_2_label', 'Industries transformed'),
                    'left_title' => setting('homepage.hero.left_title', 'Trusted by Industry Leaders'),
                    'right_title' => setting('homepage.hero.right_title', 'Next-Gen Automation for Your Business'),
                    'video_title' => setting('homepage.hero.video_title', 'Powered by Advanced AI'),
                    'image_1' => setting('homepage.hero.image_1', 'frontend/assets/images/hero/hero5-1.png'),
                    'image_2' => setting('homepage.hero.image_2', 'frontend/assets/images/hero/hero5-2.png'),
                    'image_3' => setting('homepage.hero.image_3', 'frontend/assets/images/hero/hero5-3.png'),
                ],
                'features' => [
                    'subtitle' => setting('homepage.features.subtitle', 'why spectrum'),
                    'title' => setting('homepage.features.title', 'Smarter Automation Starts Here—Discover the Spectrum Advantage'),
                    'card_1_title' => setting('homepage.features.card_1_title', 'Autonomous Navigation'),
                    'card_1_desc' => setting('homepage.features.card_1_desc', 'Advanced SLAM technology enables our robots to navigate complex environments safely, avoiding obstacles in real-time.'),
                    'card_1_icon' => setting('homepage.features.card_1_icon', 'frontend/assets/images/feature/feature2-1.png'),
                    'card_2_title' => setting('homepage.features.card_2_title', 'Industry Solutions'),
                    'card_2_desc' => setting('homepage.features.card_2_desc', 'Purpose-built robots for hospitality, healthcare, retail, and logistics—configured for your operational needs.'),
                    'card_2_icon' => setting('homepage.features.card_2_icon', 'frontend/assets/images/feature/feature2-2.svg'),
                    'card_3_title' => setting('homepage.features.card_3_title', '24/7 Reliability'),
                    'card_3_desc' => setting('homepage.features.card_3_desc', 'Designed for continuous operation with self-charging capabilities and 99.5% average uptime across deployments.'),
                    'card_3_icon' => setting('homepage.features.card_3_icon', 'frontend/assets/images/feature/feature2-3.png'),
                    'card_4_title' => setting('homepage.features.card_4_title', 'Full-Service Support'),
                    'card_4_desc' => setting('homepage.features.card_4_desc', 'From consultation to installation and maintenance, we ensure seamless integration with your existing workflows.'),
                    'card_4_icon' => setting('homepage.features.card_4_icon', 'frontend/assets/images/feature/feature2-4.svg'),
                ],
                'partners' => [
                    'title' => setting('homepage.partners.title', 'Trusted Technology Partners Powering Our Robotic Fleet—Industry-Leading Innovation'),
                    'logo_1' => setting('homepage.partners.logo_1', 'icons/logo_en_11_1620e63f74.png'),
                    'logo_2' => setting('homepage.partners.logo_2', 'icons/logo_en_13_4dd3d62e53.png'),
                    'logo_3' => setting('homepage.partners.logo_3', 'icons/logo_en_14_6516450a79.png'),
                    'logo_4' => setting('homepage.partners.logo_4', 'icons/logo_en_16_c4ce5213aa.png'),
                    'logo_5' => setting('homepage.partners.logo_5', 'icons/logo_en_18_a1afa46fde.png'),
                    'logo_6' => setting('homepage.partners.logo_6', 'icons/logo_en_19_b4a546c986.png'),
                    'logo_7' => setting('homepage.partners.logo_7', 'icons/logo_en_1_4e2e3599ba.png'),
                    'logo_8' => setting('homepage.partners.logo_8', 'icons/logo_en_20_13c1d3053b.png'),
                    'logo_9' => setting('homepage.partners.logo_9', 'icons/logo_en_21_4c6cb3b9d3.png'),
                    'logo_10' => setting('homepage.partners.logo_10', 'icons/logo_en_23_8a4362d457.png'),
                ],
                'solutions' => [
                    'subtitle' => setting('homepage.solutions.subtitle', 'solutions'),
                    'title' => setting('homepage.solutions.title', 'End-to-End Robotic Solutions for Every Industry'),
                    'description' => setting('homepage.solutions.description', 'From deployment to ongoing support, we handle it all'),
                    'button_text' => setting('homepage.solutions.button_text', 'Browse All Robots'),
                    'card_1_title' => setting('homepage.solutions.card_1_title', 'Hospitality Robots'),
                    'card_1_image' => setting('homepage.solutions.card_1_image', 'frontend/assets/images/service/ser10-1.png'),
                    'card_2_title' => setting('homepage.solutions.card_2_title', 'Healthcare Automation'),
                    'card_2_image' => setting('homepage.solutions.card_2_image', 'frontend/assets/images/service/ser10-2.png'),
                    'card_3_title' => setting('homepage.solutions.card_3_title', 'Smart Logistics & Delivery Solutions'),
                    'card_3_image' => setting('homepage.solutions.card_3_image', 'frontend/assets/images/service/ser10-3.png'),
                ],
                'capabilities' => [
                    'subtitle' => setting('homepage.capabilities.subtitle', 'capabilities'),
                    'title' => setting('homepage.capabilities.title', 'What Makes Spectrum Robots Different'),
                    'tab_1_title' => setting('homepage.capabilities.tab_1_title', 'Autonomous Navigation'),
                    'tab_1_heading' => setting('homepage.capabilities.tab_1_heading', 'Advanced SLAM Technology'),
                    'tab_1_desc' => setting('homepage.capabilities.tab_1_desc', 'Our robots use cutting-edge Simultaneous Localization and Mapping (SLAM) technology to navigate complex environments with precision.'),
                    'tab_1_image' => setting('homepage.capabilities.tab_1_image', 'frontend/assets/images/feature/feature6-1.png'),
                    'tab_2_title' => setting('homepage.capabilities.tab_2_title', 'AI-Powered Interaction'),
                    'tab_2_heading' => setting('homepage.capabilities.tab_2_heading', 'Intelligent Customer Engagement'),
                    'tab_2_desc' => setting('homepage.capabilities.tab_2_desc', 'Equipped with voice recognition, facial detection, and natural language processing.'),
                    'tab_2_image' => setting('homepage.capabilities.tab_2_image', 'frontend/assets/images/feature/feature6-2.png'),
                    'tab_3_title' => setting('homepage.capabilities.tab_3_title', 'Seamless Integration'),
                    'tab_3_heading' => setting('homepage.capabilities.tab_3_heading', 'Works With Your Systems'),
                    'tab_3_desc' => setting('homepage.capabilities.tab_3_desc', 'Our robots integrate seamlessly with your existing POS, kitchen display systems, and management software.'),
                    'tab_3_image' => setting('homepage.capabilities.tab_3_image', 'frontend/assets/images/feature/feature6-3.png'),
                    'tab_4_title' => setting('homepage.capabilities.tab_4_title', 'Scalable Deployment'),
                    'tab_4_heading' => setting('homepage.capabilities.tab_4_heading', 'Grow at Your Own Pace'),
                    'tab_4_desc' => setting('homepage.capabilities.tab_4_desc', 'Start with a single robot and scale up as needed.'),
                    'tab_4_image' => setting('homepage.capabilities.tab_4_image', 'frontend/assets/images/feature/feature6-1.png'),
                ],
            ],
        ];
    }

    /**
     * Display header name.
     */
    public function name(): ?string
    {
        return 'Homepage Content';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Manage all homepage sections, text, and images';
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
                'Hero Section' => Layout::rows([
                    Input::make('settings.hero.title')
                        ->title('Main Headline')
                        ->placeholder('Enter hero section headline'),

                    Input::make('settings.hero.button_text')
                        ->title('Button Text')
                        ->placeholder('Explore Products'),

                    Input::make('settings.hero.left_title')
                        ->title('Left Block Title'),

                    Input::make('settings.hero.counter_1_value')
                        ->title('Counter 1 Value')
                        ->type('number'),

                    Input::make('settings.hero.counter_1_label')
                        ->title('Counter 1 Label'),

                    Input::make('settings.hero.right_title')
                        ->title('Right Block Title'),

                    Input::make('settings.hero.video_title')
                        ->title('Video Section Title'),

                    Input::make('settings.hero.counter_2_value')
                        ->title('Counter 2 Value')
                        ->type('number'),

                    Input::make('settings.hero.counter_2_label')
                        ->title('Counter 2 Label'),

                    Picture::make('settings.hero.image_1')
                        ->title('Main Hero Image')
                        ->targetRelativeUrl(),

                    Picture::make('settings.hero.image_2')
                        ->title('Left Block Image')
                        ->targetRelativeUrl(),

                    Picture::make('settings.hero.image_3')
                        ->title('Right Block Image')
                        ->targetRelativeUrl(),
                ]),

                'Features Section' => Layout::rows([
                    Input::make('settings.features.subtitle')
                        ->title('Subtitle'),

                    Input::make('settings.features.title')
                        ->title('Section Title'),

                    Input::make('settings.features.card_1_title')
                        ->title('Feature 1 - Title'),

                    TextArea::make('settings.features.card_1_desc')
                        ->title('Feature 1 - Description')
                        ->rows(3),

                    Picture::make('settings.features.card_1_icon')
                        ->title('Feature 1 - Icon')
                        ->targetRelativeUrl(),

                    Input::make('settings.features.card_2_title')
                        ->title('Feature 2 - Title'),

                    TextArea::make('settings.features.card_2_desc')
                        ->title('Feature 2 - Description')
                        ->rows(3),

                    Picture::make('settings.features.card_2_icon')
                        ->title('Feature 2 - Icon')
                        ->targetRelativeUrl(),

                    Input::make('settings.features.card_3_title')
                        ->title('Feature 3 - Title'),

                    TextArea::make('settings.features.card_3_desc')
                        ->title('Feature 3 - Description')
                        ->rows(3),

                    Picture::make('settings.features.card_3_icon')
                        ->title('Feature 3 - Icon')
                        ->targetRelativeUrl(),

                    Input::make('settings.features.card_4_title')
                        ->title('Feature 4 - Title'),

                    TextArea::make('settings.features.card_4_desc')
                        ->title('Feature 4 - Description')
                        ->rows(3),

                    Picture::make('settings.features.card_4_icon')
                        ->title('Feature 4 - Icon')
                        ->targetRelativeUrl(),
                ]),

                'Partners' => Layout::rows([
                    Input::make('settings.partners.title')
                        ->title('Partners Section Title'),

                    Picture::make('settings.partners.logo_1')
                        ->title('Partner Logo 1')
                        ->targetRelativeUrl(),

                    Picture::make('settings.partners.logo_2')
                        ->title('Partner Logo 2')
                        ->targetRelativeUrl(),

                    Picture::make('settings.partners.logo_3')
                        ->title('Partner Logo 3')
                        ->targetRelativeUrl(),

                    Picture::make('settings.partners.logo_4')
                        ->title('Partner Logo 4')
                        ->targetRelativeUrl(),

                    Picture::make('settings.partners.logo_5')
                        ->title('Partner Logo 5')
                        ->targetRelativeUrl(),

                    Picture::make('settings.partners.logo_6')
                        ->title('Partner Logo 6')
                        ->targetRelativeUrl(),

                    Picture::make('settings.partners.logo_7')
                        ->title('Partner Logo 7')
                        ->targetRelativeUrl(),

                    Picture::make('settings.partners.logo_8')
                        ->title('Partner Logo 8')
                        ->targetRelativeUrl(),

                    Picture::make('settings.partners.logo_9')
                        ->title('Partner Logo 9')
                        ->targetRelativeUrl(),

                    Picture::make('settings.partners.logo_10')
                        ->title('Partner Logo 10')
                        ->targetRelativeUrl(),
                ]),

                'Solutions' => Layout::rows([
                    Input::make('settings.solutions.subtitle')
                        ->title('Subtitle'),

                    Input::make('settings.solutions.title')
                        ->title('Section Title'),

                    Input::make('settings.solutions.description')
                        ->title('Description'),

                    Input::make('settings.solutions.button_text')
                        ->title('Button Text'),

                    Input::make('settings.solutions.card_1_title')
                        ->title('Card 1 - Title'),

                    Picture::make('settings.solutions.card_1_image')
                        ->title('Card 1 - Image')
                        ->targetRelativeUrl(),

                    Input::make('settings.solutions.card_2_title')
                        ->title('Card 2 - Title'),

                    Picture::make('settings.solutions.card_2_image')
                        ->title('Card 2 - Image')
                        ->targetRelativeUrl(),

                    Input::make('settings.solutions.card_3_title')
                        ->title('Card 3 - Title'),

                    Picture::make('settings.solutions.card_3_image')
                        ->title('Card 3 - Image')
                        ->targetRelativeUrl(),
                ]),

                'Capabilities' => Layout::rows([
                    Input::make('settings.capabilities.subtitle')
                        ->title('Subtitle'),

                    Input::make('settings.capabilities.title')
                        ->title('Section Title'),

                    // Tab 1
                    Input::make('settings.capabilities.tab_1_title')
                        ->title('Tab 1 - Tab Title'),

                    Input::make('settings.capabilities.tab_1_heading')
                        ->title('Tab 1 - Content Heading'),

                    TextArea::make('settings.capabilities.tab_1_desc')
                        ->title('Tab 1 - Description')
                        ->rows(3),

                    Picture::make('settings.capabilities.tab_1_image')
                        ->title('Tab 1 - Image')
                        ->targetRelativeUrl(),

                    // Tab 2
                    Input::make('settings.capabilities.tab_2_title')
                        ->title('Tab 2 - Tab Title'),

                    Input::make('settings.capabilities.tab_2_heading')
                        ->title('Tab 2 - Content Heading'),

                    TextArea::make('settings.capabilities.tab_2_desc')
                        ->title('Tab 2 - Description')
                        ->rows(3),

                    Picture::make('settings.capabilities.tab_2_image')
                        ->title('Tab 2 - Image')
                        ->targetRelativeUrl(),

                    // Tab 3
                    Input::make('settings.capabilities.tab_3_title')
                        ->title('Tab 3 - Tab Title'),

                    Input::make('settings.capabilities.tab_3_heading')
                        ->title('Tab 3 - Content Heading'),

                    TextArea::make('settings.capabilities.tab_3_desc')
                        ->title('Tab 3 - Description')
                        ->rows(3),

                    Picture::make('settings.capabilities.tab_3_image')
                        ->title('Tab 3 - Image')
                        ->targetRelativeUrl(),

                    // Tab 4
                    Input::make('settings.capabilities.tab_4_title')
                        ->title('Tab 4 - Tab Title'),

                    Input::make('settings.capabilities.tab_4_heading')
                        ->title('Tab 4 - Content Heading'),

                    TextArea::make('settings.capabilities.tab_4_desc')
                        ->title('Tab 4 - Description')
                        ->rows(3),

                    Picture::make('settings.capabilities.tab_4_image')
                        ->title('Tab 4 - Image')
                        ->targetRelativeUrl(),
                ]),
            ]),
        ];
    }

    /**
     * Save homepage settings.
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
                ['key' => 'homepage.' . $key],
                ['value' => $value]
            );
        }

        Toast::info('Homepage content updated successfully');
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
                // Recursively flatten associative arrays
                $result = array_merge($result, $this->flattenArray($value, $newKey));
            } else {
                $result[$newKey] = $value;
            }
        }

        return $result;
    }
}
