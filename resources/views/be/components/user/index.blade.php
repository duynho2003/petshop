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
                <h4 class="card-title">Show User</h4>

                @if(session('success'))
                    <section class='alert alert-success'>{{session('success')}}</section>
                @endif
                @if(session('errors'))
                    <section class='alert alert-success'>{{session('errors')}}</section>
                @endif

                <div class="table-responsive pt-3">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td class="parent">
                                        <a href="{{ route('user.show', $user->id) }}">
                                            <button type="button" class="btn btn-social-icon btn-info"><i class="ti-info"></i></button>
                                        </a>

                                        @if ($user->status == 0)
                                            <a href="{{ route('user.status', $user->id) }}">
                                                <button type="button" class="btn btn-social-icon btn-success"><i class="ti-unlock"></i></button>
                                            </a>
                                            @else
                                            <a href="{{ route('user.status', $user->id) }}">
                                                <button type="button" class="btn btn-social-icon btn-danger"><i class="ti-lock"></i></button>
                                            </a>
                                        @endif
                                        
                                        <a href="" data-url="{{ route('user.destroy', $user->id) }}" class="active_delete">
                                            <button type="button" class="btn btn-social-icon btn-danger"><i class="ti-trash"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12 margin-paginate-slider-index">
                        {{$users->links()}}
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection