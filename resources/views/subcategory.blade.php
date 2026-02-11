@extends('layouts.main')

@push('title')
<title>Sub-Category</title>
@endpush

@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center text-secondary"><i class="fa-solid fa-list"></i> {{$category.'/' .$sub_category}}</h1>
</div>

<!-- Sub_Category Products -->


@if($products->count()>0)

<section class="my-5">
    <div class="container">
        <div class="row theme-product">
            @foreach ($products as $product)
            <div class="col-lg-3 mb-4">
                <div class="card">

                    <a href="{{route('product_detail', ['category'=>$category,'sub_category'=>$sub_category,'product_detail'=>$product->product_name])}}"><img src="{{ asset('storage/'.$product->product_image) }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-title text-center"><a href="{{url('category/electronics/tv/detail')}}" class="text-dark text-decoration-none">{{ $product->product_name }}</a></h6>
                        <h5 class="card-title text-center">₹ {{ $product->product_price }}.00</h5>
                    </div>
                </div>
            </div>
            @endforeach
            @else <p class="alert alert-danger">Products Not found!</p>
            @endif
        </div>
    </div>
</section>
@endsection
