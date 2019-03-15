<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customers_registration;
use App\Setting;
use Session;
use Cart;
use Illuminate\Support\Facades\Auth;
class CustomerLoginController extends Controller
{
	public function index()
	{
		return view('vendor.customer_login')
						->with('title', Setting::first()->site_name)
						->with('logo', Setting::first()->logo)
                        ->with('favicon', Setting::first()->favicon);
	}

	public function login(Request $request)
	{
		$email = $request->email;
		$pass  = $request->password;
		
		$customer = customers_registration::where('email',$email)
			->where('password',$pass)
			->first();

		if(!empty($customer)){
			$id = $customer->id;
			Session::put('customer_id', $id);
			//Cart::destroy();t
			Session::forget('message');
			return redirect('/');

		}else {
			$request->session()->push('login_msg_err', 'developers');
			return redirect()->route('customer.login');
		}


	}

	public function login_two(Request $request)
	{
		$email = $request->email;
		$pass  = $request->password;
		
		$customer = customers_registration::where('email',$email)
			->where('password',$pass)
			->first();

		if(!empty($customer)){
			$id = $customer->id;
			Session::put('customer_id', $id);
			//Cart::destroy();
			Session::forget('login_msg');
			return redirect()->route('cart.checkout');

		}else {
			$request->session()->push('login_msg_errtwo', 'developers');
			Session::forget('reg_msg');
			return redirect()->route('cart.checkout');
		}


	}

	public function logout(){
		Session::forget('customer_id');
		Cart::destroy();
		return redirect('/');


	}
}
