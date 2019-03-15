<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billing_address extends Model
{
     protected $fillable = ['customerID','f_name','l_name','phone','address','post_code','city','country','total','company','payment','notes'];

     public function orderItems()
    {
    	return $this->hasMany('App\order_product');
    }
}
