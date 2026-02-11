<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function signup(){
        return view('vendor/signup');
    }

    public function register(Request $request){
        $request->validate([
            "full_name" => "required",
            "phone" => "required|regex:/^[0-9]{10}/|unique:vendors,phone",
            "email" => "required|email|unique:vendors,email",
            "password" => "required",
            "address" => "required",
        ]);

        Vendor::create([
            "full_name" =>$request->full_name,
            "phone" =>$request->phone,
            "email" =>$request->email,
            "password" =>Hash::make($request->password),
            "address" =>$request->address,
        ]);

        return redirect('vendor/signup')->with('msg','Registered Successfully');

    }


    public function login(){
        return view('vendor/login');
    }

    public function login_create(Request $request){
        $request->validate([
            "phone" => "required",
            "password" => "required"
        ]);
        
        $checkVendor=Vendor::where(['phone'=>$request->phone])->first();

        if($checkVendor && Hash::check($request->password, $checkVendor->password)){

            if($checkVendor->status=="verified"){
                session(['vendorLogin'=>true]);
                session(['vendorName'=>$checkVendor->full_name]);
                session(['vendorId'=>$checkVendor->v_id]);
                return redirect('vendor/');
            }else{
                return redirect('vendor/login')->with('msg','You are not verified');
            }


        }else{
             return redirect('vendor/login')->with('msg','Invalid Phone/Password');
        }
    }


    public function logout(){
        session()->forget('vendorLogin');
        return redirect('vendor/login');
    }

    public function forget(){
        return view('vendor/forget');
    }

    public function index(){
        return view('vendor/index');
    }

    public function orders(){
        return view('vendor/orders');
    }

    public function orderdetail(){
        return view('vendor/order-detail');
    }

    public function users(){
        return view('vendor/users');
    }

    public function profile(){
        $v_id = session('vendorId');

        $vendor = Vendor::find($v_id);
        return view('vendor/profile',compact('vendor'));
    }

        public function updateprofile(Request $request){

            $v_id = session('vendorId');

            $vendor = Vendor::find($v_id);

            $request->validate([
                "full_name" => "required",
                "phone" => "required",
                "email" => "required",
                "address" => "required",
                "id_number" => "required",
                "business_name" => "required",
                "business_type" => "required",
                "gst_number" => "required",
                "business_category" => "required",
                "bank_account_no" => "required",
                "payment_method" => "required",
            ]);

       $vendor->update([
            "full_name" => $request->full_name,
            "phone" => $request->phone,
            "email" => $request->email,
            "address" => $request->address,
            "id_number" => $request->id_number,
            "business_name" => $request->business_name,
            "business_type" => $request->business_type,
            "gst_number" => $request->gst_number,
            "business_category" => $request->business_category,
            "bank_account_no" => $request->bank_account_no,
            "payment_method" => $request->payment_method,
       ]);
        return redirect('vendor/profile')->with('msg','Your Profile Updated Successfully!');
    }
}
