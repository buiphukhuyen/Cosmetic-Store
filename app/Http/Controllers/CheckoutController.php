<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Cart;
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

    public function logout_checkout() {
        Session::flush();
        return Redirect::to('/login-checkout');
    }

    public function save_shipping_order_customer(Request $request) {
        //Thêm thông tin shipping
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_notes'] = $request->shipping_notes;
        $data['shipping_address'] = $request->shipping_address;
        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);
        Session::put('shipping_id',$shipping_id);

        //Thêm thông tin thanh toán
        $payment_data = array();
        $payment_data['payment_method'] = $request->payment_option;
        $payment_data['payment_status'] = 'Đang chờ xử lý';
        $payment_id = DB::table('tbl_payment')->insertGetId($payment_data);
        Session::put('payment_id',$payment_id);

        //Thêm thông tin hoá đơn
        $order_data = array();
        $order_data['customer_id'] = Session::get('customer_id');
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = Cart::total();
        $order_data['order_status'] = 'Đang chờ xử lý';
        $order_id = DB::table('tbl_order')->insertGetId($order_data);
        Session::put('order_id',$order_id);
        //Thêm chi tiết hoá đơn

        $content = Cart::content();
        foreach($content as $v_content){
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $v_content->id;
            $order_d_data['product_name'] = $v_content->name;
            $order_d_data['product_price'] = $v_content->price;
            $order_d_data['product_sales_quantity'] = $v_content->qty;
            DB::table('tbl_order_details')->insert($order_d_data);
        }
        return Redirect::to('/done-payment');
    }

    public function done_payment() {
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id', 'desc')->get();
        $order_id = Session::get("order_id");
        $payment_id = Session::get("payment_id");

        $result = DB::table('tbl_order')
            ->join('tbl_order_details','tbl_order_details.order_id','=','tbl_order.order_id')
            ->join('tbl_payment', 'tbl_payment.payment_id','=','tbl_order.payment_id')
            ->where('tbl_order.order_id',$order_id)
            ->where('tbl_order.payment_id', $payment_id)->get();
        $order_total = DB::table('tbl_order')->where('tbl_order.order_id',$order_id)->limit(1)->get();
        $payment_method = DB::table('tbl_payment')->where('tbl_payment.payment_id',$payment_id)->limit(1)->get();
        Cart::destroy();
        return view('customer.checkout.done_payment')->with('category',$cate_product)->with('brand', $brand_product)->with('res', $result)->with('order',$order_total)->with('payment',$payment_method);
    }


}
