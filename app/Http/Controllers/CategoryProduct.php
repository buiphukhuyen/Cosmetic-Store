<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryProduct extends Controller
{
    public function add_category() {
        return view("admin.category.add_category");
    }

    public function save_category(Request $request) {
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $data['category_status'] = $request->category_status;

        /*echo '<pre>';
        print_r($data);
        echo '</pre>'; */

        DB::table('tbl_category_product')->insert($data);
        Session::put('success', 'Thêm Danh mục Sản phẩm thành công');
        return Redirect::to("add_category_product");
    }

    public function list_category() {
        $lsCategory = DB::table('tbl_category_product')->get();
        $managerCategory = view('admin.category.list_category')->with('list_category', $lsCategory);
        return view('admin.admin_layout')->with('admin.category.list_category', $managerCategory);

    }

    public function active_category($category_id) {
        DB::table('tbl_category_product')->where('category_id', $category_id)->update(['category_status' => 1]);
        return Redirect::to('list_category_product');

    }

    public function unactive_category($category_id) {
        DB::table('tbl_category_product')->where('category_id', $category_id)->update(['category_status' => 0]);
        return Redirect::to('list_category_product');
    }

    public function edit_category($category_id) {
        $edit_category = DB::table('tbl_category_product')->where('category_id', $category_id)->get();
        $managerCategory = view('admin.category.edit_category')->with('edit_category', $edit_category);
        return view('admin.admin_layout')->with('admin.category.edit_category', $managerCategory);
    }

    public function update_category(Request $request, $category_id) {
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;

        /*echo '<pre>';
        print_r($data);
        echo '</pre>'; */

        DB::table('tbl_category_product')->where('category_id', $category_id)->update($data);
        Session::put('success', 'Cập nhật Danh mục Sản phẩm thành công');
        return Redirect::to('list_category_product');
    }

    public function delete_category($category_id) {
        DB::table('tbl_category_product')->where('category_id', $category_id)->delete();
        Session::put('success', 'Xoá Danh mục Sản phẩm thành công');
        return Redirect::to('list_category_product');
    }

}
