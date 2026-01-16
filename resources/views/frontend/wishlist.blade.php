@extends('layouts.frontend')
@section('title', 'Wishlist')
@section('frontend')
{{-- @dd($wishlist) --}}
        <!-- Start Wishlist Area  -->
        <div class="axil-wishlist-area axil-section-gap">
            <div class="container">
                <div class="product-table-heading">
                    <h4 class="title">My Wish List on eTrade</h4>
                </div>
                <div class="table-responsive">
                    <table class="table axil-product-table axil-wishlist-table">
                        <thead>
                            <tr>
                                <th scope="col" class="product-remove"></th>
                                <th scope="col" class="product-thumbnail">Product</th>
                                <th scope="col" class="product-title"></th>
                                <th scope="col" class="product-price">Unit Price</th>
                                <th scope="col" class="product-stock-status">Stock Status</th>
                                <th scope="col" class="product-add-cart"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($wishlist as $wishlist_item)
                            <tr>
                                <td class="product-remove">
                                    <form action="{{route('frontend.wishlist.delete')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="wishlist_id" value="{{$wishlist_item->id}}">
                                        <button href="{{ route('frontend.wishlist') }}" class="remove-wishlist"><i class="fal fa-times"></i></button>
                                    </form>
                                </td>
                                <td class="product-thumbnail"><a href="{{ route('frontend.product.single', $wishlist_item->product) }}"><img src="{{asset('storage/'. $wishlist_item->product->featured_img)}}" alt="Digital Product"></a></td>
                                <td class="product-title"><a href="{{ route('frontend.product.single', $wishlist_item->product) }}">{{$wishlist_item->product->title}}</a></td>
                                <td class="product-price" data-title="Price"><span class="currency-symbol">BDT </span>{{ number_format($wishlist_item->product->sellign_price && $wishlist_item->product->sellign_price > 0 ? $wishlist_item->product->sellign_price : $wishlist_item->product->price,2)}}</td>
                                <td class="product-stock-status" data-title="Status">In Stock</td>
                                <td class="product-add-cart">
                                    <form action="{{route('frontend.cart')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$wishlist_item->product->id}}">
                                        <input type="hidden" name="qty" value="1">
                                    <button type="submit"  class="axil-btn btn-outline">Add to Cart</</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <td class="text-center">You have no Faverit Item</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Wishlist Area  -->
@endsection