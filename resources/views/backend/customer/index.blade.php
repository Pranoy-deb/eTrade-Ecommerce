@extends('layouts.backend')
@section('title','Customers')
@section('backend_content')

<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle table-borderless">
                <thead class="text-uppercase small text-dark border-bottom">
                    <tr>
                        {{-- <th>Profile</th> --}}
                        <th>Cus. Name</th>
                        <th>Cus. Email</th>
                        <th>Cus. Address</th>
                        <th>Created At</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                    <tr>
                        <td>
                            <img src="{{asset('backend\assets\img\avatars\5.png')}}" 
                                 alt="Profile" 
                                 class="rounded-circle" 
                                 style="width:45px; height:45px; object-fit:cover;">
                                <samp class="fw-semibold text-dark ">
                                    {{ $customer->name }}</samp>
                        </td>
                        <td class="text-dark">
                            📧 {{ $customer->email }}
                        </td>
                        <td class="text-dark">
                            🏠 {{ $customer->address }}
                        </td>
                        <td class="text-dark">
                            {{ $customer->created_at->format('M d Y') }}<br>
                            {{ $customer->created_at->format('h:i A') }}
                        </td>
                        <td class="text-end">
                           <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#viewCustomerModal{{$customer->id}}">
                              <i class="bx bx-show me-1"></i>View
                           </a>
                        </td>
                    </tr>

                    {{-- Modal for each customer --}}
                    <div class="modal fade" id="viewCustomerModal{{$customer->id}}" tabindex="-1" aria-labelledby="viewCustomerModalLabel{{$customer->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                            <div class="modal-content border-0 shadow-lg">
                                {{-- Modal Header --}}
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title fw-bold text-dark" id="viewCustomerModalLabel{{$customer->id}}">
                                        <i class="bx bx-user-circle me-2"></i>Customer Information
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                {{-- Modal Body --}}
                                <div class="modal-body p-4">
                                    <form id="updateCustomerForm{{$customer->id}}" method="POST" action="" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="row">
                                            {{-- Left Column - Profile Section --}}
                                            <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                                                <div class="bg-light rounded-3 p-3 h-100">
                                                    <div class="text-center mb-3">
                                                        <div class="position-relative d-inline-block">
                                                            <img src="{{asset('backend\assets\img\avatars\5.png')}}" 
                                                                 alt="Profile" 
                                                                 id="profilePreview{{$customer->id}}"
                                                                 class="rounded-circle border border-3 border-primary shadow" 
                                                                 style="width:140px; height:140px; object-fit:cover;">
                                                            <label for="profileImage{{$customer->id}}" 
                                                                   class="position-absolute bottom-0 end-0 btn btn-primary rounded-circle d-flex align-items-center justify-content-center" 
                                                                   style="width:40px; height:40px; cursor:pointer; padding:0;"
                                                                   title="Change photo">
                                                                <i class="bx bx-camera"></i>
                                                            </label>
                                                            <input type="file" 
                                                                   id="profileImage{{$customer->id}}" 
                                                                   name="profile_image" 
                                                                   class="d-none" 
                                                                   accept="image/*"
                                                                   onchange="previewImage{{$customer->id}}(event)">
                                                        </div>
                                                    </div>
                                                    <h6 class="fw-bold text-dark text-center mb-1">{{ $customer->name }}</h6>
                                                    <p class="text-muted text-center small mb-3">Customer ID: #{{ $customer->id }}</p>
                                                    
                                                    <div class="bg-white rounded p-2 text-center">
                                                        <small class="text-muted d-block">Member Since</small>
                                                        <strong class="text-primary">{{ $customer->created_at->format('M Y') }}</strong>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Right Column - Form Fields --}}
                                            <div class="col-lg-9 col-md-8">
                                                {{-- Personal Information Section --}}
                                                <div class="mb-4">
                                                    <h6 class="text-dark fw-bold mb-3 pb-2 border-bottom">
                                                        <i class="bx bx-id-card text-primary me-2"></i>Personal Information
                                                    </h6>
                                                    <div class="row g-3">
                                                        <div class="col-md-6">
                                                            <label for="name{{$customer->id}}" class="form-label small fw-semibold mb-1">
                                                                Full Name <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="input-group">
                                                                <span class="input-group-text bg-light">
                                                                    <i class="bx bx-user text-muted"></i>
                                                                </span>
                                                                <input type="text" 
                                                                       class="form-control" 
                                                                       id="name{{$customer->id}}" 
                                                                       name="name" 
                                                                       value="{{ $customer->name }}" 
                                                                       placeholder="Enter full name"
                                                                       required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="email{{$customer->id}}" class="form-label small fw-semibold mb-1">
                                                                Email Address <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="input-group">
                                                                <span class="input-group-text bg-light">
                                                                    <i class="bx bx-envelope text-muted"></i>
                                                                </span>
                                                                <input type="email" 
                                                                       class="form-control" 
                                                                       id="email{{$customer->id}}" 
                                                                       name="email" 
                                                                       value="{{ $customer->email }}" 
                                                                       placeholder="email@example.com"
                                                                       required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="phone{{$customer->id}}" class="form-label small fw-semibold mb-1">
                                                                Phone Number
                                                            </label>
                                                            <div class="input-group">
                                                                <span class="input-group-text bg-light">
                                                                    <i class="bx bx-phone text-muted"></i>
                                                                </span>
                                                                <input type="tel" 
                                                                       class="form-control" 
                                                                       id="phone{{$customer->id}}" 
                                                                       name="phone" 
                                                                       value="{{ $customer->phone ?? '' }}"
                                                                       placeholder="+880 1XXX-XXXXXX">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="dateofbirth{{$customer->id}}" class="form-label small fw-semibold mb-1">
                                                                Date of Birth
                                                            </label>
                                                            <div class="input-group">
                                                                <span class="input-group-text bg-light">
                                                                    <i class="bx bx-calendar text-muted"></i>
                                                                </span>
                                                                <input type="date" 
                                                                       class="form-control" 
                                                                       id="dateofbirth{{$customer->id}}" 
                                                                       name="date_of_birth" 
                                                                       value="{{ $customer->date_of_birth ?? '' }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Address Information Section --}}
                                                <div class="mb-4">
                                                    <h6 class="text-dark fw-bold mb-3 pb-2 border-bottom">
                                                        <i class="bx bx-map text-primary me-2"></i>Address Information
                                                    </h6>
                                                    <div class="row g-3">
                                                        <div class="col-12">
                                                            <label for="address{{$customer->id}}" class="form-label small fw-semibold mb-1">
                                                                Street Address
                                                            </label>
                                                            <div class="input-group">
                                                                <span class="input-group-text bg-light">
                                                                    <i class="bx bx-home text-muted"></i>
                                                                </span>
                                                                <input type="text" 
                                                                       class="form-control" 
                                                                       id="address{{$customer->id}}" 
                                                                       name="address" 
                                                                       value="{{ $customer->address }}"
                                                                       placeholder="Street address, apartment, suite, etc.">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="city{{$customer->id}}" class="form-label small fw-semibold mb-1">
                                                                City
                                                            </label>
                                                            <div class="input-group">
                                                                <span class="input-group-text bg-light">
                                                                    <i class="bx bx-buildings text-muted"></i>
                                                                </span>
                                                                <input type="text" 
                                                                       class="form-control" 
                                                                       id="city{{$customer->id}}" 
                                                                       name="city" 
                                                                       value="{{ $customer->city ?? '' }}"
                                                                       placeholder="City">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="state{{$customer->id}}" class="form-label small fw-semibold mb-1">
                                                                State/Division
                                                            </label>
                                                            <div class="input-group">
                                                                <span class="input-group-text bg-light">
                                                                    <i class="bx bx-map-alt text-muted"></i>
                                                                </span>
                                                                <input type="text" 
                                                                       class="form-control" 
                                                                       id="state{{$customer->id}}" 
                                                                       name="state" 
                                                                       value="{{ $customer->state ?? '' }}"
                                                                       placeholder="State/Division">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="zip{{$customer->id}}" class="form-label small fw-semibold mb-1">
                                                                Postal Code
                                                            </label>
                                                            <div class="input-group">
                                                                <span class="input-group-text bg-light">
                                                                    <i class="bx bx-mail-send text-muted"></i>
                                                                </span>
                                                                <input type="text" 
                                                                       class="form-control" 
                                                                       id="zip{{$customer->id}}" 
                                                                       name="zip" 
                                                                       value="{{ $customer->zip ?? '' }}"
                                                                       placeholder="Postal code">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Additional Notes Section --}}
                                                <div class="mb-3">
                                                    <h6 class="text-dark fw-bold mb-3 pb-2 border-bottom">
                                                        <i class="bx bx-message-square-detail text-primary me-2"></i>Additional Notes
                                                    </h6>
                                                    <textarea class="form-control" 
                                                              id="notes{{$customer->id}}" 
                                                              name="notes" 
                                                              rows="2"
                                                              placeholder="Add any additional notes or comments about this customer...">{{ $customer->notes ?? '' }}</textarea>
                                                </div>

                                                {{-- Account Info --}}
                                                <div class="bg-light rounded p-3 mt-3">
                                                    <div class="row text-center">
                                                        <div class="col-6">
                                                            <small class="text-muted d-block mb-1">
                                                                <i class="bx bx-calendar-check text-success"></i> Account Created
                                                            </small>
                                                            <strong class="text-dark small d-block">{{ $customer->created_at->format('M d, Y') }}</strong>
                                                            <small class="text-muted">{{ $customer->created_at->format('h:i A') }}</small>
                                                        </div>
                                                        <div class="col-6">
                                                            <small class="text-muted d-block mb-1">
                                                                <i class="bx bx-refresh text-info"></i> Last Modified
                                                            </small>
                                                            <strong class="text-dark small d-block">{{ $customer->updated_at->format('M d, Y') }}</strong>
                                                            <small class="text-muted">{{ $customer->updated_at->format('h:i A') }}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                {{-- Modal Footer --}}
                                <div class="modal-footer bg-light">
                                    <button type="button" class="btn btn-secondary px-4 bg-danger" data-bs-dismiss="modal">
                                        <i class="bx bx-x-circle me-1 "></i>Cancel
                                    </button>
                                    <button type="submit" form="updateCustomerForm{{$customer->id}}" class="btn btn-primary px-4">
                                        <i class="bx bx-check-circle me-1"></i>Save Changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Inline Script for Image Preview --}}
                    @push('js')   
                    <script>
                        function previewImage{{$customer->id}}(event) {
                            const file = event.target.files[0];
                            const preview = document.getElementById('profilePreview{{$customer->id}}');
                            
                            if (file) {
                                // Validate file size (max 2MB)
                                if (file.size > 2 * 1024 * 1024) {
                                    alert('File size must be less than 2MB');
                                    event.target.value = '';
                                    return;
                                }
                                
                                // Validate file type
                                if (!file.type.match('image.*')) {
                                    alert('Please select an image file');
                                    event.target.value = '';
                                    return;
                                }
                                
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    preview.src = e.target.result;
                                }
                                reader.readAsDataURL(file);
                            }
                        }
                    </script>
                    @endpush
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection