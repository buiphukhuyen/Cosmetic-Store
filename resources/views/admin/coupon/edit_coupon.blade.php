@extends('admin.admin_layout')
@section('add_category')
    <title>Sửa Mã giảm giá</title>
    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            SỬA MÃ GIẢM GIÁ
        </h6>
    </div>
    @foreach($edit_coupon as $key=>$coupon)
    <form action="{{URL::to('update_coupon/'.$coupon->coupon_id)}}" method="post">
        @csrf
        <div class="element-box login-panel panel panel-default">

            <legend><span style="font-weight:bold">Thông tin Mã giảm giá</span></legend>
            <div class="form-group">
                <label>Tên mã giảm giá</label>
                <input type="text" name="coupon_name" class="form-control" value="{{$coupon->coupon_name}}" placeholder="Tên mã giảm giá" data-error="Vui lòng nhập Tên mã giảm giá" required>
                <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>

            <div class="form-group">
                <label>Mã giảm giá</label>
                <input type="text" name="coupon_code" class="form-control" value="{{$coupon->coupon_code}}" placeholder="Mã giảm giá" data-error="Vui lòng nhập Mã giảm giá" required>
                <div class="help-block form-text text-muted form-control-feedback">
                    Mã giảm giá
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Số lượng mã</label>
                        <input type="number" name="coupon_times" class="form-control" value="{{$coupon->coupon_times}}" placeholder="Số lượng Mã giảm giá" data-error="Vui lòng nhập Số lượng Mã giảm giá" required>
                        <div class="help-block form-text text-muted form-control-feedback">
                            Số lượng Mã giảm giá
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="bold">Phần trăm Giảm giá</label>
                        <div class="input-group">
                            <input type="number" name="coupon_discount" min="1" max="100" class="form-control" value="{{$coupon->coupon_discount}}" placeholder="Phần trăm giảm giá" data-error="Vui lòng nhập Phần trăm giảm giá" required>
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    %
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="form-buttons-w">
                <button class="btn btn-success" type="submit">Cập nhật Mã giảm giá</button>
            </div>
        </div>
    </form>
    @endforeach

@endsection
