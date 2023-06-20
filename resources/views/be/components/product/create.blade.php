@extends('be.layouts.master')

@section('title')
    Pet Product Create Admin 
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
        <form class="forms-sample" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Product</h4>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Name"  autofocus>
                            @error('name')
                                <div class="alert alert-warning d-flex align-items-center mt-3" role="alert">
                                    <div class="required_error">
                                        {{ $message }}
                                    </div>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Normal Price</label>
                            <input type="text" name="normal_price" class="form-control price-format @error('normal_price') is-invalid @enderror" value="{{old('normal_price')}}" placeholder="Normal price"  autofocus>
                            @error('normal_price')
                                <div class="alert alert-warning d-flex align-items-center mt-3" role="alert">
                                    <div class="required_error">
                                        {{ $message }}
                                    </div>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Promotion Price</label>
                            <input type="text" name="promotion_price" class="form-control price-format @error('promotion_price') is-invalid @enderror" value="{{old('promotion_price')}}" placeholder="Promotion price"  autofocus>
                            @error('promotion_price')
                                <div class="alert alert-warning d-flex align-items-center mt-3" role="alert">
                                    <div class="required_error">
                                        {{ $message }}
                                    </div>
                                </div>
                            @enderror
                        </div>

                        <div class="select_padding_col col-md-4">
                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="feature_image_path" class="file-upload-default @error('feature_image_path') is-invalid @enderror">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" >
                                    <span class="input-group-append">
                                        <button type="button" class="file-upload-browse btn btn-primary btn-icon-text">
                                            <i class="ti-upload btn-icon-prepend font_size_icon"></i>                                                    
                                            Upload
                                        </button>
                                    </span>
                                </div>
                                @error('feature_image_path')
                                    <div class="alert alert-warning d-flex align-items-center mt-3" role="alert">
                                        <div class="required_error">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="select_padding_col col-md-4">
                            <div class="form-group">
                                <label>Multi file upload</label>
                                <input type="file" name="image_path[]" multiple class="file-upload-default @error('image_path') is-invalid @enderror">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Multi Image" >
                                    <span class="input-group-append">
                                        <button type="button" class="file-upload-browse btn btn-primary btn-icon-text">
                                            <i class="ti-upload btn-icon-prepend font_size_icon"></i>                                                    
                                            Upload
                                        </button>
                                    </span>
                                </div>
                                <div class="filenames">
                                    <img src="" alt="">
                                </div>
                                @error('image_path')
                                    <div class="alert alert-warning d-flex align-items-center mt-3" role="alert">
                                        <div class="required_error">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 padding-input-select-2">
                            <div class="form-group">
                                <label>Chọn danh mục cha</label>
                                <select class="js-example-basic-single w-100" name="category_id">
                                    <option value="0">Chọn danh mục cha</option>
                                    {!! $optionHtml !!}
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror ckeditor" style="resize: none;" name="description"  autofocus id="ckeditor1" rows="6" placeholder="Description">{{old('description')}}</textarea>
                            @error('description')
                                <div class="alert alert-warning d-flex align-items-center mt-3" role="alert">
                                    <div class="required_error">
                                        {{ $message }}
                                    </div>
                                </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="">Type</label>
                            @foreach ($types as $type)
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" @error('type_id') is-invalid @enderror name="type_id" id="optionsRadios1" value="{{$type->id}}">
                                        {{$type->name}}
                                    </label>
                                </div>
                            @endforeach
                            @error('type_id')
                                <div class="alert alert-warning d-flex align-items-center mt-3" role="alert">
                                    <div class="required_error">
                                        {{ $message }}
                                    </div>
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection