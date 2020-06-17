@extends('admin.admin_layout')
@section('edit_brand')
    <title>Chỉnh sửa Slide</title>
    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            CHỈNH SỬA SLIDE
        </h6>
    </div>
    @foreach($edit_slider as $key=>$edit_value)
        <form action="{{URL::to('/update_slider/'.$edit_value->slider_id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="element-box login-panel panel panel-default">

                <legend><span style="font-weight:bold">Thông tin Slide</span></legend>
                <div class="form-group">
                    <label>Tên Slide</label>
                    <input type="text" name="slider_name" class="form-control" value="{{$edit_value->slider_name}}" placeholder="Tên Slide" data-error="Vui lòng nhập Tên Slide" required>
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>

                <div class="form-group">
                    <label>Hình ảnh Slide</label>
                    <input type="file" name="slider_image" class="form-control">
                    <img src="{{\Illuminate\Support\Facades\URL::to('public/uploads/slider/'.$edit_value->slider_image)}}" width="200px" height="200px" />
                </div>

                <div class="form-group">
                    <label>Mô tả Slide</label>
                    <textarea type="number" name="slider_description" class="form-control" placeholder="Mô tả Slide" data-error="Vui lòng nhập Mô tả Slide" required>{{$edit_value->slider_description}}</textarea>
                    <div class="help-block form-text text-muted form-control-feedback">
                        Mô tả chi tiết Slide
                    </div>
                </div>
                @endforeach
                <div class="form-buttons-w">
                    <button class="btn btn-success" type="submit">Chỉnh sửa Slide</button>
                </div>
            </div>
        </form>

@endsection
