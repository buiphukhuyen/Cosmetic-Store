<!DOCTYPE html>
<html>
  <head>
    <title>Đăng nhập Quản trị</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Đăng nhập Quản trị" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="public/admin/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet" type="text/css">
    <link href="public/admin/components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="public/admin/components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="public/admin/components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="public/admin/components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="public/admin/components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="public/admin/components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="public/admin/css/main.css?version=4.4.0" rel="stylesheet">
  </head>
  <body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w">
        <div class="logo-w">
          <a href="."><img alt="" src="public/admin/img/logo-big.png"></a>
        </div>
        <h4 class="auth-header">
          ĐĂNG NHẬP QUẢN TRỊ
        </h4>
        <form action="login_admin" method="post">
            @csrf
          <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" placeholder="Nhập Email" type="email" name="admin_email">
            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
          </div>
          <div class="form-group">
            <label for="">Mật khẩu</label>
            <input class="form-control" placeholder="Nhập mật khẩu" type="password" name="admin_password">
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
          <?php
          use Illuminate\Support\Facades\Session;
          $error_login = Session::get('error_login');
          if($error_login) {
              echo '<p class="text-danger text-center">'.$error_login.'</p>';
              Session::put('error_login', null);
          }
          ?>
          <div class="buttons-w">
            <button class="btn btn-primary" type="submit">ĐĂNG NHẬP</button>
            <div class="form-check-inline">
              <label class="form-check-label"><input class="form-check-input" type="checkbox">Ghi nhớ đăng nhập</label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
