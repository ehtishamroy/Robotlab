@extends('layouts.frontend')

@section('title', 'Media | ' . setting('site_name', 'Spectrum Robotics'))

@push('styles')
    <style>
        /* Video Grid Styling */
        .media-video-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        @media (max-width: 991px) {
            .media-video-grid {
                grid-template-columns: 1fr;
            }
        }

        .video-card {
            background: #f8f9fa;
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }

        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .video-content {
            padding: 25px;
        }

        .video-content h4 {
            font-size: 20px;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 10px;
        }

        .video-content p {
            font-size: 14px;
            color: #666;
            line-height: 1.7;
            margin-bottom: 0;
        }

        /* Catalog Section */
        .catalog-section {
            background: linear-gradient(135deg, #448e91 0%, #2d6163 100%);
            border-radius: 20px;
            padding: 60px;
            text-align: center;
            margin-bottom: 60px;
        }

        .catalog-section h3 {
            color: #fff;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .catalog-section p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 16px;
            max-width: 600px;
            margin: 0 auto 30px;
        }

        .catalog-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #fff;
            color: #448e91;
            padding: 15px 35px;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .catalog-btn:hover {
            background: #1a1a2e;
            color: #fff;
            transform: translateY(-3px);
        }

        /* Featured Video */
        .featured-video-section {
            margin-bottom: 80px;
        }

        .featured-video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .featured-video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Quote Section */
        .quote-section {
            background: #121212;
            border-radius: 20px;
            padding: 60px;
            margin-bottom: 80px;
        }

        .quote-section blockquote {
            color: rgb(58 157 159);
            font-size: 18px;
            font-style: italic;
            line-height: 1.8;
            margin-bottom: 25px;
            font-weight: 500;
            border-left: 4px solid #448e91;
            padding-left: 25px;
        }

        .quote-section .quote-author {
            color: #448e91;
            font-weight: 700;
            font-size: 16px;
        }

        .quote-section .quote-title {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
        }
    </style>
@endpush

@section('content')
    <!-- page-banner -->
    <section class="page-banner9">
        @include('partials.banner-dynamic', ['key' => 'media', 'class' => 'page-banner9'])
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Media</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Media /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li>Media</li>
        </ul>
    </section>
    <!-- End page-banner -->

    <!-- Media Content -->
    <section class="ibt-section-gap">
        <div class="container">

            <!-- Product Catalog Section -->
            <!-- <div class="catalog-section">
                                                        <h3>Product Catalog</h3>
                                                        <p>Explore our complete range of robotic solutions in our interactive eCatalog. Discover specifications,
                                                            features, and applications for all our products.</p>
                                                        <a href="https://online.flippingbook.com/view/376522849/" target="_blank" class="catalog-btn">
                                                            <i class="fas fa-book-open"></i> View eCatalog
                                                        </a>
                                                    </div> -->

            <!-- Featured Video Section -->
            <div class="featured-video-section">
                <div class="sec-title text-center" style="margin-bottom: 40px;">
                    <span class="sub-title">{{ setting('media_page.featured_video.subtitle', 'Featured') }}</span>
                    <h2 class="title animated-heading">
                        {{ setting('media_page.featured_video.title', 'Introducing Matradee') }}</h2>
                    <p style="max-width: 700px; margin: 20px auto 0; color: var(--color-content-black2);">
                        {{ setting('media_page.featured_video.description', 'The Matradee navigates any environment. Currently deployed in Casinos, Hotels, Restaurants, Senior Living, Movie Theaters & Hospitals.') }}
                    </p>
                </div>
                <div class="featured-video-wrapper">
                    <iframe
                        src="{{ setting('media_page.featured_video.video_url', 'https://www.youtube.com/embed/5NHPDFOam0o') }}"
                        allowfullscreen
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                </div>
            </div>

            <!-- Quote Section -->
            <div class="quote-section">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <blockquote>
                            {{ setting('media_page.quote.text', '"At Richtech Robotics, we are leading the transformation of service industry workforces through seamless collaborative robotic integration. Our commitment to innovation and responsible automation creates synergies that empower human workers, increase productivity, enhance safety, and elevate job satisfaction."') }}
                        </blockquote>
                        <div class="quote-author">{{ setting('media_page.quote.author', 'Matt Casella') }}</div>
                        <div class="quote-title">
                            {{ setting('media_page.quote.author_title', 'President, Richtech Robotics') }}</div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img src="{{ asset(setting('media_page.quote.image', 'uploads/2025/12/24/438439423ae07539a11a616a55f004740d9ba7c9.png')) }}"
                            alt="Spectrum Robotics" style="max-width: 200px;">
                    </div>
                </div>
            </div>

            <!-- Video Gallery Section -->
            <div class="sec-title text-center" style="margin-bottom: 50px;">
                <span class="sub-title">{{ setting('media_page.gallery.subtitle', 'Videos') }}</span>
                <h2 class="title animated-heading">
                    {{ setting('media_page.gallery.title', 'See How Spectrum Can Revolutionize Your Operations') }}</h2>
                <p style="max-width: 700px; margin: 20px auto 0; color: var(--color-content-black2);">
                    {{ setting('media_page.gallery.description', 'The Spectrum and Richtech Robotics partnership provides complete robotic solutions for businesses with varying needs.') }}
                </p>
            </div>

            <div class="media-video-grid">
                @forelse($mediaItems as $media)
                    <div class="video-card">
                        <div class="video-wrapper">
                            <iframe src="{{ $media->embed_url }}" allowfullscreen
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                        </div>
                        <div class="video-content">
                            <h4>{{ $media->title }}</h4>
                            @if($media->description)
                                <p>{{ $media->description }}</p>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="text-center">
                        <p>No videos available at the moment.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>
    <!-- End Media Content -->
@endsection

@section('contact_section')
    @include('partials.contact')
@endsection