<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use DB;
class BrandController extends Controller
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

    public function add_brand() {
        $this->authLogin();
        return view("admin.brand.add_brand");
    }

    public function save_brand(Request $request) {
        $this->authLogin();
        $data = array();
        $data['brand_name'] = $request->brand_name;
        $data['brand_description'] = $request->brand_description;
        $data['brand_status'] = $request->brand_status;
        $get_image = $request->file('brand_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/brand',$new_image);
            $data['brand_image'] = $new_image;
            DB::table('tbl_brand')->insert($data);
            Session::put('success', 'Thêm Thương hiệu Sản phẩm thành công');
            return Redirect::to("add_brand");
        }
        $data['product_image'] = '';

        DB::table('tbl_brand')->insert($data);
        Session::put('success', 'Thêm Thương hiệu Sản phẩm thành công');
        return Redirect::to("add_brand");
    }

    public function list_brand() {
        $this->authLogin();
        $lsbrand = DB::table('tbl_brand')->get();
        $managerbrand = view('admin.brand.list_brand')->with('list_brand', $lsbrand);
        return view('admin.admin_layout')->with('admin.brand.list_brand', $managerbrand);

    }

    public function active_brand($brand_id) {
        $this->authLogin();
        DB::table('tbl_brand')->where('brand_id', $brand_id)->update(['brand_status' => 1]);
        return Redirect::to('list_brand');

    }

    public function unactive_brand($brand_id) {
        $this->authLogin();
        DB::table('tbl_brand')->where('brand_id', $brand_id)->update(['brand_status' => 0]);
        return Redirect::to('list_brand');
    }

    public function edit_brand($brand_id) {
        $this->authLogin();
        $edit_brand = DB::table('tbl_brand')->where('brand_id', $brand_id)->get();
        $managerbrand = view('admin.brand.edit_brand')->with('edit_brand', $edit_brand);
        return view('admin.admin_layout')->with('admin.brand.edit_brand', $managerbrand);
    }

    public function update_brand(Request $request, $brand_id) {
        $this->authLogin();
        $data = array();
        $data['brand_name'] = $request->brand_name;
        $data['brand_description'] = $request->brand_description;
        $get_image = $request->file('brand_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/brand',$new_image);
            $data['brand_image'] = $new_image;
            DB::table('tbl_brand')->where('brand_id',$brand_id)->update($data);
            Session::put('message','Cập nhật Thương hiệu sản phẩm thành công');
            return Redirect::to('list_brand');
        }
        DB::table('tbl_brand')->where('brand_id', $brand_id)->update($data);
        Session::put('success', 'Cập nhật Thương hiệu Sản phẩm thành công');
        return Redirect::to('list_brand');
    }

    public function delete_brand($brand_id) {
        $this->authLogin();
        DB::table('tbl_brand')->where('brand_id', $brand_id)->delete();
        Session::put('success', 'Xoá Thương hiệu Sản phẩm thành công');
        return Redirect::to('list_brand');
    }
    //Customer
    public function show_brand_home($brand_id) {
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id', 'desc')->get();

        $brand_by_id = DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')->where('tbl_product.brand_id',$brand_id)->get();
        $brand_name = DB::table('tbl_brand')->where('tbl_brand.brand_id',$brand_id)->limit(1)->get();;
        /*  foreach($category_by_id as $key => $val){
              //seo
              $meta_desc = $val->category_desc;
              $meta_keywords = $val->meta_keywords;
              $meta_title = $val->category_name;
              $url_canonical = $request->url();
              //--seo
          } */
        return view('customer.category.show_brand')->with('category',$cate_product)->with('brand', $brand_product)->with('brand_by_id',$brand_by_id)->with('brand_name',$brand_name);
    }
}
