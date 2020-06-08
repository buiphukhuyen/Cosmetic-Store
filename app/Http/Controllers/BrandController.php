<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use DB;
class BrandController extends Controller
{
    public function add_brand() {
        return view("admin.brand.add_brand");
    }

    public function save_brand(Request $request) {
        $data = array();
        $data['brand_name'] = $request->brand_name;
        $data['brand_description'] = $request->brand_description;
        $data['brand_status'] = $request->brand_status;

        /*echo '<pre>';
        print_r($data);
        echo '</pre>'; */

        DB::table('tbl_brand')->insert($data);
        Session::put('success', 'Thêm Thương hiệu Sản phẩm thành công');
        return Redirect::to("add_brand");
    }

    public function list_brand() {
        $lsbrand = DB::table('tbl_brand')->get();
        $managerbrand = view('admin.brand.list_brand')->with('list_brand', $lsbrand);
        return view('admin.admin_layout')->with('admin.brand.list_brand', $managerbrand);

    }

    public function active_brand($brand_id) {
        DB::table('tbl_brand')->where('brand_id', $brand_id)->update(['brand_status' => 1]);
        return Redirect::to('list_brand');

    }

    public function unactive_brand($brand_id) {
        DB::table('tbl_brand')->where('brand_id', $brand_id)->update(['brand_status' => 0]);
        return Redirect::to('list_brand');
    }

    public function edit_brand($brand_id) {
        $edit_brand = DB::table('tbl_brand')->where('brand_id', $brand_id)->get();
        $managerbrand = view('admin.brand.edit_brand')->with('edit_brand', $edit_brand);
        return view('admin.admin_layout')->with('admin.brand.edit_brand', $managerbrand);
    }

    public function update_brand(Request $request, $brand_id) {
        $data = array();
        $data['brand_name'] = $request->brand_name;
        $data['brand_description'] = $request->brand_description;

        /*echo '<pre>';
        print_r($data);
        echo '</pre>'; */

        DB::table('tbl_brand')->where('brand_id', $brand_id)->update($data);
        Session::put('success', 'Cập nhật Thương hiệu Sản phẩm thành công');
        return Redirect::to('list_brand');
    }

    public function delete_brand($brand_id) {
        DB::table('tbl_brand')->where('brand_id', $brand_id)->delete();
        Session::put('success', 'Xoá Thương hiệu Sản phẩm thành công');
        return Redirect::to('list_brand');
    }
}
