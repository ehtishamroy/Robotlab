@extends('layouts.frontend')

@section('title', 'Products || Aiero AI Agency & Technology HTML Template')

@section('main_sec_class', 'dark')

@section('content')
    <!-- page-banner9 -->
    <section class="page-banner9">
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Shop</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Products /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li>Products</li>
        </ul>
    </section>
    <!-- End page-banner9 -->

    <!-- shop-sec -->
    <div class="shop-sec ibt-section-gap">
        <button class="sidebar-toggle"></button>
        <!-- Overlay -->
        <div class="sidebar-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-12">
                    <div class="shop-product">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="shop-card">
                                    <div class="shop-img">
                                        <a href='shop-single.html'><img
                                                src="{{ asset('frontend/assets/images/event/shop1-1.png') }}"
                                                alt="AI Agency & Technology HTML Template"></a>
                                        <div class="shop-shap"></div>
                                    </div>
                                    <div class="shop-content">
                                        <a href="#" title="" class="show-now"><i class="fa fa-shopping-cart"></i></a>
                                        <h4 class="title"><a href='shop-single.html' title>BFF Hoody</a></h4>
                                        <span class="price">/ $ 32.50 /</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="shop-card">
                                    <div class="shop-img">
                                        <a href='shop-single.html'><img
                                                src="{{ asset('frontend/assets/images/event/shop1-2.png') }}"
                                                alt="AI Agency & Technology HTML Template"></a>
                                        <span class="tag">SALE</span>
                                        <div class="shop-shap"></div>
                                    </div>
                                    <div class="shop-content">
                                        <a href="#" title="" class="show-now"><i class="fa fa-shopping-cart"></i></a>
                                        <h4 class="title"><a href='shop-single.html' title>Sneakers Blike</a></h4>
                                        <span class="price v2">/ <del>$ 180.99 -</del><span>$ 32.50</span> /</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="shop-card">
                                    <div class="shop-img">
                                        <a href='shop-single.html'><img
                                                src="{{ asset('frontend/assets/images/event/shop1-3.png') }}"
                                                alt="AI Agency & Technology HTML Template"></a>
                                        <div class="shop-shap"></div>
                                        <span class="tag v2">NEW</span>
                                    </div>
                                    <div class="shop-content v2">
                                        <a href="#" title="" class="show-now"><i class="fa fa-shopping-cart"></i></a>
                                        <h4 class="title"><a href='shop-single.html' title>Stylish white jacket</a>
                                        </h4>
                                        <span class="price">/ $ 149.99 /</span>
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="shop-card">
                                    <div class="shop-img">
                                        <a href='shop-single.html'><img
                                                src="{{ asset('frontend/assets/images/event/shop1-4.png') }}"
                                                alt="AI Agency & Technology HTML Template"></a>
                                        <div class="shop-shap"></div>
                                    </div>
                                    <div class="shop-content">
                                        <a href="#" title="" class="show-now"><i class="fa fa-shopping-cart"></i></a>
                                        <h4 class="title"><a href='shop-single.html' title>Tri blemd cret T-shirt</a>
                                        </h4>
                                        <span class="price">/ $ 5.99 /</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="shop-card">
                                    <div class="shop-img">
                                        <a href='shop-single.html'><img
                                                src="{{ asset('frontend/assets/images/event/shop1-5.png') }}"
                                                alt="AI Agency & Technology HTML Template"></a>
                                        <div class="shop-shap"></div>
                                    </div>
                                    <div class="shop-content">
                                        <a href="#" title="" class="show-now"><i class="fa fa-shopping-cart"></i></a>
                                        <h4 class="title"><a href='shop-single.html' title>White Hoody</a></h4>
                                        <span class="price">/ $ 0.10 /</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="shop-card">
                                    <div class="shop-img">
                                        <a href='shop-single.html'><img
                                                src="{{ asset('frontend/assets/images/event/shop1-6.png') }}"
                                                alt="AI Agency & Technology HTML Template"></a>
                                        <div class="shop-shap"></div>
                                    </div>
                                    <div class="shop-content">
                                        <a href="#" title="" class="show-now"><i class="fa fa-shopping-cart"></i></a>
                                        <h4 class="title"><a href='shop-single.html' title>Blue dark suit</a></h4>
                                        <span class="price">/ $ 82.49 /</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="shop-card">
                                    <div class="shop-img">
                                        <a href='shop-single.html'><img
                                                src="{{ asset('frontend/assets/images/event/shop1-7.png') }}"
                                                alt="AI Agency & Technology HTML Template"></a>
                                        <div class="shop-shap"></div>
                                    </div>
                                    <div class="shop-content">
                                        <a href="#" title="" class="show-now"><i class="fa fa-shopping-cart"></i></a>
                                        <h4 class="title"><a href='shop-single.html' title>Perfect black boots</a>
                                        </h4>
                                        <span class="price">/ $ 170.99 /</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="shop-card">
                                    <div class="shop-img">
                                        <a href='shop-single.html'><img
                                                src="{{ asset('frontend/assets/images/event/shop1-8.png') }}"
                                                alt="AI Agency & Technology HTML Template"></a>
                                        <div class="shop-shap"></div>
                                    </div>
                                    <div class="shop-content">
                                        <a href="#" title="" class="show-now"><i class="fa fa-shopping-cart"></i></a>
                                        <h4 class="title"><a href='shop-single.html' title>Sport Jacket</a></h4>
                                        <span class="price">/ $ 9.99 /</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="shop-card">
                                    <div class="shop-img">
                                        <a href='shop-single.html'><img
                                                src="{{ asset('frontend/assets/images/event/shop1-9.png') }}"
                                                alt="AI Agency & Technology HTML Template"></a>
                                        <div class="shop-shap"></div>
                                    </div>
                                    <div class="shop-content">
                                        <a href="#" title="" class="show-now"><i class="fa fa-shopping-cart"></i></a>
                                        <h4 class="title"><a href='shop-single.html' title>Sneakers Puama</a></h4>
                                        <span class="price">/ $ 150.99 /</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination v2">
                                <li class="page-item m-0"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link v1" href="#">Next<i
                                            class="icon-arrow-top"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="side-bar2">
                        <button class="sidebar-close"></button>
                        <div class="ser-widget side-widget2">
                            <a href='service-single.html' title>Network Integration</a>
                            <a href='service-single.html' title>Deep learning solutions</a>
                            <a href='service-single.html' title>Transfer learning</a>
                            <a href='service-single.html' title>Model evaluation</a>
                            <a class='mb-0' href='service-single.html' title>Real-time prediction</a>
                        </div>
                        <div class="price-filter-widget side-widget2">
                            <h4 class="side-bar-title">Filter by pricing</h4>
                            <div class="filter-box">
                                <div class="slider-container">
                                    <div class="slider-track"></div>
                                    <div class="range-input">
                                        <input type="range" id="min" min="0" max="1000" value="10" step="10">
                                        <input type="range" id="max" min="0" max="1000" value="1000" step="10">
                                    </div>
                                </div>
                                <div class="price-values">
                                    <span id="min-value">$100</span>
                                    <span id="max-value">$900</span>
                                </div> <button>Apply filter</button>
                            </div>
                        </div>
                        <div class="post-widget side-widget2">
                            <h4 class="side-bar-title">Best products</h4>
                            <div class="recent-post2">
                                <a href='shop-single.html'><img src="{{ asset('frontend/assets/images/blog/post2-1.png') }}"
                                        alt="AI Agency & Technology HTML Template"></a>
                                <h4 class="title"><a href='shop-single.html' title>Sneakers REDdy XL</a></h4>
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="sub-title">/ $ 150.00 /</span>
                            </div>
                            <div class="recent-post2">
                                <a href='shop-single.html'><img src="{{ asset('frontend/assets/images/blog/post2-2.png') }}"
                                        alt="AI Agency & Technology HTML Template"></a>
                                <h4 class="title"><a href='shop-single.html' title>Evening shoes</a></h4>
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="sub-title">/ $ 119.99 /</span>
                            </div>
                            <div class="recent-post2 mb-0">
                                <a href='shop-single.html'><img src="{{ asset('frontend/assets/images/blog/post2-3.png') }}"
                                        alt="AI Agency & Technology HTML Template"></a>
                                <h4 class="title"><a href='shop-single.html' title>Jeans shirt</a></h4>
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="sub-title">/ $ 29.99 /</span>
                            </div>
                        </div>
                        <div class="tag-list-widget side-widget2">
                            <h4 class="side-bar-title">Tags</h4>
                            <ul class="tag-list">
                                <li><a href="#" title="">/ Neural /</a></li>
                                <li><a href="#" title="">/ Chat GPT /</a></li>
                                <li><a href="#" title="">/ AI /</a></li>
                                <li><a href="#" title="">/ Robot /</a></li>
                                <li><a href="#" title="">/ Programing /</a></li>
                                <li><a href="#" title="">/ Neuro /</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End shop-sec -->
