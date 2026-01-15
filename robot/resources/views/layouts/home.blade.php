@php
    // Helper to normalize image URLs - extracts path and regenerates with correct domain
    $normalizeImageUrl = function ($url, $default) {
        if (!$url)
            return asset($default);
        if (Str::startsWith($url, 'http')) {
            // Extract just the path from the full URL (e.g., /storage/2025/12/20/file.png)
            $path = parse_url($url, PHP_URL_PATH);
            return $path ? url($path) : asset($default);
        }
        return asset($url);
    };

    $favicon_url = $normalizeImageUrl(setting('site_favicon'), 'frontend/assets/images/favicon.ico');
    $logo_url = $normalizeImageUrl(setting('site_logo'), 'frontend/assets/images/logo2.svg');
    $logo_width = setting('logo_width', '150');
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', setting('meta_title', 'Spectrum Robotics'))
    </title>
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keywords" content="{{ setting('meta_keywords') }}">
    {!! setting('google_analytics') !!}

    <!-- Preconnect for faster font loading (PUT THIS FIRST!) -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ $favicon_url }}">

    <!-- Google Fonts (deferred) -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&amp;display=swap" rel="stylesheet"
        media="print" onload="this.media='all'">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet"
        media="print" onload="this.media='all'">


    <!-- Load Font Awesome CSS asynchronously -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.media='all'" />

    <!-- fontello font css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/fontello-enqueue.css') }}" media="print"
        onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/fontello-icons.css') }}" media="print"
        onload="this.media='all'">

    <!-- others css -->
    <!-- Keep these normal - needed for initial page load -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

    <!-- Make these async - only used for specific components -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/swiper-bundle.min.css') }}" media="print"
        onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/swiper-bundle.min.css') }}">
    </noscript>

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/lightgallery-bundle.min.css') }}" media="print"
        onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/lightgallery-bundle.min.css') }}">
    </noscript>

    @stack('styles')
    <style>
        /* Fix for unwanted dropdown arrows */
        .main-menu ul li:not(.menu-has-items):not(.menu-item-has-children)>a::before,
        .side-menu2 ul li:not(.menu-has-items):not(.menu-item-has-children)>a::before,
        .main-menu ul li:not(.menu-has-items):not(.menu-item-has-children)>a::after,
        .side-menu2 ul li:not(.menu-has-items):not(.menu-item-has-children)>a::after {
            display: none !important;
        }

        /* Newsletter Button Default State - White Text & Border */
        .newsletter-subscribe-btn .ibt-btn {
            color: #ffffff !important;
        }

        .newsletter-subscribe-btn .ibt-btn i {
            color: #ffffff !important;
        }

        /* The ::before pseudo-element creates the border */
        .newsletter-subscribe-btn .ibt-btn::before {
            background: #ffffff !important;
        }

        /* Newsletter Button Hover State - Primary Background */
        .newsletter-subscribe-btn .ibt-btn:hover::after,
        .newsletter-subscribe-btn .ibt-btn:hover::before {
            background: var(--color-primary) !important;
            opacity: 1;
        }

        /* Footer about text white */
        .about-widget.footer-widget>p {
            color: #ffffff !important;
        }
    </style>
</head>

