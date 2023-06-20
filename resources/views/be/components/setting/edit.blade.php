@extends('be.layouts.master')

@section('title')
    Pet Setting Edit Admin 
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
        <form class="forms-sample" action="{{ route('setting.update', $setting->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Setting</h4>

                        <div class="form-group">
                            <label for="exampleInputName1">Config Key</label>
                            <input type="text" name="config_key" class="form-control @error('config_key') is-invalid @enderror" value="{{$setting->config_key}}" id="exampleInputName1" placeholder="Enter config key"  autofocus>
                            @error('config_key')
                                <div class="alert alert-warning d-flex align-items-center mt-3" role="alert">
                                    <div class="required_error">
                                        {{ $message }}
                                    </div>
                                </div>
                            @enderror
                        </div>

                        @if($setting->type === 'Text')
                            <div class="form-group">
                                <label>Config Value</label>
                                <input type="text" class="form-control @error('config_value') is-invalid @enderror" name="config_value" value="{{$setting->config_value}}"  autofocus  placeholder="Enter config value">
                                @error('config_value')
                                    <div class="alert alert-warning d-flex align-items-center mt-3" role="alert">
                                        <div class="required_error">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        @elseif($setting->type === 'Textarea')
                            <div class="form-group">
                                <label>Config Value</label> 
                                <textarea class="form-control ckeditor @error('config_value') is-invalid @enderror" style="resize: none;" name="config_value"  autofocus id="ckeditor1" rows="6" placeholder="Enter config value">{{$setting->config_value}}</textarea>
                                @error('config_value')
                                    <div class="alert alert-warning d-flex align-items-center mt-3" role="alert">
                                        <div class="required_error">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        @endif

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection