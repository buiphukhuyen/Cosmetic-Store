@extends('admin.admin_layout')
@section('add_brand')
    <title>Thêm mới Thương hiệu</title>
    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            THÊM MỚI THƯƠNG HIỆU
        </h6>
    </div>
    <form action="add_brand" method="post">
        @csrf
        <div class="element-box login-panel panel panel-default">

            <legend><span style="font-weight:bold">Thông tin Thương hiệu</span></legend>
            <div class="form-group">
                <label>Tên thương hiệu</label>
                <input type="text" name="brand_name" class="form-control" placeholder="Tên thương hiệu" data-error="Vui lòng nhập Tên thương hiệu" required>
                <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>
            <div class="form-group">
                <label>Mô tả thương hiệu</label>
                <textarea type="number" name="brand_description" class="form-control" placeholder="Mô tả thương hiệu" data-error="Vui lòng nhập Mô tả thương hiệu" required> </textarea>
                <div class="help-block form-text text-muted form-control-feedback">
                    Mô tả chi tiết thương hiệu
                </div>
            </div>

            <div class="form-group">
                <label>Trạng thái</label>
                <select class="form-control" name="brand_status">
                    <option value="0">Ẩn</option>
                    <option value="1" selected>Hiển thị</option>
                </select>
            </div>
            <?php
            use Illuminate\Support\Facades\Session;
            $success = Session::get('success');
            if($success) {
                echo '<div class="alert alert-success" role="alert"><strong>Thành công! </strong>'.$success.'</div>';
                Session::put('success', null);
            }
            ?>

            <div class="form-buttons-w">
                <button class="btn btn-success" type="submit">Thêm Thương hiệu</button>
            </div>
        </div>
    </form>


@endsection
