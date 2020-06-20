@extends('admin.admin_layout')
@section('add_category')
    <title>Chỉnh sửa Khách hàng</title>
    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            CHỈNH SỬA KHÁCH HÀNG
        </h6>
    </div>
    @foreach($edit_customer as $key=>$edit_value)
    <form action="{{URL::to('update_customer/'.$edit_value->customer_id)}}" method="post">
        @csrf
        <div class="element-box login-panel panel panel-default">

            <legend><span style="font-weight:bold">Thông tin Khách hàng</span></legend>
            <div class="form-group">
                <label>Tên khách hàng</label>
                <input type="text" name="customer_name" value="{{$edit_value->customer_name}}" class="form-control" placeholder="Tên khách hàng" data-error="Vui lòng nhập Tên khách hàng" required>
                <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>
            <div class="form-group">
                <label>Địa chỉ Email</label>
                <input type="email" name="customer_email" value="{{$edit_value->customer_email}}" class="form-control" placeholder="Email" data-error="Vui lòng nhập Email" required>
                <div class="help-block form-text text-muted form-control-feedback">
                    Email phải đúng định dạng
                </div>
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="number" name="customer_phone" value="{{$edit_value->customer_phone}}" class="form-control" placeholder="Số điện thoại" data-error="Vui lòng nhập Số điện thoại" required>
                <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>

            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" name="customer_password"  class="form-control" placeholder="Mật khẩu" data-error="Vui lòng nhập Mật khẩu" required>
                <div class="help-block form-text text-muted form-control-feedback">
                    Mật khẩu sẽ được băm bảo mật (MD5 - SHA1) - Nếu không thay đổi mật khẩu có thể để trống
                </div>
            </div>

            @endforeach
            <div class="form-buttons-w">
                <button class="btn btn-success" type="submit">Chỉnh sửa Khách hàng</button>
            </div>
        </div>
    </form>


@endsection
