@extends('layouts.frontend')

@section('title', 'Checkout || Aiero AI Agency & Technology HTML Template')

@section('content')
    <!-- page-banner9 -->
    <section class="page-banner5">
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Shop</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">/ Checkout /</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li>Checkout</li>
        </ul>
    </section>
    <!-- End page-banner9 -->

    <!-- checkout-sec -->
    <section class="checkout-sec ibt-section-gap">
        <button class="sidebar-toggle3"></button>
        <!-- Overlay -->
        <div class="sidebar-overlay3"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-form5">
                        <form action="#" method="post" class="custom-form5">
                            <h2 class="title">Sign in</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Full name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="text" placeholder="Company" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select>
                                            <option>Country *</option>
                                            <option>pakistan</option>
                                            <option>india</option>
                                        </select>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select>
                                            <option>State *</option>
                                            <option>pakistan</option>
                                            <option>india</option>
                                        </select>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="text" placeholder="Town/City *" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="text" placeholder="House number and street name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="text" placeholder="Apartment, suite, unit, etc. (optional)"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="tel" name="tel" placeholder="Phone *" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="Email" name="Email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="ZIP code" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group v3">
                                <div class="radio-box">
                                    <input type="checkbox" id="cheak" name="cheak" value="cheak" required>
                                    <label for="cheak">Create an account?</label><br>
                                </div>
                                <div class="radio-box mb-0">
                                    <input type="checkbox" id="cheak2" name="cheak2" value="cheak2" required>
                                    <label for="cheak2">Ship to a different address?</label><br>
                                </div>
                            </div>
                            <textarea name="text" required>Additional information</textarea>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="side-bar3">
                        <button class="sidebar-close3"></button>
                        <div class="order-widget side-widget3">
                            <h4 class="sidebar-title3 mb-0">You order</h4>
                            <table class="mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="recent-post3">
                                                <a href='#'><img
                                                        src="{{ asset('frontend/assets/images/event/post3-1.png') }}"
                                                        alt="AI Agency & Technology HTML Template"></a>
                                                <h4 class="title"><a href='#'>Sneakers RED XL</a></h4>
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>/ $ 150.00 x 1 /</span>
                                            </div>
                                        </td>
                                        <td class="price-data"><span class="price2">/ $ 150.00 /</span></td>
                                        <td><a href="#" title="" class="close-btn2"><img
                                                    src="{{ asset('frontend/assets/images/icon/cross.svg') }}"
                                                    alt="AI Agency & Technology HTML Template"></a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="recent-post3">
                                                <a href='#'><img
                                                        src="{{ asset('frontend/assets/images/event/post3-2.png') }}"
                                                        alt="AI Agency & Technology HTML Template"></a>
                                                <h4 class="title"><a href='#'>Evening shoes</a></h4>
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>/ $ 119.99 x 1 /</span>
                                            </div>
                                        </td>
                                        <td class="price-data"><span class="price2">/ $ 119.99 /</span></td>
                                        <td><a href="#" title="" class="close-btn2"><img
                                                    src="{{ asset('frontend/assets/images/icon/cross.svg') }}"
                                                    alt="AI Agency & Technology HTML Template"></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-widget3 side-widget3">
                            <h4 class="title">Cart total</h4>
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
                        </div>
                        <div class="payment-widget side-widget3 mb-0">
                            <h4 class="sidebar-title3">Payment method</h4>
                            <div class="payment-methods">
                                <div class="method">
                                    <input type="radio" name="payment" id="bank" checked>
                                    <label for="bank"><span>Direct bank transfer</span></label>
                                    <div class="content">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as
                                            the payment reference.
                                            Your order will not be shipped until the funds have cleared in our account.
                                        </p>
                                    </div>
                                </div>

                                <div class="method">
                                    <input type="radio" name="payment" id="check">
                                    <label for="check"><span>Check payments</span></label>
                                    <div class="content">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as
                                            the payment reference.
                                            Your order will not be shipped until the funds have cleared in our account.
                                        </p>
                                    </div>
                                </div>

                                <div class="method">
                                    <input type="radio" name="payment" id="cod">
                                    <label for="cod"><span>Cash on delivery</span></label>
                                    <div class="content">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as
                                            the payment reference.
                                            Your order will not be shipped until the funds have cleared in our account.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <p class="para">Your personal data will be used to process your order, support your
                                experience throughout this website, and for other purposes described
                                in our privacy policy.
                            </p>
                            <form action="#">
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Bike2">
                                <label for="vehicle2">I have read and agree to the website terms and conditions
                                    *</label><br>
                                <button class="ibt-btn ibt-btn-dark">
                                    <span>Place order</span>
                                    <i class="icon-arrow-top"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End account-sec -->
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