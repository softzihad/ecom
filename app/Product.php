<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	use SoftDeletes;

	protected $fillable = ['name','price','image','description','category_id','sub_category_id','slug','views'];

	public function getimageAttribute($image)
    {

    	return asset($image);
    }

    protected $dates = ['deleted_at'];

    //one to Many relationship 
	public function category()
	{
	 	return $this->belongsTo('App\Category');
	}

	public function sub_category()
	{
		return $this->belongsTo('App\SubCategory');
	}

	//Many to Many relationship
    public function tags()
    {
	 	return $this->belongsToMany('App\Tag');
	}
}


