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
                                    <th>Total Price</th>
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
                                    <td>{{$order->status}}</td>
                                    <td>
                                        <a href="{{ route('showOrder', ['id' => $order->id]) }}">View Details</a>
                                    </td>
                                    <td>
                                    <a href="{{ route('order.statusCancelByID_user', $order->id) }}">
                                        <button class="btn btn-icon btn-danger"><i class="fas fa-cancel"></i></button>
                                    </a>
                                    </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer và các script -->
</body>

</html>