<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index() {
        return view ('admin.login');
    }

    public function login_admin(Request $request) {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        //print_r($result);
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
        Session::put('admin_id',null);
        Session::put('admin_name',null);
        return Redirect::to('/admin');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }


}
