@extends('layouts.frontend')
@section('title','My-profile')
@section('frontend')
 <!-- Start My Account Area  -->
        <div class="axil-dashboard-area axil-section-gap">
            <div class="container">
                <div class="axil-dashboard-warp">
                    <div class="axil-dashboard-author">
                        <div class="media">
                            <div class="thumbnail">
                                <img src="https://api.dicebear.com/9.x/notionists/svg?seed={{auth('customer')->user()->name}}" alt="Hello Annie" width="100px">
                            </div>
                            <div class="media-body">
                                <h5 class="title mb-0">Hello {{auth('customer')->user()->name}}</h5>
                                <span class="joining-date">eTrade Member Since {{auth('customer')->user()->created_at->format('M d,Y')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-4">
                            <aside class="axil-dashboard-aside">
                                <nav class="axil-dashboard-nav">
                                    <div class="nav nav-tabs" role="tablist">
                                        <a class="nav-item nav-link active" data-bs-toggle="tab" href="{{ route('frontend.customer.profile') }}#nav-dashboard" role="tab" aria-selected="true"><i class="fas fa-th-large"></i>Dashboard</a>
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="{{ route('frontend.customer.profile') }}#nav-orders" role="tab" aria-selected="false"><i class="fas fa-shopping-basket"></i>Orders</a>
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="{{ route('frontend.customer.profile') }}#nav-downloads" role="tab" aria-selected="false"><i class="fas fa-file-download"></i>Downloads</a>
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="{{ route('frontend.customer.profile') }}#nav-address" role="tab" aria-selected="false"><i class="fas fa-home"></i>Addresses</a>
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="{{ route('frontend.customer.profile') }}#nav-account" role="tab" aria-selected="false"><i class="fas fa-user"></i>Account Details</a>
                                        {{-- <a class="nav-item nav-link" hre""><i class="fal fa-sign-out"></i>Logout</a> --}}
                                        <form method="POST" action="{{route('frontend.customer.logout')}}">
                                            @csrf
                                            <button class="nav-item nav-link"><i class="fal fa-sign-out"></i>Logout</button>
                                        </form>
                                    </div>
                                </nav>
                            </aside>
                        </div>
                        <div class="col-xl-9 col-md-8">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="nav-dashboard" role="tabpanel">
                                    <div class="axil-dashboard-overview">
                                        <div class="welcome-text d-flex justify-content-between">Hello {{auth('customer')->user()->name}}
                                            <form method="POST" action="{{route('frontend.customer.logout')}}">
                                                @csrf
                                                <button class="btn btn-danger">Logout</button>
                                            </form>
                                        </div>
    
                                        <p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-orders" role="tabpanel">
                                    <div class="axil-dashboard-order">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Order</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">#6523</th>
                                                        <td>September 10, 2020</td>
                                                        <td>Processing</td>
                                                        <td>$326.63 for 3 items</td>
                                                        <td><a href="{{ route('frontend.customer.profile') }}#" class="axil-btn view-btn">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#6523</th>
                                                        <td>September 10, 2020</td>
                                                        <td>On Hold</td>
                                                        <td>$326.63 for 3 items</td>
                                                        <td><a href="{{ route('frontend.customer.profile') }}#" class="axil-btn view-btn">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#6523</th>
                                                        <td>September 10, 2020</td>
                                                        <td>Processing</td>
                                                        <td>$326.63 for 3 items</td>
                                                        <td><a href="{{ route('frontend.customer.profile') }}#" class="axil-btn view-btn">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#6523</th>
                                                        <td>September 10, 2020</td>
                                                        <td>Processing</td>
                                                        <td>$326.63 for 3 items</td>
                                                        <td><a href="{{ route('frontend.customer.profile') }}#" class="axil-btn view-btn">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#6523</th>
                                                        <td>September 10, 2020</td>
                                                        <td>Processing</td>
                                                        <td>$326.63 for 3 items</td>
                                                        <td><a href="{{ route('frontend.customer.profile') }}#" class="axil-btn view-btn">View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-downloads" role="tabpanel">
                                    <div class="axil-dashboard-order">
                                        <p>You don't have any download</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-address" role="tabpanel">
                                    <div class="axil-dashboard-address">
                                        <p class="notice-text">The following addresses will be used on the checkout page by default.</p>
                                        <div class="row row--30">
                                            <div class="col-lg-6">
                                                <div class="address-info mb--40">
                                                    <div class="addrss-header d-flex align-items-center justify-content-between">
                                                        <h4 class="title mb-0">Shipping Address</h4>
                                                        <a href="{{ route('frontend.customer.profile') }}#" class="address-edit"><i class="far fa-edit"></i></a>
                                                    </div>
                                                    <ul class="address-details">
                                                        <li>Name: Annie Mario</li>
                                                        <li>Email: annie@example.com</li>
                                                        <li>Phone: 1234 567890</li>
                                                        <li class="mt--30">7398 Smoke Ranch Road <br>
                                                        Las Vegas, Nevada 89128</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="address-info">
                                                    <div class="addrss-header d-flex align-items-center justify-content-between">
                                                        <h4 class="title mb-0">Billing Address</h4>
                                                        <a href="{{ route('frontend.customer.profile') }}#" class="address-edit"><i class="far fa-edit"></i></a>
                                                    </div>
                                                    <ul class="address-details">
                                                        <li>Name: Annie Mario</li>
                                                        <li>Email: annie@example.com</li>
                                                        <li>Phone: 1234 567890</li>
                                                        <li class="mt--30">7398 Smoke Ranch Road <br>
                                                        Las Vegas, Nevada 89128</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-account" role="tabpanel">
                                    <div class="col-lg-9">
                                        <div class="axil-dashboard-account">
                                            <form class="account-details-form">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control" value="Annie">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control" value="Mario">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group mb--40">
                                                            <label>Country/ Region</label>
                                                            <select class="select2">
                                                                <option value="1">United Kindom (UK)</option>
                                                                <option value="1">United States (USA)</option>
                                                                <option value="1">United Arab Emirates (UAE)</option>
                                                                <option value="1">Australia</option>
                                                            </select>
                                                            <p class="b3 mt--10">This will be how your name will be displayed in the account section and in reviews</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <h5 class="title">Password Change</h5>
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control" value="123456789101112131415">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>New Password</label>
                                                            <input type="password" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Confirm New Password</label>
                                                            <input type="password" class="form-control">
                                                        </div>
                                                        <div class="form-group mb--0">
                                                            <input type="submit" class="axil-btn" value="Save Changes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End My Account Area  -->
@endsection