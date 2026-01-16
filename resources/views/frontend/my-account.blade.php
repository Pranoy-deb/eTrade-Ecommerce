@extends('layouts.frontend')
@section('title','My-profile')
@section('frontend')

 <!-- Start My Account Area  -->
        <div class="axil-dashboard-area axil-section-gap">
            <div class="container">
                <div class="axil-dashboard-warp">
                    <div class="axil-dashboard-author">
                        <div class="media">
                            <div class="thumbnail position-relative d-inline-block" style="width:130px; height:130px;">
                            <!-- Profile Image -->
                            <img src="{{ auth('customer')->user()->profile_imge? asset('storage/' . auth('customer')->user()->profile_imge) : 'https://api.dicebear.com/9.x/notionists/svg?seed=' . auth('customer')->user()->first_name }}"
                                alt="Profile"
                                class="rounded-circle border shadow-sm"
                                style="width:100%; height:100%; object-fit:cover;">

                            <!-- Camera Icon Overlay (triggers modal) -->
                            <button type="button"
                                    class="position-absolute bottom-0 end-0 btn btn-light rounded-circle d-flex align-items-center justify-content-center shadow"
                                    style="width:34px; height:34px; cursor:pointer; padding:0;"
                                    title="Change photo"
                                    data-bs-toggle="modal"
                                    data-bs-target="#updateProfileImageModal">
                                <i class="bx bxs-camera text-primary fs-5"></i>
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="updateProfileImageModal" tabindex="-1" aria-labelledby="updateProfileImageModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0 rounded-4 shadow-lg" style="backdrop-filter:blur(8px); background:rgba(255,255,255,0.95);">

                            <!-- Header -->
                            <div class="modal-header border-0 bg-gradient text-white" style="background:linear-gradient(135deg,#667eea,#764ba2);">
                                <h5 class="modal-title fw-bold" id="updateProfileImageModalLabel">Image Edit</h5>
                                <!-- Close Icon -->
                                <button type="button" class="btn-close btn-close-white fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <!-- Body -->
                            <form method="POST" action="{{ route('frontend.customer.update.profile') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body text-center">

                                <!-- Image Preview Box -->
                                <div class="border rounded-3 mx-auto mb-4 shadow-sm" style="width:400px; height:400px; overflow:hidden;">
                                    <img id="previewImage"
                                        src="https://api.dicebear.com/9.x/notionists/svg?seed={{ auth('customer')->user()->name }}"
                                        alt="Preview"
                                        style="width:100%; height:100%; object-fit:cover;">
                                </div>

                                <!-- Bigger File Input -->
                                <div class="mb-4 px-5 py-2 fw-bold">
                                    <input type="file" name="profile_imge" id="profileImageInput" 
                                        class="form-control form-control-lg" accept="image/*">
                                </div>

                                <!-- Bigger Upload Button -->
                                <button type="submit" class="btn btn-primary btn-lg px-5 py-2 fw-bold">
                                    <i class="bx bx-upload me-2"></i> Upload
                                </button>
                                </div>
                            </form>

                            </div>
                        </div>
                        </div>
                            <div class="media-body">
                                <h5 class="title mb-0">Hello {{auth('customer')->user()->first_name}}</h5>
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
                                                        <th scope="col">TrxID</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Total Amount</th>
                                                        <th scope="col">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($orders as $order)
                                                    <tr>
                                                        <th scope="row">{{$order->transaction_id}}</th>
                                                        <td>{{$order->created_at->format('M d,Y')}}</td>
                                                        <td>{{$order->status}}</td>
                                                        <td>{{$order->amount}}BDT</td>
                                                        <td><a href="{{ route('frontend.customer.profile') }}" class="axil-btn view-btn">View</a></td>
                                                    </tr>
                                                    @empty
                                                    <td><h5 class="text-center">You have no Order!</h5></td>
                                                    @endforelse
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
                                        <form method="POST" action="{{route('frontend.customer.update.profile')}}" class="account-details-form">
                                            @csrf
                                            <div class="row">

                                                <!-- First Name -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>First Name</label>
                                                        <input type="text" name="first_name" class="form-control text-dark" value="{{ $customer->first_name ?? '' }}" required>
                                                    </div>
                                                    @error('first_name')
                                                        <samp class="text-danger">{{$message}}</samp>
                                                    @enderror
                                                </div>

                                                <!-- Last Name -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <input type="text" name="last_name" class="form-contro text-darkl text-dark" value="{{ $customer->last_name ?? '' }}" required>
                                                    </div>
                                                    @error('last_name')
                                                        <samp class="text-danger">{{$message}}</samp>
                                                    @enderror
                                                </div>

                                                <!-- Email -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <input type="email" name="email" class="form-control text-dark" value="{{ $customer->email ?? '' }}" required>
                                                    </div>
                                                    @error('email')
                                                        <samp class="text-danger">{{$message}}</samp>
                                                    @enderror
                                                </div>

                                                <!-- Phone -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Phone Number</label>
                                                        <input type="text" name="phone" class="form-control text-dark" value="{{ $customer->phone_num ?? '' }}" required>
                                                    </div>
                                                    @error('phone')
                                                        <samp class="text-danger">{{$message}}</samp>
                                                    @enderror
                                                </div>

                                                <!-- Country -->
                                                <div class="col-lg-6">
                                                    <div class="form-group text-dark">
                                                        <label>Country / Region</label>
                                                        <select name="country" class="form-control select2" required>
                                                            <option value="Bangladesh" {{ ($customer->country ?? '') == 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- City -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <input type="text" name="city" class="form-control text-dark" value="{{ $customer->city ?? '' }}" required>
                                                    </div>
                                                    @error('city')
                                                        <samp class="text-danger">{{$message}}</samp>
                                                    @enderror
                                                </div>

                                                <!-- Address -->
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Street Address</label>
                                                        <input type="text" name="street_addr" class="form-control text-dark" value="{{ $customer->street_addr ?? '' }}" >
                                                    </div>
                                                    @error('street_addr')
                                                        <samp class="text-danger">{{$message}}</samp>
                                                    @enderror
                                                </div>

                                                <!-- Postal Code -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Postal Code / ZIP</label>
                                                        <input type="text" name="zip_code" class="form-control text-dark" value="{{ $customer->zip_code ?? '' }}" >
                                                    </div>
                                                    @error('zip_code')
                                                        <samp class="text-danger">{{$message}}</samp>
                                                    @enderror
                                                </div>

                                                <!-- Company (optional) -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Company (Optional)</label>
                                                        <input type="text" name="company" class="form-control text-dark" value="{{ $customer->company ?? '' }}">
                                                    </div>
                                                    @error('company')
                                                        <samp class="text-danger">{{$message}}</samp>
                                                    @enderror
                                                </div>

                                                <!-- Save Button -->
                                                <div class="col-12">
                                                    <div class="form-group mb--0 mt-3">
                                                    <button type="submit" class="axil-btn float-end btn-primary"> Save Changes </button>                                                    </div>
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

        @push('js')
            <script>
            document.getElementById('profileImageInput').addEventListener('change', function(e) {
                const file = e.target.files[0];
                if(file){
                    const reader = new FileReader();
                    reader.onload = function(ev){
                        document.getElementById('previewImage').src = ev.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
            </script>
        @endpush




@endsection