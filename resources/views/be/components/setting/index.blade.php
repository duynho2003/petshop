@extends('be.layouts.master')

@section('title')
    Pet Setting Show Admin 
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assetBE/assets/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assetBE/assets/setting/index.css') }}">
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
                <h4 class="card-title">Show Setting Config Layouts</h4>
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle float-btn" id="dropdownMenuIconButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="ti-settings text-primary"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton8">
                      <a class="dropdown-item" href="{{ route('setting.create') . '?type=Text' }}">Text</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ route('setting.create') . '?type=Textarea' }}">Textarea</a>
                    </div>
                </div>
                <div class="table-responsive pt-3">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Config Key</th>
                                <th>Config Value</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{dd($settings)}} --}}
                            @foreach ($settings as $setting)
                                <tr>
                                    <td>{{$setting->id}}</td>
                                    <td>{{$setting->config_key}}</td>
                                    <td>{{$setting->config_value}}</td>
                                    <td class="parent">
                                        <a href="{{ route('setting.edit', $setting->id) }}">
                                            <button type="button" class="btn btn-social-icon btn-success"><i class="ti-pencil-alt"></i></button>
                                        </a>
                                        <a href="" data-url="{{ route('setting.destroy', $setting->id) }}" class="active_delete">
                                            <button type="button" class="btn btn-social-icon btn-danger"><i class="ti-trash"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12 margin-paginate-slider-index">
                        {{$settings->links()}}
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection