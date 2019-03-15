<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_product extends Model
{
      protected $fillable = ['productID','name','price','quantity','customerID','customerIP','billing_address_id'];

      public function billingAdress()
    {
    	return $this->belongsTo('App\billing_address');
    }
}
