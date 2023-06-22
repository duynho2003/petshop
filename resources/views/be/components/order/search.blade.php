@extends('be.layouts.master')

@section('title')
Pet Search Show Admin
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assetBE/assets/main.css') }}">
@endsection


@section('js')
<script src="{{ asset('assetBE/assets/main.js') }}"></script>
<script src="{{ asset('assetBE/assets/vendors/sweetalert2/sweetalert2@11.js') }}"></script>
<script src="{{ asset('assetBE/assets/vendors/format_money/simple.money.format.js') }}"></script>
<script>

</script>
@endsection

@section('content')
<div id="content-wrapper" class="content-wrapper card">
    @include('be.layouts.header')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Show Result</h4>

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
                            @if ($orders->count())
                            @foreach ($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->name}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{number_format($order->total)}} VND</td>
                                <td>{{$order->status}}</td>
                                <td>{{formatDateFromUserTable($order->created_at)}}</td>
                                <td class="parent">
                                    <a href="{{ route('order.show', $order->id) }}">
                                        <button type="button" class="btn btn-social-icon btn-info"><i class="ti-info"></i></button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="7">There are no record.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="col-md-12 margin-paginate-slider-index">
                        {{-- {{$orders->links()}} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection