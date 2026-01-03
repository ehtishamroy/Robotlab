@extends('layouts.frontend')

@section('title', 'About Spectrum Robotics || Enterprise Robotic Solutions')

@push('styles')
    <style>
        a.video-popup {
            display: none !important;
        }
    </style>
@endpush

@section('content')
    <!-- page-banner -->
    <section class="page-banner11">
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Spectrum</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ About Spectrum Robotics /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li>About Us</li>
        </ul>
    </section>
    <!-- End page-banner -->

    <!-- about-us-section -->
    <section class="about-us-sec9 ibt-section-gap">
        <div class="container">
            <div class="title-area">
                <div class="sec-title">
                    <span class="sub-title">About Us</span>
                    <h2 class="title animated-heading">The Journey Begins with Spectrum Robotics</h2>
                </div>
                <div class="anim-img2">
                    <img src="{{ asset('frontend/assets/images/event/cross1-1.png') }}" alt="Spectrum Robotics">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content9">
                        <img src="{{ asset('frontend/assets/images/event/about1-1.png') }}" alt="Spectrum Robotics"
                            style="border-radius: 20px; width: 100%;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-info9">
                        <p>Spectrum Robotics delivers enterprise robotic solutions to hospitality and commercial
                            service markets with installations in restaurants, airports, casinos, universities,
                            hotels and resorts, senior living homes, factories, retail centers, and more.
                        </p>
                        <p>We are navigating a new era with uniquely positioned robotic solutions that complement
                            environments where meeting customer needs efficiently is more important than ever.
                            We help businesses generate revenue and save time by providing complete automation solutions.
                        </p>
                        <p class="mb-0">Our nationwide team is professional, ethical, and results-oriented with
                            familiarity in varied vertical markets to create exceptional customer experiences
                            before, during, and after every purchase.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about-us-section -->

    <!-- marquee-sec -->
    <section class="marquee-sec ibt-section-gapBottom">
        <h2 style="display:none;">Marquee Section</h2>
        <div class="marquee">
            <div class="marquee-inner">
                <span>/ Navigating A New Era with Intelligent Robotic Solutions.</span>
                <span>/ Navigating A New Era with Intelligent Robotic Solutions.</span>
            </div>
        </div>
    </section>
    <!-- End marquee-sec -->

    <!-- Why Spectrum Robotics Section -->
    <section class="service-sec22">
        <div class="container2">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="ser-card22">
                        <div class="ser-content22">
                            <img src="{{ asset('frontend/assets/images/layers/corss2.png') }}" alt="Spectrum Robotics"
                                class="cross">
                            <h4 class="title">Why Spectrum Robotics?</h4>
                            <p>Our products have been successfully launched worldwide with proven results
                                to improve the efficiency of production with partnerships in 120+ countries
                                and a rapidly growing clientele of 1000+ US customers.
                            </p>
                            <p><strong>Key Benefits:</strong></p>
                            <ul style="list-style: none; padding-left: 0; margin: 0; color: #ffffff !important;">
                                <li style="margin-bottom: 10px; color: #ffffff !important;">✓ Labor Shortage Solutions</li>
                                <li style="margin-bottom: 10px; color: #ffffff !important;">✓ Reduced Heavy Work for
                                    Employees</li>
                                <li style="margin-bottom: 10px; color: #ffffff !important;">✓ Flexible Workforce Allocation
                                </li>
                                <li style="margin-bottom: 10px; color: #ffffff !important;">✓ Attention-Grabbing Technology
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="ser-card22 v2">
                        <img src="{{ asset('frontend/assets/images/event/ser22-2.png') }}"
                            alt="Spectrum Robotics Solutions">
                        <div class="inner-content2">
                            <h4 class="profection">We deliver complete automation solutions using
                                cutting-edge robotics and AI technology
                            </h4>

                        </div>
                        <div class="ser-video-box">
                            <a href="#" class="video-popup" data-video="https://www.youtube.com/embed/aircAruvnKk">
                                <i class="fa fa-play"></i> Watch Video
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Spectrum Robotics Section -->

    <!-- Industries We Serve -->
    <section class="neural-playground7 ibt-section-gap" style="display:none !important;">
        <div class="container3">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="neural-img">
                        <img src="{{ asset('frontend/assets/images/layers/layer.png') }}" alt="Spectrum Robotics">
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <div class="neural-content">
                        <h2 class="gradient-title">Industries We Serve: <span>Restaurants | Hospitals | Hotels |
                                Senior Living | Airports | Universities | Government | Retail | Factories</span>
                        </h2>
                        <!-- <div class="swiper brand">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="#" title="">
                                                                <div
                                                                    style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                                                    <span style="color: #fff; font-weight: 600;">Restaurants</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="#" title="">
                                                                <div
                                                                    style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                                                    <span style="color: #fff; font-weight: 600;">Hospitals</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="#" title="">
                                                                <div
                                                                    style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                                                    <span style="color: #fff; font-weight: 600;">Hotels</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="#" title="">
                                                                <div
                                                                    style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                                                    <span style="color: #fff; font-weight: 600;">Senior Living</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="#" title="">
                                                                <div
                                                                    style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                                                    <span style="color: #fff; font-weight: 600;">Airports</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="#" title="">
                                                                <div
                                                                    style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                                                    <span style="color: #fff; font-weight: 600;">Universities</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="#" title="">
                                                                <div
                                                                    style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                                                    <span style="color: #fff; font-weight: 600;">Retail</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="#" title="">
                                                                <div
                                                                    style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                                                    <span style="color: #fff; font-weight: 600;">Factories</span>
                                                                </div>
                                                            </a>
                                                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- End Industries We Serve -->

    <!-- Our Team Section -->

    <!-- End Our Team Section -->
@endsection

@section('contact_section')
    @include('partials.contact')
@endsection