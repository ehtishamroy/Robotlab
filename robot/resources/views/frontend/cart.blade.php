@extends('layouts.frontend')

@section('title', 'Cart || Aiero AI Agency & Technology HTML Template')

@section('content')
    <!-- page-banner9 -->
    <section class="page-banner5">
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Shop</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Shopping cart /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li>Shopping cart</li>
        </ul>
    </section>
    <!-- End page-banner9 -->

    <!-- cart-sec -->
    <section class="cart-sec ibt-section-gap">
        <div class="container">
            <div class="cart-table-wrapper">
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="product-block">
                                    <a href='#'><img src="{{ asset('frontend/assets/images/event/product1-1.png') }}"
                                            alt="AI Agency & Technology HTML Template"></a>
                                    <h4 class="title"><a href='#' title>Sneakers REDdy XL</a></h4>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <span class="price2 v2">/ $ 150.00 /</span>
                            </td>
                            <td>
                                <div class="quantity-filter m-0">
                                    <div class="qty-box">
                                        <button onclick="changeQty('minQty', 1)">+</button>
                                        <input type="number" id="minQty" value="1" min="0">
                                        <button onclick="changeQty('minQty', -1)">-</button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="price2">/ $ 150.00 /</span>
                            </td>
                            <td>
                                <a href="#" title="" class="close-btn2">
                                    <img src="{{ asset('frontend/assets/images/icon/cross.svg') }}"
                                        alt="AI Agency & Technology HTML Template">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-block">
                                    <a href='#'><img src="{{ asset('frontend/assets/images/event/product1-2.png') }}"
                                            alt="AI Agency & Technology HTML Template"></a>
                                    <h4 class="title"><a href='#'>Evening shoes</a></h4>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <span class="price2 v2">/ $ 119.99 /</span>
                            </td>
                            <td>
                                <div class="quantity-filter m-0">
                                    <div class="qty-box">
                                        <button onclick="changeQty('minQty2', 1)">+</button>
                                        <input type="number" id="minQty2" value="1" min="0">
                                        <button onclick="changeQty('minQty2', -1)">-</button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="price2">/ $ 150.00 /</span>
                            </td>
                            <td>
                                <a href="#" title="" class="close-btn2">
                                    <img src="{{ asset('frontend/assets/images/icon/cross.svg') }}"
                                        alt="AI Agency & Technology HTML Template">
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cart-footer">
                <form class="footer-left">
                    <input type="text" placeholder="Coupon" required>
                    <button type="submit" class="ibt-btn ibt-btn-outline">
                        <span>Send message</span>
                        <i class="icon-arrow-top"></i>
                    </button>
                </form>
                <div class="footer-right">
                    <a href="#" title="" class="ibt-btn ibt-btn-outline">
                        <span>Update cart</span>
                        <i class="icon-arrow-top"></i>
                    </a>
                </div>
            </div>
            <div class="cart-table2">
                <h4 class="title">Cart</h4>
                <table>
                    <thead>
                        <tr>
                            <th>Subtotal:</th>
                            <th>$128.00</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sale:</td>
                            <td>$0</td>
                        </tr>
                        <tr>
                            <td>Total:</td>
                            <td>$128</td>
                        </tr>
                    </tbody>
                </table>
                <a class='ibt-btn ibt-btn-dark' href='{{ route('checkout') }}' title>
                    <span>Proceed to checkout</span>
                    <i class="icon-arrow-top"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- End cart-sec -->
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