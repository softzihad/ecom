<?php

namespace App\Http\Controllers;
use App\Setting;
use App\curency;
use Session;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construc()
    {
        $this->middleware('admin');
    }
    
    public function index(){

        return view('admin.settings.settings')->with('settings', Setting::first());
    }

    public function update(){

        $this->validate(request(), [
            'site_name'=> 'required',
            'contact_number'=> 'required',
            'contact_email'=> 'required',
            'address'=> 'required'
        ]);

        $settings = Setting::first();

        if (request()->hasFile('site_logo')) {
            
            $site_logo = request()->site_logo;
            $site_logo_new_name = time().$site_logo->getClientOriginalName();
            $site_logo->move('uploads/settings', $site_logo_new_name);

            $settings->logo = 'uploads/settings/'.$site_logo_new_name;
        }

        if (request()->hasFile('site_favicon')) {
            
            $site_favicon = request()->site_favicon;
            $site_favicon_new_name = time().$site_favicon->getClientOriginalName();
            $site_favicon->move('uploads/settings', $site_favicon_new_name);

            $settings->favicon = 'uploads/settings/'.$site_favicon_new_name;
        }

        $settings->site_name = request()->site_name;
        $settings->address = request()->address;
        $settings->contact_number = request()->contact_number;
        $settings->contact_email = request()->contact_email;

        $settings->save();

        Session::flash('success', 'Successfully Updated');
        return redirect()->back();
    }

    public function curency(){

        return view('admin.settings.curency')->with('curency', curency::first());
    }
    public function curency_update(Request $request){

        $id = $request->id;
       $curency = curency::find($id);
        

        $curency->taka = $request->tk;
        $curency->save();

        Session::flash('success','Updated successfully');
        return redirect()->route('curency');
    }

      
}
