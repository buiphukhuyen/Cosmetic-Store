<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{

    public function login_checkout() {
        $customer_id = Session::get('customer_id');
        $customer_name =Session::get('customer_name');
        if($customer_id!=NULL || $customer_name!=NULL) {
            return Redirect::to('/checkout');
        }

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id', 'desc')->get();

        return view('customer.checkout.login_checkout')->with('category',$cate_product)->with('brand', $brand_product);
    }

    public function login_customer(Request $request) {
        $customer_email = $request->customer_email;
        $customer_password = md5($request->customer_password);
        $result = DB::table('tbl_customer')->where('customer_email', $customer_email)->where('customer_password', $customer_password)->first();
        if($result) {
            Session::put('customer_id',$result->customer_id);
            Session::put('customer_name',$result->customer_name);
            return Redirect::to('/');
        } else {
            Session::put('error_login', 'Đăng nhập không thành công! Hãy thử lại!');
            return Redirect::to('/login-checkout');
        }
    }
    public function add_customer(Request $request) {
        $data = array();
        $data['customer_name'] = $request->reg_name;
        $data['customer_email'] = $request->reg_email;
        $data['customer_password'] = md5($request->reg_password);
        $data['customer_phone'] = $request->reg_phone;

        $customer_id     = DB::table('tbl_customer')->insertGetId($data);

        Session::put('customer_id', $customer_id);
        Session::put('customer_name', $request->customer_name);
        return Redirect::to('/checkout');
    }

    public function checkout() {
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id', 'desc')->get();
        return view('customer.checkout.checkout')->with('category',$cate_product)->with('brand', $brand_product);
    }

    public function save_checkout_customer(Request $request) {
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_notes'] = $request->shipping_notes;
        $data['shipping_address'] = $request->shipping_address;

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);

        Session::put('shipping_id',$shipping_id);

        return Redirect::to('/payment');
    }

    public function payment() {

    }

    public function logout_checkout() {
        Session::flush();
        return Redirect::to('/login-checkout');
    }
}
