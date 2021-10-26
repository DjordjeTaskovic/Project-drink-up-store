<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Availability;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends OsnovniController
{
    private $ModelProduct;
    private $slika;
    private $url;

    public function __construct()
    {
        parent::__construct();
        $this->ModelProduct = new Product();
    }

    public function index(Request $request){

        $this->data['sortname'] = $this->ModelProduct::sortname();
        $this->data['items'] = $this->ModelProduct->getitems($request)->paginate(6);
        $this->data['checkedcategories'] = $request->get("catids");
        $this->data["categories"] = Category::all();
        $this->data["avaliabilities"] = Availability::all();
        return view('pages.products.index', $this->data);

    }
    public function show(Product $product){
        $this->data["product"] = $product;
        return view('pages.products.single', $this->data);
    }


    public function create(){
        $this->data["categories"] = Category::all();
        $this->data["availability"] = Availability::all();
        return view ('pages.products.create', $this->data);
    }

    public function store(ProductStoreRequest $request){
       // dd($request->all());
        DB::beginTransaction();
        try
        {
            $image = Product::uploadImage($request->image);
               $imageID = DB::table('images')->insertGetId([
                     'url'=> $image,
                    'alt'=> $request->image_info
                ]);
                $productID = DB::table('products')->insertGetId(
                    $request->only('product_name','info', 'price'));

                 foreach($request->category_id as $category){
                    DB::table('category_product')->insert([
                        "category_id" => $category,
                         "product_id" => $productID]);
                }
                foreach($request->state_id as $state){
                    DB::table('availability_product')->insert([
                        "availability_id" => $state,
                         "product_id" => $productID]);
                }

                 DB::table('image_product')->insert([
                    "image_id" => $imageID,
                 "product_id" => $productID
                  ]);
            DB::commit();

            return redirect()->route('products.create')->with('success', 'Product added successfully!');
        }
        catch(Exception $e)
        {
            DB::rollBack();
            dd($e->getMessage());
            return redirect()->route('error')->with('errorMessage', 'An error occurred!');
        }
    }

    public function edit(Product $product){
        $this->data["categories"] = Category::all();
        $this->data["product"] = $product;
        $this->data["availability"] = Availability::all();
        return view('pages.products.edit', $this->data);
    }

    public function update(ProductUpdateRequest $request, Product $product){

        DB::beginTransaction();
        try
        {
            Product::where('id','=',$request->ID)
                ->update([
                'product_name'=>$request->product_name,
                'info'=>$request->info,
                'price'=>$request->price
                ]);
            $product->categories()->sync($request->category_id);
            $product->availabilities()->sync($request->state_id);

            if($request->has('image')){
                 $oldimageurl = Product::oldImage($request->ID);
                Product::deleteImage($oldimageurl);
                $newImage = Product::uploadImage($request->image);
                $product->images()->update(['url' => $newImage]);

            }
            $product->save();

             DB::commit();

             return redirect()->route('products.edit', $product->id)->with('success', 'Product edited successfully!');
         }
         catch(Exception $e)
         {
             DB::rollBack();
             dd($e->getMessage());
             return redirect()->route('error', $product->id)->with('errorMessage', 'An error occurred!');
         }
    }

    public function destroy(Product $product){

            $product->categories()->detach();
            $product->availabilities()->detach();
            $product->images()->detach();
            $product->delete();

            return redirect()->route('admin');

    }
}
