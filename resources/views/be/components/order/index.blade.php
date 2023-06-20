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
                <a href="{{ route('order.statusAll') }}">
                    <button type="button" class="btn btn-success">Ship All</i></button>
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
                                <th>Price</th>
                                <th>Status</th>
                                <th>Create</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->name}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{number_format($order->total)}} VND</td>
                                @switch($order->status)
                                @case("process")
                                <td>
                                    <label class="badge badge-warning" style="font-size: 17px;">{{$order->status}}</label>
                                </td>
                                @break
                                @case("shipping")
                                <td>
                                    <label class="badge badge-info" style="font-size: 17px;">{{$order->status}}</label>
                                </td>
                                @break
                                @case("success")
                                <td>
                                    <label class="badge badge-success" style="font-size: 17px;">{{$order->status}}</label>
                                </td>
                                @break
                                @case("cancel")
                                <td>
                                    <label class="badge badge-danger" style="font-size: 17px;">{{$order->status}}</label>
                                </td>
                                @break
                                @default

                                @endswitch

                                <td>{{($order->created_at)}}</td>
                                <td class="parent">
                                    <a href="{{ route('order.show', $order->id) }}">
                                        <button type="button" class="btn btn-social-icon btn-info"><i class="ti-info"></i></button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12 margin-paginate-slider-index">
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection