@extends('be.layouts.master')

@section('title')
    Pet Type Show Admin 
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assetBE/assets/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assetBE/assets/type/index.css') }}">
@endsection


@section('js')
    <script src="{{ asset('assetBE/assets/main.js') }}"></script>
    <script src="{{ asset('assetBE/assets/vendors/sweetalert2/sweetalert2@11.js') }}"></script>
    <script src="{{ asset('assetBE/assets/vendors/format_money/simple.money.format.js') }}"></script>
    <script>
        $('.price-format').simpleMoneyFormat()
    </script>
@endsection

@section('content')
<div id="content-wrapper" class="content-wrapper card">
    @include('be.layouts.header')
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Show Type</h4>

                <div class="dropdown">
                    <a href="{{ route('specId.create'). '/?type_id='.request()->type_id.'&&product_id='.request()->product_id }}" class="btn btn-primary dropdown-toggle float-btn" id="dropdownMenuIconButton8" >
                      <i class="ti-settings text-primary"></i>
                    </a>
                </div>

                
               
                <div class="table-responsive pt-3">
                    {{-- <table class="table table-hover table-striped">
                        
                        <tbody>
                            <tr>
                                
                                {{-- <td class="parent">
                                    <a href="{{ route('type.edit', $specifications->id) }}">
                                        <button type="button" class="btn btn-success btn-icon-text">
                                            Edit
                                            <i class="ti-file btn-icon-append"></i>                          
                                        </button>
                                    </a>
                                    <a href="" data-url="{{ route('type.destroy', $specifications->id) }}" class="active_delete">
                                        <button type="button" class="btn btn-danger btn-icon-text">
                                            Delete
                                            <i class="mdi mdi-delete"></i>                          
                                        </button>
                                    </a>
                                </td> --}}
                            {{-- </tr>
                        
                        </tbody>
                    </table> --}}
                        @switch($specification)
                            @case(1)
                            @if (!empty($spec_laptop))
                                    @include('backend.components.typeSpec.specificate.index.spec_index_laptop', ['specLaptop' => $spec_laptop])
                                    @break
                            @endif
                            @case(2)
                            @if (!empty($spec_pc))
                                    @include('backend.components.typeSpec.specificate.index.spec_index_pc', ['specPC' => $spec_pc])
                                    @break
                            @endif
                            @case(3)
                            @if (!empty($spec_monitor))                               
                                    @include('backend.components.typeSpec.specificate.index.spec_index_monitor', ['specMonitor' => $spec_monitor])
                                    @break
                            @endif
                            @case(4)
                            @if (!empty($spec_keyboard))                               
                                    @include('backend.components.typeSpec.specificate.index.spec_index_keyboard', ['specKeyBoard' => $spec_keyboard])
                                    @break
                            @endif
                            @case(5)
                            @if (!empty($spec_mouse))                           
                                    @include('backend.components.typeSpec.specificate.index.spec_index_mouse', ['specMouse' => $spec_mouse])
                                    @break
                            @endif
                            @default @break
                        @endswitch
                    
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection