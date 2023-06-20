<?php

namespace App\Http\Controllers\BE;

use App\Components\CategoryRecusive;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminProductRequest;
use App\Models\Product;
use App\Models\Type;
use App\Models\ProductImage;
use App\Trait\DeleteModel;
use App\Trait\UpLoadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;


class AdminProductController extends Controller
{
    use UpLoadImage, DeleteModel;
    private $categoryRecusive;
    public function __construct()
    {
        $this->categoryRecusive = new CategoryRecusive();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $max_price = Product::max('normal_price');
        $max_price_range = $max_price + 10000000;
        $min_price = Product::min('normal_price');
        $min_price_range = $min_price - $min_price;
        $products = Product::where('active', 1)->latest()->paginate(20);
        return view('be.components.product.index', compact('products','max_price','min_price','max_price_range','min_price_range'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::where('active', 1)->get();
        $optionHtml = $this->categoryRecusive->categoryRecusiveCreate();
        return view('be.components.product.create', compact('optionHtml','types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminProductRequest $request)
    {
        // dd($request->type);
        // dd($request->type_id);

        try {
            DB::beginTransaction();
            $normal_price = filter_var($request->normal_price, FILTER_SANITIZE_NUMBER_INT);
            $promotion_price = filter_var($request->promotion_price, FILTER_SANITIZE_NUMBER_INT);
            $dataProductCreate = [
                'name' => $request->name,
                'normal_price' => $normal_price,
                'promotion_price' => $promotion_price,
                'slug' => Str::slug($request->name),
                'category_id' => $request->category_id,
                'description' => $request->description,
                'type_id' =>$request->type_id
            ];

            // Choose folder
            $folder = "";
            switch ($request->type_id) {
                case 1:
                    $folder = 'images/products/laptop';
                    break;
                case 2:
                    $folder = 'images/products/pc';
                    break;
                case 3:
                    $folder = 'images/products/monitor';
                    break;
                case 4:
                    $folder = 'images/products/keyboard';
                    break;
                case 5:
                    $folder = 'images/products/mouse';
                    break;
                default: break;
            }
            // dd($folder);


            // xử lý ảnh feature
            
            $dataUpLoadFeatureImage = $this->TraitUpLoadFile($request, 'feature_image_path', $folder);
            if(!empty($dataUpLoadFeatureImage)) {
                $dataProductCreate['feature_image_name'] = $dataUpLoadFeatureImage['image_name'];
                $dataProductCreate['feature_image_path'] = $dataUpLoadFeatureImage['image_path'];
            }
            $product = Product::create($dataProductCreate);

            // thêm hình ảnh vào ProductImage
            if(!empty($request->image_path)) {
                foreach ($request->image_path as $imageItem) {
                    $dataProductImageDetail = $this->TraitMultiUpLoadFile($imageItem, $folder);
                    $product->images()->create([
                        'image_name' => $dataProductImageDetail['image_name'],
                        'image_path' => $dataProductImageDetail['image_path'],
                    ]);
                }
            }

            DB::commit();
            return redirect()->route('product.index');
            
        } catch (\Exception $ex) {
            DB::rollBack();
            Log::error("Message: {$ex->getMessage()} --- Line: {$ex->getLine()} --- File: {$ex->getFile()}");
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // dd($product);
        $types = Type::where('active', 1)->get();
        $optionHtml = $this->categoryRecusive->categoryRecusiveEdit($product->category_id);
        return view('be.components.product.edit', compact('optionHtml','product','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        try {
            DB::beginTransaction();
            $normal_price = filter_var($request->normal_price, FILTER_SANITIZE_NUMBER_INT);
            $promotion_price = filter_var($request->promotion_price, FILTER_SANITIZE_NUMBER_INT);
            $dataProductEdit = [
                'name' => $request->name,
                'normal_price' => $normal_price,
                'promotion_price' => $promotion_price,
                'slug' => Str::slug($request->name),
                'category_id' => $request->category_id,
                'description' => $request->description,
                'type_id' =>$request->type_id,
            ];

            // xử lý ảnh feature
            
            $dataUpLoadFeatureImage = $this->TraitUpLoadFile($request, 'feature_image_path', 'images/products');
            if(!empty($dataUpLoadFeatureImage)) {
                $dataProductEdit['feature_image_name'] = $dataUpLoadFeatureImage['image_name'];
                $dataProductEdit['feature_image_path'] = $dataUpLoadFeatureImage['image_path'];
            }
            $product->update($dataProductEdit);

            // thêm hình ảnh vào ProductImage
            if(!empty($request->image_path)) {
                ProductImage::where('product_id', $product->id)->delete();
                foreach ($request->image_path as $imageItem) {
                    $dataProductImageDetail = $this->TraitMultiUpLoadFile($imageItem, 'images/productImages');
                    $product->images()->create([
                        'image_name' => $dataProductImageDetail['image_name'],
                        'image_path' => $dataProductImageDetail['image_path'],
                    ]);
                }
            }

            DB::commit();
            return redirect()->route('product.index');
            
        } catch (\Exception $ex) {
            DB::rollBack();
            Log::error("Message: {$ex->getMessage()} --- Line: {$ex->getLine()} --- File: {$ex->getFile()}");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->TraitHideRecord($product);   
        // $product->delete();
        // return redirect()->route('product.index');
    }

    public function search(Request $request) {
        // dd($request->search);
        if ($request->has('search')) {
            $products = Product::search($request->search)->get();
        } elseif ($request->has('max_price') && $request->has('min_price')) {
            $products = Product::whereBetween('normal_price', [$request->max_price, $request->min_price])->get();
        } else {
            $product = Product::get();
        }
        return view('be.components.product.search', compact('products'));
    }
}
