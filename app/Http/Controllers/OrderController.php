<?php

namespace App\Http\Controllers;
use App\billing_address;
use App\order_product;
use Session;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {

    	return view('admin.order.order')->with('orders', billing_address::orderByDesc('created_at')->get());
    }

    public function payment_update($id) {
        $order = billing_address::find($id);

        $order->payment = 1;
        $order->save();

        Session::flash('success', 'Payment Successfully Done');
        return redirect()->back();
    }

    public function delivery_update($id) {
        $order = billing_address::find($id);

        $order->delivery = 1;
        $order->save();

        Session::flash('success', 'Delivery  Done');
        return redirect()->back();
    }

    public function order_destroy($id)
    {
    	$order = billing_address::find($id);

        $order->orderItems()->delete();
        $order->delete();

        Session::flash('success', 'Successfully Deleted');
        return redirect()->route('order');
    }

    public function order_abc() {
    	return "hi";
    }

    public function test()
    {
    	return view('admin.order.test');
    }

}
