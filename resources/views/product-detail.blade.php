@extends('layouts.main')

@push('title')
<title>Product Details</title>
@endpush

@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center text-secondary"><i class="fa-solid fa-layer-group"></i> Product Detail</h1>
</div>

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="{{asset('storage/'.$product_detail->product_image)}}" class="rounded img-fluid">
            </div>
            <div class="col-lg-8">
                <div>
                    <h2>{{$product_detail->product_name}}</h2>
                    <h5>₹ {{$product_detail->product_price}}.00</h5>
                    <div>
                        <div class="d-flex flex-row mb-3">
                            <div>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="p-1 mx-2">
                                <h6>(2 Customer Reviews)</h6>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="d-flex flex-row mb-3">
                            <div class="p-1">
                                <h6>Quantity</h6>
                            </div>
                            <div class="p-1">
                                <button class="btn btn-secondary btn-sm rounded-start-pill btn-minus">
                                    <i class="fa-solid fa-minus"></i>
                                </button>

                                {{-- <input class="mx-2 qty-val" value="1"> --}}

                                    <input type="text" class="qty-val mx-1  text-center border-0 bg-white" value="1" disabled style="width:35px; text-align:center;">

                                <button class="btn btn-secondary btn-sm rounded-end-pill btn-plus">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                            </div>

                            {{-- <div class="d-flex align-items-center">
                                <button class="btn btn-secondary btn-sm  rounded-start-pill  btn-minus"><i class="fa-solid fa-minus"></i></button>

                                <input type="text" class="qty-input mx-1  text-center border-0 bg-white" value="1" disabled style="width:35px; text-align:center;">

                                <button class="btn btn-secondary btn-sm rounded-end-pill btn-plus"> <i class="fa-solid fa-plus"></i></button>
                            </div> --}}


                        </div>
                    </div>
                    <p>{{$product_detail->product_description}}.</p>

                    <div>
                        <button class="btn theme-green-btn text-light rounded-pill me-1 px-3 py-2 add-to-cart">Add to cart</button>
                        <a class="btn theme-orange-btn text-light rounded-pill px-3 py-2">Buy Now</a>
                    </div>
                </div>

            </div>
            <div class="my-4">
                <h2>Product Description</h2>
                <p>{{$product_detail->product_description}}.</p>
            </div>
            <!-- Related Products -->
            <div class="mb-5">
                <section>
                    <div class="container">

                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <h2>Related Products</h2>
                            </div>
                            <div><a href="#" class="btn btn-sm theme-orange-btn text-light rounded-pill px-3 py-2">View All</a></div>

                        </div>
                        <div class="row theme-product">
                            <div class="col-lg-3">
                                <div class="card ">

                                    <a href="#"><img src="{{asset('assets/images/products/5.jpg')}}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h6 class="card-title text-center "><a href="#" class="text-dark text-decoration-none">Camera</a></h6>
                                        <h5 class="card-title text-center">₹ 2499.00</h5>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="card">

                                    <a href="#"><img src="{{asset('assets/images/products/6.jpg')}}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Women Shoes</a></h6>
                                        <h5 class="card-title text-center">₹ 1099.00</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">

                                    <a href="#"><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">LED TV</a></h6>
                                        <h5 class="card-title text-center">₹ 5999.00</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">

                                    <a href="#"><img src="{{asset('assets/images/products/8.jpg')}}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Washing Machine</a></h6>
                                        <h5 class="card-title text-center">₹ 13999.00</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <hr>
            <!-- Review -->
            <section>
                <h2>02 Reviews</h2>
                <div class="row mt-4">
                    <div class="col-lg-1">
                        <img src="{{asset('assets/images/review/user.png')}}" class="rounded-circle img-fluid">
                    </div>
                    <div class="col-lg-11">
                        <div>
                            <h4>John Doe</h4>
                            <div>
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <h6>19 Dec, 2024</h6>
                                    </div>
                                    <div>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>

                                </div>
                            </div>
                            <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>
                            <div>
                                <a class="btn theme-orange-btn btn-sm text-light rounded-pill px-3 py-2">Reply</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-1 mt-4">
                        <img src="{{asset('assets/images/review/user.png')}}" class="rounded-circle img-fluid">
                    </div>
                    <div class="col-lg-11 mt-4">
                        <div>
                            <h4>Alen Musk</h4>
                            <div>
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <h6>14 Nov, 2024</h6>
                                    </div>
                                    <div>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>

                                </div>
                            </div>
                            <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>
                            <div>
                                <a class="btn theme-orange-btn btn-sm text-light rounded-pill px-3 py-2">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Add a Review -->

            <section>
                <div class="container my-5 bg-light p-5">
                    <h2>Add a Review</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <form>
                                <div class="form-text">Rate this Product? *

                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                </div>
                                <div class="row my-3">
                                    <div class="col-lg-6 mb-3">
                                        <input type="text" class="form-control form-control-lg" placeholder="Your Name">
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <input type="email" class="form-control form-control-lg" placeholder="Your Email">
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <textarea class="form-control form-control-lg" placeholder="Your Message" rows="4"></textarea>
                                    </div>

                                    <div>
                                        <a class="btn theme-orange-btn text-light rounded-pill px-3 py-2">Post a Comment <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>


    <script>
        // Increase Quantity
        function increase_qty() {
            var _qty = $(".qty-val").val();
            _qty = parseInt(_qty) + 1;
            $(".qty-val").val(_qty);

        }
        // Decrease Quantity
        function decrease_qty() {
            var _qty = $(".qty-val").val();
            if(_qty > 1){
            _qty = parseInt(_qty) - 1;
            $(".qty-val").val(_qty);
        }else{
            alert('Qty should be at least 1');
        }
    }
        
    // Add to Cart

        function add_to_cart(){
            var qty = parseInt($(".qty-val").val());
            var name = "{{$product_detail->product_name}}";
            var price = parseFloat("{{$product_detail->product_price}}");
            var total = qty * price;
            var image = "{{asset('storage/'.$product_detail->product_image)}}";


            var cartData ={
            'product_name': name,
            'quantity': qty,
            'product_price': price,
            'total_price': total,
            'image_url': image
        };

        var cart = JSON.parse(localStorage.getItem("cart")) || [];

        let exestingIndex = cart.findIndex(item => item.product_name === name);
        if(exestingIndex > -1){
        cart[exestingIndex].quantity += qty;
        cart[exestingIndex].total_price = cart[exestingIndex].quantity * price;
        }else{
            cart.push(cartData);
        }
        localStorage.setItem("cart", JSON.stringify(cart));
        update_cart_count();
        alert("item added to cart!");
        }

    // Event Quantity
        $(document).ready(function() {
        $(document).on('click', '.btn-plus', increase_qty);
        $(document).on('click', '.btn-minus', decrease_qty);
        $(document).on('click', '.add-to-cart', add_to_cart);
        update_cart_count();
    });
    </script>



    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const minusBtns = document.querySelectorAll(".btn-minus");
            const plusBtns = document.querySelectorAll(".btn-plus");

            // Minus Button
            minusBtns.forEach(function(btn) {
                btn.addEventListener("click", function() {
                    let input = this.parentElement.querySelector(".qty-input");
                    let currentValue = parseInt(input.value);
                    if (!isNaN(currentValue) && currentValue > 1) {
                        input.value = currentValue - 1;
                    }
                });
            });

            // Plus Button
            plusBtns.forEach(function(btn) {
                btn.addEventListener("click", function() {
                    let input = this.parentElement.querySelector(".qty-input");
                    let currentValue = parseInt(input.value);
                    if (!isNaN(currentValue)) {
                        input.value = currentValue + 1;
                    }
                });
            });
        });

    </script> --}}



    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}


</section>

@endsection
