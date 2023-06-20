@extends('be.layouts.master')

@section('title')
    Pet User Edit Admin 
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('assetBE/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetBE/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assetBE/assets/user/index.css') }}">
@endsection

@section('js')
    {{-- <script src="{{ asset('assetBE/vendors/select2/select2.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assetBE/js/select2.js') }}"></script> --}}
    <script src="{{ asset('assetBE/js/file-upload.js') }}"></script>
@endsection

@section('content')
<div id="content-wrapper" class="content-wrapper card">
    @include('be.layouts.header')
    <div class="content-wrapper card">
        <form class="forms-sample" action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Information User</h4>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="Name"  autofocus required>
                            
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{$user->email}}" placeholder="Email"  autofocus required>
                        </div>

                        <div class="select_padding_col col-md-4">
                            <div class="form-group">
                                <label>Avatar</label>
                                <input type="file" name="avatar" class="file-upload-default">
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
                                        <img class="mt-3 image_user_edit" src="{{ asset(getAvatarCustomerFromUserTable($user->id)) }}"  alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{$user->phone}}" placeholder="Name"  autofocus required>
                        </div>

                        <div class="form-group col-md-4" style="padding-left: 0px;">
                            <label>Birthday</label>
                            <input type="date" name="birthday" class="form-control" value="{{$user->birthday}}" placeholder="Name"  autofocus required>
                        </div>

                        <div class="form-group">
                            <label for="">Sex</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="sex" id="optionsRadios1" value="1" {{$user->sex == 1 ? 'checked':''}}>Male
                                </label>
                            </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="sex" id="optionsRadios1" value="0" {{$user->sex == 0 ? 'checked':''}}>Female
                                    </label>
                                </div>
                        </div>

                        <div class="form-group">
                            <label>Address 1</label>
                            <input type="text" name="address_1" class="form-control" value="{{$user->address_1}}" placeholder="Name"  autofocus required>
                        </div>

                        <div class="form-group">
                            <label>Address 2</label>
                            <input type="text" name="address_2" class="form-control" value="{{$user->address_2}}" placeholder="Name"  autofocus>
                        </div>

                        <div class="form-group">
                            <label>Address 3</label>
                            <input type="text" name="address_3" class="form-control" value="{{$user->address_3}}" placeholder="Name"  autofocus>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection