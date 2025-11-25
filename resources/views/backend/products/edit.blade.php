@extends('layouts.backend')
@section('title', "all products")
@section('backend_content')
{{-- @dd($products); --}}
<div class="card">
    <div class="card-header text-center fs-4 text-decoration-underline">Edit Product</div>
    <div class="card-body">
        <form action="{{ route('backend.product.update', $products) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="">Product Title <span class="text-danger">*</span></label>
                        <input type="text" value="{{$products->title}}" name="title" required class="form-control">
                        @error('product_title')
                        <samp class="text-danger">{{ $message }}</samp>
                        @enderror
                    </div>
                    <div class="row my-3">
                    <div class="form-group col-lg-4">
                        <label for="">Price<span class="text-danger">*</span></label>
                        <input type="number" value="{{$products->price}}" name="price" required class="form-control">
                        @error('price')
                        <samp class="text-danger">{{ $message }}</samp>
                        @enderror
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="">Selling price<span class="text-danger">*</span></label>
                        <input type="number" value="{{$products->sellign_price}}" name="selling_price" class="form-control">
                        @error('selling_price')
                        <samp class="text-danger">{{ $message }}</samp>
                        @enderror
                    </div>
                    
                    <div class="form-group col-lg-4">
                        <label for="">Brand</label>
                        <input type="text" name="brand" value="{{$products->brand}}"  class="form-control">
                        @error('brand')
                        <samp class="text-danger">{{ $message }}</samp>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="">SKU</label>
                        <input type="text" name="sku" value="{{$products->sku}}" class="form-control">
                        @error('sku')
                        <samp class="text-danger">{{ $message }}</samp>
                        @enderror
                    </div>
                    </div>
                    <textarea class="form-control my-3" placeholder="Short Details......" name="short_details">{{$products->short_details}}</textarea>
                    @error('short_details')
                     <samp class="text-danger">{{ $message }}</samp>
                    @enderror
                    <textarea class="form-control my-3" placeholder="Features....." name="features">{{$products->features}}</textarea>
                    @error('features')
                      <samp class="text-danger">{{ $message }}</samp>
                    @enderror
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="">Old Featured Image</label>
                        <div class="d-flex flex-wrap gap-1">
                        @if($products->featured_img)
                        <img src="{{ asset('storage/' . $products->featured_img) }}" width="100" alt="Old Image">
                        @endif
                        </div>
                        <label for="">Add New Featured Image</label>
                        <input type="file" value="{{ asset('storage/' . $products->featured_img)}}" name="featured_img" class="form_control">
                        @error('featured_img')
                         <samp class="text-danger">{{ $message }}</samp>
                        @enderror
                    </div>
                     <div class="form-group my-3">
                        <label for="">Old Gallery Images</label>
                        <div class="d-flex flex-wrap gap-1">
                         @if(!empty($gallery))
                            @foreach($gallery as $img)
                                <img src="{{ asset('storage/' . $img) }}" width="70" class="m-1">
                            @endforeach
                        @endif
                        </div>
                        <label for="">Add New Gallery Images</label>
                        <div class="d-flex flex-wrap gap-1">
                        <input type="file" multiple name="gall_img[]" class="form_control">
                        @error('gall_img')
                         <samp class="text-danger">{{ $message }}</samp>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group my-3">
                      <label for="">Select a Category <span class="text-danger">*</span></label>
                        <select name="category_id" class="form-control">
                            <option>Choose one......</option>
                            @foreach ($categorise as $category)
                                <option value="{{ $category->id }}"
                                    {{ $products->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->title }}
                                </option>
                            @endforeach
                        </select>
                        @error('category')
                        <samp class="text-danger">{{ $message }}</samp>
                        @enderror
                    </div>
                    <button class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>

</div>

@endsection