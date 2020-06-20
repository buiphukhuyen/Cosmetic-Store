<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
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
    public function index() {
        return view ('admin.login');
    }


    public function dashboard() {
        $this->authLogin();
        $count_product = DB::table('tbl_product')->count();
        $count_product_sold = DB::table('tbl_order_details')->count();
        $count_customer = DB::table('tbl_customer')->count();
        $sum_money = DB::table('tbl_order')->get()->sum(function ($investment) {
            return (float) str_replace(',', '', $investment->order_total);
        });
        $ana_money = substr($sum_money, 0, -6);

        //Đơn hàng mới
        $new_order = DB::table('tbl_order')
            ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
            ->select('tbl_order.*','tbl_customer.customer_name')
            ->orderby('tbl_order.order_id','desc')->limit(5)->get();

        return view('admin.dashboard')->with('count_product',$count_product)->with('count_product_sold',$count_product_sold)->with('count_customer',$count_customer)->with('ana_money',$ana_money)->with('new_order',$new_order);
    }

    public function login_admin(Request $request) {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if($result) {
            Session::put('admin_id',$result->admin_id);
            Session::put('admin_name',$result->admin_name);
            return Redirect::to('/dashboard');
        } else {
            Session::put('error_login', 'Đăng nhập không thành công! Hãy thử lại!');
            return Redirect::to('/admin');
        }
    }

    public function logout_admin() {
        $this->authLogin();
        Session::put('admin_id',null);
        Session::put('admin_name',null);
        return Redirect::to('/admin');
    }

    public function add_admin() {
        $this->authLogin();
        return view("admin.user.add_admin");
    }

    public function save_admin(Request $request) {
        $this->authLogin();
        $data = array();
        $data['admin_name'] = $request->admin_name;
        $data['admin_email'] = $request->admin_email;
        $data['admin_phone'] = $request->admin_phone;
        $data['admin_password'] = md5($request->admin_password);

        DB::table('tbl_admin')->insert($data);
        Session::put('add_admin_success', 'Thêm Quản trị viên thành công');
        return Redirect::to("add_admin");
    }

    public function list_admin() {
        $this->authLogin();
        $lsadmin = DB::table('tbl_admin')->get();
        $manager = view('admin.user.list_admin')->with('list_admin', $lsadmin);
        return view('admin.admin_layout')->with('admin.user.list_admin', $manager);
    }

    public function edit_admin($admin_id)
    {
        $this->authLogin();
        $edit_admin = DB::table('tbl_admin')->where('admin_id', $admin_id)->get();
        $manager = view('admin.user.edit_admin')->with('edit_admin', $edit_admin);
        return view('admin.admin_layout')->with('admin.user.edit_admin', $manager);
    }

    public function update_admin(Request $request, $admin_id) {
        $this->authLogin();
        $data = array();
        $data['admin_name'] = $request->admin_name;
        $data['admin_email'] = $request->admin_email;
        $data['admin_phone'] = $request->admin_phone;
        $data['admin_password'] = md5($request->admin_password);

        DB::table('tbl_admin')->where('admin_id', $admin_id)->update($data);
        Session::put('success', 'Cập nhật Quản trị viên thành công');
        return Redirect::to('list_admin');
    }

    public function delete_admin($admin_id) {
        $this->authLogin();
        DB::table('tbl_admin')->where('admin_id', $admin_id)->delete();
        Session::put('success', 'Xoá Quản trị viên thành công');
        return Redirect::to('list_admin');
    }

    public function analytics_product() {
        $count = DB::table('tbl_product')->count();
        dd($count);
    }

}
