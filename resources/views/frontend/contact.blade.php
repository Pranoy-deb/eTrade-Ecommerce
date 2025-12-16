@extends('layouts.frontend')
@section('title', 'Contact Us')
@section('frontend')
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <h1 class="title">Contact With Us</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="inner">
                            <div class="bradcrumb-thumb">
                                <img src="{{asset('frontend/assets/images/product/product-45.png')}}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->

        <!-- Start Contact Area  -->
        <div class="axil-contact-page-area axil-section-gap">
            <div class="container">
                <div class="axil-contact-page">
                    <div class="row row--30">
                        <div class="col-lg-8">
                            <div class="contact-form">
                                <h3 class="title mb--10">We would love to hear from you.</h3>
                                <p>If you’ve got great products your making or looking to work with us then drop us a line.</p>
                                <form action="{{route('frontend.contact.sendmsg')}}" method="POST"  class="axil-contact-form">
                                    @csrf
                                    <div class="row row--10">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="contact-name">Name <span>*</span></label>
                                                <input type="text" name="user_name" value="{{old('user_name')}}" placeholder="Enter your name...">
                                                @error('user_name')
                                                <samp class="text-danger">{{$message}}</samp>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="contact-phone">Phone <span>*</span></label>
                                                <input type="text" name="user_phone" value="{{old('user_phone')}}" placeholder="Enter your phone number...">
                                                @error('user_phone')
                                                <samp class="text-danger">{{$message}}</samp>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="contact-email">E-mail <span>*</span></label>
                                                <input type="email" name="user_email" value="{{old('user_email')}}"  placeholder="Enter your Email...">
                                                @error('user_email')
                                                <samp class="text-danger">{{$message}}</samp>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="contact-message">Your Message</label>
                                                <textarea name="user_msg" cols="1" rows="2">{{old('user_msg')}}</textarea>
                                                @error('user_msg')
                                                <samp class="text-danger">{{$message}}</samp>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb--0">
                                                <button type="submit" class="axil-btn btn-bg-primary">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-location mb--40">
                                <h4 class="title mb--20">Our Store</h4>
                                <span class="address mb--20">8212 E. Glen Creek Street Orchard Park, NY 14127, United States of America</span>
                                <span class="phone">Phone: +123 456 7890</span>
                                <span class="email">Email: Hello@etrade.com</span>
                            </div>
                            <div class="contact-career mb--40">
                                <h4 class="title mb--20">Careers</h4>
                                <p>Instead of buying six things, one that you really like.</p>
                            </div>
                            <div class="opening-hour">
                                <h4 class="title mb--20">Opening Hours:</h4>
                                <p>Monday to Saturday: 9am - 10pm
                                    <br> Sundays: 10am - 6pm
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Google Map Area  -->
                <div class="axil-google-map-wrap axil-section-gap pb--0">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="1080" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=melbourne&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                        </div>
                    </div>
                </div>
                <!-- End Google Map Area  -->
            </div>
        </div>
        <!-- End Contact Area  -->

@endsection