@extends('layouts.frontend')

@section('title', 'Contact || Aiero AI Agency & Technology HTML Template')

@section('content')
    <!-- page-banner9 -->
    <section class="page-banner9">
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Contacts</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Contacts /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li>Contacts</li>
        </ul>
    </section>
    <!-- End page-banner9 -->

    <div class="main-sec">
        @include('partials.contact')
    </div>

    <!-- googel-map -->
    <section class="googel-map">
        <h2>googel map</h2>
        <div class="container2">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019112345678!2d-122.41941568468176!3d37.774929279759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808a1234567%3A0xabcdef1234567890!2sSan+Francisco%2C+CA!5e0!3m2!1sen!2sus!4v1695901234567!5m2!1sen!2sus"
                height="500" style="border:0; border-radius: 25px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>
    <!-- End googel-map -->
@endsection