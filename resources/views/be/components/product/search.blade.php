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
            $('.price-format').simpleMoneyFormat();
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
                                <th>Price</th>
                                <th>Promo price</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($products->count())
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td class="price-format">{{$product->normal_price}}</td>
                                        <td class="price-format">{{$product->promotion_price}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>
                                            <img id="image_index_product" src="{{ asset($product->feature_image_path) }}" alt="{{$product->feature_image_name}}">
                                        </td>
                                        <td>{{optional($product->category)->name}}</td>
                                        <td class="parent">
                                            <a href="{{ route('specId.index'). '/?product_id='.$product->id.' &&type_id='.$product->type_id }}">
                                                <button type="button" class="btn btn-social-icon btn-info"><i class="ti-info"></i></button>
                                            </a>
                                            <a href="{{ route('product.edit', $product->id) }}">
                                                <button type="button" class="btn btn-social-icon btn-success"><i class="ti-pencil-alt"></i></button>

                                            </a>
                                            <a href="" data-url="{{ route('product.destroy', $product->id) }}" class="active_delete">
                                                <button type="button" class="btn btn-social-icon btn-danger"><i class="ti-trash"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach  
                            @else
                                <tr>
                                    <td colspan="8">There are no record.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="col-md-12 margin-paginate-slider-index">
                        {{-- {{$products->links()}} --}}
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection