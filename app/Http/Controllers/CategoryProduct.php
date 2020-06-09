<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryProduct extends Controller
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

    public function add_category() {
        $this->authLogin();
        return view("admin.category.add_category");
    }

    public function save_category(Request $request) {
        $this->authLogin();
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $data['category_status'] = $request->category_status;

        DB::table('tbl_category_product')->insert($data);
        Session::put('success', 'Thêm Danh mục Sản phẩm thành công');
        return Redirect::to("add_category_product");
    }

    public function list_category() {
        $this->authLogin();
        $lsCategory = DB::table('tbl_category_product')->get();
        $managerCategory = view('admin.category.list_category')->with('list_category', $lsCategory);
        return view('admin.admin_layout')->with('admin.category.list_category', $managerCategory);
    }

    public function active_category($category_id) {
        $this->authLogin();
        DB::table('tbl_category_product')->where('category_id', $category_id)->update(['category_status' => 1]);
        return Redirect::to('list_category_product');
    }

    public function unactive_category($category_id) {
        $this->authLogin();
        DB::table('tbl_category_product')->where('category_id', $category_id)->update(['category_status' => 0]);
        return Redirect::to('list_category_product');
    }

    public function edit_category($category_id) {
        $this->authLogin();
        $edit_category = DB::table('tbl_category_product')->where('category_id', $category_id)->get();
        $managerCategory = view('admin.category.edit_category')->with('edit_category', $edit_category);
        return view('admin.admin_layout')->with('admin.category.edit_category', $managerCategory);
    }

    public function update_category(Request $request, $category_id) {
        $this->authLogin();
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;

        DB::table('tbl_category_product')->where('category_id', $category_id)->update($data);
        Session::put('success', 'Cập nhật Danh mục Sản phẩm thành công');
        return Redirect::to('list_category_product');
    }

    public function delete_category($category_id) {
        $this->authLogin();
        DB::table('tbl_category_product')->where('category_id', $category_id)->delete();
        Session::put('success', 'Xoá Danh mục Sản phẩm thành công');
        return Redirect::to('list_category_product');
    }


    //Customer
    public function show_category_home($category_id) {
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id', 'desc')->get();

        $category_by_id = DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('tbl_product.category_id',$category_id)->get();
        $category_name = DB::table('tbl_category_product')->where('tbl_category_product.category_id',$category_id)->limit(1)->get();;
      /*  foreach($category_by_id as $key => $val){
            //seo
            $meta_desc = $val->category_desc;
            $meta_keywords = $val->meta_keywords;
            $meta_title = $val->category_name;
            $url_canonical = $request->url();
            //--seo
        } */
        return view('customer.category.show_category')->with('category',$cate_product)->with('brand', $brand_product)->with('category_by_id',$category_by_id)->with('category_name',$category_name);
    }


}
