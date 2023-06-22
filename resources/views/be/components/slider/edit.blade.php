@extends('be.layouts.master')

@section('title')
    Pet Slider Edit Admin 
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assetBE/assets/slider/index.css') }}">
@endsection

@section('js')
    <script src="{{ asset('assetBE/js/file-upload.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'ckeditor1', {
            filebrowserBrowseUrl: "{{ asset('ckfinder/ckfinder.html') }}",
            filebrowserImageBrowseUrl: "{{ asset('ckfinder/ckfinder.html?type=Images') }}",
            filebrowserFlashBrowseUrl: "{{ asset('ckfinder/ckfinder.html?type=Flash') }}",
            filebrowserUploadUrl: "{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
            filebrowserImageUploadUrl: "{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
            filebrowserFlashUploadUrl: "{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}",
        })
    </script>
@endsection

@section('content')
<div id="content-wrapper" class="content-wrapper card">
    @include('be.layouts.header')
        <form class="forms-sample" action="{{ route('slider.update', $slider->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Slider</h4>

                        <div class="form-group">
                            <label for="exampleInputName1">Name Slider</label>
                            <input type="text" name="name" class="form-control" value="{{$slider->name}}" id="exampleInputName1" placeholder="Name Slider"  autofocus>
                        </div>

                        <div class="select_padding_col col-md-4">
                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="image_path" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" >
                                    <span class="input-group-append">
                                        <button type="button" class="file-upload-browse btn btn-primary btn-icon-text">
                                            <i class="ti-upload btn-icon-prepend font_size_icon"></i>                                                    
                                            Upload
                                        </button>
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <img class="mt-3 image_slider_edit" src="{{ asset("$slider->image_path") }}"  alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control ckeditor" style="resize: none;" name="description"  autofocus id="ckeditor1" rows="6" placeholder="Description">{{$slider->description}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection