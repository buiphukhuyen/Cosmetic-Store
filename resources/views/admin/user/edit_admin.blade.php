@extends('admin.admin_layout')
@section('add_category')
    <title>Chỉnh sửa Quản trị viên</title>
    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            CHỈNH SỬA QUẢN TRỊ VIÊN
        </h6>
    </div>
    @foreach($edit_admin as $key=>$edit_value)
        <form action="{{URL::to('update_admin/'.$edit_value->admin_id)}}" method="post">
            @csrf
            <div class="element-box login-panel panel panel-default">

                <legend><span style="font-weight:bold">Thông tin Quản trị viên</span></legend>
                <div class="form-group">
                    <label>Tên Quản trị viên</label>
                    <input type="text" name="admin_name" value="{{$edit_value->admin_name}}" class="form-control" placeholder="Tên Quản trị viên" data-error="Vui lòng nhập Tên Quản trị viên" required>
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="form-group">
                    <label>Địa chỉ Email</label>
                    <input type="email" name="admin_email" value="{{$edit_value->admin_email}}" class="form-control" placeholder="Email" data-error="Vui lòng nhập Email" required>
                    <div class="help-block form-text text-muted form-control-feedback">
                        Email phải đúng định dạng
                    </div>
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="number" name="admin_phone" value="{{$edit_value->admin_phone}}" class="form-control" placeholder="Số điện thoại" data-error="Vui lòng nhập Số điện thoại" required>
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>

                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" name="customer_password"  class="form-control" placeholder="Mật khẩu" data-error="Vui lòng nhập Mật khẩu">
                    <div class="help-block form-text text-muted form-control-feedback">
                        Mật khẩu sẽ được băm bảo mật (MD5 - SHA1) - Nếu không thay đổi mật khẩu có thể để trống
                    </div>
                </div>

                @endforeach
                <div class="form-buttons-w">
                    <button class="btn btn-success" type="submit">Chỉnh sửa Quản trị viên</button>
                </div>
            </div>
        </form>


@endsection
