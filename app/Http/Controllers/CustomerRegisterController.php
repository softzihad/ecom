<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customers_registration;
use App\customer_profile;
use App\Setting;
use Session;

class CustomerRegisterController extends Controller
{
    public function index()
    {
    	return view('vendor.customer_register')
                        ->with('title', Setting::first()->site_name)
    					->with('logo', Setting::first()->logo)
                        ->with('favicon', Setting::first()->favicon);
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
            'Fname' => 'required',
            'Lname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'terms' => 'required'
        ]);

        /*
        $customer = new customers_registration();

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->terms = $request->terms;

        if ($request->password == $request->repeatPass)
        {

        	$customer->password = $request->password;
        }
       // dd($customer->id);
        $customer->save();
        */

        if ($request->password == $request->repeatPass)
        {

           $customer = customers_registration::create([
                    'name'  => $request->Fname." ".$request->Lname,
                    'email'  => $request->email,
                    'terms'  => $request->terms,
                    'password'  => $request->password
                ]);

            $profile = new customer_profile; 
            $profile->customers_registration_id = $customer->id;
            $profile->f_name = $request->Fname;
            $profile->l_name = $request->Lname;
            $profile->save();

            Session::flash('success', 'Registration Successfully Done.');
            Session::forget('message');
            return redirect('/'); 
        }else {
            $request->session()->push('message', 'developers');
            return redirect()->route('customer.register');
        }
         
    }  
}
