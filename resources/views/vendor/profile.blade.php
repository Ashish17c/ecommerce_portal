@extends('vendor.includes.main')
@push('title')
<title>Profile</title>
@endpush

@section('content')

<div id="layoutSidenav_content">
    <main>
        <form method="POST" action="{{ url('vendor/profile') }}" enctype="multipart/form-data">
            @csrf
            <div class="container p-4">
                @session('msg')
                <div class="alert alert-success">{{session('msg') }}</div>
                @endsession
                <div class="card p-4">
                    <div class="row">

                        <div class="col-xl-8 col-md-8">
                            <h4>Basic Information</h4>


                            <div class="row mt-3">

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Identification Number</label>
                                    <input type="text" class="form-control" name="id_number" placeholder="PAN/Aadhar no.">
                                    @error('id_number')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Business Name</label>
                                    <input type="text" class="form-control" name="business_name" placeholder="ABC PVT. LTD.">
                                    @error('business_name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="full_name" value="{{ $vendor->full_name ?? '' }}">
                                    @error('full_name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ $vendor->email ?? '' }}" placeholder="example@gmail.com">
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" name="phone" value="{{ $vendor->phone ?? '' }}" placeholder="+91">
                                    @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea type="text" class="form-control" name="address" placeholder="Enter the address">{{ $vendor->address  ?? '' }}</textarea>
                                    @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>

                        </div>

                        <div class="col-xl-4 col-md-4 mt-5">
                            <div class="text-center">
                                <img src="{{asset('dashboard/assets/img/user.png')}}" style="width:155px;">
                                <div class="mt-3">
                                    <label for="image" class="form-label btn btn-dark">Choose Image</label>
                                    <input type="file" name="image" class="form-control d-none" id="image">
                                    @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

                <div class="card p-4 mt-4">
                    <div class="row">

                        <div class="col-xl-12 col-md-12">
                            <h4>Business Information</h4>


                            <div class="row mt-3">
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Business Type</label>
                                    <select class="form-select" name="business_type" aria-label="Default select example">
                                        <option selected>Select Business type</option>
                                        <option value="1">Sole Proprietor</option>
                                        <option value="2">Partnership</option>
                                        <option value="3">Corporation</option>
                                    </select>
                                    @error('business_type')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">GST No.</label>
                                    <input type="text" name="gst_number" class="form-control" value="{{$vendor->gst_number ?? '' }}">
                                    @error('gst_number')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Business Category</label>
                                    <input type="text" name="business_category" class="form-control" value="{{$vendor->business_category ?? '' }}" placeholder="Deal in Clothes">
                                    @error('business_category')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                            </div>

                        </div>


                    </div>


                </div>

                <div class="card p-4 mt-4">
                    <div class="row">

                        <div class="col-xl-12 col-md-12">
                            <h4>Payment Information</h4>

                            <div class="row mt-3">
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Bank Account Number</label>
                                    <input type="text" name="bank_account_no" class="form-control" placeholder="0785623021454">
                                    @error('bank_account_no')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Prefer Payment Method</label>
                                    <select class="form-select" name="payment_method" aria-label="Default select example">
                                        <option selected>Select Payment Method</option>
                                        <option value="1">PayPal</option>
                                        <option value="2">Bank Transfet</option>
                                        <option value="3">E wallet</option>
                                    </select>
                                    @error('payment_method')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-lg-3">
                                    <button class="btn btn-primary " type="submit">Save Changes</button>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </form>
    </main>



    @endsection
