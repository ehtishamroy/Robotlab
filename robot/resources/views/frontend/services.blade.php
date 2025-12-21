@extends('layouts.frontend')

@section('title', 'Our Technology || Spectrum Robotics - AI-Powered Robotic Solutions')

@section('content')
    <!-- page-banner -->
    <section class="page-banner3">
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Technology</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Our Technology /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li>Technology</li>
        </ul>
    </section>
    <!-- End page-banner -->

    <!-- Core Technologies Section -->
    <section class="service-sec6 ibt-section-gap">
        <div class="container2">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="ser-card">
                        <img src="{{ asset('frontend/assets/images/service/service6-1.png') }}"
                            alt="AI Navigation Technology">
                        <div class="ser-content">
                            <h4 class="title"><a href="#" title="">AI Navigation System</a></h4>
                            <p>Advanced SLAM technology with multi-sensor fusion for precise autonomous navigation
                                in complex environments</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="ser-card">
                        <img src="{{ asset('frontend/assets/images/service/service6-2.png') }}" alt="Obstacle Detection">
                        <div class="ser-content v2">
                            <h4 class="title"><a href="#" title="">Obstacle Detection</a></h4>
                            <p>AI-powered fusion perception system that accurately identifies both dynamic and
                                static obstacles in real-time</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="ser-card v3">
                        <img src="{{ asset('frontend/assets/images/service/service6-3.png') }}" alt="Cloud Integration">
                        <h3 class="title"><a href="#">Cloud Management Platform</a></h3>
                    </div>
                    <div class="ser-card v4">
                        <div class="ser-content">
                            <img src="{{ asset('frontend/assets/images/icon/phone.svg') }}" alt="24/7 Support">
                            <h4 class="title"><a href="#" title="">24/7 Remote Monitoring</a></h4>
                            <p>Continuous fleet monitoring with real-time diagnostics and remote support
                                capabilities</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="ser-card v5">
                        <img src="{{ asset('frontend/assets/images/service/service6-5.png') }}" alt="Elevator Integration">
                        <div class="ser-content v2">
                            <h4 class="title"><a href="#" title="">Elevator Integration</a></h4>
                            <p>Seamless multi-floor operation with automatic elevator calling and
                                floor navigation technology</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Core Technologies Section -->

    <!-- marquee-sec -->
    <section class="marquee-sec">
        <h2 style="display:none;">Marquee Section</h2>
        <div class="marquee">
            <div class="marquee-inner">
                <span>/ Cutting-Edge Robotics Powering the Future of Automation.</span>
                <span>/ Cutting-Edge Robotics Powering the Future of Automation.</span>
            </div>
        </div>
    </section>
    <!-- End marquee-sec -->

    <!-- Robot Categories Section -->
    <section class="feature-sec10 ibt-section-gap">
        <div class="container">
            <div class="sec-title">
                <span class="sub-title">Robot Solutions</span>
                <h2 class="title animated-heading">Intelligent Robots for Every Industry Need
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature1.svg') }}" alt="Delivery Robots">
                        <h4 class="title">Delivery Robots</h4>
                        <p>Food and beverage serving robots with 12-hour battery life and
                            88 lbs carrying capacity. Perfect for restaurants and hospitality.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature2.svg') }}" alt="Cleaning Robots">
                        <h4 class="title">Cleaning Robots</h4>
                        <p>Floor washing, sweeping, vacuuming, and UV-disinfecting robots
                            that clean up to 8,600 sq. ft. per hour autonomously.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature3.svg') }}" alt="Hotel Delivery Robots">
                        <h4 class="title">Hotel Delivery Robots</h4>
                        <p>Elevator-riding robots that deliver food, drinks, medicine, and
                            amenities to guest rooms with security and efficiency.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature4.svg') }}" alt="Worker Robots">
                        <h4 class="title">Worker Robots</h4>
                        <p>Robotic arms for Quick Service Restaurants that produce 24/7/365,
                            including deep frying and coffee preparation.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature5.svg') }}" alt="SLAM Navigation">
                        <h4 class="title">SLAM Navigation</h4>
                        <p>Simultaneous Localization and Mapping technology enables robots
                            to navigate complex environments without infrastructure changes.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature6.svg') }}" alt="Computer Vision">
                        <h4 class="title">Computer Vision</h4>
                        <p>Advanced visual perception systems that recognize objects, people,
                            and obstacles for safe operation in dynamic environments.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature7.svg') }}" alt="Fleet Management">
                        <h4 class="title">Fleet Management</h4>
                        <p>Centralized control platform for managing multiple robots,
                            scheduling tasks, and monitoring performance analytics.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature8.svg') }}" alt="Voice Interaction">
                        <h4 class="title">Voice & Touch Interaction</h4>
                        <p>Natural language processing and intuitive touchscreen interfaces
                            for seamless human-robot communication.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Robot Categories Section -->

    <!-- Specifications & Stats Section -->
    <section class="testimonials-sec v2">
        <div class="container2">
            <div class="row">
                <div class="col-lg-7">
                    <div class="testi-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/images/icon/comas.svg') }}" alt="Spectrum Robotics">
                                <p>"The Spectrum Robotics delivery robots have transformed our restaurant
                                    operations. Our servers now focus on guest experience while the robots
                                    handle food running and bussing. The ROI was evident within months."
                                </p>
                                <span>- Restaurant Operations Manager, Major Casino Resort</span>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/images/icon/comas.svg') }}" alt="Spectrum Robotics">
                                <p>"We deployed Spectrum's cleaning robots in our airport and they now
                                    operate during low-traffic hours completely autonomously. The consistency
                                    of clean floors has improved guest satisfaction scores significantly."
                                </p>
                                <span>- Facilities Director, Regional Airport</span>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/images/icon/comas.svg') }}" alt="Spectrum Robotics">
                                <p>"The hotel delivery robot has been a hit with our guests. It rides the
                                    elevator, navigates to guest rooms, and delivers items securely. Our
                                    front desk staff can now focus on more critical guest needs."
                                </p>
                                <span>- General Manager, Luxury Hotel</span>
                            </div>
                        </div>
                        <div class="slider-btn">
                            <!-- Navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="testimonial-content">
                        <img src="{{ asset('frontend/assets/images/layers/mask.png') }}" alt="Spectrum Robotics Technology">
                        <div class="title-area2">
                            <div class="sec-title white">
                                <span class="sub-title">Performance</span>
                                <h2 class="title animated-heading">Proven Results Across Industries Nationwide</h2>
                            </div>
                            <div class="testi-count">
                                <h4>
                                    <span class="counter-number" data-target="1000">0</span>
                                    <span class="counter-text">+</span>
                                </h4>
                                <span>US Customers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Specifications & Stats Section -->

    <!-- Technical Specifications -->
    <section class="pricing-sec3 ibt-section-gap">
        <div class="container">
            <div class="sec-title">
                <span class="sub-title">Specifications</span>
                <h2 class="title animated-heading">Robot Performance Metrics
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="price-content3">
                        <div class="price-card3">
                            <div class="price-heade3">
                                <h4 class="title">Delivery Robots</h4>
                                <span>Food & Beverage Service</span>
                            </div>
                            <ul class="price-item2">
                                <li>12 Hours Battery Life</li>
                                <li>88 lbs Carrying Capacity</li>
                                <li>Multi-tray Configuration</li>
                                <li>Voice Announcements</li>
                            </ul>
                            <div class="price-item-price3">
                                <h4 class="price">24/7<span> Ready</span></h4>
                                <a href="{{ route('contact') }}" title="" class="ibt-btn ibt-btn-outline">
                                    <span>Request Demo</span>
                                    <i class="icon-arrow-top"></i>
                                </a>
                            </div>
                        </div>
                        <div class="price-img3">
                            <img src="{{ asset('frontend/assets/images/layers/gradi.png') }}" alt="Delivery Robot Specs">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="price-content3">
                        <div class="price-card3 v2">
                            <span class="Popular">Most Popular</span>
                            <div class="price-heade3">
                                <h4 class="title">Cleaning Robots</h4>
                                <span>Autonomous Floor Care</span>
                            </div>
                            <ul class="price-item2">
                                <li>8,600 sq. ft./hour Coverage</li>
                                <li>5+ Hours Operation Time</li>
                                <li>Vacuum, Mop, UV-Disinfect</li>
                                <li>Low-Traffic Hour Operation</li>
                            </ul>
                            <div class="price-item-price3">
                                <h4 class="price">Autonomous<span> 24/7</span></h4>
                                <a href="{{ route('contact') }}" class="ibt-btn ibt-btn-dark">
                                    <span>Request Demo</span>
                                    <i class="icon-arrow-top"></i>
                                </a>
                            </div>
                        </div>
                        <div class="price-img3">
                            <img src="{{ asset('frontend/assets/images/layers/gradi2.png') }}" alt="Cleaning Robot Specs">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="price-content3">
                        <div class="price-card3 v3">
                            <div class="price-heade3">
                                <h4 class="title">Hotel Robots</h4>
                                <span>Multi-Floor Delivery</span>
                            </div>
                            <ul class="price-item2">
                                <li>Elevator Integration</li>
                                <li>Secure Compartments</li>
                                <li>Guest Room Navigation</li>
                                <li>Phone/App Notifications</li>
                            </ul>
                            <div class="price-item-price3">
                                <h4 class="price">Multi<span>-Floor</span></h4>
                                <a href="{{ route('contact') }}" title="" class="ibt-btn ibt-btn-outline">
                                    <span>Request Demo</span>
                                    <i class="icon-arrow-top"></i>
                                </a>
                            </div>
                        </div>
                        <div class="price-img3">
                            <img src="{{ asset('frontend/assets/images/layers/gradi3.png') }}" alt="Hotel Robot Specs">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Technical Specifications -->

    <!-- Integration Partners -->
    <section class="neural-playground7 ibt-section-gapBottom">
        <div class="container3">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="neural-img">
                        <img src="{{ asset('frontend/assets/images/layers/layer.png') }}" alt="Spectrum Robotics">
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="neural-content">
                        <h2 class="gradient-title">Powered by <span>World-Class Robotics Technology</span> -
                            Backed by Spectrum Robotics expertise and nationwide support.
                        </h2>
                        <div class="swiper brand">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#" title="">
                                        <div
                                            style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                            <span style="color: #fff; font-weight: 600;">SLAM Tech</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" title="">
                                        <div
                                            style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                            <span style="color: #fff; font-weight: 600;">LiDAR Sensors</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" title="">
                                        <div
                                            style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                            <span style="color: #fff; font-weight: 600;">AI Vision</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" title="">
                                        <div
                                            style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                            <span style="color: #fff; font-weight: 600;">Cloud Platform</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" title="">
                                        <div
                                            style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                            <span style="color: #fff; font-weight: 600;">Voice AI</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" title="">
                                        <div
                                            style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                            <span style="color: #fff; font-weight: 600;">IoT Integration</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Integration Partners -->
