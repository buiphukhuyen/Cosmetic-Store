<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Illuminate\Support\Facades\Redirect;
use App\Coupon;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function save_cart(Request $request) {
        $product_id = $request->product_id_hidden;
        $quantity = $request->quantity;
        $product_info = DB::table('tbl_product')->where('product_id', $product_id)->first();

        $data['id'] = $product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = 1;
        $data['options']['image'] = $product_info->product_image;
        //Cart::destroy();
        Cart::add($data);
        return Redirect::to('/show-cart');
    }

    public function show_cart() {
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id', 'desc')->get();
        return view('customer.cart.show_cart')->with('category',$cate_product)->with('brand', $brand_product);
    }

    public function delete_to_cart($rowId) {
        Cart::update($rowId,0);
        Session::put('coupon', null);
        Cart::setGlobalDiscount(0);
        return Redirect::to('/show-cart');
    }

    public function update_cart_quantity(Request $request) {
        for ($i = 0; $i < count($request->input('rowId_cart')); $i++){
            Cart::update($request->rowId_cart[$i], $request->cart_qty[$i]);
        }
        return Redirect::to('/show-cart');
    }

    public function check_coupon(Request $request) {
        $data = $request->all();
        $coupon = Coupon::where('coupon_code', $data['coupon_code'])->first();
        if($coupon) {
            $count_coupon = $coupon->count();
            if($count_coupon > 0) {
                $coupon_session = Session::get("coupon");
                if($coupon_session==true) {
                    $is_avaiable = 0;
                    if($is_avaiable == 0) {
                        $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_function' => $coupon->coupon_function,
                            'coupon_discount' => $coupon->coupon_discount,
                        );
                        Session::put('coupon', $cou);
                    }
                }
                else {
                    $cou[] = array(
                        'coupon_code' => $coupon->coupon_code,
                        'coupon_function' => $coupon->coupon_function,
                        'coupon_discount' => $coupon->coupon_discount,
                    );
                    Session::put('coupon', $cou);
                }
                Session::save();
                return redirect()->back()->with("add_coupon_success", "Thêm mã giảm giá thành công");
             }
        }
        else {
            return redirect()->back()->with("add_coupon_error", "Mã giảm giá không hợp lệ");
        }
    }

    public function uncheck_coupon(Request $request) {
        Session::put('coupon', null);
        Cart::setGlobalDiscount(0);
        return redirect()->back();

    }


}
