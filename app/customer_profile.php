<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer_profile extends Model
{
    protected $fillable = ['f_name','l_name','phone','address','post_code','city','country','company'];

    public function customer(){
    	return $this->belongsTo('App\customers_registration');
    }
}
