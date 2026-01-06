<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Application;
use App\Models\Media;
use App\Models\Faq;
use App\Models\Career;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::published()->orderBy('sort_order')->take(6)->get();
        return view('frontend.home', compact('products'));
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
        $faqs = Faq::active()->ordered()->get();
        return view('frontend.faq', compact('faqs'));
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
        $careers = Career::active()->ordered()->get();
        return view('frontend.careers', compact('careers'));
    }

    public function media()
    {
        $mediaItems = Media::active()->ordered()->get();
        return view('frontend.media', compact('mediaItems'));
    }

    // Industry Pages
    public function serviceRobots()
    {
        $randomProducts = Product::published()->inRandomOrder()->take(3)->get();
        return view('frontend.industries.service-robots', compact('randomProducts'));
    }

    public function hospitalityRobots()
    {
        $randomProducts = Product::published()->inRandomOrder()->take(3)->get();
        return view('frontend.industries.hospitality-robots', compact('randomProducts'));
    }

    public function cleaningRobots()
    {
        $randomProducts = Product::published()->inRandomOrder()->take(3)->get();
        return view('frontend.industries.cleaning-robots', compact('randomProducts'));
    }

    public function deliveryRobots()
    {
        $randomProducts = Product::published()->inRandomOrder()->take(3)->get();
        return view('frontend.industries.delivery-robots', compact('randomProducts'));
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

    public function search(Request $request)
    {
        $query = $request->get('q', '');
        $products = collect();
        $blogs = collect();

        if (strlen($query) >= 2) {
            $products = Product::published()
                ->where(function ($q) use ($query) {
                    $q->where('name', 'LIKE', "%{$query}%")
                        ->orWhere('description', 'LIKE', "%{$query}%")
                        ->orWhere('category', 'LIKE', "%{$query}%");
                })
                ->orderBy('sort_order')
                ->get();

            $blogs = Blog::published()
                ->where(function ($q) use ($query) {
                    $q->where('title', 'LIKE', "%{$query}%")
                        ->orWhere('content', 'LIKE', "%{$query}%");
                })
                ->latest('published_at')
                ->get();
        }

        return view('frontend.search', compact('query', 'products', 'blogs'));
    }

    public function applications()
    {
        $applications = Application::active()->ordered()->get();
        return view('frontend.applications', compact('applications'));
    }
}

