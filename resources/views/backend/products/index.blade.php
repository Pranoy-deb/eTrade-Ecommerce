@extends('layouts.backend')
@section('title', "all products")
@section('backend_content')
{{-- @dd($products); --}}
<div class="card shadow-sm border-0">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover align-middle table-striped">
                <thead class="table-light text-uppercase">
                    <tr>
                        <th>Sl</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Selling Price</th>
                        <th>SKU</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key=>$product)
                    <tr>
                        <td>{{++$key}}</td>
                        <td class="d-flex align-items-center">
                            <img width="60" class="rounded me-2 border" 
                                src="{{asset('storage/'. $product->featured_img)}}">
                            {{ $product->title}}
                        </td>
                        <td>{{ $product->price}} Tk.</td>
                        <td>{{ $product->sellign_price}} Tk.</td>
                        <td>{{ $product->sku}}</td>
                        <td>{{ $product->brand}}</td>
                        <td>{{ $product->category->title ?? 'N/A' }}</td>
                        <td>
                            <span class="badge {{ $product->status ? 'bg-success' : 'bg-danger' }}">{{ $product->status ? 'Active' : 'Deactive'}}</span>
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('backend.product.edit', $product) }}" class="btn btn-sm btn-dark">Edit</a>
                                <a href={{ route('backend.product.delete', $product) }} class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
</div>

@endsection