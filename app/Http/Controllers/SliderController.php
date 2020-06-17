<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use DB;

class SliderController extends Controller
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

    public function manage_banner() {
        $list_slide = Slider::orderBy('slider_id', 'DESC')->get();
        return view("admin.banner.list_slider")->with(compact('list_slide'));
    }

    public function add_banner() {
        return view("admin.banner.add_slider");
    }

    public function insert_banner(Request $request) {
        $data = $request->all();
        $this->authLogin();

        $get_image = $request->file('slider_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/slider',$new_image);
            $data['slider_image'] = $new_image;

            $slider = new Slider();
            $slider->slider_name = $data['slider_name'];
            $slider->slider_image = $new_image;
            $slider->slider_status = $data['slider_status'];
            $slider->slider_description = $data['slider_description'];
            $slider->save();

            Session::put('message_slider', 'Thêm Banner thành công');
            return Redirect::to("add-banner");
        }
        else {
            Session::put('message_slider', 'Vui lòng kiểm tra lại hình ảnh');
            return Redirect::to("add-banner");
        }
    }

    public function active_slider($slider_id) {
        $this->authLogin();
        DB::table('tbl_slider')->where('slider_id', $slider_id)->update(['slider_status' => 1]);
        return Redirect::to('manage-banner');
    }

    public function unactive_slider($slider_id) {
        DB::table('tbl_slider')->where('slider_id', $slider_id)->update(['slider_status' => 0]);
        return Redirect::to('manage-banner');
    }

    public function edit_slider($slider_id) {
        $this->authLogin();
        $edit_slider = DB::table('tbl_slider')->where('slider_id', $slider_id)->get();
        $managerslider = view('admin.banner.edit_slider')->with('edit_slider', $edit_slider);
        return view('admin.admin_layout')->with('admin.banner.edit_slider', $managerslider);
    }

    public function update_slider(Request $request, $slider_id) {
        $this->authLogin();
        $data = array();
        $data['slider_name'] = $request->slider_name;
        $data['slider_description'] = $request->slider_description;
        $get_image = $request->file('slider_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/slider',$new_image);
            $data['slider_image'] = $new_image;

            DB::table('tbl_slider')->where('slider_id',$slider_id)->update($data);
            Session::put('success_slider','Cập nhật Slide thành công');
            return Redirect::to('manage-banner');
        }
        else {
            Session::put('error_slider', 'Vui lòng kiểm tra lại hình ảnh');
            return Redirect::to('add-slider');
        }
    }

    public function delete_slider($slider_id) {
        $this->authLogin();
        DB::table('tbl_slider')->where('brand_id', $slider_id)->delete();
        Session::put('success_slider', 'Xoá Slider thành công');
        return Redirect::to('manage-banner');
    }

}
