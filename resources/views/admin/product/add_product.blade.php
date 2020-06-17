@extends('admin.admin_layout')
@section('add_product')
    <style>
        .bold {
            font-weight: bold;
        }
    </style>
    <title>Thêm mới Sản phẩm</title>
    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            THÊM MỚI SẢN PHẨM
        </h6>
    </div>

    <script src="https://cdn.tiny.cloud/1/2ne82ts8mc7g1za8s9gtfifdhj53oj7i3wegp3ql1cva0pq2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <form action="add_product" method="post" enctype="multipart/form-data">
        @csrf
        <div class="element-box login-panel panel panel-default">

            <legend><span style="font-weight:bold">Thông tin Sản phẩm</span></legend>

            <div class="form-group">
                <label class="bold">Tên Sản phẩm</label>
                <input type="text" name="product_name" class="form-control" placeholder="Tên sản phẩm" data-error="Vui lòng nhập Tên sản phẩm" required>
                <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="bold">Danh mục sản phẩm</label>
                        <select class="form-control" name="category_id">
                            @foreach($cate_product as $key=>$cate)
                                <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                            <label class="bold">Thương hiệu sản phẩm</label>
                            <select class="form-control" name="brand_id">
                                @foreach($brand_product as $key=>$brand)
                                    <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                @endforeach
                            </select>

                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="bold">Hình ảnh Sản phẩm</label>
                <input type="file" name="product_image" class="form-control">
            </div>

            <div class="form-group">
                <label class="bold">Thư viện ảnh Sản phẩm</label>
                <input type="file" name="filename[]" class="form-control" multiple>
            </div>

            <div class="form-group">
                <label class="bold">Mô tả Sản phẩm</label>
                <textarea type="number" name="product_description" class="form-control" placeholder="Mô tả sản phẩm" data-error="Vui lòng nhập Mô tả sản phẩm" required> </textarea>
                <div class="help-block form-text text-muted form-control-feedback">
                    Mô tả chi tiết sản phẩm
                </div>
            </div>

            <div class="form-group">
                <label class="bold">Nội dung Sản phẩm</label>
                <textarea type="number" name="product_content" class="form-control" placeholder="Nội dung sản phẩm" data-error="Vui lòng nhập Nội dung sản phẩm" required> </textarea>
                <div class="help-block form-text text-muted form-control-feedback">
                    Nội dung sản phẩm
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="bold">Giá Sản phẩm</label>
                        <div class="input-group">
                            <input type="text" name="product_price" class="form-control" placeholder="Giá sản phẩm" data-error="Vui lòng nhập Giá sản phẩm" onkeyup="this.value=FormatNumber(this.value);" required>
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    VNĐ
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="bold">Trạng thái</label>
                        <select class="form-control" name="product_status">
                            <option value="0">Ẩn</option>
                            <option value="1" selected>Hiển thị</option>
                        </select>
                    </div>
                </div>
            </div>
            <?php
            use Illuminate\Support\Facades\Session;
            $success = Session::get('success');
            if($success) {
                echo '<div class="alert alert-success" role="alert"><strong>Thành công! </strong>'.$success.'</div>';
                Session::put('success', null);
            }
            ?>

            <div class="form-buttons-w">
                <button class="btn btn-success" type="submit">Thêm Sản phẩm</button>
            </div>
        </div>
    </form>

    <script>
        tinymce.init({
            selector: 'textarea',
            height: 350,
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>

    <script>
        function FormatNumber(str) {
            var strTemp = GetNumber(str);
            if (strTemp.length <= 3)
                return strTemp;
            strResult = "";
            for (var i = 0; i < strTemp.length; i++)
                strTemp = strTemp.replace(",", "");
            var m = strTemp.lastIndexOf(".");
            if (m == -1) {
                for (var i = strTemp.length; i >= 0; i--) {
                    if (strResult.length > 0 && (strTemp.length - i - 1) % 3 == 0)
                        strResult = "," + strResult;
                    strResult = strTemp.substring(i, i + 1) + strResult;
                }
            } else {
                var strphannguyen = strTemp.substring(0, strTemp.lastIndexOf("."));
                var strphanthapphan = strTemp.substring(strTemp.lastIndexOf("."), strTemp.length);
                var tam = 0;
                for (var i = strphannguyen.length; i >= 0; i--) {

                    if (strResult.length > 0 && tam == 4) {
                        strResult = "," + strResult;
                        tam = 1;
                    }


                    strResult = strphannguyen.substring(i, i + 1) + strResult;
                    tam = tam + 1;
                }
                strResult = strResult + strphanthapphan;
            }
            return strResult;
        }
        function GetNumber(str) {
            var count = 0;
            for (var i = 0; i < str.length; i++) {
                var temp = str.substring(i, i + 1);
                if (!(temp == "," || temp == "." || (temp >= 0 && temp <= 9))) {
                    alert(inputnumber);
                    return str.substring(0, i);
                }
                if (temp == " ")
                    return str.substring(0, i);
                if (temp == ".") {
                    if (count > 0)
                        return str.substring(0, i);
                    count++;
                }
            }
            return str;
        }

        function IsNumberInt(str) {
            for (var i = 0; i < str.length; i++) {
                var temp = str.substring(i, i + 1);
                if (!(temp == "." || (temp >= 0 && temp <= 9))) {
                    alert(inputnumber);
                    return str.substring(0, i);
                }
                if (temp == ",") {
                    alert(thaythedaucham);
                    return str.substring(0, i);
                }
            }
            return str;
        }
    </script>

@endsection
