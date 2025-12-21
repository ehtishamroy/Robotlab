@extends('layouts.home')

@push('styles')
    <style>
        /* Capabilities Tab Content Styling */
        .Feature-sec6 .tab-content {
            padding-top: 50px;
        }

        .Feature-sec6 .tab-content-info {
            padding: 30px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .Feature-sec6 .tab-content-info h3 {
            color: #ffffff;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .Feature-sec6 .tab-content-info p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .Feature-sec6 .tab-content-info ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .Feature-sec6 .tab-content-info ul li {
            color: rgba(255, 255, 255, 0.9);
            font-size: 15px;
            padding: 10px 0;
            padding-left: 30px;
            position: relative;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .Feature-sec6 .tab-content-info ul li:last-child {
            border-bottom: none;
        }

        .Feature-sec6 .tab-content-info ul li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #40E0D0;
            /* Turquoise accent */
            font-weight: bold;
        }

        .Feature-sec6 .tab-img {
            border-radius: 15px;
            overflow: hidden;
        }

        .Feature-sec6 .tab-img img {
            width: 100%;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .Feature-sec6 .tab-img:hover img {
            transform: scale(1.02);
        }

        /* Mobile Responsive - Tablets */
        @media (max-width: 991px) {
            .Feature-sec6 .tab-content {
                padding-top: 30px;
            }

            .Feature-sec6 .tab-img {
                margin-bottom: 25px;
            }

            .Feature-sec6 .tab-content-info {
                padding: 25px;
            }

            .Feature-sec6 .tab-content-info h3 {
                font-size: 24px;
            }
        }

        /* Mobile Responsive - Phones */
        @media (max-width: 576px) {
            .Feature-sec6 .tab-content {
                padding-top: 20px;
            }

            .Feature-sec6 .tab-content-info {
                padding: 20px 15px;
            }

            .Feature-sec6 .tab-content-info h3 {
                font-size: 20px;
                margin-bottom: 15px;
            }

            .Feature-sec6 .tab-content-info p {
                font-size: 14px;
                line-height: 1.7;
                margin-bottom: 20px;
            }

            .Feature-sec6 .tab-content-info ul li {
                font-size: 14px;
                padding: 8px 0;
                padding-left: 25px;
            }

            .Feature-sec6 .tab-img {
                margin-bottom: 20px;
            }

            .Feature-sec6 .tab-img img {
                border-radius: 10px;
            }
        }

        /* Featured Products Section Styling */
        .featured-products .sec-title .description {
            max-width: 700px;
            margin: 15px auto 0;
            color: #666;
        }

        .product-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .product-img {
            position: relative;
            overflow: hidden;
            height: 280px;
            background: #f8f9fa;
        }

        .product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-img img {
            transform: scale(1.1);
        }

        .product-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(64, 224, 208, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .product-card:hover .product-overlay {
            opacity: 1;
        }

        .product-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 8px;
            color: #1a1a1a;
        }

        .product-category {
            font-size: 13px;
            color: #40E0D0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .product-desc {
            font-size: 14px;
            color: #666;
            line-height: 1.7;
            margin-bottom: 0;
        }

        /* Mobile Responsive - Products */
        @media (max-width: 991px) {
            .product-img {
                height: 250px;
            }

            .product-content {
                padding: 20px;
            }

            .product-title {
                font-size: 20px;
            }

            .product-card {
                margin-bottom: 25px;
            }
        }

        @media (max-width: 576px) {
            .featured-products .row>div {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .product-img {
                height: 240px;
            }

            .product-content {
                padding: 18px;
            }

            .product-title {
                font-size: 18px;
            }

            .product-desc {
                font-size: 13px;
            }

            .product-card {
                margin-bottom: 20px;
            }
        }
    </style>
@endpush

@section('content')
    <!-- hero-style5 -->
    <section class="hero-style5">
        <div class="container2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-info5">
                        <div class="hero-content5">
                            <h1 class="title">{{ setting('homepage.hero.title', 'Revolutionizing Operations with Intelligent Robotic Solutions') }}</h1>
                            <a href="{{ route('products') }}" title="" class="ibt-btn ibt-btn-secondary">
                                <span>{{ setting('homepage.hero.button_text', 'Explore Products') }}</span>
                                <i class="icon-arrow-top"></i>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="hero-block">
                                    <img src="{{ asset(setting('homepage.hero.image_2', 'frontend/assets/images/hero/hero5-2.png')) }}"
                                        alt="Spectrum Robotics - AI Robotic Solutions">
                                    <div class="hero-block-content">
                                        <h4 class="title">{{ setting('homepage.hero.left_title', 'Trusted by Industry Leaders') }}</h4>
                                        <div class="counter-box9">
                                            <span class="counter-number percent-counter" data-target="{{ setting('homepage.hero.counter_1_value', '100') }}">0</span>
                                            <span class="counter-text">+</span>
                                        </div>
                                        <span class="sub-title">{{ setting('homepage.hero.counter_1_label', 'Robots deployed nationwide') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="hero-block v2">
                                    <img src="{{ asset(setting('homepage.hero.image_3', 'frontend/assets/images/hero/hero5-3.png')) }}"
                                        alt="Spectrum Robotics - Next-Gen Automation">
                                    <div class="hero-block-content">
                                        <h4 class="title">{{ setting('homepage.hero.right_title', 'Next-Gen Automation for Your Business') }}</h4>
                                        <a class='ser-btn3' href='{{ route("services") }}' title>View Solutions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img5">
                        <img src="{{ asset(setting('homepage.hero.image_1', 'frontend/assets/images/hero/hero5-1.png')) }}"
                            alt="Spectrum Robotics - AI Powered Robots">
                        <h4 class="title">{{ setting('homepage.hero.video_title', 'Powered by Advanced AI') }}</h4>
                        <div class="exp-box">
                            <div class="video-img">
                                <img src="{{ asset('frontend/assets/images/event/video.png') }}"
                                    alt="Spectrum Robotics Demo Video">
                                <a href="#" class="video-popup" data-video="https://www.youtube.com/embed/aircAruvnKk">
                                    <i class="fa fa-play"></i> <span>Watch Demo</span>
                                </a>
                            </div>
                            <div class="counter-box2">
                                <span class="counter-number" data-target="{{ setting('homepage.hero.counter_2_value', '50') }}">0</span>
                                <span class="counter-text">+</span>
                            </div>
                            <p>{{ setting('homepage.hero.counter_2_label', 'Industries transformed') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End hero-style5 -->

    <!-- feature-style2 -->
    <section class="feature-sec2 ibt-section-gap">
        <div class="container">
            <div class="sec-title feture5">
                <span class="sub-title">{{ setting('homepage.features.subtitle', 'why spectrum') }}</span>
                <h2 class="title animated-heading">{{ setting('homepage.features.title', 'Smarter Automation Starts Here—Discover the Spectrum Advantage') }}</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="feature-card v1">
                        <img src="{{ asset(setting('homepage.features.card_1_icon', 'frontend/assets/images/feature/feature2-1.png')) }}" alt="{{ setting('homepage.features.card_1_title', 'Autonomous Navigation') }}">
                        <h4 class="title"><a href='{{ route("services") }}'>{{ setting('homepage.features.card_1_title', 'Autonomous Navigation') }}</a></h4>
                        <p>{{ setting('homepage.features.card_1_desc', 'Advanced SLAM technology enables our robots to navigate complex environments safely, avoiding obstacles in real-time.') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="feature-card">
                        <img src="{{ asset(setting('homepage.features.card_2_icon', 'frontend/assets/images/feature/feature2-2.svg')) }}" alt="{{ setting('homepage.features.card_2_title', 'Industry Solutions') }}">
                        <h4 class="title"><a href='{{ route("services") }}'>{{ setting('homepage.features.card_2_title', 'Industry Solutions') }}</a></h4>
                        <p>{{ setting('homepage.features.card_2_desc', 'Purpose-built robots for hospitality, healthcare, retail, and logistics—configured for your operational needs.') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="feature-card">
                        <img src="{{ asset(setting('homepage.features.card_3_icon', 'frontend/assets/images/feature/feature2-3.png')) }}" alt="{{ setting('homepage.features.card_3_title', '24/7 Reliability') }}">
                        <h4 class="title"><a href='{{ route("services") }}'>{{ setting('homepage.features.card_3_title', '24/7 Reliability') }}</a></h4>
                        <p>{{ setting('homepage.features.card_3_desc', 'Designed for continuous operation with self-charging capabilities and 99.5% average uptime across deployments.') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="feature-card">
                        <img src="{{ asset(setting('homepage.features.card_4_icon', 'frontend/assets/images/feature/feature2-4.svg')) }}" alt="{{ setting('homepage.features.card_4_title', 'Full-Service Support') }}">
                        <h4 class="title"><a href='{{ route("services") }}'>{{ setting('homepage.features.card_4_title', 'Full-Service Support') }}</a></h4>
                        <p>{{ setting('homepage.features.card_4_desc', 'From consultation to installation and maintenance, we ensure seamless integration with your existing workflows.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature-style2 -->

    <!-- neural-playground / Partners Section -->
    <section class="neural-playground3 v2">
        <div class="container2">
            <div class="row">
                <div class="col-lg-3">
                    <div class="neural-img3">
                        <img src="{{ asset('frontend/assets/images/layers/layer3.png') }}"
                            alt="Spectrum Robotics Technology Partners">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="neural-content">
                        <h2 class="gradient-title">{!! setting('homepage.partners.title', 'Trusted Technology Partners Powering Our <span>Robotic Fleet</span>—Industry-Leading Innovation') !!}</h2>
                        <div class="swiper brand">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#" title=""><img src="{{ asset('frontend/assets/images/brand/brand1.png') }}"
                                            alt="Technology Partner"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" title=""><img src="{{ asset('frontend/assets/images/brand/brand2.png') }}"
                                            alt="Technology Partner"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" title=""><img src="{{ asset('frontend/assets/images/brand/brand3.png') }}"
                                            alt="Technology Partner"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" title=""><img src="{{ asset('frontend/assets/images/brand/brand4.png') }}"
                                            alt="Technology Partner"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" title=""><img src="{{ asset('frontend/assets/images/brand/brand1.png') }}"
                                            alt="Technology Partner"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" title=""><img src="{{ asset('frontend/assets/images/brand/brand2.png') }}"
                                            alt="Technology Partner"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" title=""><img src="{{ asset('frontend/assets/images/brand/brand3.png') }}"
                                            alt="Technology Partner"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" title=""><img src="{{ asset('frontend/assets/images/brand/brand4.png') }}"
                                            alt="Technology Partner"></a>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End neural-playground -->

    <!-- Featured Products Section -->
    <section class="featured-products ibt-section-gap">
        <div class="container">
            <div class="sec-title text-center">
                <span class="sub-title">{{ setting('homepage.products.subtitle', 'our robots') }}</span>
                <h2 class="title animated-heading">{{ setting('homepage.products.title', 'Featured Robotic Solutions') }}</h2>
                <p class="description">{{ setting('homepage.products.description', 'Explore our cutting-edge AI-powered robots designed to transform your business operations') }}</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="{{ asset(setting('homepage.products.product_1_image', 'frontend/assets/images/products/bellabot.png')) }}"
                                alt="{{ setting('homepage.products.product_1_title', 'BellaBot') }} - {{ setting('homepage.products.product_1_category', 'Food Delivery Robot') }}">
                            <div class="product-overlay">
                                <a href="{{ route('products') }}" class="ibt-btn ibt-btn-secondary">
                                    <span>View Details</span>
                                    <i class="icon-arrow-top"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4 class="product-title">{{ setting('homepage.products.product_1_title', 'BellaBot') }}</h4>
                            <p class="product-category">{{ setting('homepage.products.product_1_category', 'Food Delivery Robot') }}</p>
                            <p class="product-desc">{{ setting('homepage.products.product_1_desc', 'Advanced food delivery robot with voice interaction and obstacle avoidance for restaurants') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="{{ asset(setting('homepage.products.product_2_image', 'frontend/assets/images/products/kettybot.png')) }}"
                                alt="{{ setting('homepage.products.product_2_title', 'KettyBot') }} - {{ setting('homepage.products.product_2_category', 'Reception & Greeting Robot') }}">
                            <div class="product-overlay">
                                <a href="{{ route('products') }}" class="ibt-btn ibt-btn-secondary">
                                    <span>View Details</span>
                                    <i class="icon-arrow-top"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4 class="product-title">{{ setting('homepage.products.product_2_title', 'KettyBot') }}</h4>
                            <p class="product-category">{{ setting('homepage.products.product_2_category', 'Reception & Greeting Robot') }}</p>
                            <p class="product-desc">{{ setting('homepage.products.product_2_desc', 'Interactive reception robot with advertising display and customer engagement features') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="{{ asset(setting('homepage.products.product_3_image', 'frontend/assets/images/products/holabot.png')) }}"
                                alt="{{ setting('homepage.products.product_3_title', 'HolaBot') }} - {{ setting('homepage.products.product_3_category', 'Heavy-Duty Service Robot') }}">
                            <div class="product-overlay">
                                <a href="{{ route('products') }}" class="ibt-btn ibt-btn-secondary">
                                    <span>View Details</span>
                                    <i class="icon-arrow-top"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4 class="product-title">{{ setting('homepage.products.product_3_title', 'HolaBot') }}</h4>
                            <p class="product-category">{{ setting('homepage.products.product_3_category', 'Heavy-Duty Service Robot') }}</p>
                            <p class="product-desc">{{ setting('homepage.products.product_3_desc', 'High-capacity delivery robot for hotels, restaurants, and large venues with smart navigation') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="{{ asset(setting('homepage.products.product_4_image', 'frontend/assets/images/products/matradee.png')) }}"
                                alt="{{ setting('homepage.products.product_4_title', 'Matradee X') }} - {{ setting('homepage.products.product_4_category', 'Premium Delivery Robot') }}">
                            <div class="product-overlay">
                                <a href="{{ route('products') }}" class="ibt-btn ibt-btn-secondary">
                                    <span>View Details</span>
                                    <i class="icon-arrow-top"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4 class="product-title">{{ setting('homepage.products.product_4_title', 'Matradee X') }}</h4>
                            <p class="product-category">{{ setting('homepage.products.product_4_category', 'Premium Delivery Robot') }}</p>
                            <p class="product-desc">{{ setting('homepage.products.product_4_desc', 'Premium robotic solution with advanced AI and multi-functional service capabilities') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('products') }}" class="ibt-btn ibt-btn-outline">
                    <span>View All Products</span>
                    <i class="icon-arrow-top"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- End Featured Products Section -->

    <!-- End neural-playground -->

    <!-- service-sec10 / Solutions Section -->
    <section class="service-sec10 ibt-section-gapTop">
        <div class="title-area">
            <div class="container">
                <div class="row end mb-0">
                    <div class="col-xl-6 col-lg-12">
                        <div class="sec-title mb-0">
                            <span class="sub-title">{{ setting('homepage.solutions.subtitle', 'solutions') }}</span>
                            <h2 class="title animated-heading">{{ setting('homepage.solutions.title', 'End-to-End Robotic Solutions for Every Industry') }}</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="sec-btn-box">
                            <p>{{ setting('homepage.solutions.description', 'From deployment to ongoing support, we handle it all') }}</p>
                            <a class='ibt-btn ibt-btn-outline' href='{{ route("products") }}'>
                                <span>{{ setting('homepage.solutions.button_text', 'Browse All Robots') }}</span>
                                <i class="icon-arrow-top"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container2">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="ser-card10">
                        <img src="{{ asset(setting('homepage.solutions.card_1_image', 'frontend/assets/images/service/ser10-1.png')) }}" alt="{{ setting('homepage.solutions.card_1_title', 'Hospitality Robots') }}">
                        <img src="{{ asset('frontend/assets/images/service/ser-icon10-1.svg') }}" alt="Hospitality Icon"
                            class="ser-icon10">
                        <h4 class="title v2">{{ setting('homepage.solutions.card_1_title', 'Hospitality Robots') }}</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="ser-card10">
                        <img src="{{ asset(setting('homepage.solutions.card_2_image', 'frontend/assets/images/service/ser10-2.png')) }}" alt="{{ setting('homepage.solutions.card_2_title', 'Healthcare Automation') }}">
                        <img src="{{ asset('frontend/assets/images/service/ser-icon10-2.svg') }}" alt="Healthcare Icon"
                            class="ser-icon10">
                        <h4 class="title">{{ setting('homepage.solutions.card_2_title', 'Healthcare Automation') }}</h4>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="ser-card10">
                        <img src="{{ asset(setting('homepage.solutions.card_3_image', 'frontend/assets/images/service/ser10-3.png')) }}"
                            alt="{{ setting('homepage.solutions.card_3_title', 'Smart Logistics & Delivery Solutions') }}">
                        <img src="{{ asset('frontend/assets/images/service/ser-icon10-3.svg') }}" alt="Logistics Icon"
                            class="ser-icon10">
                        <h4 class="title v3">{{ setting('homepage.solutions.card_3_title', 'Smart Logistics & Delivery Solutions') }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service-sec10 -->

    <!-- Feature-sec6 / Capabilities Section -->
    <section class="Feature-sec6">
        <div class="container">
            <div class="sec-title white">
                <span class="sub-title">{{ setting('homepage.capabilities.subtitle', 'capabilities') }}</span>
                <h2 class="title animated-heading">{{ setting('homepage.capabilities.title', 'What Makes Spectrum Robots Different') }}</h2>
            </div>
            <div class="feature-tabs6">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a href="#" title="" class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                            <div class="tab-heade">
                                <!-- SVG Code omitted for brevity -->
                                <h4 class="title">{{ setting('homepage.capabilities.tab_1_title', 'Autonomous Navigation') }}</h4>
                            </div>
                        </a>
                        <a href="#" title="" class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                            <div class="tab-heade">
                                <h4 class="title">{{ setting('homepage.capabilities.tab_2_title', 'AI-Powered Interaction') }}</h4>
                            </div>
                        </a>
                        <a href="#" title="" class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                            <div class="tab-heade">
                                <h4 class="title">{{ setting('homepage.capabilities.tab_3_title', 'Seamless Integration') }}</h4>
                            </div>
                        </a>
                        <a href="#" title="" class="nav-link" id="nav-scale-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-scale" role="tab" aria-controls="nav-scale" aria-selected="false">
                            <div class="tab-heade">
                                <h4 class="title">{{ setting('homepage.capabilities.tab_4_title', 'Scalable Deployment') }}</h4>
                            </div>
                        </a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="tab-img">
                                    <img src="{{ asset('frontend/assets/images/feature/feature6-1.png') }}"
                                        alt="Autonomous Navigation">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab-content-info">
                                    <h3>{{ setting('homepage.capabilities.tab_1_heading', 'Advanced SLAM Technology') }}</h3>
                                    <p>{{ setting('homepage.capabilities.tab_1_desc', 'Our robots use cutting-edge Simultaneous Localization and Mapping (SLAM) technology to navigate complex environments with precision. They detect and avoid obstacles in real-time, ensuring safe operation in busy spaces.') }}</p>
                                    <ul>
                                        <li>Real-time obstacle detection and avoidance</li>
                                        <li>Dynamic path optimization</li>
                                        <li>Multi-floor navigation capability</li>
                                        <li>Works in crowded environments</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="tab-img">
                                    <img src="{{ asset('frontend/assets/images/feature/feature6-2.png') }}"
                                        alt="AI-Powered Interaction">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab-content-info">
                                    <h3>{{ setting('homepage.capabilities.tab_2_heading', 'Intelligent Customer Engagement') }}</h3>
                                    <p>{{ setting('homepage.capabilities.tab_2_desc', 'Equipped with voice recognition, facial detection, and natural language processing, our robots create memorable interactions with your customers while delivering exceptional service.') }}</p>
                                    <ul>
                                        <li>Voice command recognition</li>
                                        <li>Multi-language support</li>
                                        <li>Personalized greetings</li>
                                        <li>Interactive touchscreen displays</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="tab-img">
                                    <img src="{{ asset('frontend/assets/images/feature/feature6-3.png') }}"
                                        alt="Seamless Integration">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab-content-info">
                                    <h3>{{ setting('homepage.capabilities.tab_3_heading', 'Works With Your Systems') }}</h3>
                                    <p>{{ setting('homepage.capabilities.tab_3_desc', 'Our robots integrate seamlessly with your existing POS, kitchen display systems, and management software. API access allows for custom integrations tailored to your workflow.') }}</p>
                                    <ul>
                                        <li>POS system integration</li>
                                        <li>Elevator and door connectivity</li>
                                        <li>Cloud-based management dashboard</li>
                                        <li>Custom API access</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-scale" role="tabpanel" aria-labelledby="nav-scale-tab">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="tab-img">
                                    <img src="{{ asset('frontend/assets/images/feature/feature6-1.png') }}"
                                        alt="Scalable Deployment">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab-content-info">
                                    <h3>{{ setting('homepage.capabilities.tab_4_heading', 'Grow at Your Own Pace') }}</h3>
                                    <p>{{ setting('homepage.capabilities.tab_4_desc', 'Start with a single robot and scale up as needed. Our fleet management system allows you to control multiple robots across multiple locations from a single dashboard.') }}</p>
                                    <ul>
                                        <li>Start with one, scale to many</li>
                                        <li>Multi-location fleet management</li>
                                        <li>Centralized analytics and reporting</li>
                                        <li>Flexible lease and purchase options</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection