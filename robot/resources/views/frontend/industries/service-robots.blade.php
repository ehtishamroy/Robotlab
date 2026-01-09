@extends('layouts.frontend')

@section('title', 'Service Robots || Spectrum Robotics - Food & Beverage Automation')

@section('content')
    <!-- page-banner -->
    <section class="page-banner11">
        @include('partials.banner-dynamic', ['key' => 'service', 'class' => 'page-banner11'])
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Service</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Service Robots /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li><a href='#'>Industries</a></li>
            <li>/</li>
            <li>Service Robots</li>
        </ul>
    </section>
    <!-- End page-banner -->

    <!-- Hero Section -->
    <section class="about-us-sec9 ibt-section-gap">
        <div class="container">
            <div class="title-area">
                <div class="sec-title">
                    <span class="sub-title">Service Robots</span>
                    <h2 class="title animated-heading">Food & Beverage Serving Robots for Restaurants</h2>
                </div>
                <div class="anim-img2">
                    <img src="{{ asset('frontend/assets/images/event/cross1-1.png') }}" alt="Service Robots">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content9">
                        @if(setting('service_robots_hero_image'))
                            <img src="{{ setting('service_robots_hero_image') }}" alt="Matradee Serving Robots"
                                style="max-width: 100%; height: auto; border-radius: 8px;">
                        @else
                            <h4 class="title">Matradee Serving Robots</h4>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-info9">
                        <p>Matradee Serving Robots have all the specifications and features needed to provide
                            high-quality service delivery with maximum efficiency. Experience true reliability
                            with 12 hours of battery life and 88 lbs carrying capacity.
                        </p>
                        <p>Our service robots are ready to assist in delivering food and bussing tables,
                            allowing your servers to focus on what matters most - creating exceptional
                            guest experiences and building customer relationships.
                        </p>
                        <p class="mb-0">We're engineering smarter solutions, allowing servers to excel by
                            automating repetitive tasks and elevating restaurant experiences. And we're doing
                            it with robots and collaborations to help businesses achieve their diversity spend goals.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Key Features Section -->
    <section class="service-sec6">
        <div class="container2">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="ser-card" @if(setting('service_robots_card1_bg'))
                        style="background-image: url('{{ setting('service_robots_card1_bg') }}'); background-size: cover; background-position: center;"
                    @endif>
                        @if(!setting('service_robots_card1_bg'))
                            <img src="{{ asset('frontend/assets/images/service/service6-1.png') }}" alt="12 Hour Battery">
                        @endif
                        <div class="ser-content">
                            <h4 class="title"><a href="#" title="">12 Hours Battery Life</a></h4>
                            <p>Extended operation time ensures your robot can work through the busiest
                                shifts without needing a recharge</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="ser-card">
                        <img src="{{ asset('frontend/assets/images/service/service6-2.png') }}" alt="Carrying Capacity">
                        <div class="ser-content v2">
                            <h4 class="title"><a href="#" title="">88 lbs Carrying Capacity</a></h4>
                            <p>Heavy-duty trays can carry multiple plates, drinks, and dishes in a
                                single trip, maximizing efficiency</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="ser-card v3">
                        <img src="{{ asset('frontend/assets/images/service/service6-3.png') }}" alt="Multi-Tray Design">
                        <h3 class="title"><a href="#">Multi-Tray Design</a></h3>
                    </div>
                    <div class="ser-card v4">
                        <div class="ser-content">
                            <img src="{{ asset('frontend/assets/images/icon/phone.svg') }}" alt="Voice Announcements">
                            <h4 class="title"><a href="#" title="">Voice Announcements</a></h4>
                            <p>Friendly voice prompts announce arrival at tables and provide
                                navigation guidance to guests</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="ser-card v5" @if(setting('service_robots_card5_bg'))
                        style="background-image: url('{{ setting('service_robots_card5_bg') }}'); background-size: cover; background-position: center;"
                    @endif>
                        @if(!setting('service_robots_card5_bg'))
                            <img src="{{ asset('frontend/assets/images/service/service6-5.png') }}" alt="Table Navigation">
                        @endif
                        <div class="ser-content v2">
                            <h4 class="title"><a href="#" title="">Smart Table Navigation</a></h4>
                            <p>Pre-programmed routes and real-time obstacle avoidance ensures
                                smooth navigation through busy dining rooms</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Key Features Section -->

    <!-- marquee-sec -->
    <section class="marquee-sec ibt-section-gap">
        <h2 style="display:none;">Marquee Section</h2>
        <div class="marquee">
            <div class="marquee-inner">
                <span>/ Let Servers Focus on Guests While Robots Handle the Running.</span>
                <span>/ Let Servers Focus on Guests While Robots Handle the Running.</span>
            </div>
        </div>
    </section>
    <!-- End marquee-sec -->

    <!-- Use Cases Section -->
    <section class="feature-sec10 ibt-section-gapBottom">
        <div class="container">
            <div class="sec-title">
                <span class="sub-title">Applications</span>
                <h2 class="title animated-heading">Where Service Robots Excel
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('service_robots_app_icon_1') ?: asset('frontend/assets/images/feature/feature1.svg') }}"
                            alt="Restaurants">
                        <h4 class="title">Restaurants</h4>
                        <p>Full-service and casual dining restaurants use our robots to run food
                            from kitchen to table and bus dirty dishes back.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('service_robots_app_icon_2') ?: asset('frontend/assets/images/feature/feature2.svg') }}"
                            alt="Casinos">
                        <h4 class="title">Casino Restaurants</h4>
                        <p>High-volume casino dining operations rely on robot servers to maintain
                            speed and consistency during peak hours.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('service_robots_app_icon_3') ?: asset('frontend/assets/images/feature/feature3.svg') }}"
                            alt="Senior Living">
                        <h4 class="title">Senior Living</h4>
                        <p>Assisted living cafeterias use service robots to deliver meals to
                            residents, reducing staff strain and wait times.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('service_robots_app_icon_4') ?: asset('frontend/assets/images/feature/feature4.svg') }}"
                            alt="Universities">
                        <h4 class="title">University Dining</h4>
                        <p>Campus dining halls deploy serving robots to manage high student
                            traffic and deliver orders efficiently.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('service_robots_app_icon_5') ?: asset('frontend/assets/images/feature/feature5.svg') }}"
                            alt="Buffets">
                        <h4 class="title">Buffet Service</h4>
                        <p>Robots assist in clearing used plates from buffet tables, keeping
                            stations clean and ready for guests.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('service_robots_app_icon_6') ?: asset('frontend/assets/images/feature/feature6.svg') }}"
                            alt="Corporate Cafeterias">
                        <h4 class="title">Corporate Cafeterias</h4>
                        <p>Office building cafeterias use service robots to speed up lunch
                            service and reduce employee wait times.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('service_robots_app_icon_7') ?: asset('frontend/assets/images/feature/feature7.svg') }}"
                            alt="Stadiums">
                        <h4 class="title">Stadium Concessions</h4>
                        <p>Sports venues employ serving robots to deliver orders to premium
                            seating areas and suites.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ setting('service_robots_app_icon_8') ?: asset('frontend/assets/images/feature/feature8.svg') }}"
                            alt="Convention Centers">
                        <h4 class="title">Convention Centers</h4>
                        <p>Large event spaces use robots for catering delivery during
                            conferences and banquets.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Use Cases Section -->

    <!-- Benefits Section -->
    <section class="service-sec22">
        <div class="container2">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="ser-card22">
                        <div class="ser-content22">
                            <img src="{{ asset('frontend/assets/images/layers/corss2.png') }}" alt="Benefits" class="cross">
                            <h4 class="title">Key Benefits</h4>
                            <p>Spectrum Robotics service robots deliver measurable ROI
                                and operational improvements:
                            </p>
                            <ul style="list-style: none; padding-left: 0; margin: 0; color: #ffffff;">
                                <li style="margin-bottom: 10px; color: #ffffff;">✓ Reduce server walking time by 60%</li>
                                <li style="margin-bottom: 10px; color: #ffffff;">✓ Increase table turnover rates</li>
                                <li style="margin-bottom: 10px; color: #ffffff;">✓ Address labor shortage challenges</li>
                                <li style="margin-bottom: 10px; color: #ffffff;">✓ Improve order accuracy</li>
                                <li style="margin-bottom: 10px; color: #ffffff;">✓ Create memorable guest experiences</li>
                                <li style="margin-bottom: 10px; color: #ffffff;">✓ Reduce employee fatigue and injury</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="ser-card22 v2">
                        <img src="{{ asset('frontend/assets/images/event/ser22-2.png') }}" alt="Service Robots in Action">
                        <div class="inner-content2">
                            <h4 class="profection">Ready to assist in delivering food,
                                bussing tables, and enhancing guest experiences
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Benefits Section -->

    <!-- Other Industries Section -->
    <section class="neural-playground7 ibt-section-gap">
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
                            from Spectrum Robotics
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
    <!-- End Other Industries Section -->

    <style>
        /* Product Cards for Industry Pages */
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