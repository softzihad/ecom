<?php

namespace App;
use App\Post;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =['name', 'slug'];

    //one to many relationship
    public function products(){
    	return $this->hasMany('App\Product');
    }
    
    public function subcategories()
    {
    	return $this->hasMany('App\SubCategory');
    }

    
}
