<?php

namespace App\Http\Controllers\BE;
use App\Http\Controllers\Controller;
use App\Models\Adoption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminAdoptionController extends Controller
{
    public function adoption()
    {
        $adoption = Adoption::where('active', 1)
            ->orderBy('created_at', 'desc')
            ->latest()
            ->paginate(5);
        return view('be.components.adoption.index', compact('adoption'));
    }

    // public function show(Adoption $adoption)
    // {
    //     $listProduct = DB::table('adoption_histories')
    //                                 ->join('products', 'adoption_histories.product_id', '=', 'products.id')
    //                                 ->select('adoption_histories.adoption_id', 'products.name', 'products.image')
    //                                 ->get();
    //     $productItem = $listProduct->where('adoption_histories.adoption_id', $adoption->id);
    //     return view("be.components.adoption.detail", compact('adoption','productItem'));   
    // }

    public function show($id)
    {
        $adoption = Adoption::findOrFail($id);
        $listProduct = DB::table('adoptions')
        ->join('adoption_histories', 'adoptions.id', '=', 'adoption_histories.adoption_id')
        ->join('products', 'adoption_histories.product_id', '=', 'products.id')
        ->select('adoptions.id as adoption_id', 'products.name', 'products.image')
        ->where('adoptions.id', $adoption->id)
        ->get();
    

        $productItems = $listProduct->filter(function ($item) use ($adoption) {
            return $item->adoption_id === $adoption->id;
        });

        return view('be.components.adoption.detail', compact('adoption', 'listProduct', 'productItems'));
    }

    public function statusCancelByID($id)
    {
        $adoption = Adoption::findOrFail($id);

        if ($adoption->status !== 'Cancelled') {
            $adoption->update([
                'status' => 'Cancelled',
            ]);
        }

        return redirect()->route('adoption-admin');
    }

    public function statusCompleteByID($id)
    {
        $adoption = Adoption::findOrFail($id);
        $adoption->update([
            'status' => "Completed",
        ]);

        return redirect()->route('adoption-admin');
    }
}
