<?php

namespace App\Http\Middleware;

use App\customers_registrations;
use Session;
use Closure;

class Customer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = Session::get('customer_id');
        
        if( \App\customers_registrations::select('id') == true ){
            return $next($request);
        }else{
            Session::flash('warning','Wrong activity!');
            return redirect()->back();
        }
        
    }
}
