@extends('be.layouts.master')

@section('title')
Setting Infor Admin
@endsection

@section('css')

@endsection

@section('js')
<script src="{{ asset('assetBE/js/file-upload.js') }}"></script>
@endsection

@section('content')
<div id="content-wrapper">
    @include('be.layouts.header')
    <div class="col-lg-12 grid-margin stretch-card">
        @if(session('alert'))
        <section class='alert alert-success'>{{session('alert')}}</section>
        @endif
        <div class="content-wrapper card">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('admin.postSetting') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                {{-- <h4 class="card-title">Basic Infor Admin</h4>
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name')}}" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone')}}" placeholder="Phone">
                        </div>

                        <div class="form-group">
                            <label>Avatar</label>
                            <input type="file" name="avatar" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">
                                        <i class="mdi mdi-cloud-upload" style="font-size: 14px"></i>
                                    </button>
                                </span>
                            </div>
                        </div> --}}

                        <h4 class="card-title">Change Password</h4>
                        <div class="form-group">
                            <label for="exampleInputName1">Current Password</label>
                            <input type="password" name="current_password" class="form-control" placeholder="Current Password">
                            <p style="font-size: 16px; color: red; padding: 16px;">
                                {!! session()->get('errors') !!}
                            </p>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">New Password</label>
                            <input type="password" name="new_password" class="form-control" placeholder="New Password">
                            <p style="font-size: 16px; color: red; padding: 16px;">
                                {!! session()->get('errors_new_password') !!}
                            </p>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                            <p style="font-size: 16px; color: red; padding: 16px;">
                                {!! session()->get('errors_confirm_password') !!}
                            </p>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection