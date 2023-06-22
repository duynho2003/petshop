@extends('be.layouts.master')

@section('title')
    Pet Type Create Admin 
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('assetBE/assets/slider/index.css') }}"> --}}
@endsection

@section('js')
@endsection

@section('content')
<div id="content-wrapper" class="content-wrapper card">
    @include('be.layouts.header')
        <form class="forms-sample" action="{{ route('type.store') }}" method="post">
            @csrf
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Type</h4>

                        <div class="form-group">
                            <label for="exampleInputName1">Name Type</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}" id="exampleInputName1" placeholder="Name" required  autofocus>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection