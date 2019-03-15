<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category; //Model Name
use App\SubCategory; //Model Name
use Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.categories.index')->with('categories', $category);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Category; //Model Name

        if (empty($request->name)) {

            Session::flash('info', 'The name field is required.');
            return redirect()->route('category.create');
        }

        $this->validate($request, [
            'name' => 'required'
        ]);

        $str = $request->name;
        $slug = trim(preg_replace('/\s+/', '-', $str));
        
       $cat->name = $request->name;
       $cat->slug = $slug;
       $cat->save();
       Session::flash('success','You successfully created a Category');
       return redirect()->route('category.create');
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
        $category = Category::find($id);
        return view('admin.categories.edit')->with('category', $category);
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
        $category = Category::find($id);
        $this->validate($request, [
            'name' => 'required'
        ]);

        $str = $request->name;
        $slug = trim(preg_replace('/\s+/', '-', $str));

        $category->name = $request->name;
        $category->slug = $slug;
        $category->save();

        Session::flash('success','Updated successfully');
        return redirect()->route('categories.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();

        Session::flash('error','Deleted successfully');
        return redirect()->route('categories.index');
    }
    


    /* ---> Working for Sub-Category<----- */
    public function sub_index()
            {
                $subcategory = SubCategory::all();
                $category = Category::all();

                return view('admin.categories.sub_index')
                        ->with('subcategory', $subcategory)
                        ->with('categories', $category);
            }

    public function sub_store(Request $request)
        {
            if(empty($request->name)) {

                Session::flash('info', 'The name field is required.');
                return redirect()->back();
            }
            
            $this->validate($request, [
                'name' => 'required',
                'PrimaryCat_id' => 'required'
            ]);


            $subcategory = SubCategory::create([
                'name' => $request->name,
                'slug' => $request->name,
                'category_id'  => $request->PrimaryCat_id
            ]);

            //dd($subcategory);
            Session::flash('success', 'Sub-Category Added Successfully');
            return redirect()->back();
        }

        

        public function sub_destroy($id)
        {
            $sub_cat = SubCategory::find($id);
            $sub_cat->delete();

            Session::flash('error','Deleted successfully');
            return redirect()->route('sub_index');

        }

        public function sub_edit($id)
        {
            $category = Category::all();
            $sub_cat = SubCategory::find($id);

            return view('admin.categories.sub_edit')
                    ->with('subcategory', $sub_cat)
                    ->with('category', $category);
        }

        public function sub_update(Request $request, $id)
        {
            $sub_category = SubCategory::find($id);

            $this->validate($request, [
                'name' => 'required'
            ]);

            $sub_category->name = $request->name;
            $sub_category->category_id  = $request->PrimaryCat_id;

            $sub_category->save();

            Session::flash('success','Updated successfully');
            return redirect()->route('sub_index');
        }
    

}
