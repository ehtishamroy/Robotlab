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
                        <h4 class="title">CC1 Pro & DUST-E Series</h4>
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
                        <img src="{{ asset('frontend/assets/images/feature/feature1.svg') }}" alt="Floor Washing">
                        <h4 class="title">Floor Washing</h4>
                        <p>5 hours of continuous floor washing with powerful scrubbing action.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature2.svg') }}" alt="Sweep & Vacuum">
                        <h4 class="title">Sweep, Suction & Push</h4>
                        <p>5 hours of sweeping and vacuuming for comprehensive floor care.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature3.svg') }}" alt="Carpet Vacuuming">
                        <h4 class="title">Carpet Vacuuming</h4>
                        <p>4 hours of powerful carpet cleaning and debris removal.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature4.svg') }}" alt="UV Disinfection">
                        <h4 class="title">UV Disinfection</h4>
                        <p>UV-C light disinfection for enhanced hygiene in healthcare environments.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature5.svg') }}" alt="Coverage">
                        <h4 class="title">8,600 sq. ft./hour</h4>
                        <p>High-speed coverage for large commercial spaces.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature6.svg') }}" alt="Silent Operation">
                        <h4 class="title">Silent Dust Push</h4>
                        <p>9 hours of silent operation for occupied buildings.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature7.svg') }}" alt="Autonomous">
                        <h4 class="title">Fully Autonomous</h4>
                        <p>Operates during low-traffic hours without human supervision.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature8.svg') }}" alt="AI Perception">
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