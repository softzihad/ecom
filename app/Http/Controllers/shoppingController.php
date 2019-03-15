<?php

namespace App\Http\Controllers;
use App\Product;
use Cart;
use App\Category;
use Session;
use App\Setting;


use Illuminate\Http\Request;

class shoppingController extends Controller
{

    public function add_to_cart()
    {

    	//dd(request()->all());
        if (request()->qty > 50) {
            
            Session::flash('msg', 'Product Out of stack.');
            return redirect()->back();

        }elseif(request()->qty < 1) {
            Session::flash('msg1', 'Select Minimum One Quantity.');
            return redirect()->back();
        }else{
            $pdt = Product::find(request()->pdt_id);
            $discount= ($pdt->price * $pdt->discount)/100;

            $cartItem = Cart::add([

                'id' => $pdt->id,
                'slug' => $pdt->name,
                'name' => $pdt->name,
                'qty' => request()->qty,
                'price' => $pdt->price - $discount  
            ]);


            Cart::associate($cartItem->rowId, 'App\Product');

            //dd(Cart::content());
            

            Session::flash('success', 'Product Added to Cart.');
            return redirect()->back();
        }

    	
   
    }


    public function cart()
    {

    	//Cart::destroy();
    	return view('vendor.cart')
    				->with('categories', Category::take(7)->get())
                    ->with('logo', Setting::first()->logo)
                    ->with('favicon', Setting::first()->favicon);
    
    }


    public function cart_delete($id)
    {
    	Cart::remove($id);

        Session::flash('info', 'Product Deleted Successfully.');
    	return redirect()->back();
    }


    public function incr($id, $qty)
    {

        Cart::update($id, $qty + 1);
        Session::flash('info', 'Product Increment Successfully.');
        return redirect()->back();
    
    }

    public function decr($id, $qty)
    {
        Cart::update($id, $qty - 1);
        Session::flash('info', 'Product Decrement Successfully.');
        return redirect()->back();
    }

    public function rapid_add($id)
    {
        $pdt = Product::find($id);
        $discount= ($pdt->price * $pdt->discount)/100;


        $cartItem = Cart::add([

            'id' => $pdt->id,
            'name' => $pdt->name,
            //'qty' => request()->qty,
            'qty' => 1,
            'price' => $pdt->price - $discount  
        ]);

        Cart::associate($cartItem->rowId, 'App\Product');

        Session::flash('success', 'Product Added to Cart.');
        return redirect()->route('cart');
    }

}
