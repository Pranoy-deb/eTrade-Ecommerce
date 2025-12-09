@extends('layouts.frontend')
@section('title','Shop')
@section('frontend')

{{-- @dd($wishlist) --}}

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
                                        @foreach ($categories as $category)
                                        <li class="{{ request()->category == $category->slug ? 'current-cat' : '' }}"><a href="{{ request()->url()."?category=".$category->slug}}">{{ $category->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="toggle-list product-price-range active">
                                <h6 class="title">PRICE</h6>
                                <div class="shop-submenu">
                                   <form method="GET" id="priceForm" action="#" class="mt--30">
                                    <div id="slider-range"></div>

                                    <input type="hidden" id="min_price" name="min_price">
                                    <input type="hidden" id="max_price" name="max_price">

                                    <div class="flex-center mt--20">
                                        <span class="input-range">Price: </span>
                                        <input type="text" id="amount" class="amount-range" readonly>
                                    </div>
                                </form>
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
                                        {{-- <span class="filter-results">Showing 1-12 of 84 results</span> --}}
                                        <span class="filter-results">Showing {{$count}} results</span>
                                    <form method="GET" id="sortingForm">
                                        <select name="sort" onchange="document.getElementById('sortingForm').submit()" class="">
                                            <option value="">Default</option>
                                            <option value="price_asc"  {{ request('sort') == 'price_asc'  ? 'selected' : '' }}>Price: Low to High</option>
                                            <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Price: High to Low</option>
                                            <option value="newest"     {{ request('sort') == 'newest'     ? 'selected' : '' }}>Newest</option>
                                            <option value="oldest"     {{ request('sort') == 'oldest'     ? 'selected' : '' }}>Oldest</option>
                                        </select>

                                        @if(request('category'))
                                            <input type="hidden" name="category" value="{{ request('category') }}">
                                        @endif
                                    </form>

                                        <!-- End Single Select  -->
                                    </div>
                                    <div class="d-lg-none">
                                        <button class="product-filter-mobile filter-toggle"><i class="fas fa-filter"></i> FILTER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .row -->

                        <!-- Start single product  -->
                        <div class="row row--15">
                            @forelse ($products as $product)
                            @php
                                $Gall_img = json_decode($product->gall_img,true) ?? [];
                            @endphp
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="{{ route('frontend.product.single', $product)}}">
                                            {{-- <a href="{{ route('frontend.product.single', $product['slug']) }}"> --}}
                                            <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800"
                                                loading="lazy" class="main-img"
                                                src="{{ asset('storage/'. $product->featured_img) }}"
                                                alt="Product Images">
                                            @if (count($Gall_img) > 0)
                                            <img class="hover-img" src="{{ asset('storage/'. $Gall_img[0])}}"
                                            alt="Product Images">
                                            @endif
                                        </a>
                                        @if ($product->sellign_price && $product->sellign_price > 0)
                                        <div class="label-block label-right">
                                            <div class="product-badget">{{ round(($product->price - $product->sellign_price) * 100 / $product->price) }}% Off</div>
                                        </div>
                                        @endif 
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview">
                                                    <a href="{{ route('frontend.product.single', $product) }}">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </li>

                                                <li class="select-option">
                                                    <a href="{{ route('frontend.product.single', $product)}}">
                                                        Add to Cart
                                                    </a>
                                                </li>
                                                @php
                                                    $checkWishlist = in_array($product->id, $wishlist);
                                                @endphp
                                               
                                                <li class="wishlist">
                                                <form action="{{route('frontend.wishlist.add')}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <button href="{{ route('frontend.wishlist') }}"><i class="{{ $checkWishlist ? 'fas fa-heart text-danger' : 'far fa-heart' }}"></i></button>
                                                </form>
                                                </li>
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
                            @empty
                            <h4 class="text-center">No products found!</h4>     
                            @endforelse
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