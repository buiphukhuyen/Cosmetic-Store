@extends('admin.admin_layout')
@section('add_category')
    <title>Chỉnh sửa Danh mục sản phẩm</title>
    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            CHỈNH SỬA DANH MỤC
        </h6>
    </div>
    @foreach($edit_category as $key=>$edit_value)
    <form action="{{URL::to('/update_category_product/'.$edit_value->category_id)}}" method="post">
        @csrf
        <div class="element-box login-panel panel panel-default">

            <legend><span style="font-weight:bold">Thông tin Danh mục</span></legend>
            <div class="form-group">
                <label>Tên danh mục</label>
                <input type="text" name="category_name" class="form-control" value="{{$edit_value->category_name}}" placeholder="Tên danh mục" data-error="Vui lòng nhập Tên danh mục" required>
                <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>
            <div class="form-group">
                <label>Mô tả danh mục</label>
                <textarea type="number" name="category_description" class="form-control" placeholder="Mô tả danh mục" data-error="Vui lòng nhập Mô tả danh mục" required>{{$edit_value->category_description}}</textarea>
                <div class="help-block form-text text-muted form-control-feedback">
                    Mô tả chi tiết danh mục
                </div>
            </div>
    @endforeach
            <div class="form-buttons-w">
                <button class="btn btn-success" type="submit">Chỉnh sửa Danh mục</button>
            </div>
        </div>
    </form>

@endsection
