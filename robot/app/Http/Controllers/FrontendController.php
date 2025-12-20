<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('frontend.products');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function blogSingle()
    {
        return view('frontend.blog-single');
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
}
