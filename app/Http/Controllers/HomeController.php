<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard')->with('products_count', Product::all()->count())
                                      ->with('trashed_count', Product::onlyTrashed()->get()->count())
                                      ->with('users_count', User::all()->count())
                                      ->with('categories_count', Category::all()->count());
    }
}
