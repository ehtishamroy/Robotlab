<?php

declare(strict_types=1);

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * @return Menu[]
     */
    public function registerMainMenu(): array
    {
        return [
            Menu::make('Homepage Content')
                ->icon('monitor')
                ->route('platform.homepage')
                ->title('Pages'),

            Menu::make('About Page Content')
                ->icon('info')
                ->route('platform.about-page'),

            Menu::make('Media Page Content')
                ->icon('film')
                ->route('platform.media.page'),

            Menu::make('Industry Pages')
                ->icon('briefcase')
                ->route('platform.industry-pages')
                ->title('Content Control'),

            Menu::make('Products')
                ->icon('bulb')
                ->route('platform.products.list')
                ->title('Content'),

            Menu::make('Brands')
                ->icon('building')
                ->route('platform.brands.list'),

            Menu::make('Applications')
                ->icon('grid')
                ->route('platform.applications.list'),

            Menu::make('Media')
                ->icon('camrecorder')
                ->route('platform.media.list'),

            Menu::make('FAQs')
                ->icon('question')
                ->route('platform.faqs.list'),

            Menu::make('Careers')
                ->icon('user-follow')
                ->route('platform.careers.list'),

            Menu::make('Page Banners')
                ->icon('picture')
                ->route('platform.page-banners'),

            Menu::make('Demo Requests')
                ->icon('envelope')
                ->route('platform.demo-requests')
                ->badge(function () {
                    return \App\Models\DemoRequest::where('is_read', false)->count() ?: null;
                })
                ->title('Leads'),

            Menu::make('Consultation Bookings')
                ->icon('calendar')
                ->route('platform.consultation-bookings')
                ->badge(function () {
                    return \App\Models\ConsultationBooking::where('is_read', false)->count() ?: null;
                }),

            Menu::make('Discount Codes')
                ->icon('tag')
                ->route('platform.discount-codes'),

            Menu::make('Carousel Images')
                ->icon('picture')
                ->route('platform.carousel-images.list'),

            Menu::make('Blog')
                ->icon('docs')
                ->list([
                    Menu::make('All Posts')
                        ->route('platform.blog.list')
                        ->icon('list'),
                    Menu::make('Categories')
                        ->route('platform.categories')
                        ->icon('tag'),
                ]),

            Menu::make(__('Users'))
                ->icon('user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access rights')),

            Menu::make(__('Roles'))
                ->icon('lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles'),

            Menu::make(__('Settings'))
                ->icon('settings')
                ->route('platform.settings')
                ->title(__('Configuration')),
        ];
    }

    /**
     * @return Menu[]
     */
    public function registerProfileMenu(): array
    {
        return [
            Menu::make('Profile')
                ->route('platform.profile')
                ->icon('user'),
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users'))
                ->addPermission('platform.settings', __('Settings')),
        ];
    }
}
