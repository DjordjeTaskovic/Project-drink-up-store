<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CartController extends OsnovniController
{
    public function index(){
        return view('pages.main.cart', $this->data);
    }
    public function addtocart(Product $product , Request $request){
    if($request->session()->has("user")){

        $cart = session()->get('cart');
        //if the cart is empty
        if (!$cart) {
           $cart = [
            $product->id =>[
                'id' =>$product->id,
                'name' =>$product->product_name,
                'price' =>$product->price,
                'quantity' => 1
                ]
           ];
           session()->put('cart',$cart);
           return redirect()->back()->with('cart_error','Your item has been added to cart.');
        }
        //if product exists in cart and quantity++
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
           session()->put('cart',$cart);
           return redirect()->back()->with('cart_error','Your item has been added to cart.');

        }

        $cart[$product->id] = [
            'id' =>$product->id,
            'name' =>$product->product_name,
            'price' =>$product->price,
            'quantity' => 1
       ];

       session()->put('cart' , $cart);
       return redirect()->back()->with('cart_error','Your item has been added to cart.');

    }

    return redirect()->route("loginhome")->with('cart_error', 'You need to login first to add items to cart!');

    }

    public function delfromcart(Request $request){
       // dd($request->id);
        $cart = session()->get('cart');
        if (isset($cart[$request->id])) {

            unset($cart[$request->id]);
            session()->put('cart',$cart);
        }
        return redirect()->route("cart")->with('cart_error', 'Product removed from cart.');

    }
    public function makeorder(){
        $cart = session()->get('cart');
        $user = session()->get('user');
     //   dd($cart);
        if($user){
            DB::beginTransaction();
            try
            {
                       foreach($cart as $innercart){
                           $subtotal = $innercart['price'] * $innercart['quantity'];

                        DB::table('orders')->insert([
                            "product_id" => $innercart['id'],
                            "user_id" => $user->id_user,
                             "name" => $innercart['name'],
                             "price" =>$innercart['price'],
                             "quantity" => $innercart['quantity'],
                             "subtotal" => $subtotal
                             ]);
                       }
                DB::commit();

                return redirect()->route('cart')->with('success', 'Order added successfully!');
            }
            catch(Exception $e)
            {
                DB::rollBack();
                dd($e->getMessage());
                return redirect()->route('error')->with('errorMessage', 'An error occurred!');
            }
        }
    }

}
