<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Brand;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function projects()
    {
        return view('frontend.projects');
    }

    public function products()
    {
        $products = Product::published()->orderBy('sort_order')->get();
        return view('frontend.products', compact('products'));
    }

    public function blog()
    {
        $blogs = Blog::with('category')->published()->latest('published_at')->paginate(9);
        return view('frontend.blog', compact('blogs'));
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function blogSingle($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $recentPosts = Blog::published()->where('id', '!=', $blog->id)->latest('published_at')->take(3)->get();
        return view('frontend.blog-single', compact('blog', 'recentPosts'));
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function careers()
    {
        return view('frontend.blog');
    }

    public function media()
    {
        return view('frontend.projects');
    }

    // Industry Pages
    public function serviceRobots()
    {
        return view('frontend.industries.service-robots');
    }

    public function hospitalityRobots()
    {
        return view('frontend.industries.hospitality-robots');
    }

    public function cleaningRobots()
    {
        return view('frontend.industries.cleaning-robots');
    }

    public function deliveryRobots()
    {
        return view('frontend.industries.delivery-robots');
    }

    public function productSingle($slug)
    {
        $product = Product::with(['features', 'specifications', 'galleries'])
            ->where('slug', $slug)
            ->firstOrFail();
        $brands = Brand::active()->orderBy('sort_order')->get();
        return view('frontend.product-single', compact('product', 'brands', 'slug'));
    }

    public function termsOfUse()
    {
        return view('frontend.terms');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy');
    }
}

