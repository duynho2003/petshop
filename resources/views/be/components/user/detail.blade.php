@extends('be.layouts.master')

@section('title')
    Pet User Show Admin 
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assetBE/assets/user/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assetBE/assets/main.css') }}">
@endsection


@section('js')
    <script src="{{ asset('assetBE/assets/main.js') }}"></script>
    <script src="{{ asset('assetBE/assets/vendors/sweetalert2/sweetalert2@11.js') }}"></script>
@endsection

@section('content')
<div id="content-wrapper" class="content-wrapper card">
    @include('be.layouts.header')
    <div class="content-wrapper card">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Detail User</h4>

                <div class="form-group float_btn" >
                    <a href="{{ route('user.edit', $user->id) }}">
                        <button type="button" class="btn btn-social-icon btn-success"><i class="ti-pencil-alt"></i></button>
                    </a>
                </div>
                <div class="table-responsive pt-3">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>#</th>
                            <td>{{$user->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th>Email </th>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <th>Avatar</th>
                            <td>
                                <img id="image_user_config" src="{{ asset(getAvatarCustomerFromUserTable($user->id)) }}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$user->phone}}</td>
                        </tr>
                        <tr>
                            <th>Birthday</th>
                            <td>{{formatDateFromUserTable($user->birthday)}}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{($user->sex == 1) ? "Male":"Female"}}</td>
                        </tr>   
                        <tr>
                            <th>Address 1</th>
                            <td>{{$user->address_1}}</td>
                        </tr> 
                        <tr>
                            <th>Address 2</th>
                            <td>{{$user->address_2}}</td>
                        </tr> 
                        <tr>
                            <th>Address 3</th>
                            <td>{{$user->address_3}}</td>
                        </tr>                    
                    </table>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection