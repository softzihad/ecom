<?php

namespace App\Http\Controllers;

use App\Customer;
use App\billing_address;
use App\customers_registration;
use App\customer_profile;
use App\Category;
use App\Setting;
use App\order_product;
use App\curency;
use Session;
use Stripe\Stripe;
use Stripe\Charge;
use Cart;
use Mail;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $id = Session::get('customer_id');
        $customer = customers_registration::where('id', $id)->first();

    	return view('vendor.checkout')
                    ->with('categories', Category::take(7)->get())
                    ->with('logo', Setting::first()->logo)
                    ->with('favicon', Setting::first()->favicon)
                    ->with('customer_id',$id )
                    ->with('customer', $customer);
    }

    public function order()
    {
    	return view('vendor.order')
                    ->with('logo', Setting::first()->logo)
                    ->with('favicon', Setting::first()->favicon)
                    ->with('billing', billing_address::orderBy('created_at', 'desc')->first())
                    ->with('curency', curency::first());
    }

	public function store(Request $request)
    {
/*=========> Customer Registration Section <==========  */
        if ($request->email == TRUE && $request->pass == TRUE){

                $customer = customers_registration::where('email',$request->email)->first();

                if(empty($customer)){
                    $customer = customers_registration::create([
                        'name'  => $request->Fname." ".$request->Lname,
                        'email'  => $request->email,
                        'terms'  => 1,
                        'password'  => $request->pass
                    ]);

                    $profile = new customer_profile; 
                    $profile->customers_registration_id = $customer->id;
                    $profile->f_name = $request->Fname;
                    $profile->l_name = $request->Lname;
                    $profile->phone = $request->phone;
                    $profile->address = $request->address;
                    $profile->post_code = $request->Postcode;
                    $profile->city = $request->city;
                    $profile->country = $request->country;
                    $profile->save();
                    Session::forget('reg_msg');
                }else {
                    $request->session()->push('reg_msg', 'developers');
                    Session::forget('login_msg_errtwo');
                    return redirect()->route('cart.checkout');
                }
            }

        
/*=========> Customer IP Detect Section <==========  */
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
          $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
          $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
          $ip=$_SERVER['REMOTE_ADDR'];
        }
       //dd($ip);


/*=========> Billing Deteils Section <==========  */
        $total = Cart::total();

        $billing_address = billing_address::create([
            'f_name' => $request->Fname,
            'l_name' => $request->Lname,
            'phone' => $request->phone,
            'address' => $request->address,
            'post_code' => $request->Postcode,
            'city' => $request->city,
            'country' => $request->country,
            'total' => $total,
            'company' => $request->company,
            'notes' => $request->notes
        ]);

        if (isset($customer_id)) {
                $billing_address->customerID =  $customer_id;
            }else{
                $billing_address->customerID =  implode('',explode('.', $ip));
            }
           $billing_address->save();


/*=========> Billing Deteils Section <==========  */

        $customer_id = Session::get('customer_id');

        $productId      = $request->productId;
        $productName    = $request->productName;
        $productPrice   = $request->productPrice;
        $productQty     = $request->productQty;

        $Fname          = $request->Fname;
        $Lname          = $request->Lname;
        $phone          = $request->phone;
        $address        = $request->address;
        $Postcode       = $request->Postcode;
        $city           = $request->city;
        $country        = $request->country;
        $company        = $request->company;
        $notes          = $request->notes;

        $billing_address = billing_address::orderBy('created_at', 'desc')->first();
        $id = $billing_address->id;

        foreach ($productId as $key => $value) {

           $orderProduct = new order_product();
           $orderProduct->productID =  $productId[$key];
           $orderProduct->name =  $productName[$key];
           $orderProduct->price =  $productPrice[$key];
           $orderProduct->quantity =  $productQty[$key];
           $orderProduct->billing_address_id =  $id;

            

            if (isset($customer_id)) {
                $orderProduct->customerID =  $customer_id;
            }else{
                $orderProduct->customerID =  implode('',explode('.', $ip));
                $orderProduct->customerIP =  $ip;
            }
           $orderProduct->save();
        }

        //dd($productName);

        /*
        $a = ([
            'productId' => $request->productId,
            'productName' => $request->productName,
            'productPrice' => $request->productPrice,
            'productQty' => $request->productQty,

            'f_name' => $request->Fname,
            'l_name' => $request->Lname,
            'phone' => $request->phone,
            'address' => $request->address,
            'post_code' => $request->Postcode,
            'city' => $request->city,
            'country' => $request->country, 
            'company' => $request->company,
            'notes' => $request->notes
        ]);
        dd($a);
        */
/*
        if ($request->email == TRUE && $request->pass == TRUE){
                $customer = new customers_registration();
                $customer->name = $request->Fname." ".$request->Lname;
                $customer->email = $request->email;
                $customer->password = $request->pass;
                $customer->terms = 1;
                $customer->save();
                //dd($customer->name);
            }
        
*/ 
        $a = billing_address::orderBy('id', 'desc')->first();
        $id = $a->id + 1;
        
        Session::flash('success', 'BILLING DETAILS Successfully Added.');
        return redirect()->route('cart.order');
    }

    public function pay()
    {
        //dd(request()->all());

        Stripe::setApiKey("sk_test_qwHUl41XsCroo9Qk3mNYpK3s");

        $token = request()->stripeToken;

        $charge = Charge::create([

            'amount' => Cart::total() * 100,
            'currency' => 'usd',
            'description' => 'selling E-commerce Products',
            'source' => $token
        ]);

        $current = billing_address::orderBy('created_at', 'desc')->first();
        $current->payment = 1;
        $current->save();

        Session::flash('success', 'Purchase Successfull. Please Wait for our email.');

        Cart::destroy();

        Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);
        return redirect()->route('index');
    }

    public function pay_bkash()
    {
        
        Session::flash('success', 'Purchase Successfull. Please Wait for our email.');
        Cart::destroy();
        return redirect()->route('index');
    }

}
