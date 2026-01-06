@extends('layouts.frontend')

@section('title', 'Privacy Policy || ' . setting('site_name', 'Spectrum Robotics'))

@section('content')
    <!-- page-banner -->
    <section class="page-banner11">
        @include('partials.banner-dynamic', ['key' => 'privacy', 'class' => 'page-banner11'])
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Privacy</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Privacy Policy /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li>Privacy Policy</li>
        </ul>
    </section>
    <!-- End page-banner -->

    <!-- Privacy Content Section -->
    <section class="ibt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="privacy-content">
                        {!! setting('privacy_content', '<h2>Privacy Policy</h2>
                                <p>Your privacy is important to us. This privacy policy explains how we collect, use, and protect your personal information.</p>

                                <h3>1. Information We Collect</h3>
                                <p>We may collect personal information such as your name, email address, phone number, and other details when you contact us or use our services.</p>

                                <h3>2. How We Use Your Information</h3>
                                <p>We use your personal information to provide and improve our services, communicate with you, and comply with legal obligations.</p>

                                <h3>3. Data Protection</h3>
                                <p>We implement appropriate security measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction.</p>

                                <h3>4. Cookies</h3>
                                <p>Our website may use cookies to enhance your browsing experience. You can choose to disable cookies in your browser settings.</p>

                                <h3>5. Third-Party Services</h3>
                                <p>We may share your information with trusted third-party service providers who assist us in operating our website and conducting our business.</p>

                                <h3>6. Your Rights</h3>
                                <p>You have the right to access, correct, or delete your personal information. Contact us if you wish to exercise these rights.</p>

                                <h3>7. Contact Us</h3>
                                <p>If you have any questions about this Privacy Policy, please contact us.</p>') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Privacy Content Section -->
@endsection

@section('contact_section')
    @include('partials.contact')
@endsection