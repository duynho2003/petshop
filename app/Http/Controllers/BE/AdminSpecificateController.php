<?php

namespace App\Http\Controllers\BE;

use App\Http\Controllers\Controller;
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
       
        $specification = $request->type_id;
        
        return view('be.components.typeSpec.index', compact('specification'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
