<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\SubCategory;
use App\Tag;
use Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index')->with('products', Product::all());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        $subcategories = SubCategory::all();
        $tags = Tag::all();

        if ($categories->count() == 0) {
            
            Session::flash('info', 'you must have some categories before attemping to create a product');

            return redirect()->back();
        }

        return view('admin.products.create')
                        ->with('categories', $categories)
                        ->with('tags', $tags)
                        ->with('subcategories', $subcategories);
                                         
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'image' => 'required|image',
            'description' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required'
        ]);

        
        $product_image = $request->image;
        $product_image_new_name = time().$product_image->getClientOriginalName();
        
        $product_image->move('uploads/products', $product_image_new_name);

        $str = $request->name;
        $slug = trim(preg_replace('/\s+/', '-', $str));

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => 'uploads/products/'.$product_image_new_name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->subcategory_id,
            'slug' => $slug
        ]);


        $product->tags()->attach($request->tags);

        Session::flash('success', 'Product Successfully Added.');
        return redirect()->route('products.create');

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
        $product = Product::find($id);

        return view('admin.products.edit')->with('product', $product)
                                       ->with('categories', Category::all())
                                       ->with('subcategories', SubCategory::all())
                                       ->with('tags', Tag::all());
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
        $product = Product::find($id);

        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required'
        ]);

        if ($request->hasFile('image')) {

            $product_image = $request->image;
            $product_image_new_name = time().$product_image->getClientOriginalName();
            $product_image->move('uploads/products', $product_image_new_name);

            $product->image = 'uploads/products/'.$product_image_new_name;
        }

        //$str = $request->name;
        //$slug = trim(preg_replace('/\s+/', '-', $str));

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->subcategory_id;

        $product->save();
        $product->tags()->sync($request->tags);
        Session::flash('success', 'Successfully Updated');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        Session::flash('success', 'the product just was trashed');
        return redirect()->back();
    }

    public function trashed()
    {
        $products = Product::onlyTrashed()->get();

        return view('admin.products.trashed')->with('products', $products);
        
    }

    public function kill($id)
    {
        $product = Product::withTrashed()->where('id', $id)->first();

        $product->forceDelete();
        Session::flash('success', 'Product Delete Permanently');
        return redirect()->back();
        
    }

    public function restore($id)
    {
        $product = Product::withTrashed()->where('id', $id)->first();

        $product->restore();
        Session::flash('success', 'Product Restore Successfully');
        return redirect()->route('products.index');
        
    }

    public function discount_update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->discount = $request->discount;
        

        $product->save();
        Session::flash('success', 'Successfully Updated');
        return redirect()->route('products.index');
    }

}
