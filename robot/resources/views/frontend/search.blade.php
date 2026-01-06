@extends('layouts.frontend')

@section('title', 'Search Results | ' . setting('site_name', 'Spectrum Robotics'))

@push('styles')
    <style>
        .search-results-section {
            padding: 80px 0;
        }

        .search-query-display {
            text-align: center;
            margin-bottom: 50px;
        }

        .search-query-display h1 {
            font-size: 36px;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 10px;
        }

        .search-query-display p {
            color: #666;
            font-size: 16px;
        }

        .search-query-display span {
            color: #448e91;
            font-weight: 600;
        }

        .results-section {
            margin-bottom: 60px;
        }

        .results-section h3 {
            font-size: 24px;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #448e91;
            display: inline-block;
        }

        .no-results {
            text-align: center;
            padding: 60px 20px;
            background: #f8f9fa;
            border-radius: 20px;
        }

        .no-results i {
            font-size: 60px;
            color: #ccc;
            margin-bottom: 20px;
        }

        .no-results h3 {
            font-size: 24px;
            color: #1a1a2e;
            margin-bottom: 10px;
        }

        .no-results p {
            color: #666;
            margin-bottom: 20px;
        }

        /* Product Cards */
        .search-product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        @media (max-width: 991px) {
            .search-product-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .search-product-grid {
                grid-template-columns: 1fr;
            }
        }

        .search-product-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .search-product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .search-product-card .product-img {
            height: 200px;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .search-product-card .product-img img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .search-product-card .product-info {
            padding: 20px;
        }

        .search-product-card .product-category {
            font-size: 12px;
            color: #448e91;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .search-product-card .product-name {
            font-size: 18px;
            font-weight: 700;
            color: #1a1a2e;
            margin: 8px 0;
        }

        .search-product-card .product-name a {
            color: inherit;
            text-decoration: none;
        }

        .search-product-card:hover .product-name {
            color: #448e91;
            transition: color 0.3s ease;
        }

        .search-product-card a.card-link {
            display: block;
            text-decoration: none;
            color: inherit;
            height: 100%;
        }

        /* Blog Cards */
        .search-blog-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .search-blog-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .search-blog-card .card-link {
            display: flex;
            gap: 20px;
            text-decoration: none;
            color: inherit;
            width: 100%;
        }

        .search-blog-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .search-blog-card .blog-img {
            width: 200px;
            min-height: 150px;
            background: #f8f9fa;
            flex-shrink: 0;
        }

        .search-blog-card .blog-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .search-blog-card .blog-info {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .search-blog-card .blog-date {
            font-size: 12px;
            color: #888;
            margin-bottom: 8px;
        }

        .search-blog-card .blog-title {
            font-size: 18px;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 8px;
        }

        .search-blog-card .blog-title a {
            color: inherit;
            text-decoration: none;
        }

        .search-blog-card:hover .blog-title {
            color: #448e91;
            transition: color 0.3s ease;
        }

        .search-blog-card .blog-excerpt {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }

        @media (max-width: 576px) {
            .search-blog-card {
                flex-direction: column;
            }

            .search-blog-card .blog-img {
                width: 100%;
                height: 200px;
            }
        }
    </style>
@endpush

@section('content')
    <!-- page-banner -->
    <section class="page-banner9">
        @include('partials.banner-dynamic', ['key' => 'search', 'class' => 'page-banner9'])
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Search</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Search Results /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li>Search</li>
        </ul>
    </section>
    <!-- End page-banner -->

    <!-- Search Results -->
    <section class="search-results-section">
        <div class="container">
            <div class="search-query-display">
                @if($query)
                    <h1>Search Results</h1>
                    <p>Showing results for: <span>"{{ $query }}"</span></p>
                @else
                    <h1>Search</h1>
                    <p>Enter a search term to find products and news</p>
                @endif
            </div>

            @if($products->count() > 0 || $blogs->count() > 0)
                <!-- Products Results -->
                @if($products->count() > 0)
                    <div class="results-section">
                        <h3><i class="fas fa-robot"></i> Products ({{ $products->count() }})</h3>
                        <div class="search-product-grid">
                            @foreach($products as $product)
                                <div class="search-product-card">
                                    <a href="{{ route('product.single', $product->slug) }}" class="card-link">
                                        <div class="product-img">
                                            @if($product->image)
                                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                            @else
                                                <img src="{{ asset('frontend/assets/images/robots/default-robot.png') }}"
                                                    alt="{{ $product->name }}">
                                            @endif
                                        </div>
                                        <div class="product-info">
                                            <span class="product-category">{{ $product->category ?? 'Robot' }}</span>
                                            <h4 class="product-name">
                                                {{ $product->name }}
                                            </h4>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Blog Results -->
                @if($blogs->count() > 0)
                    <div class="results-section">
                        <h3><i class="fas fa-newspaper"></i> News ({{ $blogs->count() }})</h3>
                        <div class="search-blog-list">
                            @foreach($blogs as $blog)
                                <div class="search-blog-card">
                                    <a href="{{ route('blog.single', $blog->slug) }}" class="card-link">
                                        <div class="blog-img">
                                            @if($blog->image)
                                                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                                            @else
                                                <img src="{{ asset('frontend/assets/images/blog/default.jpg') }}" alt="{{ $blog->title }}">
                                            @endif
                                        </div>
                                        <div class="blog-info">
                                            <span class="blog-date">{{ $blog->published_at->format('M d, Y') }}</span>
                                            <h4 class="blog-title">
                                                {{ $blog->title }}
                                            </h4>
                                            <p class="blog-excerpt">{{ Str::limit(strip_tags($blog->content), 150) }}</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            @else
                <!-- No Results -->
                <div class="no-results">
                    <i class="fas fa-search"></i>
                    @if($query)
                        <h3>No results found</h3>
                        <p>We couldn't find any products or news matching "{{ $query }}"</p>
                    @else
                        <h3>Start Searching</h3>
                        <p>Use the search bar above to find products and news</p>
                    @endif
                    <a href="{{ route('products') }}" class="ibt-btn ibt-btn-primary">Browse Products</a>
                </div>
            @endif
        </div>
    </section>
    <!-- End Search Results -->
@endsection

@section('contact_section')
    @include('partials.contact')
@endsection