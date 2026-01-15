@extends('layouts.frontend')

@section('title', 'Hospitality Robots || Spectrum Robotics - Hotel & Resort Automation')

@section('content')
    <!-- page-banner -->
    <section class="page-banner11">
        @include('partials.banner-dynamic', ['key' => 'hospitality', 'class' => 'page-banner11'])
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Hospitality</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Hospitality Robots /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li><a href='#'>Industries</a></li>
            <li>/</li>
            <li>Hospitality Robots</li>
        </ul>
    </section>
    <!-- End page-banner -->

    <!-- Hero Section -->
    <section class="about-us-sec9 ibt-section-gap">
        <div class="container">
            <div class="title-area">
                <div class="sec-title">
                    <span class="sub-title">Hospitality Robots</span>
                    <h2 class="title animated-heading">Hotel Delivery & Guest Service Robots</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content9">
                        @if(setting('hospitality_robots_hero_image'))
                            <img src="{{ setting('hospitality_robots_hero_image') }}" alt="Richie Hotel Delivery Robot"
                                style="max-width: 100%; height: auto; border-radius: 8px;">
                        @else
                            <h4 class="title">Richie Hotel Delivery Robot</h4>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-info9">
                        <p>Another guest needs another towel in room 723? Don't leave the guest at the front
                            desk waiting. Richie takes item delivery to the next level - literally!
                        </p>
                        <p>This high-tech step in robotics boasts elevator riding technology to deliver food,
                            drinks, medicine and other items while ensuring security and efficiency.
                        </p>
                        <p class="mb-0">Perfect for hotels, resorts, and large hospitality venues where
                            multi-floor delivery is essential to guest satisfaction.
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
                <span class="sub-title">Features</span>
                <h2 class="title animated-heading">Hospitality Robot Capabilities</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('hospitality_robots_feature_icon_1') ?: asset('frontend/assets/images/feature/feature1.svg') }}"
                            alt="Elevator Integration">
                        <h4 class="title">Elevator Integration</h4>
                        <p>Automatically calls and rides elevators to navigate between floors autonomously.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('hospitality_robots_feature_icon_2') ?: asset('frontend/assets/images/feature/feature2.svg') }}"
                            alt="Secure Compartments">
                        <h4 class="title">Secure Compartments</h4>
                        <p>Locked compartments ensure guest items are delivered safely and privately.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('hospitality_robots_feature_icon_3') ?: asset('frontend/assets/images/feature/feature3.svg') }}"
                            alt="Guest Notifications">
                        <h4 class="title">Guest Notifications</h4>
                        <p>Automated phone calls and app notifications alert guests when delivery arrives.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('hospitality_robots_feature_icon_4') ?: asset('frontend/assets/images/feature/feature4.svg') }}"
                            alt="24/7 Operation">
                        <h4 class="title">24/7 Operation</h4>
                        <p>Never sleeps, never takes breaks - available around the clock for guest needs.</p>
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
                            <div class="row g-4 mt-2">
                                @foreach($randomProducts as $product)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-showcase-card">
                                            <span class="product-category">{{ strtoupper($product->category ?? 'ROBOT') }}</span>
                                            <h3 class="product-title">{{ $product->name }}</h3>
                                            <p class="product-desc">{{ Str::limit(strip_tags($product->description), 100) }}</p>
                                            <div class="product-image-wrapper">
                                                @if($product->image)
                                                    <img src="{{ normalize_image_url($product->image) }}" alt="{{ $product->name }}"
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
        /* Fix image container to stay within bounds */
        .about-us-sec9 .about-content9 {
            margin-left: 0;
        }

        .about-us-sec9 .about-content9 img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            display: block;
        }

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