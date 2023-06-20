@extends('be.layouts.master')

@section('title')
    Pet Type Show Admin 
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('assetBE/assets/slider/index.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assetBE/assets/main.css') }}">
@endsection


@section('js')
    <script src="{{ asset('assetBE/assets/main.js') }}"></script>
    <script src="{{ asset('assetBE/assets/vendors/sweetalert2/sweetalert2@11.js') }}"></script>
@endsection

@section('content')
<div id="content-wrapper" class="content-wrapper card">
    @include('be.layouts.header')
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Show Type</h4>

                <div class="table-responsive pt-3">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($types as $type)
                                <tr>
                                    <td>{{$type->id}}</td>
                                    <td>{{$type->name}}</td>
                                    <td class="parent">
                                        <a href="{{ route('type.edit', $type->id) }}">
                                            <button type="button" class="btn btn-social-icon btn-success"><i class="ti-pencil-alt"></i></button>
                                        </a>
                                        <a href="" data-url="{{ route('type.destroy', $type->id) }}" class="active_delete">
                                            <button type="button" class="btn btn-social-icon btn-danger"><i class="ti-trash"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12 margin-paginate-slider-index">
                        {{$types->links()}}
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection