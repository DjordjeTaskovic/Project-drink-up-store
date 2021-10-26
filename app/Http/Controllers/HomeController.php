<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Blog;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends OsnovniController
{
    private $ModelProduct;
    public function __construct()
    {
        parent::__construct();
        $this->ModelProduct = new Product();
    }
    public function index(Request $request){

        $this->data['products'] = $this->ModelProduct->getitems($request)->paginate(4);
        $this->data["blogs"] = Blog::with('images')->get();
        return view('pages.main.home', $this->data);
    }
    public function author(){
        return view('pages.main.author',$this->data);
    }


    public function dashboard(){
        $this->data["products"] = Product::with('images','availabilities','categories')->get();
        return view('admin-panel.pages.dashboard', $this->data);

    }
    public function blogs(){
        $this->data["blogs"] = Blog::with('images')->get();
        return view('admin-panel.pages.blogs',$this->data);
    }
    public function users(){
        $this->data["users"] = DB::table('users')
        ->join('user_role','users.id','=','user_role.id_user')
        ->join('roles','user_role.id_role','=','roles.id')
        ->select('users.*','roles.role_name')
        ->get();

        return view('admin-panel.pages.user',$this->data);
    }
    public function messages(){
        $this->data['messages'] = DB::table('contacts')->get();

        return view('admin-panel.pages.messages',$this->data);
    }
    public function orders(){
        $this->data['orders'] = Order::all();

        return view('admin-panel.pages.orders',$this->data);
    }
    public function sitemap(){
        return response()->view('pages.sitemap')->header('Content-Type','text/xml');
    }

}
