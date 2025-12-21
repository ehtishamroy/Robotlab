<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/projects', [FrontendController::class, 'projects'])->name('projects');
Route::get('/products', [FrontendController::class, 'products'])->name('products');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/blog-single', [FrontendController::class, 'blogSingle'])->name('blog.single');
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('/careers', [FrontendController::class, 'careers'])->name('careers');
Route::get('/media', [FrontendController::class, 'media'])->name('media');

// Industries Routes
Route::get('/industries/service-robots', [FrontendController::class, 'serviceRobots'])->name('industries.service');
Route::get('/industries/hospitality-robots', [FrontendController::class, 'hospitalityRobots'])->name('industries.hospitality');
Route::get('/industries/cleaning-robots', [FrontendController::class, 'cleaningRobots'])->name('industries.cleaning');
Route::get('/industries/delivery-robots', [FrontendController::class, 'deliveryRobots'])->name('industries.delivery');

