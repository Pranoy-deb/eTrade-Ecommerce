<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') || eTrade</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.png')}}">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/base.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.min.css') }}">

</head>


<body class="sticky-header newsletter-popup-modal">



    <header class="header axil-header header-style-1">

        <div class="axil-header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="header-top-dropdown">
                            <p>Buy anything and get free shipping!</p>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="header-top-link">
                            <ul class="quick-link">
                                <li><a href="{{ url('/') }}">Help</a></li>
                                @auth('customer')
                                <li><a href="{{route('frontend.customer.profile')}}">My-profile</a></li>
                                @else
                                <li><a href="{{route('frontend.customer.signup')}}">Join Us</a></li>
                                <li><a href="{{route('frontend.customer.login')}}">Sign In</a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Mainmenu Area  -->
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-brand">
                        <a href="{{ url('/') }}" class="logo logo-dark">
                            <img src="{{ asset('frontend/assets/images/logo/logo.png')}}" alt="Site Logo">
                        </a>
                        <a href="{{ url('/') }}" class="logo logo-light">
                            <img src="{{ asset('frontend/assets/images/logo/logo-light.png')}}" alt="Site Logo">
                        </a>
                    </div>
                    <div class="header-main-nav">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav">
                            <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                            <div class="mobile-nav-brand">
                                <a href="{{ url('/') }}" class="logo">
                                    <img src="{{ asset('frontend/assets/images/logo/logo.png')}}" alt="Site Logo">
                                </a>
                            </div>
                            <ul class="mainmenu">
                                <li class="menu-item">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                               <li class="menu-item">
                                    <a href="{{ route('frontend.shop') }}">Shop</a>
                                </li>
                                <li><a href="{{ route('frontend.about-us') }}">About</a></li>
                                <li><a href="{{ route('frontend.blog') }}">Blog</a></li>
                                <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>
                    <div class="header-action">
                        <ul class="action-list">
                            <li class="axil-search">
                                <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                    <i class="flaticon-magnifying-glass"></i>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="{{ route('frontend.wishlist') }}">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </li>
                            {{-- <li class="shopping-cart">
                                <a href="{{ route('frontend.wishlist') }}" class="cart-dropdown-btn">
                                    <span class="cart-count">8</span>
                                    <i class="flaticon-heart"></i>
                                </a>
                            </li> --}}
                            <li class="shopping-cart">
                                <a href="{{ url('/') }}" class="cart-dropdown-btn">
                                    <span class="cart-count">{{$carts['count']}}</span>
                                    <i class="flaticon-shopping-cart"></i>
                                </a>
                            </li>
                            <li class="my-account">
                                <a href="javascript:void(0)">
                                    <i class="flaticon-person"></i>
                                </a>
                                <div class="my-account-dropdown">
                                    <span class="title">QUICKLINKS</span>
                                    <ul>
                                        <li>
                                            <a href="{{ route('frontend.customer.profile') }}">My Account</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/') }}">Initiate return</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/') }}">Support</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/') }}">Language</a>
                                        </li>
                                    </ul>
                                    <div class="login-btn">
                                        @if (auth('customer')->check())
                                         <form method="POST" action="{{route('frontend.customer.logout')}}">
                                            @csrf
                                            <button class="axil-btn btn bg-danger text-white">LogOut</button>
                                        </form>
                                       @else
                                        <a href="{{ route('frontend.customer.login') }}" class="axil-btn btn-bg-primary">Login</a>
                                        <div class="reg-footer text-center">No account yet? <a href="{{ route('frontend.customer.signup') }}"
                                            class="btn-link">REGISTER HERE.</a>
                                        </div>
                                        @endif
                                    </div>
                                    
                                </div>
                            </li>
                            <li class="axil-mobile-toggle">
                                <button class="menu-btn mobile-nav-toggler">
                                    <i class="flaticon-menu-2"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>

    <main class="main-wrapper">
        @yield('frontend')
    </main>


    <div class="service-area">
        <div class="container">
            <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icons/service1.png')}}" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Fast &amp; Secure Delivery</h6>
                            <p>Tell about your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icons/service2.png')}}" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Money Back Guarantee</h6>
                            <p>Within 10 days.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="https://new.axilthemes.com/demo/template/etrade/assets/images/icons/service3.png"
                                alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">24 Hour Return Policy</h6>
                            <p>No question ask.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icons/service4.png')}}" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Pro Quality Support</h6>
                            <p>24/7 Live support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Area  -->
    <footer class="axil-footer-area footer-style-2">
        <!-- Start Footer Top Area  -->
        <div class="footer-top separator-top">
            <div class="container">
                <div class="row">
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Support</h5>
                            <!-- <div class="logo mb--30">
                            <a href="{{ url('/') }}">
                                <img class="light-logo" src="{{ asset('frontend/assets/images/logo/logo.png')}}" alt="Logo Images">
                            </a>
                        </div> -->
                            <div class="inner">
                                <p>685 Market Street, <br>
                                    Las Vegas, LA 95820, <br>
                                    United States.
                                </p>
                                <ul class="support-list-item">
                                    <li><a href="mailto:example@domain.com"><i class="fal fa-envelope-open"></i>
                                            example@domain.com</a></li>
                                    <li><a href="tel:(+01)850-315-5862"><i class="fal fa-phone-alt"></i> (+01)
                                            850-315-5862</a></li>
                                    <!-- <li><i class="fal fa-map-marker-alt"></i> 685 Market Street,  <br> Las Vegas, LA 95820, <br> United States.</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Account</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="{{ route('frontend.customer.profile') }}">My Account</a></li>
                                    <li><a href="{{ route('frontend.customer.signup') }}">Login / Register</a></li>
                                    <li><a href="{{ route('frontend.carts.view') }}">Cart</a></li>
                                    <li><a href="{{ route('frontend.wishlist') }}">Wishlist</a></li>
                                    <li><a href="{{ route('frontend.shop') }}">Shop</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Quick Link</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="terms-of-service.html">Terms Of Use</a></li>
                                    <li><a href="{{ url('/') }}">FAQ</a></li>
                                    <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                                    <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Download App</h5>
                            <div class="inner">
                                <span>Save $3 With App & New User only</span>
                                <div class="download-btn-group">
                                    <div class="qr-code">
                                        <img src="{{ asset('frontend/assets/images/others/qr.png')}}" alt="Axilthemes">
                                    </div>
                                    <div class="app-link">
                                        <a href="{{ url('/') }}">
                                            <img src="{{ asset('frontend/assets/images/others/app-store.png')}}" alt="App Store">
                                        </a>
                                        <a href="{{ url('/') }}">
                                            <img src="{{ asset('frontend/assets/images/others/play-store.png')}}" alt="Play Store">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                </div>
            </div>
        </div>
        <!-- End Footer Top Area  -->
        <!-- Start Copyright Area  -->
        <div class="copyright-area copyright-default separator-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="social-share">
                            <a href="{{ url('/') }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ url('/') }}"><i class="fab fa-instagram"></i></a>
                            <a href="{{ url('/') }}"><i class="fab fa-twitter"></i></a>
                            <a href="{{ url('/') }}"><i class="fab fa-linkedin-in"></i></a>
                            <a href="{{ url('/') }}"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-left d-flex flex-wrap justify-content-center">
                            <ul class="quick-link">
                                <li>© 2023. All rights reserved by <a target="_blank"
                                        href="https://axilthemes.com/">Axilthemes</a>.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div
                            class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
                            <span class="card-text">Accept For</span>
                            <ul class="payment-icons-bottom quick-link">
                                <li><img src="{{ asset('frontend/assets/images/icons/cart/cart-1.png')}}" alt="paypal cart"></li>
                                <li><img src="{{ asset('frontend/assets/images/icons/cart/cart-2.png')}}" alt="paypal cart"></li>
                                <li><img src="{{ asset('frontend/assets/images/icons/cart/cart-5.png')}}" alt="paypal cart"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </footer>
    <!-- End Footer Area  -->

    <!-- Product Quick View Modal Start -->
    {{-- <div class="modal fade quick-view-product" id="quick-view-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="far fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <div class="single-product-thumb">
                        <div class="row">
                            <div class="col-lg-7 mb--40">
                                <div class="row">
                                    <div class="col-lg-10 order-lg-2">
                                        <div
                                            class="single-product-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">
                                            <div class="thumbnail">
                                                <img src="{{ asset('frontend/assets/images/product/product-big-01.png')}}"
                                                    alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="{{ asset('frontend/assets/images/product/product-big-01.png')}}"
                                                        class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="thumbnail">
                                                <img src="{{ asset('frontend/assets/images/product/product-big-02.png')}}"
                                                    alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="{{ asset('frontend/assets/images/product/product-big-02.png')}}"
                                                        class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="thumbnail">
                                                <img src="{{ asset('frontend/assets/images/product/product-big-03.png')}}"
                                                    alt="Product Images">
                                                <div class="label-block label-right">
                                                    <div class="product-badget">20% OFF</div>
                                                </div>
                                                <div class="product-quick-view position-view">
                                                    <a href="{{ asset('frontend/assets/images/product/product-big-03.png')}}"
                                                        class="popup-zoom">
                                                        <i class="far fa-search-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 order-lg-1">
                                        <div class="product-small-thumb small-thumb-wrapper">
                                            <div class="small-thumb-img">
                                                <img src="{{ asset('frontend/assets/images/product/product-thumb/thumb-08.png')}}"
                                                    alt="thumb image">
                                            </div>
                                            <div class="small-thumb-img">
                                                <img src="{{ asset('frontend/assets/images/product/product-thumb/thumb-07.png')}}"
                                                    alt="thumb image">
                                            </div>
                                            <div class="small-thumb-img">
                                                <img src="{{ asset('frontend/assets/images/product/product-thumb/thumb-09.png')}}"
                                                    alt="thumb image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 mb--40">
                                <div class="single-product-content">
                                    <div class="inner">
                                        <div class="product-rating">
                                            <div class="star-rating">
                                                <img src="{{ asset('frontend/assets/images/icons/rate.png')}}" alt="Rate Images">
                                            </div>
                                            <div class="review-link">
                                                <a href="{{ url('/') }}">(<span>1</span> customer reviews)</a>
                                            </div>
                                        </div>
                                        <h3 class="product-title">Serif Coffee Table</h3>
                                        <span class="price-amount">$155.00 - $255.00</span>
                                        <ul class="product-meta">
                                            <li><i class="fal fa-check"></i>In stock</li>
                                            <li><i class="fal fa-check"></i>Free delivery available</li>
                                            <li><i class="fal fa-check"></i>Sales 30% Off Use Code: MOTIVE30</li>
                                        </ul>
                                        <p class="description">In ornare lorem ut est dapibus, ut tincidunt nisi
                                            pretium. Integer ante est, elementum eget magna. Pellentesque sagittis
                                            dictum libero, eu dignissim tellus.</p>

                                        <div class="product-variations-wrapper">

                                            <!-- Start Product Variation  -->
                                            <div class="product-variation">
                                                <h6 class="title">Colors:</h6>
                                                <div class="color-variant-wrapper">
                                                    <ul class="color-variant mt--0">
                                                        <li class="color-extra-01 active"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-02"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                        <li class="color-extra-03"><span><span
                                                                    class="color"></span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Product Variation  -->

                                            <!-- Start Product Variation  -->
                                            <div class="product-variation">
                                                <h6 class="title">Size:</h6>
                                                <ul class="range-variant">
                                                    <li>xs</li>
                                                    <li>s</li>
                                                    <li>m</li>
                                                    <li>l</li>
                                                    <li>xl</li>
                                                </ul>
                                            </div>
                                            <!-- End Product Variation  -->

                                        </div>

                                        <!-- Start Product Action Wrapper  -->
                                        <div class="product-action-wrapper d-flex-center">
                                            <!-- Start Quentity Action  -->
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                            <!-- End Quentity Action  -->

                                            <!-- Start Product Action  -->
                                            <ul class="product-action d-flex-center mb--0">
                                                <li class="add-to-cart"><a href="{{ route('frontend.cart') }}"
                                                        class="axil-btn btn-bg-primary">Add to Cart</a></li>
                                                <li class="wishlist"><a href="{{ route('frontend.wishlist') }}"
                                                        class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                            <!-- End Product Action  -->

                                        </div>
                                        <!-- End Product Action Wrapper  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Product Quick View Modal End -->

    <!-- Header Search Modal Start -->
<div class="header-search-modal" id="header-search-modal">

    <button class="card-close sidebar-close">
        <i class="fas fa-times"></i>
    </button>

    <div class="header-search-wrap">

        <!-- Search Input -->
        <div class="card-header">
            <form action="{{ route('search.product') }}" method="GET">
                <div class="input-group">

                    <input type="search"
                        id="prod-search"
                        name="search"
                        class="form-control"
                        placeholder="Search product...">

                    <button type="submit" class="axil-btn btn-bg-primary">
                        <i class="far fa-search"></i>
                    </button>
                </div>
            </form>
        </div>

        <!-- Search Result Area -->
        <div class="card-body">

            <div class="search-result-header">
                <h6 class="title">Search Results</h6>
                <a href="{{ route('frontend.shop') }}" class="view-all">View All</a>
            </div>

            <div class="psearch-results"></div>

        </div>

    </div>
</div>
<!-- Header Search Modal End -->



    <div class="cart-dropdown" id="cart-dropdown">
        <div class="cart-content-wrap">
            <div class="cart-header">
                <h2 class="header-title">Cart review</h2>
                <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
            </div>
            <div class="cart-body">
                @if ($carts['data'])
                {{-- @dd($carts['data']) --}}
                <ul class="cart-item-list">
                    @php
                    $total_price = 0;
                    @endphp
                    @foreach ($carts['data'] as $cartItem)
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="{{ route('frontend.product.single', $cartItem->product) }}"><img src="{{ asset('storage/'.$cartItem->product->featured_img)}}"
                                    alt="{{$cartItem->product->title}}"></a>
                            <form method="POST" action="{{route('frontend.cart.delete')}}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$cartItem->product->id}}">
                            <button type="submit" class="close-btn"><i class="fas fa-times"></i></button>
                            </form>
                        </div>
                        <div class="item-content">
                            {{-- <div class="product-rating">
                                <span class="icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span class="rating-number">(64)</span>
                            </div> --}}
                            <h3 class="item-title"><a href="{{ route('frontend.product.single', $cartItem->product) }}">{{$cartItem->product->title}}</a></h3>
                            @php
                            $price = $cartItem->product->sellign_price && $cartItem->product->sellign_price >0 ? $cartItem->product->sellign_price : $cartItem->product->price;
                            $subtotal_price = $price * $cartItem->qty;
                            $total_price += $subtotal_price;
                            @endphp
                            <div class="item-price"><span class="currency-symbol">BDT </span>{{number_format($subtotal_price,2) }}</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" class="quantity-input" value="{{round($cartItem->qty)}}">
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endif

            </div>
            <div class="cart-footer">
                <h3 class="cart-subtotal">
                    <span class="subtotal-title">Total:</span>
                    <span class="subtotal-amount">BTD {{number_format($total_price,2)}}</span>
                </h3>
                <div class="group-btn">
                    <a href="{{ route('frontend.carts.view') }}" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                    <a href="{{route('frontend.checkout')}}" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Offer Modal Start -->
    <div class="offer-popup-modal" id="offer-popup-modal">
        <div class="offer-popup-wrap">
            <div class="card-body">
                <button class="popup-close"><i class="fas fa-times"></i></button>
                <div class="content">
                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i>
                            Don’t Miss!!</span>
                        <h3 class="title">Best Sales Offer<br> Grab Yours</h3>
                    </div>
                    <div class="poster-countdown countdown"></div>
                    <a href="{{ route('frontend.shop') }}" class="axil-btn btn-bg-primary">Shop Now <i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="closeMask"></div>

   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend/assets/js/vendor/modernizr.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.ui.touch-punch.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/sal.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/counterup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    

    <script>

        $(document).ready(function(){

            $('#prod-search').closest('form').on('submit', function(e){
                e.preventDefault();
            });

            let timer;

            $('#prod-search').on('keyup', function(){

                clearTimeout(timer);

                let search = $(this).val();

                timer = setTimeout(function(){

                    if(search.length < 1){
                        $('.psearch-results').html('');
                        return;
                    }

                    $.ajax({
                        url: "/live-search",
                        type: "GET",
                        data: { search: search },

                        success: function(res){

                            let html = '';

                            if(res.length === 0){
                                html = `<p style="padding:10px">No Product Found</p>`;
                            }

                            res.forEach(product => {

                                let productUrl = "/product/" + product.slug;

                                let priceShow = (product.sellign_price && product.sellign_price > 0)
                                    ? product.sellign_price
                                    : product.price;

                                html += `
                                <div class="axil-product-list">

                                    <a href="${productUrl}">
                                        <div class="thumbnail">
                                            <img src="/storage/${product.featured_img}" width="60">
                                        </div>
                                    </a>

                                    <a href="${productUrl}">
                                        <div class="product-content">
                                            <h6>${product.title}</h6>
                                            <span class="price current-price">
                                                BDT ${priceShow}
                                            </span>
                                        </div>
                                    </a>

                                </div>
                                `;
                            });

                            $('.psearch-results').html(html);

                        }

                    });

                }, 300);

            });

        });

    </script>




    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
        });
        </script>
        @if(session('swal'))
            <script>
                Swal.fire({
                    title: "{{ session('swal.title') }}",
                    text: "{{ session('swal.text') }}",
                    icon: "{{ session('swal.icon') }}",
                    draggable: true
                });
            </script>
        @endif


      @stack('js')

</body>

</html>