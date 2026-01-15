@extends('layouts.frontend')

@section('title', 'About Spectrum Robotics || Enterprise Robotic Solutions')

@push('styles')
    <style>
        a.video-popup {
            display: none !important;
        }

        /* Fix image container to stay within bounds */
        .about-us-sec9 .about-content9 {
            margin-left: 0;
        }

        .about-us-sec9 .about-content9 img {
            max-width: 100%;
            height: auto;
            border-radius: 20px;
            display: block;
        }
    </style>
@endpush

@section('content')
    <!-- page-banner -->
    <section class="page-banner11">
        @include('partials.banner-dynamic', ['key' => 'about', 'class' => 'page-banner11'])
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">{{ setting('about.banner.background_text', 'Spectrum') }}</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">{{ setting('about.banner.title', '/ About Spectrum Robotics /') }}</h1>
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
                    <span class="sub-title">{{ setting('about.intro.subtitle', 'About Us') }}</span>
                    <h2 class="title animated-heading">
                        {{ setting('about.intro.title', 'The Journey Begins with Spectrum Robotics') }}
                    </h2>
                </div>
                <div class="anim-img2">
                    <img src="{{ asset('frontend/assets/images/event/cross1-1.png') }}" alt="Spectrum Robotics">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content9">
                        <img src="{{ asset(setting('about.intro.image', 'frontend/assets/images/event/about1-1.png')) }}"
                            alt="Spectrum Robotics" style="border-radius: 20px; width: 100%;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-info9">
                        <p>{{ setting('about.intro.paragraph_1', 'Spectrum Robotics delivers enterprise robotic solutions to hospitality and commercial service markets with installations in restaurants, airports, casinos, universities, hotels and resorts, senior living homes, factories, retail centers, and more.') }}
                        </p>
                        <p>{{ setting('about.intro.paragraph_2', 'We are navigating a new era with uniquely positioned robotic solutions that complement environments where meeting customer needs efficiently is more important than ever. We help businesses generate revenue and save time by providing complete automation solutions.') }}
                        </p>
                        <p class="mb-0">
                            {{ setting('about.intro.paragraph_3', 'Our nationwide team is professional, ethical, and results-oriented with familiarity in varied vertical markets to create exceptional customer experiences before, during, and after every purchase.') }}
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
                <span>{{ setting('about.marquee.text', '/ Navigating A New Era with Intelligent Robotic Solutions.') }}</span>
                <span>{{ setting('about.marquee.text', '/ Navigating A New Era with Intelligent Robotic Solutions.') }}</span>
            </div>
        </div>
    </section>
    <!-- End marquee-sec -->

    <!-- Why Spectrum Robotics Section -->
    <section class="why-spectrum-section">
        <div class="container">
            <div class="row align-items-stretch g-4">
                <!-- Left Content Card -->
                <div class="col-lg-5">
                    <div class="why-spectrum-card">
                        <div class="card-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3 class="card-title">{{ setting('about.why_spectrum.title', 'Why Spectrum Robotics?') }}</h3>
                        <p class="card-desc">{{ setting('about.why_spectrum.description', 'Our products have been successfully launched worldwide with proven results to improve the efficiency of production with partnerships in 120+ countries and a rapidly growing clientele of 1000+ US customers.') }}</p>
                        
                        <div class="benefits-list">
                            <h5 class="benefits-title">Key Benefits</h5>
                            <div class="benefit-item">
                                <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                <span class="benefit-text">{{ setting('about.why_spectrum.benefit_1', 'Labor Shortage Solutions') }}</span>
                            </div>
                            <div class="benefit-item">
                                <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                <span class="benefit-text">{{ setting('about.why_spectrum.benefit_2', 'Reduced Heavy Work for Employees') }}</span>
                            </div>
                            <div class="benefit-item">
                                <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                <span class="benefit-text">{{ setting('about.why_spectrum.benefit_3', 'Flexible Workforce Allocation') }}</span>
                            </div>
                            <div class="benefit-item">
                                <span class="benefit-icon"><i class="fas fa-check-circle"></i></span>
                                <span class="benefit-text">{{ setting('about.why_spectrum.benefit_4', 'Attention-Grabbing Technology') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Image Card -->
                <div class="col-lg-7">
                    <div class="why-spectrum-image-card">
                        <img src="{{ asset(setting('about.why_spectrum.image', 'frontend/assets/images/event/ser22-2.png')) }}" 
                             alt="Spectrum Robotics Solutions" class="main-image">
                        <div class="image-overlay">
                            <h4 class="overlay-text">{{ setting('about.why_spectrum.tagline', 'We deliver complete automation solutions using cutting-edge robotics and AI technology') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <style>
        .why-spectrum-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        
        .why-spectrum-card {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            border-radius: 24px;
            padding: 40px;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .why-spectrum-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(68, 142, 145, 0.15) 0%, transparent 70%);
            pointer-events: none;
        }
        
        .why-spectrum-card .card-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #448e91 0%, #2d6a6c 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
        }
        
        .why-spectrum-card .card-icon i {
            font-size: 32px;
            color: #fff;
        }
        
        .why-spectrum-card .card-title {
            font-size: 28px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
            line-height: 1.3;
        }
        
        .why-spectrum-card .card-desc {
            font-size: 15px;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 30px;
        }
        
        .why-spectrum-card .benefits-title {
            font-size: 16px;
            font-weight: 600;
            color: #448e91;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .why-spectrum-card .benefit-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
        }
        
        .why-spectrum-card .benefit-icon {
            color: #448e91;
            font-size: 18px;
            flex-shrink: 0;
        }
        
        .why-spectrum-card .benefit-text {
            color: #fff;
            font-size: 15px;
            font-weight: 500;
        }
        
        .why-spectrum-image-card {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            height: 100%;
            min-height: 500px;
        }
        
        .why-spectrum-image-card .main-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }
        
        .why-spectrum-image-card .image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 40px;
            background: linear-gradient(to top, rgba(26, 26, 46, 0.95) 0%, rgba(26, 26, 46, 0.7) 50%, transparent 100%);
        }
        
        .why-spectrum-image-card .overlay-text {
            font-size: 22px;
            font-weight: 600;
            color: #fff;
            line-height: 1.4;
            margin: 0;
        }
        
        @media (max-width: 991px) {
            .why-spectrum-section {
                padding: 60px 0;
            }
            
            .why-spectrum-card {
                padding: 30px;
            }
            
            .why-spectrum-card .card-title {
                font-size: 24px;
            }
            
            .why-spectrum-image-card {
                min-height: 400px;
            }
            
            .why-spectrum-image-card .overlay-text {
                font-size: 18px;
            }
        }
        
        @media (max-width: 576px) {
            .why-spectrum-card .card-icon {
                width: 56px;
                height: 56px;
            }
            
            .why-spectrum-card .card-icon i {
                font-size: 24px;
            }
            
            .why-spectrum-image-card {
                min-height: 350px;
            }
            
            .why-spectrum-image-card .image-overlay {
                padding: 25px;
            }
        }
    </style>
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