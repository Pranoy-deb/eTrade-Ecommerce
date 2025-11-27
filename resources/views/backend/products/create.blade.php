@extends('layouts.backend')
@section('title', "all products")
@section('backend_content')

<div class="card">
    <div class="card-header text-center fs-4 text-decoration-underline">Add Product</div>
    <div class="card-body">
        <form action="{{ route('backend.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="">Product Title <span class="text-danger">*</span></label>
                        <input type="text" value="{{ old('product_title')}}" name="product_title" required class="form-control">
                        @error('product_title')
                        <samp class="text-danger">{{ $message }}</samp>
                        @enderror
                    </div>
                    <div class="row my-3">
                    <div class="form-group col-lg-4">
                        <label for="">Price<span class="text-danger">*</span></label>
                        <input type="number" value="{{ old('price')}}" name="price" required class="form-control">
                        @error('price')
                        <samp class="text-danger">{{ $message }}</samp>
                        @enderror
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="">Selling price<span class="text-danger">*</span></label>
                        <input type="number"value="{{ old('selling_price')}}" name="selling_price" class="form-control">
                        @error('selling_price')
                        <samp class="text-danger">{{ $message }}</samp>
                        @enderror
                    </div>
                    
                    <div class="form-group col-lg-4">
                        <label for="">Brand</label>
                        <input type="text" value="{{ old('brand')}}" name="brand"  class="form-control">
                        @error('brand')
                        <samp class="text-danger">{{ $message }}</samp>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="">SKU</label>
                        <input type="text" value="{{ old('sku')}}" name="sku" class="form-control">
                        @error('sku')
                        <samp class="text-danger">{{ $message }}</samp>
                        @enderror
                    </div>
                    </div>
                    <textarea class="form-control my-3" placeholder="Short Details......" name="short_details">{{old('short_details')}}</textarea>
                    @error('short_details')
                     <samp class="text-danger">{{ $message }}</samp>
                    @enderror
                    <textarea class="form-control my-3" placeholder="Features....." name="features">{{old('features')}}</textarea>
                    @error('features')
                      <samp class="text-danger">{{ $message }}</samp>
                    @enderror
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="">Featured Image</label>
                        <input type="file" value="" name="featured_img" class="form_control">
                        @error('featured_img')
                         <samp class="text-danger">{{ $message }}</samp>
                        @enderror
                    </div>
                     <div class="form-group my-3">
                        <label for="">Gallery Images</label>
                        <input type="file" value="" multiple name="gall_img[]" class="form_control">
                        @error('gall_img.*')
                         <samp class="text-danger">{{ $message }}</samp>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="">Select a Category<samp class="text-danger">*</samp></label>
                       <select name="category" class="form-control">
                        <option value="">Choose one......</option>
                        @foreach ($categorise as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>

                        @error('category')
                        <samp class="text-danger">{{ $message }}</samp>
                        @enderror
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

</div>

@endsection