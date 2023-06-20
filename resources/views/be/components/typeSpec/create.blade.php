@extends('backend.layouts.master')

@section('title')
    Computer Type Create Admin 
@endsection

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="content-wrapper card">
        <form class="forms-sample" action="{{ route('specId.store'). '/?type_id='.request()->type_id.'&&product_id='.request()->product_id }}" method="post">
            @csrf
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @switch(request()->type_id)
                            @case(1)
                                @include('backend.components.typeSpec.specificate.create.spec_create_laptop')
                                @break
                            @case(2)
                                @include('backend.components.typeSpec.specificate.create.spec_create_pc')
                                @break
                            @case(3)
                                @include('backend.components.typeSpec.specificate.create.spec_create_monitor')
                                @break
                            @case(4)
                                @include('backend.components.typeSpec.specificate.create.spec_create_keyboard')
                                @break
                            @case(5)
                                @include('backend.components.typeSpec.specificate.create.spec_create_mouse')
                                @break
                            @default
                                @break
                        @endswitch
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection