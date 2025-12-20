<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aiero AI Agency & Technology HTML Template')</title>

    <!-- Preconnect for faster font loading (PUT THIS FIRST!) -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/images/favicon.ico') }}">

    <!-- Google Fonts (deferred) -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&amp;display=swap" rel="stylesheet"
        media="print" onload="this.media='all'">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet"
        media="print" onload="this.media='all'">

    <!-- Load Font Awesome CSS asynchronously -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}" media="print"
        onload="this.media='all'">

    <!-- fontello font css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/fontello-enqueue.css') }}" media="print"
        onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/fontello-icons.css') }}" media="print"
        onload="this.media='all'">

    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

    <!-- Specific page css could be yielded here if needed -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/swiper-bundle.min.css') }}" media="print"
        onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/swiper-bundle.min.css') }}">
    </noscript>

</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader">
            <img src="{{ asset('frontend/assets/images/preloader-dark.png') }}" alt="Loading...">
        </div>
    </div>
    <!-- End Preloader -->

    <button id="themeBtn"><i class="far fa-moon"></i></button>
    <div class="video-modal">
        <div class="video-modal-content">
            <span class="close-btn">&times;</span>
            <iframe allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </div>
    <!-- search-popup -->
    <div class="search-popup" data-popup="1">
        <div class="search-popup-content">
            <form>
                <button type="submit"><i class="fa fa-search"></i></button>
                <input type="text" placeholder="Type Your Search..." required>
            </form>
            <button type="button" class="close-popup"></button>
        </div>
    </div>

    <!-- Side Menu -->
    <div class="side-menu" id="sideMenu">
        <div class="overlay" id="overlay"></div>
        <a href="javascript:void(0)" class="close-btn" id="closeBtn"><i class="fa fa-close"></i> close</a>
        <div class="menu-content">
            <a class='logo' href='{{ route('home') }}'>
                <img src="{{ asset('frontend/assets/images/logo2.svg') }}" alt="logo">
            </a>
            <div class="sidebar-menu">
                <h4 class="title">contacts</h4>
                <p>USA, New York - 1060 <br> Str. First Avenue 1</p>
                <a href="#" title="" class="nmbr">800 100 975 20 34</a>
                <a href="#" title="" class="nmbr">+ (123) 1800-234-5678</a>
                <a href="mailto:aiero@mail.co" class="email">aiero@mail.co</a>
                <a href="#" title="" class="ibt-btn ibt-btn-outline-3 ibt-btn-rounded">
                    <span>Get in Touch</span>
                </a>
            </div>
            <ul class="social-icon">
                <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#" title=""><i class="fab fa-youtube"></i></a></li>
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
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">pages</a>
                <ul>
                    <li><a href='{{ route('about') }}'>About us</a></li>
                    <li><a href='{{ route('faq') }}'>FAQ</a></li>
                    <li><a href='{{ route('projects') }}'>Projects</a></li>
                </ul>
            </li>
            <li>
                <a href='{{ route('services') }}'>Services</a>
            </li>
            <li>
                <a href='{{ route('products') }}'>Shop</a>
            </li>
            <li>
                <a href='{{ route('blog') }}'>Blog</a>
            </li>
            <li><a href='{{ route('contact') }}'>Contacts</a></li>
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
                <span>Get in Touch</span>
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
                            <img src="{{ asset('frontend/assets/images/logo.svg') }}" alt="logo">
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
                                <a href="#">
                                    <span class="menu-item">Pages</span>
                                    <span class="menu-item2">Pages</span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href='{{ route('about') }}'>About us</a></li>
                                    <li><a href='{{ route('faq') }}'>FAQ</a></li>
                                    <li><a href='{{ route('projects') }}'>Projects</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href='{{ route('services') }}'>
                                    <span class="menu-item">services</span>
                                    <span class="menu-item2">services</span>
                                </a>
                            </li>
                            <li>
                                <a href='{{ route('products') }}'>
                                    <span class="menu-item">Shop</span>
                                    <span class="menu-item2">Shop</span>
                                </a>
                            </li>
                            <li>
                                <a href='{{ route('blog') }}'>
                                    <span class="menu-item">Blog</span>
                                    <span class="menu-item2">Blog</span>
                                </a>
                            </li>
                            <li>
                                <a href='{{ route('contact') }}'>
                                    <span class="menu-item">Contacts</span>
                                    <span class="menu-item2">Contacts</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-auto d-none d-xl-block">
                    <div class="btn-box">
                        <a href="#" class="popup-search" data-popup="1"><i class="fa fa-search"></i></a>
                        <a class='ibt-btn ibt-btn-outline-3 ibt-btn-rounded' href='{{ route('contact') }}' title>
                            <span>Get in Touch</span>
                        </a>
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
    <header class="vs-header15">
        <div class="header-top4">
            <div class="container-fluid">
                <div class="header-top-content4">
                    <ul class="top-bar-contacts">
                        <li>
                            <span class="contact-item-title">Call us:</span>
                            <a href="tel:+18005291037">+1 800 529 10 37</a>
                        </li>
                        <li>
                            <span class="contact-item-title">Email:</span>
                            <a href="mailto:aiero@mail.co">aiero@mail.co</a>
                        </li>
                    </ul>
                    <ul class="top-bar-socials">
                        <li><span>Folow us:</span></li>
                        <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#" title=""><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--vs-main-menu-wrapper start-->
        <div class="header-bottom15">
            <div class="container2 position-relative">
                <div class="header-menu-area">
                    <div class="row gx-20 align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="javascript:void(0)" class="menu-toggle"></a>
                                <a href='{{ route('home') }}'>
                                    <img src="{{ asset('frontend/assets/images/logo.svg') }}" alt="logo">
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
                                        <a href="#">
                                            <span class="menu-item">Pages</span>
                                            <span class="menu-item2">Pages</span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href='{{ route('about') }}'>About us</a></li>
                                            <li><a href='{{ route('faq') }}'>FAQ</a></li>
                                            <li><a href='{{ route('projects') }}'>Projects</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href='{{ route('services') }}'>
                                            <span class="menu-item">services</span>
                                            <span class="menu-item2">services</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='{{ route('products') }}'>
                                            <span class="menu-item">Shop</span>
                                            <span class="menu-item2">Shop</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='{{ route('blog') }}'>
                                            <span class="menu-item">Blog</span>
                                            <span class="menu-item2">Blog</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='{{ route('contact') }}'>
                                            <span class="menu-item">Contacts</span>
                                            <span class="menu-item2">Contacts</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="btn-box">
                                <a href="#" class="popup-search" data-popup="1"><i class="fa fa-search"></i></a>
                                <a class='ibt-btn ibt-btn-outline-3 ibt-btn-rounded' href='{{ route('contact') }}'
                                    title>
                                    <span>Get in Touch</span>
                                </a>
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
        </div>
        <!--vs-main-menu-wrapper end-->
    </header>
    <!--======== / Header ========-->

    @yield('content')

    <!-- main-sec -->
    <section class="main-sec @yield('main_sec_class')">
        @yield('contact_section')

        <!-- footer-style1 -->
        <footer class="footer-style1 ibt-section-gapTop">
            <div class="footer-top">
                <div class="container">
                    <div class="footer-content">
                        <h2 class="title">It’s blow your mind! Meet Neural Networks</h2>
                        <a href="#" title="" class="ibt-btn ibt-btn-outline">
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
                                    <img src="{{ asset('frontend/assets/images/logo2.svg') }}"
                                        alt="AI Agency & Technology HTML Template">
                                </div>
                                <ul class="social-icon">
                                    <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" title=""><i class="fab fa-youtube"></i></a></li>
                                </ul>
                                <h2 class="title">since 2025</h2>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="footer-menu">
                                <div class="footer-links footer-widget">
                                    <h4 class="widget-title">Company</h4>
                                    <ul>
                                        <li><a href='{{ route('about') }}' title>About</a></li>
                                        <li><a href="#" title="">Expertise</a></li>
                                        <li><a href="#" title="">Sustainability</a></li>
                                        <li><a href="#" title="">News & Media</a></li>
                                        <li><a href="#" title="">Case Studies</a></li>
                                        <li><a href='{{ route('contact') }}' title="">Contacts</a></li>
                                    </ul>
                                </div>
                                <div class="footer-links footer-widget">
                                    <h4 class="widget-title">Services</h4>
                                    <ul>
                                        <li><a href="#" title="">Air Freight</a></li>
                                        <li><a href="#" title="">Sea Freight</a></li>
                                        <li><a href="#" title="">Land Transport</a></li>
                                        <li><a href="#" title="">Groupage</a></li>
                                        <li><a href="#" title="">Consultancy</a></li>
                                        <li><a href="#" title="">Value Added Services</a></li>
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
                        <p><a href="#">©Aiero</a> 2025. All rights reserved.</p>
                        <span>Terms of use <a href="#">Privacy Policy</a></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-style1 -->
    </section>
    <!-- End main-sec -->

    <!-- Scroll Button -->
    <button id="scrollBtn" title="Go to top">
        <i class="fas fa-angle-up"></i>
    </button>

    <!-- Js Plugin -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('frontend/assets/js/vendor/swiper-bundle.min.js') }}" defer></script>
    <script src="{{ asset('frontend/assets/js/vendor/lenis.min.js') }}" defer></script>
    <script src="{{ asset('frontend/assets/js/vendor/gsap.min.js') }}" defer></script>
    <script src="{{ asset('frontend/assets/js/vendor/ScrollTrigger.min.js') }}" defer></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}" defer></script>
</body>

</html>