@endsection

@section('contact_section')
    <!-- contact-sec -->
    <div class="contact-sec ibt-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="sec-title white">
                            <span class="sub-title">get in touch</span>
                            <h2 class="title animated-heading">We are always ready to help you and answer your
                                questions</h2>
                            <p>Pacific hake false trevally queen parrotfish black prickleback mosshead
                                warbonnet sweeper! Greenling sleeper.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="contact-info">
                                    <div class="call-center">
                                        <h4 class="title">Call Center</h4>
                                        <a href="tel:8003508431" class="nmbr">800 100 975 20 34</a>
                                        <a href="mailto:support@aiero.com" class="nmbr">+ (123)
                                            1800-234-5678</a>
                                    </div>
                                    <div class="call-center mb-0">
                                        <h4 class="title">Email</h4>
                                        <a href="mailto:support@aiero.com" class="gmail">aiero@mail.co</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="contact-info">
                                    <div class="call-center">
                                        <h4 class="title">Our Location</h4>
                                        <p>USA, New York - 1060 <br>Str. First Avenue 1</p>
                                    </div>
                                    <div class="call-center mb-0">
                                        <h4 class="title">Social network</h4>
                                        <ul class="social-icon">
                                            <li><a href="https://www.facebook.com/" target="_blank" title=""><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="http://www.twitter.com/" target="_blank" title=""><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a href="http://www.linkedin.com/" target="_blank" title=""><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="https://www.youtube.com/" target="_blank" title=""><i
                                                        class="fab fa-youtube"></i></a></li>
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
                            <h2>Get in Touch</h2>
                            <input type="text" id="name" name="name" placeholder="Full name" required>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                            <input type="text" id="subject" name="subject" placeholder="Subject" required>
                            <textarea id="message" name="message" rows="5" placeholder="Write your message..."
                                required></textarea>

                            <button type="submit" class="ibt-btn ibt-btn-outline">
                                <span>Send message</span>
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