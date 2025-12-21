@extends('layouts.login_sinup')+
@section('title','Customer Sign Up')
@section('customer_auth')

<!-- Start Header -->
<div class="signin-header">
    <div class="row align-items-center">
        <div class="col-md-6">
                    <a href="{{ url('/') }}" class="site-logo"><img src="{{ asset('frontend/assets/images/logo/logo.png')}}" alt="logo"></a>
                </div>
                <div class="col-md-6">
                    <div class="singin-header-btn">
                        <p>Already a member?</p>
                        <a href="{{ route('frontend.customer.login')}}" class="axil-btn btn-bg-secondary sign-up-btn">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header -->

        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="axil-signin-banner bg_image bg_image--10">
                    <h3 class="title">We Offer the Best Products</h3>
                </div>
            </div>
            <div class="col-lg-6 offset-xl-2">
                <div class="axil-signin-form-wrap">
                    <div class="axil-signin-form">
                        <h3 class="title">I'm New Here</h3>
                        <p class="b2 mb--55">Enter your detail below</p>

                        <form class="singin-form" method="POST" action="{{route('frontend.customer.register')}}">
                            @csrf
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="fname" value="Pranoy">
                                @error('fname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lname" value="Deb">
                                @error('lname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="pranoydeb591@gmail.com">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" value="password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="axil-btn btn-bg-primary submit-btn">Create Account</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>                    
@endsection

 