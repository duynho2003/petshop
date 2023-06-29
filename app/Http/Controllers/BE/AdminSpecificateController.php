<?php

namespace App\Http\Controllers\BE;

use App\Http\Controllers\Controller;
use App\Models\Specification_type_keyboard;
use App\Models\Specification_type_laptop;
use App\Models\Specification_type_monitor;
use App\Models\Specification_type_mouse;
use App\Models\Specification_type_pc;
use Illuminate\Http\Request;

class AdminSpecificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->type_id);
        $spec_laptop = $spec_pc = $spec_monitor = $spec_keyboard = $spec_mouse = null;
        $specification = $request->type_id;
        switch ($request->type_id) {
            case '1':
                $spec_laptop = Specification_type_laptop::where('product_id',$request->product_id)->first();
                break;
            case '2':
                $spec_pc = Specification_type_pc::where('product_id',$request->product_id)->first();
                break;
            case '3':
                $spec_monitor = Specification_type_monitor::where('product_id',$request->product_id)->first();
                break;
            case '4':
                $spec_keyboard = Specification_type_keyboard::where('product_id',$request->product_id)->first();
                break;
            case '5':
                $spec_mouse = Specification_type_mouse::where('product_id',$request->product_id)->first();
                break;
            default:break;
        }
        return view('backend.components.typeSpec.index', compact('specification','spec_laptop','spec_pc','spec_monitor','spec_keyboard','spec_mouse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.components.typeSpec.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        switch ($request->type_id) {
            case '1':
                Specification_type_laptop::create($request->all());
                break;
            case '2':
                Specification_type_pc::create($request->all());
                break;
            case '3':
                Specification_type_monitor::create($request->all());
                break;
            case '4':
                Specification_type_keyboard::create($request->all());
                break;
            case '5':
                Specification_type_mouse::create($request->all());
                break;
            default: break;
        }
        return redirect('admin/specId?product_id='.$request->product_id.'%20&type_id='.$request->type_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($request->all());
        // $specifications = '';
        // switch ($request->type_id) {
        //     case '1':
        //         $specifications = Specification_type_laptop::where('product_id',$request->product_id)->first();
        //         break;
        //     case '2':
        //         $specifications = Specification_type_accessory::where('product_id',$request->product_id)->first();
        //         break;
        //     default:break;
        // }
        // return view('backend.components.type.index', compact('specifications'));
        // return view('backend.components.type.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
