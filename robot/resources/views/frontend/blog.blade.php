@extends('layouts.frontend')

@section('title', 'Blog || Spectrum Robotics')

@section('content')
    <!-- page-banner9 -->
    <section class="page-banner9">
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Articles</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Blog /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li>Blog</li>
        </ul>
    </section>
    <!-- End page-banner9 -->

    <!-- blog-sec -->
    <section class="blog-sec v2 ibt-section-gap">
        <div class="container">
            <div class="row">
                @forelse($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href='{{ route('blog.single', $blog->slug) }}'><img
                                        src="{{ $blog->featured_image ? asset($blog->featured_image) : asset('frontend/assets/images/blog/blog1-1.png') }}"
                                        alt="{{ $blog->title }}"></a>
                                <span class="blog-meta">{{ $blog->formatted_date }}
                                    {{ $blog->author ? '/ ' . $blog->author : '' }}</span>
                            </div>
                            <div class="blog-content">
                                <h4 class="title"><a href='{{ route('blog.single', $blog->slug) }}' title>{{ $blog->title }}</a>
                                </h4>
                                <span>/ {{ $blog->category ? $blog->category->name : 'General' }} /</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <div class="alert alert-info">
                            <h4>No blog posts yet</h4>
                            <p>Check back soon for the latest updates and articles.</p>
                        </div>
                    </div>
                @endforelse
            </div>

            @if($blogs->hasPages())
                <nav aria-label="Page navigation">
                    {{ $blogs->links('pagination::bootstrap-4') }}
                </nav>
            @endif
        </div>
    </section>
    <!-- End blog-sec -->
@endsection

@section('contact_section')
    @include('partials.contact')
@endsection