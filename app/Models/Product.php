<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['product_name'];
    public $timestamps = false;

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    public function images(){
        return $this->belongsToMany(Image::class);
    }
    public function availabilities(){
        return $this->belongsToMany(Availability::class);
    }

    public function getitems(Request $request){
        $upit = DB::table('products');
        $upit = $upit->join('category_product','products.id','=','category_product.product_id');
        $upit = $upit->join('categories','category_product.category_id','=','categories.id');
        $upit = $upit->join('image_product','image_product.product_id','=','products.id');
        $upit = $upit->join('images','image_product.image_id','=','images.id');
        $upit = $upit->join('availability_product','availability_product.product_id','=','products.id');
        $upit = $upit->join('availabilities','availability_product.availability_id','=','availabilities.id');

        if($request->has('catids')){
            $upit = $upit->whereIn('categories.id',$request->get('catids'));
        }
        if($request->has('pretraga')){
         $upit = $upit->where("products.product_name","like","%".$request->get('pretraga')."%");

        }
        //sort po nekom nazivu
        if($request->has("sortBy")) {
            $upit = $upit->orderBy($request->get("sortBy"));
        }

        if($request->has("cenasort")){
        $request->get("cenasort")=="asc" ? $upit = $upit->orderBy("products.price")
        :$upit = $upit->orderByDESC("products.price");
        //order po asc i desc
        }

        $upit = $upit->select('products.*','categories.id as catID','categories.category_name','images.url',
            'availabilities.state','availabilities.id as stateID');

        return $upit;

    }
    public static function sortname(){
        $niz = [['id'=>'asc','name'=>'Low to High'],['id'=>'desc','name'=>'High to Low']];
        return $niz;
    }

    public static function sidebar(){
        $niz = [
            ['id'=>'admin','name'=>'Dashboard','icon'=>'design_app'],
            ['id'=>'blogs','name'=>'Blogs','icon'=>'ui-1_bell-53'],
            ['id'=>'users','name'=>'Users','icon'=>'design_bullet-list-67'],
            ['id'=>'messages','name'=>'Contact Messages','icon'=>'users_single-02'],
            ['id'=>'orders','name'=>'Orders','icon'=>'users_single-02'],
            ['id'=>'products.create','name'=>'Create Product','icon'=>'users_single-02']


        ];
        return $niz;
     }

    public static function uploadImage($image){
        $path = Storage::disk('public')->putFile('assets/img/products', $image);
        $exploded = explode('/', $path);
        return $exploded[count($exploded) - 1];
    }
    public static function deleteImage($image){
        Storage::disk('public')->delete('assets/img/products' . $image);
    }
    public static function oldImage($ID){
        $ImageID = DB::table('image_product')
            ->select('image_id')
            ->where('product_id', $ID)->get();
        foreach ($ImageID as $id){
            $slika = $id->image_id;
        }
        $oldImage = DB::table('images')
            ->select('url')
            ->where('id', $slika)->get();
        foreach ($oldImage as $ol){
            $url = $ol->url;
        }
        return $url;
    }

}
