@extends('layouts.frontend')

@section('title', 'Cleaning Robots || Spectrum Robotics - Commercial Floor Care Automation')

@section('content')
    <!-- page-banner -->
    <section class="page-banner11">
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Cleaning</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Cleaning Robots /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li><a href='#'>Industries</a></li>
            <li>/</li>
            <li>Cleaning Robots</li>
        </ul>
    </section>
    <!-- End page-banner -->

    <!-- Hero Section -->
    <section class="about-us-sec9 ibt-section-gap">
        <div class="container">
            <div class="title-area">
                <div class="sec-title">
                    <span class="sub-title">Cleaning Robots</span>
                    <h2 class="title animated-heading">Commercial Floor Cleaning & Disinfection</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content9">
                        @if(setting('cleaning_robots_hero_image'))
                            <img src="{{ setting('cleaning_robots_hero_image') }}" alt="CC1 Pro & DUST-E Series"
                                style="max-width: 100%; height: auto; border-radius: 8px;">
                        @else
                            <h4 class="title">CC1 Pro & DUST-E Series</h4>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-info9">
                        <p>The CC1 Pro features an AI-powered fusion perception system that accurately identifies
                            both dynamic and static obstacles, ensuring operational safety and cleaning coverage.
                        </p>
                        <p>DUST-E MX is designed to vacuum, mop and successfully clean and shine floors -
                            perfect for airports, stadiums, stores, malls and more. Cleans up to 8,600 sq. ft. per hour!
                        </p>
                        <p class="mb-0">Vacuuming, mopping, and UV-disinfecting to maximize efficiency.
                            Operates during low-traffic hours - all on its own.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Features -->
    <section class="feature-sec10 ibt-section-gap">
        <div class="container">
            <div class="sec-title">
                <span class="sub-title">Capabilities</span>
                <h2 class="title animated-heading">Cleaning Robot Features</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('cleaning_robots_feature_icon_1') ?: asset('frontend/assets/images/feature/feature1.svg') }}"
                            alt="Floor Washing">
                        <h4 class="title">Floor Washing</h4>
                        <p>5 hours of continuous floor washing with powerful scrubbing action.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('cleaning_robots_feature_icon_2') ?: asset('frontend/assets/images/feature/feature2.svg') }}"
                            alt="Sweep & Vacuum">
                        <h4 class="title">Sweep, Suction & Push</h4>
                        <p>5 hours of sweeping and vacuuming for comprehensive floor care.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('cleaning_robots_feature_icon_3') ?: asset('frontend/assets/images/feature/feature3.svg') }}"
                            alt="Carpet Vacuuming">
                        <h4 class="title">Carpet Vacuuming</h4>
                        <p>4 hours of powerful carpet cleaning and debris removal.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('cleaning_robots_feature_icon_4') ?: asset('frontend/assets/images/feature/feature4.svg') }}"
                            alt="UV Disinfection">
                        <h4 class="title">UV Disinfection</h4>
                        <p>UV-C light disinfection for enhanced hygiene in healthcare environments.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('cleaning_robots_feature_icon_5') ?: asset('frontend/assets/images/feature/feature5.svg') }}"
                            alt="Coverage">
                        <h4 class="title">8,600 sq. ft./hour</h4>
                        <p>High-speed coverage for large commercial spaces.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('cleaning_robots_feature_icon_6') ?: asset('frontend/assets/images/feature/feature6.svg') }}"
                            alt="Silent Operation">
                        <h4 class="title">Silent Dust Push</h4>
                        <p>9 hours of silent operation for occupied buildings.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('cleaning_robots_feature_icon_7') ?: asset('frontend/assets/images/feature/feature7.svg') }}"
                            alt="Autonomous">
                        <h4 class="title">Fully Autonomous</h4>
                        <p>Operates during low-traffic hours without human supervision.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('cleaning_robots_feature_icon_8') ?: asset('frontend/assets/images/feature/feature8.svg') }}"
                            alt="AI Perception">
                        <h4 class="title">AI Perception</h4>
                        <p>Detects and avoids obstacles with advanced sensor fusion.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features -->

    <!-- Other Industries -->
    <section class="neural-playground7 ibt-section-gapBottom">
        <div class="container3">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="neural-img">
                        <img src="{{ asset('frontend/assets/images/layers/layer.png') }}" alt="Spectrum Robotics">
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <div class="neural-content">
                        <h2 class="gradient-title" style="font-size: 1.8rem;">Explore Other <span>Robotic Solutions</span>
                        </h2>

                        <!-- Random Products Section -->
                        @if(isset($randomProducts) && $randomProducts->count() > 0)
                            <div class="row g-4 mt-4">
                                @foreach($randomProducts as $product)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-showcase-card">
                                            <span class="product-category">{{ strtoupper($product->category ?? 'ROBOT') }}</span>
                                            <h3 class="product-title">{{ $product->name }}</h3>
                                            <p class="product-desc">{{ Str::limit(strip_tags($product->description), 100) }}</p>
                                            <div class="product-image-wrapper">
                                                @if($product->image)
                                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                                        class="product-image">
                                                @else
                                                    <img src="{{ asset('frontend/assets/images/robots/default-robot.png') }}"
                                                        alt="{{ $product->name }}" class="product-image">
                                                @endif
                                            </div>
                                            <a href="{{ route('product.single', $product->slug) }}" class="product-learn-more">
                                                LEARN MORE <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .neural-content .product-showcase-card {
            background: #f8f9fa;
            border-radius: 16px;
            padding: 20px;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }

        .neural-content .product-showcase-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .neural-content .product-category {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 1.5px;
            color: #448e91;
            margin-bottom: 8px;
        }

        .neural-content .product-title {
            font-size: 22px;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 10px;
        }

        .neural-content .product-desc {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
            flex-grow: 0;
        }

        .neural-content .product-image-wrapper {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 150px;
            margin-bottom: 15px;
        }

        .neural-content .product-image {
            max-width: 100%;
            max-height: 150px;
            object-fit: contain;
        }

        .neural-content .product-learn-more {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 600;
            color: #000;
            text-decoration: none;
            padding: 10px 20px;
            border: 2px solid #448e91;
            border-radius: 30px;
            transition: all 0.3s ease;
            align-self: flex-start;
        }

        .neural-content .product-learn-more:hover {
            background: #448e91;
            color: #fff;
        }

        /* Reduce feature card icon size */
        .feature-card10 img {
            width: 48px;
            height: 48px;
            object-fit: contain;
        }
    </style>
@endsection

@section('contact_section')
    @include('partials.contact')
@endsection