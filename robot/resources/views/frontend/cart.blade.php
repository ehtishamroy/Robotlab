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
    @include('partials.contact')
@endsection