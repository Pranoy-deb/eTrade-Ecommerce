@extends('layouts.frontend')
@section('title','Shop')
@section('frontend')
    
        <!-- Start Shop Area  -->
        <div class="axil-shop-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="axil-shop-sidebar">
                            <div class="d-lg-none">
                                <button class="sidebar-close filter-close-btn"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="toggle-list product-categories active">
                                <h6 class="title">CATEGORIES</h6>
                                <div class="shop-submenu">
                                    <ul>
                                      {{-- <li class="current-cat"><a href="shop-sidebar.html#">{{ $category->title}}</a></li> --}}
                                        @foreach ($categories as $category)
                                        <li class=""><a href="{{ $category->slug}}">{{ $category->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End .axil-shop-sidebar -->
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="axil-shop-top mb--40">
                                    <div class="category-select align-items-center justify-content-lg-end justify-content-between">
                                        <!-- Start Single Select  -->
                                        <span class="filter-results">Showing 1-12 of 84 results</span>
                                        <select class="single-select">
                                            <option>Short by Latest</option>
                                            <option>Short by Oldest</option>
                                            <option>Short by Name</option>
                                            <option>Short by Price</option>
                                        </select>
                                        <!-- End Single Select  -->
                                    </div>
                                    <div class="d-lg-none">
                                        <button class="product-filter-mobile filter-toggle"><i class="fas fa-filter"></i> FILTER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .row -->
                        <div class="row row--15">
                            @foreach ($products as $product)
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="{{ route('frontend.product.single', $product)}}">
                                            <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800"
                                                loading="lazy" class="main-img"
                                                src="{{ asset('storage/'. $product->featured_img) }}"
                                                alt="Product Images">
                                            <img class="hover-img" src="{{ asset('storage/'. json_decode($product->gall_img)[0])}}"
                                                alt="Product Images">
                                        </a>
                                        @if ($product->sellign_price && $product->sellign_price > 0)
                                        <div class="label-block label-right">
                                            <div class="product-badget">{{ round(($product->price - $product->sellign_price) * 100 / $product->price) }}% Off</div>
                                        </div>
                                        @endif 
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="index-1.html#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal"><i
                                                            class="far fa-eye"></i></a></li>
                                                            <li class="select-option">
                                                                <a href="{{ route('frontend.product.single', $product)}}">
                                                        Add to Cart
                                                    </a>
                                                </li>
                                                <li class="wishlist"><a href="wishlist.html"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
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
                                            <h5 class="title"><a href="{{ route('frontend.product.single', $product)}}">{{$product->title}}</a></h5>
                                            <div class="product-price-variant">
                                                @if($product->sellign_price && $product->sellign_price > 0)
                                                <span class="price current-price">BDT {{$product->sellign_price}}</span>
                                                <span class="price old-price">BDT {{$product->price}}</span>
                                                @else
                                                <span class="price current-price">BDT {{$product->price}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- End Single Product  -->
                        </div>
                        <nav>{{ $products->links()}}</nav>
                    </div>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Shop Area  -->

@endsection