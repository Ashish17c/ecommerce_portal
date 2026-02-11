@extends('admin.includes.main')
@push('title')
<title>Edit Category</title>
@endpush

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card p-4 mt-4">
                <div class="row">

                    <div class="col-xl-8 col-md-8">
                        <h4>Edit Category</h4>

                        <div class="row mt-3">
                            <form method="POST" action="{{ url('admin/edit-category/' . $category->c_id) }}">
                                {{-- <form method="POST" action="{{url('admin/edit-category/', $category->c_id)}}"> --}}
                                @csrf

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Parent Category</label>
                                    <select class="form-select" name="p_c_id">
                                        <option value="0" selected>Select Parent Category</option>

                                        @foreach ($product_category as $cat)

                                        <option @if ($cat->c_id==$category->p_c_id)selected

                                            @endif value="{{$cat->c_id}}">{{$cat->c_name}}</option>

                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" class="form-control" name="c_name" value="{{$category->c_name}}">
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Commission (%)</label>
                                    <input type="text" class="form-control" name="c_commission" value="{{$category->c_commission}}">
                                </div>

                                <div class="col-lg-3">
                                    <button class="btn btn-primary " type="submit">Edit Category</button>
                                </div>

                            </form>
                        </div>

                    </div>


                </div>


            </div>
    </main>




    @endsection
