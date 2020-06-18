<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Coupon;
use DB;

class CouponController extends Controller
{
    public function authLogin() {
        $admin_id = Session::get('admin_id');
        if($admin_id) {
            return Redirect::to('dashboard');
        }
        else {
            return Redirect::to('admin')->send();
        }
    }

    public function manage_coupon() {
        $list_coupon = Coupon::orderBy('coupon_id', 'DESC')->get();
        return view("admin.coupon.list_coupon")->with(compact('list_coupon'));
    }

    public function add_coupon() {
        return view("admin.coupon.add_coupon");
    }

    public function insert_coupon(Request $request) {
        $this->authLogin();
        $data = $request->all();

        $coupon = new Coupon();
        $coupon->coupon_name = $data["coupon_name"];
        $coupon->coupon_code = $data["coupon_code"];
        $coupon->coupon_times = $data["coupon_times"];
        $coupon->coupon_function = $data["coupon_function"];
        $coupon->coupon_discount = $data["coupon_discount"];
        $coupon->save();

        Session::put('insert_coupon', 'Thêm Mã giảm giá thành công');
        return Redirect::to("add-coupon");
    }

    public function edit_coupon($coupon_id) {
        $this->authLogin();
        $edit_coupon = DB::table('tbl_coupon')->where('coupon_id', $coupon_id)->get();
        $managercoupon = view('admin.coupon.edit_coupon')->with('edit_coupon', $edit_coupon);
        return view('admin.admin_layout')->with('admin.coupon.edit_coupon', $managercoupon);
    }

    public function update_coupon(Request $request, $coupon_id) {
        $this->authLogin();
        $data = array();
        $data['coupon_name'] = $request->coupon_name;
        $data['coupon_times'] = $request->coupon_times;
        $data['coupon_code'] = $request->coupon_code;
        $data['coupon_discount'] = $request->coupon_discount;

        DB::table('tbl_coupon')->where('coupon_id', $coupon_id)->update($data);
        Session::put('success', 'Cập nhật Mã giảm giá thành công');
        return Redirect::to('manage-coupon');
    }

    public function delete_coupon($coupon_id) {
         $coupon = Coupon::find($coupon_id);
        //$coupon->delete();
        Session::put('success_delete', 'Xoá Mã khuyến mãi thành công');
        return Redirect::to('manage-coupon');
    }

}
