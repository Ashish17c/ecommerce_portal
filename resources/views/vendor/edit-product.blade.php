@extends('vendor.includes.main')
@push('title')
<title>Edit Product</title>
@endpush

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card p-4 mt-4">
                <form method="POST" action="{{ url('vendor/edit-product', $product->p_id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-xl-8 col-md-8">
                            <h4>Edit Product</h4>

                            <div class="row mt-3">
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Product Name</label>
                                    <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}">
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Price</label>
                                    <input type="text" class="form-control" name="product_price" value="{{$product->product_price}}">
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Category</label>

                                    <select class="form-select" name="category_id">
                                        @foreach ($category as $cat)
                                        <option value="{{ $cat->c_id }}" {{ $cat->c_id == $product->category_id ? 'selected' : '' }}>
                                            {{ $cat->c_name }}
                                        </option>
                                        @endforeach
                                    </select>


                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Stock Quantity</label>
                                    <input type="text" class="form-control" name="product_stock" value="{{$product->product_stock }}">
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Product Description</label>
                                    <textarea class="form-control" placeholder="Fill product description here" name="product_description" id="floatingTextarea">{{$product->product_description}}</textarea>
                                </div>
                                <div class="col-lg-3">
                                    <button class="btn btn-primary" type="submit">Edit Product</button>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-4 col-md-4 mt-5">
                            <div class="text-center">
                                <img src="{{asset('storage/'.$product->product_image)}}" style="width:155px;" class="rounded-circle">
                                <div class="mt-3">
                                    <label for="image" class="form-label btn btn-dark">Choose Image</label>
                                    <input type="file" class="form-control d-none" id="image">
                                </div>
                            </div>

                        </div>
                    </div>
                </form>

                {{-- <form method="POST" action="{{ url('vendor/add-product') }}" enctype="multipart/form-data">
                @csrf

                <!-- Product Name -->
                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="product_name" value="{{ old('product_name') }}" required>
                </div>

                <!-- Price -->
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" step="0.01" class="form-control" name="product_price" value="{{ old('product_price') }}" required>
                </div>

                <!-- Category -->
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="form-select" name="category_id" required>
                        <option value="">Select Category</option>
                        @foreach ($category as $cat)
                        <option value="{{ $cat->c_id }}" {{ old('category_id') == $cat->c_id ? 'selected' : '' }}>
                            {{ $cat->c_name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <!-- Stock -->
                <div class="mb-3">
                    <label class="form-label">Stock Quantity</label>
                    <input type="number" class="form-control" name="product_stock" value="{{ old('product_stock') }}" required>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Product Description</label>
                    <textarea class="form-control" name="product_description" required>{{ old('product_description') }}</textarea>
                </div>

                <!-- Image -->
                <div class="mb-3">
                    <label class="form-label">Product Image</label>
                    <input type="file" class="form-control" name="product_image" accept="image/*" required>
                </div>

                <button type="submit" class="btn btn-primary">Add Product</button>
                </form> --}}


            </div>
    </main>




    @endsection
