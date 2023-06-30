@extends('be.layouts.master')

@section('title')
Pet Order Show Admin
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assetBE/assets/order/index.css') }}">
<link rel="stylesheet" href="{{ asset('assetBE/assets/main.css') }}">
<style>

</style>
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
                <h4 class="card-title">Show Order</h4>

                <a href="{{ route('order.statusProcess') }}">
                    <button type="button" class="btn btn-icon btn-warning"><i class="fas fa-exclamation-circle"></i></button>
                </a>
                <a href="{{ route('order.statusShipping') }}">
                    <button type="button" class="btn btn-icon btn-info"><i class="fas fa-truck"></i></button>
                </a>
                <a href="{{ route('order.statusAll') }}">
                <button class="btn btn-icon btn-success"><i class="fas fa-check"></i></button>
                </a>

                <form action="{{ route('order.search') }}" method="post" class="form_search_date">
                    @csrf
                    <div class="justify-content-end d-flex margin_right">
                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                            <input type="date" name="create_date" id="" class="edit_input_date">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-rounded btn-fw">Search</button>
                    </div>
                </form>

                <div class="table-responsive pt-3">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Order Date</th>
                                <th>Detail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->name}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{number_format($order->total)}} USD</td>
                                @switch($order->status)
                                @case("Process")
                                <td>
                                    <label class="badge badge-warning" style="font-size: 17px;">{{$order->status}}</label>
                                </td>
                                @break
                                @case("Shipping")
                                <td>
                                    <label class="badge badge-info" style="font-size: 17px;">{{$order->status}}</label>
                                </td>
                                @break
                                @case("Completed")
                                <td>
                                    <label class="badge badge-success" style="font-size: 17px;">{{$order->status}}</label>
                                </td>
                                @break
                                @case("Cancelled")
                                <td>
                                    <label class="badge badge-danger" style="font-size: 17px;">{{$order->status}}</label>
                                </td>
                                @break
                                @default
                                @endswitch
                                <td>{{($order->created_at)}}</td>
                                <td class="parent">
                                    <a href="{{ route('order.show', $order->id) }}">
                                        <button class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i></button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('order.statusCancelByID', $order->id) }}">
                                        <button class="btn btn-icon btn-danger" @if ($order->status === 'Cancelled' || $order->status === 'Completed') disabled @endif><i class="fas fa-cancel"></i><b>X</b></button>
                                    </a>
                                    <a href="{{ route('order.statusShippingByID', $order->id) }}">
                                        <button class="btn btn-icon btn-warning"@if ($order->status === 'Cancelled' || $order->status === 'Completed') disabled @endif><i class="fas fa-truck"></i></button>
                                    </a>
                                    <a href="{{ route('order.statusCompleteByID', $order->id) }}">
                                        <button class="btn btn-icon btn-success" @if ($order->status === 'Cancelled' || $order->status === 'Completed') disabled @endif><i class="fas fa-check"></i></button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12 margin-paginate-slider-index">
                        {{$orders->links('pagination::bootstrap-5')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection