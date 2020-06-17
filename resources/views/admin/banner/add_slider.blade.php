@extends('admin.admin_layout')
@section('add_brand')
    <title>Thêm mới Slide</title>
    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            THÊM MỚI SLIDE
        </h6>
    </div>
    <form action="insert-banner" method="post" enctype="multipart/form-data">
        @csrf
        <div class="element-box login-panel panel panel-default">

            <legend><span style="font-weight:bold">Thông tin Slide</span></legend>
            <div class="form-group">
                <label>Tên Slide</label>
                <input type="text" name="slider_name" class="form-control" placeholder="Tên Slide" data-error="Vui lòng nhập Tên Slide" required>
                <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>

            <div class="form-group">
                <label>Hình ảnh Slide</label>
                <input type="file" name="slider_image" class="form-control">
            </div>

            <div class="form-group">
                <label>Mô tả Slide</label>
                <textarea type="number" name="slider_description" class="form-control" placeholder="Mô tả Slide" data-error="Vui lòng nhập Mô tả Slide" required> </textarea>
                <div class="help-block form-text text-muted form-control-feedback">
                    Mô tả chi tiết Slide
                </div>
            </div>

            <div class="form-group">
                <label>Trạng thái</label>
                <select class="form-control" name="slider_status">
                    <option value="0">Ẩn</option>
                    <option value="1" selected>Hiển thị</option>
                </select>
            </div>
            <?php

            use Illuminate\Support\Facades\Session;
            $success = Session::get('message_slider');
            if($success) {
                echo '<div class="alert alert-success" role="alert"><strong>Thành công! </strong>'.$success.'</div>';
                Session::put('message_slider', null);
            }
            ?>

            <div class="form-buttons-w">
                <button class="btn btn-success" type="submit">Thêm Slide</button>
            </div>
        </div>
    </form>


@endsection
