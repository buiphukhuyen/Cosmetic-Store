<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use DB;

class CustomerController extends Controller
{
    public function authLogin() {
        $admin_id = Session::get('admin_id');
        if($admin_id) {
            return Redirect::to('admin.dashboard');
        }
        else {
            return Redirect::to('admin')->send();
        }
    }

    public function add_customer() {
        $this->authLogin();
        return view("admin.user.add_customer");
    }

    public function save_customer(Request $request) {
        $this->authLogin();
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_password'] = md5($request->customer_password);

        DB::table('tbl_customer')->insert($data);
        Session::put('add_customer_success', 'Thêm Khách hàng thành công');
        return Redirect::to("add_customer");
    }

    public function list_customer() {
        $this->authLogin();
        $lsCustomer = DB::table('tbl_customer')->get();
        $managerCustomer = view('admin.user.list_customer')->with('list_customer', $lsCustomer);
        return view('admin.admin_layout')->with('admin.user.list_customer', $managerCustomer);
    }

    public function edit_customer($customer_id)
    {
        $this->authLogin();
        $edit_customer = DB::table('tbl_customer')->where('customer_id', $customer_id)->get();
        $managerCustomer = view('admin.user.edit_customer')->with('edit_customer', $edit_customer);
        return view('admin.admin_layout')->with('admin.user.edit_customer', $managerCustomer);
    }

    public function update_customer(Request $request, $customer_id) {
        $this->authLogin();
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_password'] = md5($request->customer_password);

        DB::table('tbl_customer')->where('customer_id', $customer_id)->update($data);
        Session::put('success', 'Cập nhật Khách hàng thành công');
        return Redirect::to('list_customer');
    }

    public function delete_customer($customer_id) {
        $this->authLogin();
        DB::table('tbl_customer')->where('customer_id', $customer_id)->delete();
        Session::put('success', 'Xoá Khách hàng thành công');
        return Redirect::to('list_customer');
    }
}
