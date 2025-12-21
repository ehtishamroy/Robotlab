@extends('layouts.frontend')

@section('title', 'About Spectrum Robotics || Enterprise Robotic Solutions')

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
                        <h4 class="title">Spectrum Robotics</h4>
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
                            <ul style="list-style: none; padding-left: 0; margin: 0;">
                                <li style="margin-bottom: 10px;">✓ Labor Shortage Solutions</li>
                                <li style="margin-bottom: 10px;">✓ Reduced Heavy Work for Employees</li>
                                <li style="margin-bottom: 10px;">✓ Flexible Workforce Allocation</li>
                                <li style="margin-bottom: 10px;">✓ Attention-Grabbing Technology</li>
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
                            <div class="ser-counter22">
                                <div class="counter-box22">
                                    <span class="counter-number percent-counter" data-target="120">0</span>
                                    <span class="counter-text">+</span>
                                </div>
                                <span class="title">Countries <br>Worldwide</span>
                            </div>
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
                        <h2 class="gradient-title">Industries We Serve: <span>Restaurants | Hospitals | Hotels |
                                Senior Living | Airports | Universities | Government | Retail | Factories</span>
                        </h2>
                        <div class="swiper brand">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Industries We Serve -->

    <!-- Our Team Section -->
    <section class="team-section v2 ibt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="team-info">
                        <div class="sec-title">
                            <span class="sub-title">Our Team</span>
                            <h2 class="title animated-heading">Nationwide Experts Delivering Exceptional
                                Robotic Solutions
                            </h2>
                            <div class="team-counter">
                                <div class="counter-box8">
                                    <span class="counter-text">+</span>
                                    <span class="counter-number percent-counter" data-target="1000">0</span>
                                </div>
                                <span class="title">US Customers Served</span>
                            </div>
                            <a class='ibt-btn ibt-btn-outline' href='{{ route('contact') }}' title>
                                <span>Contact Us</span>
                                <i class="icon-arrow-top"></i>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="team-card v1 mb-0">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/images/team/team1-1.png') }}"
                                            alt="Spectrum Robotics Team">
                                        <span class="sub-title">Leadership</span>
                                        <div class="team-shap"></div>
                                    </div>
                                    <div class="team-content">
                                        <div class="share-box">
                                            <span class="share-icon fa fa-share-alt"></span>
                                            <ul class="social-links">
                                                <li><a href="https://www.linkedin.com/" target="_blank" title=""><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="https://www.twitter.com/" target="_blank" title=""><i
                                                            class="fab fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="name"><a href='#' title>Sales Director</a></h4>
                                        <span class="designation">/ Robotics Expert /</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="team-member">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="team-card">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/images/team/team1-2.png') }}"
                                            alt="Spectrum Robotics Team">
                                        <span class="sub-title">Support</span>
                                        <div class="team-shap"></div>
                                    </div>
                                    <div class="team-content">
                                        <div class="share-box">
                                            <span class="share-icon fa fa-share-alt"></span>
                                            <ul class="social-links">
                                                <li><a href="https://www.linkedin.com/" target="_blank" title=""><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="name"><a href='#' title>Technical Support</a></h4>
                                        <span class="designation">/ Customer Success /</span>
                                    </div>
                                </div>
                                <div class="team-card ">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/images/team/team1-4.png') }}"
                                            alt="Spectrum Robotics Team">
                                        <span class="sub-title">Integration</span>
                                        <div class="team-shap"></div>
                                    </div>
                                    <div class="team-content">
                                        <div class="share-box">
                                            <span class="share-icon fa fa-share-alt"></span>
                                            <ul class="social-links">
                                                <li><a href="https://www.linkedin.com/" target="_blank" title=""><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="name"><a href='#' title>Systems Engineer</a></h4>
                                        <span class="designation">/ Integration Specialist /</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="team-card v2">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/images/team/team1-3.png') }}"
                                            alt="Spectrum Robotics Team">
                                        <span class="sub-title">Solutions</span>
                                        <div class="team-shap"></div>
                                    </div>
                                    <div class="team-content">
                                        <div class="share-box">
                                            <span class="share-icon fa fa-share-alt"></span>
                                            <ul class="social-links">
                                                <li><a href="https://www.linkedin.com/" target="_blank" title=""><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="name"><a href='#' title>Solutions Architect</a></h4>
                                        <span class="designation">/ Robotics Specialist /</span>
                                    </div>
                                </div>
                                <div class="team-card v3 mb-0">
                                    <div class="team-img">
                                        <img src="{{ asset('frontend/assets/images/team/team1-5.png') }}"
                                            alt="Spectrum Robotics Team">
                                        <span class="sub-title">Operations</span>
                                        <div class="team-shap"></div>
                                    </div>
                                    <div class="team-content">
                                        <div class="share-box">
                                            <span class="share-icon fa fa-share-alt"></span>
                                            <ul class="social-links">
                                                <li><a href="https://www.linkedin.com/" target="_blank" title=""><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="name"><a href='#' title>Operations Manager</a></h4>
                                        <span class="designation">/ Logistics Expert /</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team Section -->
@endsection

@section('contact_section')
    <!-- contact-sec -->
    <div class="contact-sec ibt-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="sec-title white">
                            <span class="sub-title">Get In Touch</span>
                            <h2 class="title animated-heading">Ready to Transform Your Business with
                                Intelligent Robotics?</h2>
                            <p>Contact our knowledgeable professionals to tailor customize solutions
                                to increase revenue, lower cost and begin the journey of automating
                                repetitive tasks.
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
                            <input type="text" id="phone" name="phone" placeholder="Phone Number">
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