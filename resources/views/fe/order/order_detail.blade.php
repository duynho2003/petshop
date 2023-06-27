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
                <h4 class="card-title">Detail Order</h4>
                <div style="display: flex">
                    <div class="table-responsive pt-3 col-md-5">
                        <h4>Information Customer</h4>
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>Name</th>
                                <td>{{$order->name}}</td>
                            </tr>
                            <tr>
                                <th>Email </th>
                                <td>{{$order->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$order->phone}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$order->address}}</td>
                            </tr>
                            <!-- <tr>
                                <th>Phương thức thanh toán</th>
                                <td>{{$order->payment == 0 ? "Thanh toán bằng ví điện tử":"Thanh toán khi nhận hàng"}}</td>
                            </tr> -->
                            <!-- <tr>
                                <th>Status</th>
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

                            </tr> -->
                        </table>
                    </div>
                    <div class="table-responsive pt-3 col-md-7">
                        <h4>Information Order</h4>
                        <table class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($orderItems as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td>{{number_format($item->promotion_price)}} USD</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <table class="table table-hover table-striped table-bordered margin_top">
                            {{--
                            <tr>
                                <th>Total Quantity</th>
                                <td class="text_align_right">{{$order->quantity}}</td>
                            </tr>
                            --}}
                            <tr>
                                <th>Total Price</th>
                                <td class="text_align_right">{{number_format($order->total)}} USD</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </main>
    <!-- footer và các script -->
</body>

</html>
