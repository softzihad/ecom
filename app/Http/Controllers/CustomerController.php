<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\customers_registration;
use Session;

class CustomerController extends Controller
{
    public function index()
    {
    	$id = Session::get('customer_id');
    	$customer = customers_registration::where('id', $id)->first();

    	return view('vendor.customer_profile')
                        ->with('title', Setting::first()->site_name)
    					->with('logo', Setting::first()->logo)
                        ->with('favicon', Setting::first()->favicon)
                        ->with('customer', $customer)
                        ->with('customer_id',$id );
    }

    public function update(Request $request)
    {

        $id  = Session::get('customer_id');
        $customer = customers_registration::find($id);
        
        /*$a = ([
            'fname' => $request->Fname,
            'Lname' => $request->Lname,
            'email' => $request->email,
            
        ]);*/
        //dd($a);
        
        //dd($customer->email);

        $customer->name = $request->Fname." ".$request->Lname;
        $customer->email = $request->email;

        $customer->profile->f_name = $request->Fname;
        $customer->profile->l_name = $request->Lname;
        $customer->profile->company = $request->company;
        $customer->profile->address = $request->address;
        $customer->profile->phone = $request->phone;
        $customer->profile->post_code = $request->postCode;
        $customer->profile->city = $request->city;
        //$customer->profile->country = $request->country;
        
        
        $customer->save();
        $customer->profile->save();

        Session::flash('success','Updated successfully');
        return redirect()->back();
    }
}