<body>
    <div class="wrapper">



        <div class="video-modal">
            <div class="video-modal-content">
                <span class="close-btn">&times;</span>
                <iframe allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
        <!-- search-popup -->
        <div class="search-popup" data-popup="1">
            <div class="search-popup-content">
                <form action="{{ route('search') }}" method="GET">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    <input type="text" name="q" placeholder="Search products and news..." required>
                </form>
                <button type="button" class="close-popup"></button>
            </div>
        </div>

        <!-- Side Menu -->
        <div class="side-menu" id="sideMenu">
            <div class="overlay" id="overlay"></div>
            <a href="javascript:void(0)" class="close-btn" id="closeBtn"><i class="fa fa-close"></i> close</a>
            <div class="menu-content">
                <a class='logo' href='{{ route("home") }}'>
                    <img src="{{ $logo_url }}" alt="logo" style="width: {{ $logo_width }}px; height: auto;">
                </a>
                <div class="sidebar-menu">
                    <h4 class="title">contacts</h4>
                    <p>{!! setting('header_address', 'USA, New York - 1060 <br> Str. First Avenue 1') !!}</p>
                    @if(setting('header_phone_1'))
                        <a href="tel:{{ str_replace(' ', '', setting('header_phone_1')) }}" title=""
                            class="nmbr">{{ setting('header_phone_1') }}</a>
                    @endif
                    @if(setting('header_phone_2'))
                        <a href="tel:{{ str_replace(' ', '', setting('header_phone_2')) }}" title=""
                            class="nmbr">{{ setting('header_phone_2') }}</a>
                    @endif
                    @if(setting('header_email'))
                        <a href="mailto:{{ setting('header_email') }}" class="email">{{ setting('header_email') }}</a>
                    @endif
                    <a href="{{ setting('header_button_link', '#') }}" title=""
                        class="ibt-btn ibt-btn-outline-3 ibt-btn-rounded">
                        <span>{{ setting('header_button_text', 'Book a Meeting') }}</span>
                    </a>
                </div>
                <ul class="social-icon">
                    @if(setting('facebook_link'))
                        <li><a href="{{ setting('facebook_link') }}" title=""><i class="fab fa-facebook-f"></i></a></li>
                    @endif
                    @if(setting('twitter_link'))
                        <li><a href="{{ setting('twitter_link') }}" title=""><i class="fab fa-twitter"></i></a></li>
                    @endif
                    @if(setting('linkedin_link'))
                        <li><a href="{{ setting('linkedin_link') }}" title=""><i class="fab fa-linkedin-in"></i></a></li>
                    @endif
                    @if(setting('youtube_link'))
                        <li><a href="{{ setting('youtube_link') }}" title=""><i class="fab fa-youtube"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>

        <!-- New Mobile Menu -->
        <div data-menu="mobileMenu" class="side-menu2">
            <div class="menu-btns">
                <a href="#" class="popup-search" data-popup="1"><i class="fa fa-search"></i></a>
                <button id="mobileCloseBtn2" class="close-btn"></button>
            </div>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li class="menu-has-items">
                    <a href="#">Solutions</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('industries.service') }}">Service Robots</a></li>
                        <li><a href="{{ route('industries.hospitality') }}">Hospitality Robots</a></li>
                        <li><a href="{{ route('industries.cleaning') }}">Cleaning Robots</a></li>
                        <li><a href="{{ route('industries.delivery') }}">Delivery Robots</a></li>
                    </ul>
                </li>
                {{-- Hidden Technology page
                <li>
                    <a href="#">Technology</a>
                </li>
                --}}
                <li>
                    <a href="{{ route('products') }}">Products</a>
                </li>
                <li>
                    <a href="{{ route('applications') }}">Applications</a>
                </li>
                <li>
                    <a href="{{ route('media') }}">Media</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}">News</a>
                </li>
                <li><a href="{{ route('contact') }}">Contacts</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li><a href="{{ route('careers') }}">Careers</a></li>
            </ul>
            <div class="menu-contact">
                <span>Contacts</span>
                <a href="tel:+13685678954" class="nmbr" title="">+1 800 529 10 37</a>
                <a href="mailto:aiero@mail.co" title="" class="gmail">aiero@mail.co</a>
            </div>
            <div class="menu-links">
                <span>Follow us:</span>
                <ul class="social-icon">
                    <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" title=""><i class="fab fa-youtube"></i></a></li>
                </ul>
                <a href="#" title="" class="ibt-btn ibt-btn-outline-3 ibt-btn-rounded">
                    <span>Book a Meeting</span>
                </a>
            </div>
        </div>
        <!-- Overlay for Mobile Menu -->
        <div class="overlay2"></div>

        <!-- sticky header -->
        <header class="sticky-active">
            <div class="header-menu-area">
                <div class="row gx-20 align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="javascript:void(0)" class="menu-toggle"></a>
                            <a href='{{ route('home') }}'>
                                <img src="{{ $logo_url }}" alt="logo" style="width: {{ $logo_width }}px; height: auto;">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu menu-style1">
                            <ul>
                                <li>
                                    <a class='active' href='{{ route('home') }}'>
                                        <span class="menu-item">Home</span>
                                        <span class="menu-item2">Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ route('about') }}'>
                                        <span class="menu-item">About</span>
                                        <span class="menu-item2">About</span>
                                    </a>
                                </li>
                                <li class="menu-has-items">
                                    <a href="#">
                                        <span class="menu-item">Solutions</span>
                                        <span class="menu-item2">Solutions</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('industries.service') }}">Service Robots</a></li>
                                        <li><a href="{{ route('industries.hospitality') }}">Hospitality Robots</a></li>
                                        <li><a href="{{ route('industries.cleaning') }}">Cleaning Robots</a></li>
                                        <li><a href="{{ route('industries.delivery') }}">Delivery Robots</a></li>
                                    </ul>
                                </li>
                                {{-- Hidden Technology page
                                <li>
                                    <a href='{{ route(' services') }}'>
                                        <span class="menu-item">Technology</span>
                                        <span class="menu-item2">Technology</span>
                                    </a>
                                </li>
                                --}}
                                <li>
                                    <a href='{{ route('products') }}'>
                                        <span class="menu-item">Products</span>
                                        <span class="menu-item2">Products</span>
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ route('applications') }}'>
                                        <span class="menu-item">Applications</span>
                                        <span class="menu-item2">Applications</span>
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ route('media') }}'>
                                        <span class="menu-item">Media</span>
                                        <span class="menu-item2">Media</span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href='{{ route(' blog') }}'>
                                        <span class="menu-item">News</span>
                                        <span class="menu-item2">News</span>
                                    </a>
                                </li> --}}
                                <li>
                                    <a href='{{ route('contact') }}'>
                                        <span class="menu-item">Contacts</span>
                                        <span class="menu-item2">Contacts</span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href='{{ route(' faq') }}'>
                                        <span class="menu-item">FAQ</span>
                                        <span class="menu-item2">FAQ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ route(' careers') }}'>
                                        <span class="menu-item">Careers</span>
                                        <span class="menu-item2">Careers</span>
                                    </a>
                                </li> --}}
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="btn-box">
                            <a href="#" class="popup-search" data-popup="1"><i class="fa fa-search"></i></a>
                            {{-- <a class='ibt-btn ibt-btn-outline-3 ibt-btn-rounded' href='{{ route(' contact') }}'
                                title>
                                <span>Book a Meeting</span>
                            </a> --}}
                        </div>
                    </div>
                </div>
                <button class="hamburger popup-menu" data-menu="mobileMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </header>
        <!-- End sticky header -->

        <!--======== Header ========-->
        <header class="vs-header5">
            <div class="container2 position-relative">
                <div class="header-menu-area5">
                    <div class="row gx-20 align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="javascript:void(0)" class="menu-toggle"></a>
                                <a href='{{ route('home') }}'>
                                    <img src="{{ $logo_url }}" alt="logo"
                                        style="width: {{ $logo_width }}px; height: auto;">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu menu-style1">
                                <ul>
                                    <li>
                                        <a class='active' href='{{ route('home') }}'>
                                            <span class="menu-item">Home</span>
                                            <span class="menu-item2">Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='{{ route('about') }}'>
                                            <span class="menu-item">About</span>
                                            <span class="menu-item2">About</span>
                                        </a>
                                    </li>
                                    <li class="menu-has-items">
                                        <a href="#">
                                            <span class="menu-item">Solutions</span>
                                            <span class="menu-item2">Solutions</span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('industries.service') }}">Service Robots</a></li>
                                            <li><a href="{{ route('industries.hospitality') }}">Hospitality Robots</a>
                                            </li>
                                            <li><a href="{{ route('industries.cleaning') }}">Cleaning Robots</a></li>
                                            <li><a href="{{ route('industries.delivery') }}">Delivery Robots</a></li>
                                        </ul>
                                    </li>
                                    {{-- Hidden Technology page
                                    <li>
                                        <a href='{{ route(' services') }}'>
                                            <span class="menu-item">Technology</span>
                                            <span class="menu-item2">Technology</span>
                                        </a>
                                    </li>
                                    --}}
                                    <li>
                                        <a href='{{ route('products') }}'>
                                            <span class="menu-item">Products</span>
                                            <span class="menu-item2">Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='{{ route('applications') }}'>
                                            <span class="menu-item">Applications</span>
                                            <span class="menu-item2">Applications</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='{{ route('media') }}'>
                                            <span class="menu-item">Media</span>
                                            <span class="menu-item2">Media</span>
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href='{{ route(' blog') }}'>
                                            <span class="menu-item">News</span>
                                            <span class="menu-item2">News</span>
                                        </a>
                                    </li> --}}
                                    <li>
                                        <a href='{{ route('contact') }}'>
                                            <span class="menu-item">Contacts</span>
                                            <span class="menu-item2">Contacts</span>
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href='{{ route(' faq') }}'>
                                            <span class="menu-item">FAQ</span>
                                            <span class="menu-item2">FAQ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='{{ route(' careers') }}'>
                                            <span class="menu-item">Careers</span>
                                            <span class="menu-item2">Careers</span>
                                        </a>
                                    </li> --}}
                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="btn-box">
                                <a href="#" class="popup-search" data-popup="1"><i class="fa fa-search"></i></a>
                                {{-- <a class='ibt-btn ibt-btn-outline-3 ibt-btn-rounded' href='{{ route(' contact') }}'
                                    title>
                                    <span>Book a Meeting</span>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                    <button class="hamburger popup-menu" data-menu="mobileMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </header>
        <!--======== / Header ========-->

        @yield('content')

        <!-- main-sec -->
        <section class="main-sec">
            <!-- footer-style1 -->
            <footer class="footer-style1 ibt-section-gapTop">
                <div class="footer-top">
                    <div class="container">
                        <div class="footer-content">
                            <h2 class="title">
                                {{ setting('footer_top_title', "It's blow your mind! Meet Neural Networks") }}
                            </h2>
                            <a href="#" title="" class="ibt-btn ibt-btn-outline open-demo-popup" data-demo-popup>
                                <span>Get a Quote</span>
                                <i class="icon-arrow-top"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="widget-area ibt-section-gapTop">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-6">
                                <div class="about-widget footer-widget">
                                    <div class="footer-logo">
                                        <img src="{{ $logo_url }}" style="width: {{ $logo_width }}px; height: auto;"
                                            alt="{{ setting('site_name', 'AI Agency & Technology HTML Template') }}">
                                    </div>
                                    <ul class="social-icon">
                                        @if(setting('facebook_link'))
                                            <li><a href="{{ setting('facebook_link') }}" title=""><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                        @endif
                                        @if(setting('twitter_link'))
                                            <li><a href="{{ setting('twitter_link') }}" title=""><i
                                                        class="fab fa-twitter"></i></a></li>
                                        @endif
                                        @if(setting('linkedin_link'))
                                            <li><a href="{{ setting('linkedin_link') }}" title=""><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                        @endif
                                        @if(setting('youtube_link'))
                                            <li><a href="{{ setting('youtube_link') }}" title=""><i
                                                        class="fab fa-youtube"></i></a></li>
                                        @endif
                                    </ul>
                                    <h2 class="title">{{ setting('footer_since', 'since 2025') }}</h2>
                                    @if(setting('footer_about'))
                                        <p class="mt-3">{{ setting('footer_about') }}</p>
                                    @endif
                                    <div class="newsletter-subscribe-btn mt-4">
                                        <a href="#" class="ibt-btn ibt-btn-outline open-newsletter-popup"
                                            data-newsletter-popup>
                                            <i class="fas fa-envelope"></i>
                                            <span>Subscribe to Newsletter</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6">
                                <div class="footer-menu">
                                    <div class="footer-links footer-widget">
                                        <h4 class="widget-title">Company</h4>
                                        <ul>
                                            @php
                                                $company_links = json_decode(setting('footer_company_links', '[]'), true);
                                            @endphp
                                            @if($company_links)
                                                @foreach($company_links as $link)
                                                    <li><a href="{{ $link['link'] ?? '#' }}"
                                                            title="">{{ $link['title'] ?? '' }}</a>
                                                    </li>
                                                @endforeach
                                            @else
                                                <li><a href='{{ route('about') }}' title>About</a></li>
                                                <li><a href="#" title="">Expertise</a></li>
                                                <li><a href="#" title="">Sustainability</a></li>
                                                <li><a href="#" title="">News & Media</a></li>
                                                <li><a href="#" title="">Case Studies</a></li>
                                                <li><a href='{{ route('contact') }}' title="">Contacts</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="footer-links footer-widget">
                                        <h4 class="widget-title">Services</h4>
                                        <ul>
                                            @php
                                                $services_links = json_decode(setting('footer_services_links', '[]'), true);
                                            @endphp
                                            @if($services_links)
                                                @foreach($services_links as $link)
                                                    <li><a href="{{ $link['link'] ?? '#' }}"
                                                            title="">{{ $link['title'] ?? '' }}</a>
                                                    </li>
                                                @endforeach
                                            @else
                                                <li><a href="#" title="">Air Freight</a></li>
                                                <li><a href="#" title="">Sea Freight</a></li>
                                                <li><a href="#" title="">Land Transport</a></li>
                                                <li><a href="#" title="">Groupage</a></li>
                                                <li><a href="#" title="">Consultancy</a></li>
                                                <li><a href="#" title="">Value Added Services</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-botom">
                    <div class="container">
                        <div class="footer-box">
                            <p><a href="#">{{ setting('footer_copyright', '©Aiero 2025. All rights reserved.') }}</a>
                            </p>
                            <span><a href="{{ route('terms') }}">Terms of use</a> <a
                                    href="{{ route('privacy') }}">Privacy Policy</a></span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer-style1 -->
        </section>
        <!-- End main-sec -->

        <!-- Scroll Button - Hidden
        <button id="scrollBtn" title="Go to top">
            <i class="fas fa-angle-up"></i>
        </button>
        -->
    </div>

    <!-- Demo Popup Modal -->
    @include('partials.demo-popup')

    <!-- Newsletter Popup Modal -->
    @include('partials.newsletter-popup')

    <!-- Js Plugin -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('frontend/assets/js/vendor/swiper-bundle.min.js') }}" defer></script>
    <script src="{{ asset('frontend/assets/js/vendor/lenis.min.js') }}" defer></script>
    <script src="{{ asset('frontend/assets/js/vendor/gsap.min.js') }}" defer></script>
    <script src="{{ asset('frontend/assets/js/vendor/ScrollTrigger.min.js') }}" defer></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}" defer></script>
</body>

</html>