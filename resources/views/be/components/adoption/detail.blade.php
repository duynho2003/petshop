@extends('be.layouts.master')

@section('title')
Pet adoption Detail Admin
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assetBE/assets/adoption/index.css') }}">
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
                <h4 class="card-title">Detail Adoption</h4>

                <div style="text-align: end">
                 {{--   @if ($adoption->status == "Process")
                    <a href="{{ route('adoption.status', $adoption->id) }}">
                        <button type="button" class="btn btn-danger">Hàng đang được chuẩn bị</i></button>
                    </a>

                    @elseif ($adoption->status == "Shipping")
                    <a href="" style="display: none">
                        <button type="button" class="btn btn-success">Hàng đang được giao</i></button>
                    </a>
                    @endif
                    --}}
                </div>

                <div style="display: flex">
                    <div class="table-responsive pt-3 col-md-5">
                        <h4>Information Customer</h4>
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>Name</th>
                                <td>{{$adoption->name}}</td>
                            </tr>
                            <tr>
                                <th>Email </th>
                                <td>{{$adoption->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$adoption->phone}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$adoption->address}}</td>
                            </tr>
                            <tr>
                              {{--  <th>Status</th>
                                @switch($adoption->status)
                                @case("Process")
                                <td>
                                    <label class="badge badge-warning" style="font-size: 17px;">{{$adoption->status}}</label>
                                </td>
                                @break
                                @case("Shipping")
                                <td>
                                    <label class="badge badge-info" style="font-size: 17px;">{{$adoption->status}}</label>
                                </td>
                                @break
                                @case("Completed")
                                <td>
                                    <label class="badge badge-success" style="font-size: 17px;">{{$adoption->status}}</label>
                                </td>
                                @break
                                @case("Cancelled")
                                <td>
                                    <label class="badge badge-danger" style="font-size: 17px;">{{$adoption->status}}</label>
                                </td>
                                @break
                                @default
                                @endswitch

                            </tr> --}}
                        </table>
                    </div>
                    <div class="table-responsive pt-3 col-md-7">
                        <h4>Information Dog</h4>
                        <table class="table table-hover table-striped table-badoptioned">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productItems as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td><img src="{{ asset('images/'.$item->image) }}" alt=""></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection