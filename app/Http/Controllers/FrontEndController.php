<?php

namespace App\Http\Controllers;
use App\Setting;
use App\Category;
use App\SubCategory;
use App\Product;
use App\Cart;
use App\Tag;
use Illuminate\Http\Request;
use Session;
class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $id = Session::get('customer_id');
       
        return view('vendor.index')
                    ->with('title', Setting::first()->site_name)
                    ->with('logo', Setting::first()->logo)
                    ->with('favicon', Setting::first()->favicon)
                    ->with('categories', Category::take(7)->get())
                    ->with('categoriesSec1', Category::find(1))
                    ->with('products', Product::where('category_id', 1)->orderBy('views', 'desc')->paginate(3))
                    ->with('customer_id',$id );

    }

    public function category($slug)
    {

        $category = Category::where('slug', $slug)->first();

        return view('vendor.category')
                        ->with('category', $category)
                        ->with('title', $category->name)
                        ->with('logo', Setting::first()->logo)
                        ->with('favicon', Setting::first()->favicon)
                        ->with('categories', Category::take(7)->get())
                        ->with('settings', Setting::first());
    }

    public function subcategory($slug)
    {
        $subcategory = SubCategory::where('slug', $slug)->first();
        //dd($subcategory);

        return view('vendor.sub_category')
                        ->with('subcategory', $subcategory)
                        ->with('title', $subcategory->name)
                        ->with('favicon', Setting::first()->favicon)
                        ->with('logo', Setting::first()->logo)
                        ->with('favicon', Setting::first()->favicon)
                        ->with('categories', Category::take(7)->get());
    }

    public function singleProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $cat_id = $product->category_id;
        $product->increment('views');

        return view('vendor.single')->with('product', $product)
                                    ->with('logo', Setting::first()->logo)
                                    ->with('favicon', Setting::first()->favicon)
                                    ->with('categories', Category::take(7)->get())
                                    ->with('catname', Category::find($cat_id));
    }

    public function tag($id)
    {

        $tag = Tag::find($id);

        return view('vendor.tag')->with('tag', $tag)
                                 ->with('title', $tag->tag)
                                 ->with('settings', Setting::first())
                                 ->with('categories', Category::take(7)->get());
    }

public function Popular()
    {
       $id = Session::get('customer_id');

        return view('vendor.popular')
                    ->with('title', Setting::first()->site_name)
                    ->with('logo', Setting::first()->logo)
                    ->with('favicon', Setting::first()->favicon)
                    ->with('categories', Category::take(7)->get())
                    ->with('categoriesSec1', Category::find(1))
                    ->with('products', Product::paginate(3))
                    ->with('customer_id',$id );

    }

public function PriceDesc()
    {
       $id = Session::get('customer_id');

        return view('vendor.price_desc')
                    ->with('title', Setting::first()->site_name)
                    ->with('logo', Setting::first()->logo)
                    ->with('favicon', Setting::first()->favicon)
                    ->with('categories', Category::take(7)->get())
                    ->with('categoriesSec1', Category::find(1))
                    ->with('products', Product::paginate(3))
                    ->with('customer_id',$id );

    }

public function PriceAsce()
    {
       $id = Session::get('customer_id');

        return view('vendor.price_asce')
                    ->with('title', Setting::first()->site_name)
                    ->with('logo', Setting::first()->logo)
                    ->with('favicon', Setting::first()->favicon)
                    ->with('categories', Category::take(7)->get())
                    ->with('categoriesSec1', Category::find(1))
                    ->with('products', Product::paginate(3))
                    ->with('customer_id',$id );

    }


    public function mysearch()
    {
        $products = Product::where('name', 'like', '%'.request('query').'%')->paginate(12);
        //$id = Session::get('customer_id');
        return view('vendor.search')->with('myproducts', $products)
                        ->with('title', Setting::first()->site_name)
                        ->with('logo', Setting::first()->logo)
                        ->with('favicon', Setting::first()->favicon)
                        ->with('categories', Category::take(7)->get())
                        //->with('products', Product::paginate(3))
                        //->with('customer_id',$id )
                        ->with('query', request('query'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
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
        //
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
