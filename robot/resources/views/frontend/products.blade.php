@extends('layouts.frontend')

@section('title', 'Products || Spectrum Robotics - Service Robot Solutions')@section('content')<!-- page-banner9 -->
    <section class="page-banner9">
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Products</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Our Robots /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li>Products</li>
        </ul>
    </section>
    <!-- End page-banner9 -->

    <!-- Products Showcase Section -->
    <section class="products-showcase ibt-section-gap">
        <div class="container">
            <div class="sec-title text-center" style="margin-bottom: 60px;">
                <span class="sub-title">Our Solutions</span>
                <h2 class="title animated-heading">Intelligent Robots for Every Industry</h2>
                <p style="max-width: 700px; margin: 20px auto 0; color: var(--color-content-black2);">
                    Discover our range of AI-powered service robots designed to transform your business operations,
                    enhance customer experiences, and drive efficiency.
                </p>
            </div>

            <div class="row g-4">
                <!-- Product Card 1: BellaBot -->
                <div class="col-lg-6 col-md-6">
                    <div class="product-showcase-card">
                        <span class="product-category">DELIVERY ROBOT</span>
                        <h3 class="product-title">BellaBot</h3>
                        <p class="product-desc">Premium food delivery robot with an adorable personality. Equipped with AI
                            navigation and interactive cat-like expressions for an unforgettable dining experience.</p>
                        <div class="product-image-wrapper">
                            <img src="{{ asset('frontend/assets/images/robots/bellabot.png') }}"
                                alt="BellaBot - Food Delivery Robot" class="product-image">
                        </div>
                        <a href="{{ route('product.single', 'bellabot') }}" class="product-learn-more">
                            LEARN MORE <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product Card 2: KettyBot -->
                <div class="col-lg-6 col-md-6">
                    <div class="product-showcase-card">
                        <span class="product-category">SERVICE ROBOT</span>
                        <h3 class="product-title">KettyBot</h3>
                        <p class="product-desc">Versatile advertising and delivery robot featuring a large display screen.
                            Perfect for promotions, guidance, and autonomous delivery tasks.</p>
                        <div class="product-image-wrapper">
                            <img src="{{ asset('frontend/assets/images/robots/kettybot.png') }}"
                                alt="KettyBot - Service Robot" class="product-image">
                        </div>
                        <a href="{{ route('product.single', 'kettybot') }}" class="product-learn-more">
                            LEARN MORE <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product Card 3: HolaBot -->
                <div class="col-lg-6 col-md-6">
                    <div class="product-showcase-card">
                        <span class="product-category">BUSSING ROBOT</span>
                        <h3 class="product-title">HolaBot</h3>
                        <p class="product-desc">Heavy-duty bussing robot with enclosed cabin for dish collection. Summoned
                            via smart watch, designed for high-volume restaurants and dining halls.</p>
                        <div class="product-image-wrapper">
                            <img src="{{ asset('frontend/assets/images/robots/holabot.png') }}"
                                alt="HolaBot - Bussing Robot" class="product-image">
                        </div>
                        <a href="{{ route('product.single', 'holabot') }}" class="product-learn-more">
                            LEARN MORE <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product Card 4: PuduBot 2 -->
                <div class="col-lg-6 col-md-6">
                    <div class="product-showcase-card">
                        <span class="product-category">DELIVERY ROBOT</span>
                        <h3 class="product-title">PuduBot 2</h3>
                        <p class="product-desc">Next-generation delivery robot with enhanced capacity and multi-floor
                            navigation. Ideal for hotels, hospitals, and large-scale hospitality venues.</p>
                        <div class="product-image-wrapper">
                            <img src="{{ asset('frontend/assets/images/robots/pudubot2.png') }}"
                                alt="PuduBot 2 - Delivery Robot" class="product-image">
                        </div>
                        <a href="{{ route('product.single', 'pudubot-2') }}" class="product-learn-more">
                            LEARN MORE <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product Card 5: CC1 Cleaning Robot -->
                <div class="col-lg-6 col-md-6">
                    <div class="product-showcase-card">
                        <span class="product-category">CLEANING ROBOT</span>
                        <h3 class="product-title">CC1</h3>
                        <p class="product-desc">Commercial cleaning robot with intelligent path planning. Handles sweeping,
                            mopping, and sanitization for large floor areas autonomously.</p>
                        <div class="product-image-wrapper">
                            <img src="{{ asset('frontend/assets/images/robots/cc1.png') }}" alt="CC1 - Cleaning Robot"
                                class="product-image">
                        </div>
                        <a href="{{ route('product.single', 'cc1') }}" class="product-learn-more">
                            LEARN MORE <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product Card 6: Flash Bot -->
                <div class="col-lg-6 col-md-6">
                    <div class="product-showcase-card">
                        <span class="product-category">OUTDOOR DELIVERY</span>
                        <h3 class="product-title">FlashBot</h3>
                        <p class="product-desc">All-weather outdoor delivery robot built for last-mile logistics. Features
                            robust navigation, weather-resistant design, and secure compartments.</p>
                        <div class="product-image-wrapper">
                            <img src="{{ asset('frontend/assets/images/robots/flashbot.png') }}"
                                alt="FlashBot - Outdoor Delivery Robot" class="product-image">
                        </div>
                        <a href="{{ route('product.single', 'flashbot') }}" class="product-learn-more">
                            LEARN MORE <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Products Showcase Section -->

    <style>
        /* Product Showcase Cards */
        .products-showcase {
            background-color: #fff;
        }

        .product-showcase-card {
            background: #f8f9fa;
            border-radius: 16px;
            padding: 30px;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .product-showcase-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .product-category {
            display: inline-block;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.5px;
            color: #448e91;
            margin-bottom: 12px;
        }

        .product-title {
            font-size: 32px;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 15px;
            font-family: var(--font-primary);
        }

        .product-desc {
            font-size: 15px;
            line-height: 1.7;
            color: #666;
            margin-bottom: 25px;
            flex-grow: 0;
        }

        .product-image-wrapper {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 250px;
            margin-bottom: 20px;
        }

        .product-image {
            max-width: 100%;
            max-height: 280px;
            object-fit: contain;
            transition: transform 0.4s ease;
        }

        .product-showcase-card:hover .product-image {
            transform: scale(1.05);
        }

        .product-learn-more {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            font-weight: 600;
            color: #000000ff;
            text-decoration: none;
            padding: 12px 24px;
            border: 2px solid #448e91;
            border-radius: 30px;
            transition: all 0.3s ease;
            align-self: flex-start;
        }

        .product-learn-more:hover {
            background: #448e91;
            color: #fff;
        }

        .product-learn-more i {
            font-size: 12px;
            transition: transform 0.3s ease;
        }

        .product-learn-more:hover i {
            transform: translateX(5px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .product-title {
                font-size: 26px;
            }

            .product-image-wrapper {
                min-height: 200px;
            }

            .product-image {
                max-height: 200px;
            }
        }
    </style>
@endsection

@section('contact_section')
    @include('partials.contact')
@endsection