@endsection

@section('contact_section')
    <!-- contact-sec -->
    <div class="contact-sec ibt-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="sec-title white">
                            <span class="sub-title">Schedule a Demo</span>
                            <h2 class="title animated-heading">Experience Our Technology in Action</h2>
                            <p>Contact our knowledgeable professionals to see how our robots can
                                transform your operations. We'll customize solutions to increase
                                revenue, lower costs, and automate repetitive tasks.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="contact-info">
                                    <div class="call-center">
                                        <h4 class="title">Sales & Support</h4>
                                        <a href="tel:+16308099698" class="nmbr">(630) 809-9698</a>
                                        <a href="https://wa.me/16308099698" class="nmbr">WhatsApp</a>
                                    </div>
                                    <div class="call-center mb-0">
                                        <h4 class="title">Email</h4>
                                        <a href="mailto:info@spectrumrobotics.ai" class="gmail">info@spectrumrobotics.ai</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="contact-info">
                                    <div class="call-center">
                                        <h4 class="title">Headquarters</h4>
                                        <p>United States</p>
                                    </div>
                                    <div class="call-center mb-0">
                                        <h4 class="title">Follow Us</h4>
                                        <ul class="social-icon">
                                            <li><a href="#" target="_blank" title=""><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a href="#" target="_blank" title=""><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank" title=""><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li><a href="#" target="_blank" title=""><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form action="#" method="post" class="custom-form">
                            <h2>Request a Demo</h2>
                            <input type="text" id="name" name="name" placeholder="Full name" required>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                            <input type="text" id="company" name="company" placeholder="Company Name">
                            <select id="robot_type" name="robot_type"
                                style="width: 100%; padding: 15px; margin-bottom: 15px; border: 1px solid rgba(255,255,255,0.1); background: rgba(255,255,255,0.05); color: #fff; border-radius: 5px;">
                                <option value="">Select Robot Type of Interest</option>
                                <option value="delivery">Delivery Robots</option>
                                <option value="cleaning">Cleaning Robots</option>
                                <option value="hotel">Hotel Delivery Robots</option>
                                <option value="worker">Worker Robots (Robotic Arms)</option>
                                <option value="multiple">Multiple Robot Types</option>
                            </select>
                            <textarea id="message" name="message" rows="4"
                                placeholder="Tell us about your automation needs..." required></textarea>

                            <button type="submit" class="ibt-btn ibt-btn-outline">
                                <span>Request Demo</span>
                                <i class="icon-arrow-top"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End contact-sec -->
@endsection