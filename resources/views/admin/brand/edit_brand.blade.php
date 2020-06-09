@extends('admin.admin_layout')
@section('edit_brand')
    <title>Chỉnh sửa Thương hiệu sản phẩm</title>
    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            CHỈNH SỬA THƯƠNG HIỆU
        </h6>
    </div>
    @foreach($edit_brand as $key=>$edit_value)
        <form action="{{URL::to('/update_brand/'.$edit_value->brand_id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="element-box login-panel panel panel-default">

                <legend><span style="font-weight:bold">Thông tin Thương hiệu</span></legend>
                <div class="form-group">
                    <label>Tên thương hiệu</label>
                    <input type="text" name="brand_name" class="form-control" value="{{$edit_value->brand_name}}" placeholder="Tên thương hiệu" data-error="Vui lòng nhập Tên thương hiệu" required>
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>

                <div class="form-group">
                    <label>Hình ảnh Sản phẩm</label>
                    <input type="file" name="brand_image" class="form-control">
                    <img src="{{\Illuminate\Support\Facades\URL::to('public/uploads/brand/'.$edit_value->brand_image)}}" width="200px" height="200px" />
                </div>

                <div class="form-group">
                    <label>Mô tả thương hiệu</label>
                    <textarea type="number" name="brand_description" class="form-control" placeholder="Mô tả thương hiệu" data-error="Vui lòng nhập Mô tả thương hiệu" required>{{$edit_value->brand_description}}</textarea>
                    <div class="help-block form-text text-muted form-control-feedback">
                        Mô tả chi tiết thương hiệu
                    </div>
                </div>
                @endforeach
                <div class="form-buttons-w">
                    <button class="btn btn-success" type="submit">Chỉnh sửa Thương hiệu</button>
                </div>
            </div>
        </form>

@endsection
