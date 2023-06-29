<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Các thẻ meta, title và các file CSS -->
</head>

<body>
    @include('fe.layouts.loadscroll')
    @include('fe.layouts.header')
    <main>


        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Show Order</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Total</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
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
                                    <td>{{($order->created_at)}}</td>
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
                                    <td>
                                        <a href="{{ route('showOrder', ['id' => $order->id]) }}">View Details</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('order.statusCancelByUser', $order->id) }}">
                                            <button class="btn btn-icon btn-danger"><i class="fas fa-cancel"></i></button>
                                        </a>
                                    </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-md-12 margin-paginate-slider-index">
                            {{$orders->links('pagination::bootstrap-5')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer và các script -->
</body>

</html>