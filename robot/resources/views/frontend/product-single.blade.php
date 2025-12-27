@extends('layouts.frontend')

@section('title', $product->name . ' || Spectrum Robotics')

@section('content')
    <!-- Product Hero Section - Full Width Background -->
    <section class="product-hero-fullwidth">
        <!-- Background Image/Video -->
        <div class="hero-media">
            @php
                $videoAttachment = $product->attachment('video')->first();
            @endphp
            @if($videoAttachment)
                <video autoplay muted loop playsinline class="hero-video">
                    <source src="{{ $videoAttachment->url }}" type="{{ $videoAttachment->mime }}">
                </video>
            @elseif($product->video)
                <video autoplay muted loop playsinline class="hero-video">
                    <source src="{{ asset('frontend/assets/videos/' . $product->video) }}" type="video/mp4">
                </video>
            @elseif($product->hero_bg)
                <img src="{{ asset($product->hero_bg) }}" alt="{{ $product->name }}" class="hero-bg-image">
            @else
                <img src="{{ asset('frontend/assets/images/robots/default-hero.jpg') }}" alt="{{ $product->name }}"
                    class="hero-bg-image">
            @endif
        </div>
        <!-- Dark Overlay -->
        <div class="hero-overlay"></div>

        <!-- Content positioned at bottom-left -->
        <div class="hero-content-wrapper">
            <div class="container">
                <div class="hero-content-inner">
                    <h1 class="hero-main-title">
                        Meet {{ $product->name }}: {{ $product->tagline ?? 'Intelligent Robot Solution' }}
                    </h1>
                    <p class="hero-subtitle">{{ $product->hero_text }}</p>

                    <!-- Scroll Indicator -->
                    <a href="#features" class="scroll-indicator">
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Side Info Card (optional) -->
        <div class="hero-side-card">
            <span class="side-card-label">Speak to our team about {{ $product->name }}!</span>
            <div class="side-card-image">
                @if($product->image)
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                @else
                    <img src="{{ asset('frontend/assets/images/robots/default-robot.png') }}" alt="{{ $product->name }}">
                @endif
            </div>
            <a href="#" class="side-card-btn open-demo-popup" data-demo-popup data-product="{{ $slug }}">
                GET MORE INFO <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>
    <!-- End Product Hero -->

    <!-- Product Features Section - Icon Grid -->
    <section class="product-features-dark" id="features">
        <div class="container">
            <div class="features-header">
                <h2 class="features-title">Key Features</h2>
                <p class="features-subtitle">{!! $product->description !!}</p>
            </div>
            <div class="features-grid">
                @forelse($product->features as $feature)
                    <div class="feature-item">
                        <div class="feature-icon">
                            @if($feature->custom_icon)
                                <img src="{{ asset($feature->custom_icon) }}" alt="{{ $feature->title }}"
                                    style="max-width: 40px; max-height: 40px; object-fit: contain;">
                            @else
                                <i class="fas {{ $feature->icon ?? 'fa-robot' }}"></i>
                            @endif
                        </div>
                        <span class="feature-text">{{ $feature->title }}</span>
                    </div>
                @empty
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <span class="feature-text">Advanced AI Technology</span>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Feature Image Section with Fade -->
    <section class="feature-image-section">
        <div class="feature-image-wrapper">
            @if($product->feature_image)
                <img src="{{ asset($product->feature_image) }}" alt="{{ $product->name }}">
            @elseif($product->image)
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
            @endif
            <div class="feature-image-fade"></div>
        </div>
    </section>
    <!-- End Product Features -->

    <!-- Technical Specifications -->
    @if($product->specifications->count() > 0)
        <section class="product-specs">
            <div class="container">
                <h2 class="specs-main-title">Technical specifications</h2>
                <div class="specs-content-wrapper">
                    <div class="specs-table-col">
                        <div class="specs-list">
                            @foreach($product->specifications as $spec)
                                <div class="spec-row">
                                    <span class="spec-label">{{ $spec->label }}</span>
                                    <span class="spec-value">{{ $spec->value }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="specs-image-col">
                        @if($product->specs_image)
                            <img src="{{ asset($product->specs_image) }}" alt="{{ $product->name }} Specifications">
                        @elseif($product->image)
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }} Specifications">
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- End Technical Specifications -->

    @if($product->galleries->count() > 0)
        <!-- Product Gallery Section -->
        <section class="product-gallery-section">
            <div class="container">
                <div class="gallery-grid">
                    @foreach($product->galleries as $gallery)
                        <div class="gallery-item">
                            <img src="{{ asset($gallery->image) }}" alt="{{ $gallery->alt_text ?? $product->name . ' Gallery' }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Brand Slider Section -->
    @if($brands->count() > 0)
        <section class="brand-slider-section">
            <div class="container">
                <div class="swiper brand">
                    <div class="swiper-wrapper">
                        @foreach($brands as $brand)
                            <div class="swiper-slide">
                                <a href="{{ $brand->url ?? '#' }}" title="{{ $brand->name }}">
                                    <img src="{{ asset($brand->logo) }}" alt="{{ $brand->name }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var brandSwiper = new Swiper('.brand', {
                slidesPerView: 2,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 30,
                    },
                }
            });
        });
    </script>

    <!-- Request Demo CTA -->
    <section class="product-cta-section" id="request-demo">
        <div class="container">
            <div class="cta-card">
                <h2 class="cta-headline">Ready to Elevate Your Business with {{ $product->name }}?</h2>
                <p class="cta-subtext">Experience the future of service robotics. Request a personalized demo to see how
                    {{ $product->name }} can transform your operations.
                </p>
                <a href="#" class="cta-button open-demo-popup" data-demo-popup data-product="{{ $slug }}">
                    <span>Contact Us for {{ $product->name }} Demo</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- End Request Demo CTA -->

    <!-- Sticky CTA Button - Desktop (Right Side) -->
    <div class="sticky-cta-desktop">
        <a href="#" class="sticky-cta-btn open-demo-popup" data-demo-popup data-product="{{ $slug }}">
            <span class="sticky-cta-icon"><i class="fas fa-robot"></i></span>
            <span class="sticky-cta-text">
                <span class="sticky-cta-label">Get a Demo</span>
                <span class="sticky-cta-product">{{ $product->name }}</span>
            </span>
            <span class="sticky-cta-arrow"><i class="fas fa-arrow-right"></i></span>
        </a>
    </div>

    <!-- Sticky CTA Button - Mobile (Bottom Bar) -->
    <div class="sticky-cta-mobile">
        <a href="#" class="sticky-mobile-btn open-demo-popup" data-demo-popup data-product="{{ $slug }}">
            <i class="fas fa-headset"></i>
            <span>Contact Us for {{ $product->name }} Demo</span>
        </a>
    </div>

    <style>
        /* Product Hero Section - Full Width */
        .product-hero-fullwidth {
            position: relative;
            width: 100%;
            height: 100vh;
            min-height: 700px;
            overflow: hidden;
        }

        .hero-media {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .hero-bg-image,
        .hero-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.5) 100%);
            z-index: 1;
        }

        .hero-content-wrapper {
            position: absolute;
            bottom: 80px;
            left: 0;
            right: 0;
            z-index: 2;
        }

        .hero-content-inner {
            max-width: 600px;
        }

        .hero-main-title {
            font-size: 48px;
            font-weight: 600;
            color: #fff;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 15px;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.6;
            margin-bottom: 30px;
            max-width: 450px;
        }

        .scroll-indicator {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            color: #fff;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .scroll-indicator:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: #fff;
            color: #fff;
        }

        /* Side Info Card */
        .hero-side-card {
            position: absolute;
            bottom: 40px;
            right: 40px;
            background: #1a7a9a;
            border-radius: 16px;
            padding: 20px;
            width: 280px;
            z-index: 3;
        }

        .side-card-label {
            display: block;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .side-card-image {
            background: #fff;
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 15px;
            text-align: center;
        }

        .side-card-image img {
            max-height: 120px;
            width: auto;
        }

        .side-card-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #fff;
            color: #1a1a2e;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .side-card-btn:hover {
            background: #f0f0f0;
            color: #1a1a2e;
        }

        /* Responsive Hero */
        @media (max-width: 991px) {
            .hero-main-title {
                font-size: 36px;
            }

            .hero-side-card {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .product-hero-fullwidth {
                height: 80vh;
                min-height: 500px;
            }

            .hero-main-title {
                font-size: 28px;
            }

            .hero-content-wrapper {
                bottom: 40px;
            }
        }

        /* Product Features - Turquoise Icon Grid */
        /* Product Features - Turquoise Icon Grid */
        .product-features-dark {
            background: linear-gradient(135deg, #2c6b6e 0%, #448E91 50%, #5ba8aa 100%);
            padding: 80px 0;
        }

        .features-header {
            text-align: center;
            margin-bottom: 60px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .features-title {
            font-size: 48px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 20px;
        }

        .features-subtitle {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 50px 30px;
        }

        .feature-item {
            text-align: center;
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 16px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.05);
        }

        .feature-item:hover .feature-icon {
            background: rgba(255, 255, 255, 0.2);
            border-color: #fff;
            transform: scale(1.1);
        }

        .feature-icon i {
            font-size: 32px;
            color: #fff;
        }

        .feature-text {
            display: block;
            font-size: 16px;
            font-weight: 500;
            color: #fff;
            line-height: 1.4;
        }

        /* Feature Image with Fade */
        .feature-image-section {
            position: relative;
            background: #5ba8aa;
        }

        .feature-image-wrapper {
            position: relative;
            max-height: 500px;
            overflow: hidden;
        }

        .feature-image-wrapper img {
            width: 100%;
            height: auto;
            display: block;
        }

        .feature-image-fade {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 200px;
            background: linear-gradient(to bottom, transparent 0%, rgba(255, 255, 255, 0.9) 70%, #fff 100%);
        }

        @media (max-width: 991px) {
            .features-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .features-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px 20px;
            }

            .features-title {
                font-size: 28px;
            }
        }

        /* Technical Specifications - Two Column with Image */
        .product-specs {
            background: #fff;
            padding: 80px 0 100px;
        }

        .specs-main-title {
            font-size: 36px;
            font-weight: 400;
            color: #000;
            margin-bottom: 50px;
            font-family: var(--font-primary);
        }

        .specs-content-wrapper {
            display: flex;
            gap: 60px;
            align-items: flex-start;
        }

        .specs-table-col {
            flex: 1;
            max-width: 800px;
        }

        .specs-image-col {
            flex: 0 0 350px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .specs-image-col img {
            max-width: 100%;
            max-height: 500px;
            object-fit: contain;
        }

        .specs-list {
            width: 100%;
        }

        .spec-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 18px 0;
            border-bottom: 1px solid #e5e5e5;
        }

        .spec-row:first-child {
            border-top: 1px solid #e5e5e5;
        }

        .spec-label {
            font-size: 15px;
            color: #000;
            text-decoration: underline;
            text-underline-offset: 3px;
            flex: 0 0 45%;
        }

        .spec-value {
            font-size: 15px;
            color: #000;
            flex: 0 0 50%;
            text-align: left;
        }

        /* Specs responsive */
        @media (max-width: 991px) {
            .specs-content-wrapper {
                flex-direction: column;
                gap: 40px;
            }

            .specs-table-col {
                max-width: 100%;
                order: 1;
            }

            .specs-image-col {
                flex: 0 0 auto;
                width: 100%;
                order: 2;
            }

            .specs-image-col img {
                max-height: 350px;
            }
        }

        @media (max-width: 768px) {
            .product-specs {
                padding: 50px 0 60px;
            }

            .product-specs .container {
                padding-left: 0;
                padding-right: 0;
                max-width: 100%;
            }

            .specs-main-title {
                font-size: 28px;
                margin-bottom: 30px;
                padding-left: 15px;
            }

            .specs-table-col {
                width: 100%;
                max-width: 100%;
            }

            .specs-list {
                width: 100%;
            }

            .spec-row {
                padding: 14px 15px;
                margin: 0;
            }

            .spec-label,
            .spec-value {
                font-size: 14px;
            }

            .specs-image-col {
                padding: 0 15px;
            }

            .specs-image-col img {
                max-height: 280px;
                width: 100%;
            }
        }

        /* Product Gallery */
        .product-gallery-section {
            padding: 0 0 80px;
            background: #fff;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .gallery-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 12px;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.02);
        }

        /* Brand Slider */
        .brand-slider-section {
            padding: 50px 0;
            background: #fff;
            border-top: 1px solid #f0f0f0;
        }

        .brand .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 180px;
        }

        .brand .swiper-slide img {
            max-width: 260px;
            max-height: 140px;
            opacity: 0.6;
            transition: all 0.3s ease;
            filter: grayscale(100%);
        }

        .brand .swiper-slide:hover img {
            opacity: 1;
            filter: grayscale(0%);
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .gallery-grid {
                display: grid;
                grid-template-columns: none;
                grid-auto-flow: column;
                grid-auto-columns: 85%;
                gap: 15px;
                overflow-x: auto;
                scroll-snap-type: x mandatory;
                padding-bottom: 20px;
                -webkit-overflow-scrolling: touch;
            }

            .gallery-item {
                scroll-snap-align: center;
            }

            .gallery-item img {
                height: 250px;
            }
        }

        @media (max-width: 991px) {
            .specs-content-wrapper {
                flex-direction: column;
            }

            .specs-table-col {
                max-width: 100%;
            }

            .specs-image-col {
                flex: 0 0 auto;
                width: 100%;
                margin-top: 40px;
            }
        }

        /* Product CTA - Light Blue Card Design */
        .product-cta-section {
            background: #fff;
            padding: 40px 0 100px;
        }

        .cta-card {
            background: linear-gradient(135deg, #2c6b6e 0%, #448E91 50%, #5ba8aa 100%);
            border-radius: 24px;
            padding: 60px 50px;
            max-width: 700px;
            box-shadow: 0 10px 30px rgba(68, 142, 145, 0.2);
        }

        .cta-headline {
            font-size: 32px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .cta-subtext {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 30px;
            max-width: 400px;
            line-height: 1.6;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #000;
            color: #fff;
            padding: 16px 32px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            background: #000;
            color: #448E91;
            transform: translateY(-2px);
        }

        .cta-arrows {
            color: #f59e0b;
            font-weight: 700;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .product-hero-title {
                font-size: 48px;
            }

            .product-hero-image {
                margin-top: 50px;
            }

            .cta-content {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            .product-hero {
                padding: 120px 0 60px;
            }

            .product-hero-title {
                font-size: 36px;
            }

            .product-hero-tagline {
                font-size: 18px;
            }

            .section-title {
                font-size: 32px;
            }

            .cta-title {
                font-size: 28px;
            }
        }

        /* Sticky CTA Button - Desktop */
        .sticky-cta-desktop {
            position: fixed;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1000;
            display: block;
        }

        .sticky-cta-btn {
            display: flex;
            align-items: center;
            gap: 12px;
            background: linear-gradient(135deg, #2c6b6e 0%, #448E91 100%);
            color: #fff;
            padding: 16px 24px;
            border-radius: 12px 0 0 12px;
            text-decoration: none;
            box-shadow: -4px 4px 20px rgba(44, 107, 110, 0.4);
            transition: all 0.3s ease;
            transform: translateX(calc(100% - 60px));
        }

        .sticky-cta-btn:hover {
            transform: translateX(0);
            background: linear-gradient(135deg, #1a5a5d 0%, #357577 100%);
            color: #fff;
        }

        .sticky-cta-icon {
            width: 36px;
            height: 36px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }

        .sticky-cta-text {
            display: flex;
            flex-direction: column;
            white-space: nowrap;
        }

        .sticky-cta-label {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.8;
        }

        .sticky-cta-product {
            font-size: 16px;
            font-weight: 600;
        }

        .sticky-cta-arrow {
            width: 32px;
            height: 32px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            transition: transform 0.3s ease;
        }

        .sticky-cta-btn:hover .sticky-cta-arrow {
            transform: translateX(3px);
        }

        /* Sticky CTA Button - Mobile */
        .sticky-cta-mobile {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 12px 15px;
            padding-bottom: calc(12px + env(safe-area-inset-bottom));
            background: linear-gradient(135deg, #2c6b6e 0%, #448E91 100%);
            box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.15);
        }

        .sticky-mobile-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: #fff;
            color: #2c6b6e;
            padding: 14px 20px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .sticky-mobile-btn:hover {
            background: #f0f0f0;
            color: #1a5a5d;
        }

        .sticky-mobile-btn i {
            font-size: 16px;
        }

        /* Hide/show based on viewport */
        @media (max-width: 991px) {
            .sticky-cta-desktop {
                display: none;
            }

            .sticky-cta-mobile {
                display: block;
            }

            /* Add padding to body to prevent content being hidden behind sticky bar */
            body {
                padding-bottom: 80px;
            }
        }

        /* Hide sticky on very small hero section visibility */
        @media (max-height: 500px) {
            .sticky-cta-desktop {
                display: none;
            }
        }
    </style>

    <script>
        // Set product source when demo popup opens from product page
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('[data-product]').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var productSource = document.getElementById('demoProductSource');
                    if (productSource) {
                        productSource.value = this.getAttribute('data-product');
                    }
                });
            });
        });
    </script>
@endsection

@section('contact_section')
@endsection