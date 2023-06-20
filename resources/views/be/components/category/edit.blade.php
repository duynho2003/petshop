@extends('be.layouts.master')

@section('title')
Pet Category Edit Admin
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assetBE/vendors/select2/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assetBE/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assetBE/assets/category/index.css') }}">

@endsection

@section('js')
<script src="{{ asset('assetBE/vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('assetBE/js/select2.js') }}"></script>
@endsection

@section('content')
<div id="content-wrapper" class="content-wrapper card">
    @include('be.layouts.header')
    <form class="forms-sample" action="{{ route('category.update', $category->id) }}" method="post">
        @csrf
        @method('put')
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Category</h4>

                    <div class="form-group">
                        <label for="exampleInputName1">Tên danh mục</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$category->name}}" id="exampleInputName1" placeholder="Enter name menu" autofocus>
                        @error('name')
                        <div class="alert alert-warning d-flex align-items-center mt-3" role="alert">
                            <div class="required_error">
                                {{ $message }}
                            </div>
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-6 padding-input-select-2">
                        <div class="form-group">
                            <label>Chọn danh mục cha</label>
                            <select class="js-example-basic-single w-100" name="parent_id">
                                <option value="0">Chọn danh mục cha</option>
                                {!! $optionHtml !!}
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>

                </div>
            </div>
        </div>
    </form>
</div>
@endsection