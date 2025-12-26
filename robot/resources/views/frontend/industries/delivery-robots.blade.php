@extends('layouts.frontend')

@section('title', 'Delivery Robots || Spectrum Robotics - Autonomous Item Delivery')

@section('content')
    <!-- page-banner -->
    <section class="page-banner11">
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Delivery</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Delivery Robots /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li><a href='#'>Industries</a></li>
            <li>/</li>
            <li>Delivery Robots</li>
        </ul>
    </section>
    <!-- End page-banner -->

    <!-- Hero Section -->
    <section class="about-us-sec9 ibt-section-gap">
        <div class="container">
            <div class="title-area">
                <div class="sec-title">
                    <span class="sub-title">Delivery Robots</span>
                    <h2 class="title animated-heading">Autonomous Item & Food Delivery Solutions</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content9">
                        <h4 class="title">Your Journey Begins with Spectrum Robotics</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-info9">
                        <p>Spectrum Robotics provides robotic solutions to restaurants, hotels, casinos,
                            senior living homes, factories and retail centers.
                        </p>
                        <p>We're engineering smarter solutions, allowing staff to excel by automating
                            repetitive delivery tasks and elevating customer experiences. Our robots
                            handle the running so your team can focus on what matters.
                        </p>
                        <p class="mb-0">Contact our knowledgeable professionals to tailor customize
                            solutions to increase revenue, lower cost and begin the journey of
                            automating repetitive tasks.
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
                <h2 class="title animated-heading">Delivery Robot Features</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature1.svg') }}" alt="Food Delivery">
                        <h4 class="title">Food Delivery</h4>
                        <p>Multi-tray robots deliver meals from kitchen to dining areas with precision.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature2.svg') }}" alt="Room Service">
                        <h4 class="title">Room Service</h4>
                        <p>Elevator-riding robots deliver to guest rooms in hotels and resorts.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature3.svg') }}" alt="Medicine Delivery">
                        <h4 class="title">Medicine Delivery</h4>
                        <p>Secure compartments transport medications in healthcare facilities.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature4.svg') }}" alt="Retail Fulfillment">
                        <h4 class="title">Retail Fulfillment</h4>
                        <p>Move inventory and deliver orders within retail and warehouse spaces.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature5.svg') }}" alt="12 Hour Battery">
                        <h4 class="title">12 Hour Battery</h4>
                        <p>Extended operation time for full shift coverage without recharging.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature6.svg') }}" alt="Heavy Payload">
                        <h4 class="title">88 lbs Capacity</h4>
                        <p>Carry heavy loads with multiple trays in a single delivery trip.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature7.svg') }}" alt="Obstacle Avoidance">
                        <h4 class="title">Smart Navigation</h4>
                        <p>Real-time obstacle detection and path planning for safe operation.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature8.svg') }}" alt="Multi-Floor">
                        <h4 class="title">Multi-Floor Delivery</h4>
                        <p>Elevator integration for seamless delivery across building floors.</p>
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
                        <h2 class="gradient-title">Explore Other <span>Robotic Solutions</span></h2>
                        <!-- <div class="swiper brand">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="{{ route('industries.service') }}">
                                                <div
                                                    style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                                    <span style="color: #fff; font-weight: 600;">Service Robots</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="{{ route('industries.hospitality') }}">
                                                <div
                                                    style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                                    <span style="color: #fff; font-weight: 600;">Hospitality Robots</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="{{ route('industries.cleaning') }}">
                                                <div
                                                    style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                                    <span style="color: #fff; font-weight: 600;">Cleaning Robots</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('contact_section')
    @include('partials.contact')
@endsection