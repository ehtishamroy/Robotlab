@extends('layouts.frontend')

@section('title', 'Terms of Use || ' . setting('site_name', 'Spectrum Robotics'))

@section('content')
    <!-- page-banner -->
    <section class="page-banner11">
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Terms</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Terms of Use /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li>Terms of Use</li>
        </ul>
    </section>
    <!-- End page-banner -->

    <!-- Terms Content Section -->
    <section class="ibt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="terms-content">
                        {!! setting('terms_content', '<h2>Terms of Use</h2>
                            <p>Welcome to our website. By accessing and using this website, you accept and agree to be bound by the terms and conditions of this agreement.</p>

                            <h3>1. Use of Website</h3>
                            <p>You may use this website for lawful purposes only. You must not use this website in any way that causes, or may cause, damage to the website or impairment of the availability or accessibility of the website.</p>

                            <h3>2. Intellectual Property</h3>
                            <p>All content on this website, including but not limited to text, graphics, logos, images, and software, is the property of our company and is protected by copyright laws.</p>

                            <h3>3. Limitations of Liability</h3>
                            <p>We will not be liable to you for any indirect, special, or consequential loss or damage arising under these terms and conditions or in connection with our website.</p>

                            <h3>4. Changes to Terms</h3>
                            <p>We reserve the right to modify these terms at any time. Your continued use of the website following any changes indicates your acceptance of the new terms.</p>

                            <h3>5. Contact Information</h3>
                            <p>If you have any questions about these Terms of Use, please contact us.</p>') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Terms Content Section -->
@endsection

@section('contact_section')
    @include('partials.contact')
@endsection