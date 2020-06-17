<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Slider;
class HomeController extends Controller
{
    //
    public function index(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id', 'desc')->get();
        $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();
       /* $list_product = DB::table('tbl_product')
            ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
            ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
            ->orderby('tbl_product.product_id','desc')->get();*/

        $list_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(15)->get();

        return view ('customer.home')->with('category',$cate_product)->with('brand', $brand_product)->with('product', $list_product)->with('slider',$slider);
    }

    public function search(Request $request) {
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id', 'desc')->get();

        $keywords = $request->keywords;

        /* $list_product = DB::table('tbl_product')
             ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
             ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
             ->orderby('tbl_product.product_id','desc')->get();*/

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get();

        return view ('customer.product.search')->with('category',$cate_product)->with('brand', $brand_product)->with('search_product',$search_product)->with('keywords',$keywords);
    }
}
