<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customers_registration extends Model
{
    protected $fillable = ['name','email','password','terms'];
    protected $table = 'customers_registrations';
    public $timestamp = true;

    public function profile(){
        return $this->hasOne('App\customer_profile');
    }
}
