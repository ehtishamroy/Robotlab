@extends('layouts.frontend')

@section('title', 'Service Robots || Spectrum Robotics - Food & Beverage Automation')

@section('content')
    <!-- page-banner -->
    <section class="page-banner11">
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
                        <h4 class="title">Matradee Serving Robots</h4>
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
                    <div class="ser-card">
                        <img src="{{ asset('frontend/assets/images/service/service6-1.png') }}" alt="12 Hour Battery">
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
                    <div class="ser-card v5">
                        <img src="{{ asset('frontend/assets/images/service/service6-5.png') }}" alt="Table Navigation">
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
                        <img src="{{ asset('frontend/assets/images/feature/feature1.svg') }}" alt="Restaurants">
                        <h4 class="title">Restaurants</h4>
                        <p>Full-service and casual dining restaurants use our robots to run food
                            from kitchen to table and bus dirty dishes back.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature2.svg') }}" alt="Casinos">
                        <h4 class="title">Casino Restaurants</h4>
                        <p>High-volume casino dining operations rely on robot servers to maintain
                            speed and consistency during peak hours.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature3.svg') }}" alt="Senior Living">
                        <h4 class="title">Senior Living</h4>
                        <p>Assisted living cafeterias use service robots to deliver meals to
                            residents, reducing staff strain and wait times.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature4.svg') }}" alt="Universities">
                        <h4 class="title">University Dining</h4>
                        <p>Campus dining halls deploy serving robots to manage high student
                            traffic and deliver orders efficiently.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature5.svg') }}" alt="Buffets">
                        <h4 class="title">Buffet Service</h4>
                        <p>Robots assist in clearing used plates from buffet tables, keeping
                            stations clean and ready for guests.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature6.svg') }}" alt="Corporate Cafeterias">
                        <h4 class="title">Corporate Cafeterias</h4>
                        <p>Office building cafeterias use service robots to speed up lunch
                            service and reduce employee wait times.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature7.svg') }}" alt="Stadiums">
                        <h4 class="title">Stadium Concessions</h4>
                        <p>Sports venues employ serving robots to deliver orders to premium
                            seating areas and suites.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card10">
                        <img src="{{ asset('frontend/assets/images/feature/feature8.svg') }}" alt="Convention Centers">
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
                            <ul style="list-style: none; padding-left: 0; margin: 0;">
                                <li style="margin-bottom: 10px;">✓ Reduce server walking time by 60%</li>
                                <li style="margin-bottom: 10px;">✓ Increase table turnover rates</li>
                                <li style="margin-bottom: 10px;">✓ Address labor shortage challenges</li>
                                <li style="margin-bottom: 10px;">✓ Improve order accuracy</li>
                                <li style="margin-bottom: 10px;">✓ Create memorable guest experiences</li>
                                <li style="margin-bottom: 10px;">✓ Reduce employee fatigue and injury</li>
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
                            <div class="ser-counter22">
                                <div class="counter-box22">
                                    <span class="counter-number percent-counter" data-target="88">0</span>
                                    <span class="counter-text">lbs</span>
                                </div>
                                <span class="title">Carrying <br>Capacity</span>
                            </div>
                        </div>
                        <div class="ser-video-box">
                            <a href="#" class="video-popup" data-video="https://www.youtube.com/embed/aircAruvnKk">
                                <i class="fa fa-play"></i> Watch Demo
                            </a>
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
                        <h2 class="gradient-title">Explore Other <span>Robotic Solutions</span>
                            from Spectrum Robotics
                        </h2>
                        <div class="swiper brand">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="{{ route('industries.hospitality') }}" title="">
                                        <div
                                            style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                            <span style="color: #fff; font-weight: 600;">Hospitality Robots</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ route('industries.cleaning') }}" title="">
                                        <div
                                            style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                            <span style="color: #fff; font-weight: 600;">Cleaning Robots</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ route('industries.delivery') }}" title="">
                                        <div
                                            style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                            <span style="color: #fff; font-weight: 600;">Delivery Robots</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ route('services') }}" title="">
                                        <div
                                            style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); padding: 20px 30px; border-radius: 10px; text-align: center;">
                                            <span style="color: #fff; font-weight: 600;">All Technology</span>
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
    <!-- End Other Industries Section -->
@endsection

@section('contact_section')
    <!-- contact-sec -->
    <div class="contact-sec ibt-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="sec-title white">
                            <span class="sub-title">Get Started</span>
                            <h2 class="title animated-heading">Ready to Transform Your Restaurant Service?</h2>
                            <p>Contact our knowledgeable professionals to see how service robots
                                can increase efficiency, reduce labor costs, and elevate your
                                guest experience.
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
                                        <h4 class="title">Schedule Demo</h4>
                                        <a href="https://calendly.com/spectrumrobotics" class="nmbr" target="_blank">Book
                                            Online</a>
                                    </div>
                                    <div class="call-center mb-0">
                                        <h4 class="title">Follow Us</h4>
                                        <ul class="social-icon">
                                            <li><a href="#" target="_blank" title=""><i class="fab fa-facebook-f"></i></a>
                                            </li>
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
                            <h2>Request a Service Robot Demo</h2>
                            <input type="text" id="name" name="name" placeholder="Full name" required>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                            <input type="text" id="company" name="company" placeholder="Restaurant/Company Name">
                            <input type="text" id="location" name="location" placeholder="Location/City">
                            <select id="venue_type" name="venue_type"
                                style="width: 100%; padding: 15px; margin-bottom: 15px; border: 1px solid rgba(255,255,255,0.1); background: rgba(255,255,255,0.05); color: #fff; border-radius: 5px;">
                                <option value="">Select Venue Type</option>
                                <option value="restaurant">Restaurant</option>
                                <option value="casino">Casino Restaurant</option>
                                <option value="senior">Senior Living Facility</option>
                                <option value="university">University Dining</option>
                                <option value="corporate">Corporate Cafeteria</option>
                                <option value="other">Other</option>
                            </select>
                            <textarea id="message" name="message" rows="3" placeholder="Tell us about your operation..."
                                required></textarea>

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