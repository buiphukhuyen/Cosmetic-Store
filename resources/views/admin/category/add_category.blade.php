@extends('admin.admin_layout')
@section('add_category')
<title>Thêm mới Danh mục sản phẩm</title>
<!-- Page Heading -->
<div class="element-wrapper">
        <h6 class="element-header">
            THÊM MỚI DANH MỤC
        </h6>
</div>
<form action="add_category_product" method="post">
    @csrf
    <div class="element-box login-panel panel panel-default">

        <legend><span style="font-weight:bold">Thông tin Danh mục</span></legend>
        <div class="form-group">
            <label>Tên danh mục</label>
            <input type="text" name="category_name" class="form-control" placeholder="Tên danh mục" data-error="Vui lòng nhập Tên danh mục" required>
            <div class="help-block form-text with-errors form-control-feedback"></div>
        </div>
        <div class="form-group">
            <label>Mô tả danh mục</label>
            <textarea type="number" name="category_description" class="form-control" placeholder="Mô tả danh mục" data-error="Vui lòng nhập Mô tả danh mục" required> </textarea>
            <div class="help-block form-text text-muted form-control-feedback">
                Mô tả chi tiết danh mục
            </div>
        </div>

        <div class="form-group">
            <label>Trạng thái</label>
            <select class="form-control" name="category_status">
                <option value="0">Ẩn</option>
                <option value="1" selected>Hiển thị</option>
            </select>
        </div>
        <?php
                use Illuminate\Support\Facades\Session;
                $success = Session::get('success');
                if($success) {
                    echo '<div class="alert alert-success" role="alert">
                                  <strong>Thành công! </strong>'.$success.'
                          </div>';
                    Session::put('success', null);
                }
        ?>

        <div class="form-buttons-w">
            <button class="btn btn-success" type="submit">Thêm Danh mục</button>
        </div>
     </div>
</form>


@endsection
