<?php

declare(strict_types=1);

use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use App\Orchid\Screens\SettingScreen;
use App\Orchid\Screens\HomepageScreen;
use App\Orchid\Screens\AboutPageScreen;
use App\Orchid\Screens\IndustryPageScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Profile'), route('platform.profile'));
    });

// Platform > System > Users
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(function (Trail $trail, $user) {
        return $trail
            ->parent('platform.systems.users')
            ->push(__('User'), route('platform.systems.users.edit', $user));
    });

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.users')
            ->push(__('Create'), route('platform.systems.users.create'));
    });

// Platform > System > Users > User
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Users'), route('platform.systems.users'));
    });

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(function (Trail $trail, $role) {
        return $trail
            ->parent('platform.systems.roles')
            ->push(__('Role'), route('platform.systems.roles.edit', $role));
    });

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.roles')
            ->push(__('Create'), route('platform.systems.roles.create'));
    });

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Roles'), route('platform.systems.roles'));
    });

// Platform > Settings
Route::screen('settings', SettingScreen::class)
    ->name('platform.settings')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Settings'), route('platform.settings'));
    });

// Platform > Homepage Content
Route::screen('homepage', HomepageScreen::class)
    ->name('platform.homepage')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Homepage Content'), route('platform.homepage'));
    });

// Platform > About Page Content
Route::screen('about-page', AboutPageScreen::class)
    ->name('platform.about-page')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('About Page Content'), route('platform.about-page'));
    });

// Platform > Industry Pages
Route::screen('industry-pages', IndustryPageScreen::class)
    ->name('platform.industry-pages')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Industry Pages'), route('platform.industry-pages'));
    });

// Platform > Applications
Route::screen('applications', \App\Orchid\Screens\Application\ApplicationListScreen::class)
    ->name('platform.applications.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Applications'), route('platform.applications.list'));
    });

Route::screen('applications/create', \App\Orchid\Screens\Application\ApplicationEditScreen::class)
    ->name('platform.applications.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.applications.list')
            ->push(__('Create Application'));
    });

Route::screen('applications/{application}/edit', \App\Orchid\Screens\Application\ApplicationEditScreen::class)
    ->name('platform.applications.edit')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.applications.list')
            ->push(__('Edit Application'));
    });

// Platform > Media
Route::screen('media', \App\Orchid\Screens\Media\MediaListScreen::class)
    ->name('platform.media.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Media'), route('platform.media.list'));
    });

Route::screen('media/create', \App\Orchid\Screens\Media\MediaEditScreen::class)
    ->name('platform.media.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.media.list')
            ->push(__('Add Video'));
    });

Route::screen('media/{media}/edit', \App\Orchid\Screens\Media\MediaEditScreen::class)
    ->name('platform.media.edit')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.media.list')
            ->push(__('Edit Video'));
    });

// Platform > FAQs
Route::screen('faqs', \App\Orchid\Screens\Faq\FaqListScreen::class)
    ->name('platform.faqs.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('FAQs'), route('platform.faqs.list'));
    });

Route::screen('faqs/create', \App\Orchid\Screens\Faq\FaqEditScreen::class)
    ->name('platform.faqs.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.faqs.list')
            ->push(__('Add FAQ'));
    });

Route::screen('faqs/{faq}/edit', \App\Orchid\Screens\Faq\FaqEditScreen::class)
    ->name('platform.faqs.edit')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.faqs.list')
            ->push(__('Edit FAQ'));
    });

// Platform > Careers
Route::screen('careers', \App\Orchid\Screens\Career\CareerListScreen::class)
    ->name('platform.careers.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Careers'), route('platform.careers.list'));
    });

Route::screen('careers/create', \App\Orchid\Screens\Career\CareerEditScreen::class)
    ->name('platform.careers.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.careers.list')
            ->push(__('Add Position'));
    });

Route::screen('careers/{career}/edit', \App\Orchid\Screens\Career\CareerEditScreen::class)
    ->name('platform.careers.edit')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.careers.list')
            ->push(__('Edit Position'));
    });

// Platform > Page Banners
Route::screen('page-banners', \App\Orchid\Screens\PageBannerScreen::class)
    ->name('platform.page-banners')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Page Banners'), route('platform.page-banners'));
    });

// Platform > Blog
Route::screen('blog', \App\Orchid\Screens\Blog\BlogListScreen::class)
    ->name('platform.blog.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Blog'), route('platform.blog.list'));
    });

Route::screen('blog/create', \App\Orchid\Screens\Blog\BlogEditScreen::class)
    ->name('platform.blog.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.blog.list')
            ->push(__('Create Blog'));
    });

Route::screen('blog/{blog}/edit', \App\Orchid\Screens\Blog\BlogEditScreen::class)
    ->name('platform.blog.edit')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.blog.list')
            ->push(__('Edit Blog'));
    });

Route::screen('categories', \App\Orchid\Screens\Blog\CategoryListScreen::class)
    ->name('platform.categories')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Categories'), route('platform.categories'));
    });

// Platform > Products
Route::screen('products', \App\Orchid\Screens\Product\ProductListScreen::class)
    ->name('platform.products.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Products'), route('platform.products.list'));
    });

Route::screen('products/create', \App\Orchid\Screens\Product\ProductEditScreen::class)
    ->name('platform.products.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.products.list')
            ->push(__('Create Product'));
    });

Route::screen('products/{product}/edit', \App\Orchid\Screens\Product\ProductEditScreen::class)
    ->name('platform.products.edit')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.products.list')
            ->push(__('Edit Product'));
    });

// Platform > Brands
Route::screen('brands', \App\Orchid\Screens\Brand\BrandListScreen::class)
    ->name('platform.brands.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Brands'), route('platform.brands.list'));
    });

Route::screen('brands/create', \App\Orchid\Screens\Brand\BrandEditScreen::class)
    ->name('platform.brands.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.brands.list')
            ->push(__('Add Brand'));
    });

Route::screen('brands/{brand}/edit', \App\Orchid\Screens\Brand\BrandEditScreen::class)
    ->name('platform.brands.edit')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.brands.list')
            ->push(__('Edit Brand'));
    });

// Platform > Demo Requests
Route::screen('demo-requests', \App\Orchid\Screens\DemoRequestListScreen::class)
    ->name('platform.demo-requests')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Demo Requests'), route('platform.demo-requests'));
    });

// Platform > Consultation Bookings
Route::screen('consultation-bookings', \App\Orchid\Screens\ConsultationBookingListScreen::class)
    ->name('platform.consultation-bookings')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Consultation Bookings'), route('platform.consultation-bookings'));
    });

// Platform > Discount Codes
Route::screen('discount-codes', \App\Orchid\Screens\DiscountCodeScreen::class)
    ->name('platform.discount-codes')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Discount Codes'), route('platform.discount-codes'));
    });

//Route::screen('idea', 'Idea::class','platform.screens.idea');

