@extends('admin.admin_layout')
@section('edit_product')
    <title>Cập nhật Sản phẩm</title>
    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            CẬP NHẬT SẢN PHẨM
        </h6>
    </div>
    @foreach($edit_product as $key=>$pro)
    <form action="{{URL::to('/update_product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="element-box login-panel panel panel-default">
            <legend><span style="font-weight:bold">Thông tin Sản phẩm</span></legend>
            <div class="form-group">
                <label>Tên Sản phẩm</label>
                <input type="text" name="product_name" class="form-control" data-error="Vui lòng nhập Tên sản phẩm" value="{{$pro->product_name}}" required>
                <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Danh mục sản phẩm</label>
                        <select class="form-control" name="category_id">
                            @foreach($cate_product as $key=>$cate)
                                @if($cate->category_id==$pro->category_id)
                                    <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @else
                                    <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Thương hiệu sản phẩm</label>
                        <select class="form-control" name="brand_id">
                            @foreach($brand_product as $key=>$brand)
                                @if($brand->brand_id==$pro->brand_id)
                                    <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                @else
                                    <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                @endif

                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Giá Sản phẩm</label>
                        <div class="input-group">
                            <input type="text" name="product_price" class="form-control" data-error="Vui lòng nhập Giá sản phẩm" value="{{$pro->product_price}}" required>
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    VNĐ
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Hình ảnh Sản phẩm</label>
                <input type="file" name="product_image" class="form-control">
                <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" width="200px" height="200px" />
            </div>
            <div class="form-group">
                <label>Mô tả Sản phẩm</label>
                <textarea type="number" name="product_description" class="form-control" data-error="Vui lòng nhập Mô tả sản phẩm" required> {{$pro->product_description}} </textarea>
                <div class="help-block form-text text-muted form-control-feedback">
                    Mô tả chi tiết sản phẩm
                </div>
            </div>

            <div class="form-group">
                <label>Nội dung Sản phẩm</label>
                <textarea type="number" name="product_content" class="form-control" data-error="Vui lòng nhập Nội dung sản phẩm" required> {{$pro->product_content}} </textarea>
                <div class="help-block form-text text-muted form-control-feedback">
                    Nội dung sản phẩm
                </div>
            </div>

            <div class="form-buttons-w">
                <button class="btn btn-success" type="submit">Thêm Thương hiệu</button>
            </div>
        </div>
    </form>
    @endforeach

@endsection
