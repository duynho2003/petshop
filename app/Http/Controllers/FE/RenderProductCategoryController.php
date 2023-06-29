<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;

class RenderProductCategoryController extends Controller
{
    public function categoryDogFood()
    {
        $prods = Product::where('category_id', 1)
                        ->whereHas('type', function ($query) {
                            $query->where('id', 2);
                        })
                        ->get();
    
        $types = Type::all();
        return view('fe.shop', compact('prods', 'types'));
    }
    
}
