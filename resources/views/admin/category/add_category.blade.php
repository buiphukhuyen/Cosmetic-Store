@extends('admin.admin_layout')
@section('add_category')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thêm mới Danh mục sản phẩm</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    
<div class="row">
    <div class="col-xl-6 col-md-6 mb-4">
        <form>
            <div class="form-group">
                <label>Tên danh mục</label>
                <input type="text" class="form-control" name="category_name">
                
            </div>
            <div class="form-group">
                <label>Mô tả danh mục</label>
                <textarea type="text" class="form-control" name="category_description"> </textarea>
                <small id="emailHelp" class="form-text text-muted">Mô tả chi tiết về danh mục</small>
            </div>
            <div></div>
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
    </div>
</div>

@endsection
