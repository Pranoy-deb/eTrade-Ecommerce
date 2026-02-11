@extends('layouts.frontend')
@section('title','Search Product')
@section('frontend')
@dd($products)
<!-- Product Page Start -->
<div class="shop-area" style="padding:40px;background:#fff;">
    <div class="container">

        <div class="row">

            <!-- Product Card -->
            <div class="col-lg-3 col-md-4 col-sm-6" style="margin-bottom:25px;">
                <div class="product-card" style="border:1px solid #eee;padding:15px;border-radius:10px;">

                    <div class="product-img" style="position:relative;">
                        <img src="https://via.placeholder.com/300x300"
                             style="width:100%;border-radius:8px;">

                        <span style="
                            position:absolute;
                            top:10px;
                            right:10px;
                            background:red;
                            color:#fff;
                            padding:5px 10px;
                            border-radius:5px;
                            font-size:12px;">
                            20% OFF
                        </span>
                    </div>

                    <div style="margin-top:15px;">
                        <h5 style="font-size:16px;">Gaming Laptop Pro X</h5>

                        <div>
                            <span style="font-weight:bold;color:#000;">BDT 85000</span>
                            <span style="text-decoration:line-through;color:#999;margin-left:8px;">
                                BDT 100000
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Duplicate Product -->
            <div class="col-lg-3 col-md-4 col-sm-6" style="margin-bottom:25px;">
                <div class="product-card" style="border:1px solid #eee;padding:15px;border-radius:10px;">

                    <img src="https://via.placeholder.com/300x300"
                         style="width:100%;border-radius:8px;">

                    <h5 style="margin-top:15px;">Gaming Laptop Pro X</h5>

                    <div>
                        <span style="font-weight:bold;">BDT 85000</span>
                        <span style="text-decoration:line-through;color:#999;margin-left:8px;">
                            BDT 100000
                        </span>
                    </div>
                </div>
            </div>


            <!-- Duplicate Product -->
            <div class="col-lg-3 col-md-4 col-sm-6" style="margin-bottom:25px;">
                <div class="product-card" style="border:1px solid #eee;padding:15px;border-radius:10px;">

                    <img src="https://via.placeholder.com/300x300"
                         style="width:100%;border-radius:8px;">

                    <h5 style="margin-top:15px;">Gaming Laptop Pro X</h5>

                    <div>
                        <span style="font-weight:bold;">BDT 85000</span>
                        <span style="text-decoration:line-through;color:#999;margin-left:8px;">
                            BDT 100000
                        </span>
                    </div>
                </div>
            </div>


            <!-- Duplicate Product -->
            <div class="col-lg-3 col-md-4 col-sm-6" style="margin-bottom:25px;">
                <div class="product-card" style="border:1px solid #eee;padding:15px;border-radius:10px;">

                    <img src="https://via.placeholder.com/300x300"
                         style="width:100%;border-radius:8px;">

                    <h5 style="margin-top:15px;">Gaming Laptop Pro X</h5>

                    <div>
                        <span style="font-weight:bold;">BDT 85000</span>
                        <span style="text-decoration:line-through;color:#999;margin-left:8px;">
                            BDT 100000
                        </span>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
<!-- Product Page End -->
@endsection