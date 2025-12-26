@extends('layouts.frontend')

@section('title', 'Hospitality Robots || Spectrum Robotics - Hotel & Resort Automation')

@section('content')
    <!-- page-banner -->
    <section class="page-banner11">
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
                        <h4 class="title">Richie Hotel Delivery Robot</h4>
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
                        <img src="{{ asset('frontend/assets/images/feature/feature1.svg') }}" alt="Elevator Integration">
                        <h4 class="title">Elevator Integration</h4>
                        <p>Automatically calls and rides elevators to navigate between floors autonomously.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature2.svg') }}" alt="Secure Compartments">
                        <h4 class="title">Secure Compartments</h4>
                        <p>Locked compartments ensure guest items are delivered safely and privately.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature3.svg') }}" alt="Guest Notifications">
                        <h4 class="title">Guest Notifications</h4>
                        <p>Automated phone calls and app notifications alert guests when delivery arrives.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature4.svg') }}" alt="24/7 Operation">
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
                                            <a href="{{ route('industries.cleaning') }}">
                                                <div
                                                    style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                                    <span style="color: #fff; font-weight: 600;">Cleaning Robots</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="{{ route('industries.delivery') }}">
                                                <div
                                                    style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                                    <span style="color: #fff; font-weight: 600;">Delivery Robots</span>
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