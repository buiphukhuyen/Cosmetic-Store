@extends('admin.admin_layout')
@section('add_category')
    <title>Thêm mới Khách hàng</title>
    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            THÊM MỚI KHÁCH HÀNG
        </h6>
    </div>
    <form action="insert_customer" method="post">
        @csrf
        <div class="element-box login-panel panel panel-default">

            <legend><span style="font-weight:bold">Thông tin Khách hàng</span></legend>
            <div class="form-group">
                <label>Tên khách hàng</label>
                <input type="text" name="customer_name" class="form-control" placeholder="Tên khách hàng" data-error="Vui lòng nhập Tên khách hàng" required>
                <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>
            <div class="form-group">
                <label>Địa chỉ Email</label>
                <input type="email" name="customer_email" class="form-control" placeholder="Email" data-error="Vui lòng nhập Email" required>
                <div class="help-block form-text text-muted form-control-feedback">
                    Email phải đúng định dạng
                </div>
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="number" name="customer_phone" class="form-control" placeholder="Số điện thoại" data-error="Vui lòng nhập Số điện thoại" required>
                <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>

            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" name="customer_password" class="form-control" placeholder="Mật khẩu" data-error="Vui lòng nhập Mật khẩu" required>
                <div class="help-block form-text text-muted form-control-feedback">
                    Mật khẩu sẽ được băm bảo mật (MD5 - SHA1)
                </div>
            </div>
            <?php
            use Illuminate\Support\Facades\Session;
            $success = Session::get('add_customer_success');
            if($success) {
                echo '<div class="alert alert-success" role="alert">
                                  <strong>Thành công! </strong>'.$success.'
                          </div>';
                Session::put('add_customer_success', null);
            }
            ?>

            <div class="form-buttons-w">
                <button class="btn btn-success" type="submit">Thêm Khách hàng</button>
            </div>
        </div>
    </form>


@endsection
