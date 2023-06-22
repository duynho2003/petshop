@extends('be.layouts.master')

@section('title')
    Pet Type Edit Admin 
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assetBE/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetBE/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetBE/assets/product/index.css') }}">
@endsection

@section('js')
    <script src="{{ asset('assetBE/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assetBE/js/select2.js') }}"></script>
    <script src="{{ asset('assetBE/js/file-upload.js') }}"></script>
    <script src="{{ asset('assetBE/assets/vendors/format_money/simple.money.format.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'ckeditor1', {
            filebrowserBrowseUrl: "{{ asset('ckfinder/ckfinder.html') }}",
            filebrowserImageBrowseUrl: "{{ asset('ckfinder/ckfinder.html?type=Images') }}",
            filebrowserFlashBrowseUrl: "{{ asset('ckfinder/ckfinder.html?type=Flash') }}",
            filebrowserUploadUrl: "{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
            filebrowserImageUploadUrl: "{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
            filebrowserFlashUploadUrl: "{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}",
        });
        $('.price-format').simpleMoneyFormat()
    </script>
@endsection

@section('content')
<div id="content-wrapper" class="content-wrapper card">
    @include('be.layouts.header')
        <form class="forms-sample" action="{{ route('type.store'). '/?type_id='.request()->type_id.'&&product_id='.request()->product_id }}" method="post">
            @csrf
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @switch(request()->type_id)
                            @case(1)
                                @include('be.components.type.specificate.spec_laptop')
                                @break
                            @case(2)
                                @include('be.components.type.specificate.spec_linh_kien')
                                @break
                            @default
                                @break
                        @endswitch
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection