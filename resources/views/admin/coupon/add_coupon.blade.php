@extends('admin.admin_layout')
@section('add_category')
    <title>Thêm mới Mã giảm giá</title>
    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            THÊM MỚI MÃ GIẢM GIÁ
        </h6>
    </div>
    <form action="insert-coupon" method="post">
        @csrf
        <div class="element-box login-panel panel panel-default">

            <legend><span style="font-weight:bold">Thông tin Mã giảm giá</span></legend>
            <div class="form-group">
                <label>Tên mã giảm giá</label>
                <input type="text" name="coupon_name" class="form-control" placeholder="Tên mã giảm giá" data-error="Vui lòng nhập Tên mã giảm giá" required>
                <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>

            <div class="form-group">
                <label>Mã giảm giá</label>
                <input type="text" name="coupon_code" class="form-control" placeholder="Mã giảm giá" data-error="Vui lòng nhập Mã giảm giá" required>
                <div class="help-block form-text text-muted form-control-feedback">
                    Mã giảm giá
                </div>
            </div>

            <div class="form-group">
                <label>Số lượng mã</label>
                <input type="number" name="coupon_times" class="form-control" placeholder="Số lượng Mã giảm giá" data-error="Vui lòng nhập Số lượng Mã giảm giá" required>
                        <div class="help-block form-text text-muted form-control-feedback">
                            Số lượng Mã giảm giá
                        </div>
            </div>


            <div class="form-group">
                <label>Nhập phần trăm tiền giảm</label>
                <input type="text" name="coupon_discount" class="form-control" placeholder="Phần trăm tiền giảm" data-error="Vui lòng nhập Nhập phần trăm tiền giảm" required>
                <div class="help-block form-text text-muted form-control-feedback">
                    Nhập phần trăm tiền giảm
                </div>
            </div>

            <?php
            use Illuminate\Support\Facades\Session;
            $success = Session::get('insert_coupon');
            if($success) {
                echo '<div class="alert alert-success" role="alert">
                                  <strong>Thành công! </strong>'.$success.'
                          </div>';
                Session::put('insert_coupon', null);
            }
            ?>

            <div class="form-buttons-w">
                <button class="btn btn-success" type="submit">Thêm Mã giảm giá</button>
            </div>
        </div>
    </form>


@endsection
