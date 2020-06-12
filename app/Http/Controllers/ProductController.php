<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use DB;

class ProductController extends Controller
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

    public function add_product() {
        $this->authLogin();
        $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id', 'desc')->get();
        return view('admin.product.add_product')->with('cate_product', $cate_product)->with('brand_product', $brand_product);
    }

    public function save_product(Request $request) {
        $this->authLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_description'] = $request->product_description;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->category_id;
        $data['brand_id'] = $request->brand_id;
        $data['product_status'] = $request->product_status;
        $get_image = $request->file('product_image');
        $get_image_gallery = $request->file('filename');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_image'] = $new_image;

            if($get_image_gallery) {
                foreach($request->file('filename') as $image)
                {
                    $name=$image->getClientOriginalName();
                    $new_name = current(explode('.',$name));
                    $new_images =  $new_name.rand(0,99).'.'.$image->getClientOriginalExtension();
                    $image->move('public/uploads/product', $new_images);
                    $datas[] = $new_images;
                }
                $data['product_image_gallery'] = json_encode($datas);
            }

            DB::table('tbl_product')->insert($data);
            Session::put('success', 'Thêm Sản phẩm thành công');
            return Redirect::to("add_product");
        }

        $data['product_image'] = '';
        $data['product_image_gallery'] ='';
        DB::table('tbl_product')->insert($data);
        Session::put('success', 'Thêm Sản phẩm thành công');
        return Redirect::to("add_product");
    }

    public function list_product() {
        //   $list_product = DB::table('tbl_product')->get();
        $this->authLogin();
        $list_product = DB::table('tbl_product')
            ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
            ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
            ->orderby('tbl_product.product_id','desc')->get();
        $manager_product  = view('admin.product.list_product')->with('list_product',$list_product);

        return view('admin.admin_layout')->with('admin.product.list_product', $manager_product);
    }

    public function active_product($product_id) {
        $this->authLogin();
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status' => 1]);
        return Redirect::to('list_product');
    }

    public function unactive_product($product_id) {
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status' => 0]);
        return Redirect::to('list_product');
    }

    public function edit_product($product_id) {
        $this->authLogin();
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();
        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();

        $manager_product  = view('admin.product.edit_product')->with('edit_product',$edit_product)->with('cate_product',$cate_product)->with('brand_product',$brand_product);

        return view('admin.admin_layout')->with('admin.product.edit_product', $manager_product);
    }

    public function update_product(Request $request, $product_id, $get_image_gallery) {
        $this->authLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_description'] = $request->product_description;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->category_id;
        $data['brand_id'] = $request->brand_id;
        $get_image = $request->file('product_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_image'] = $new_image;
            if($get_image_gallery) {
                foreach($request->file('filename') as $image)
                {
                    $name=$image->getClientOriginalName();
                    $new_name = current(explode('.',$name));
                    $new_images =  $new_name.rand(0,99).'.'.$image->getClientOriginalExtension();
                    $image->move('public/uploads/product', $new_images);
                    $datas[] = $new_images;
                }
                $data['product_image_gallery'] = json_encode($datas);
            }

            DB::table('tbl_product')->where('product_id',$product_id)->update($data);
            Session::put('message','Cập nhật sản phẩm thành công');
            return Redirect::to('list_product');
        }

        DB::table('tbl_product')->where('product_id', $product_id)->update($data);
        Session::put('success', 'Cập nhật Sản phẩm thành công');
        return Redirect::to('list_product');
    }

    public function delete_product($product_id) {
        $this->authLogin();
        DB::table('tbl_product')->where('product_id', $product_id)->delete();
        Session::put('success', 'Xoá Sản phẩm thành công');
        return Redirect::to('list_product');
    }

    public function product_detail($product_id) {
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id', 'desc')->get();

        $product_detail = DB::table('tbl_product')
            ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
            ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
            ->where('tbl_product.product_id',$product_id)->get();

        foreach($product_detail as $key => $value){
            $category_id = $value->category_id;
        }

        $product_related = DB::table('tbl_product')
            ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
            ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
            ->where('tbl_category_product.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id])->get();

        $list_new_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(8)->get();
            return view('customer.product.product_detail')->with('category',$cate_product)->with('brand', $brand_product)->with('list_new_product',$list_new_product)->with('product_detail',$product_detail)->with('product_related',$product_related);
    }
}
