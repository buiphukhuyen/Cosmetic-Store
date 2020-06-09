@extends('admin.admin_layout')
@section('list_product')
    <title>Danh sách sản phẩm</title>
    <link href="public/admin/components/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page level plugins -->
    <script src="public/admin/components/datatables/jquery.dataTables.min.js"></script>
    <script src="public/admin/components/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            DANH SÁCH SẢN PHẨM
        </h6>
    </div>
    <div class="table-responsive">
        <table class="table table-padded" id="showProduct">
            <thead>
            <tr class="row-actions">
                <th>
                    ID
                </th>
                <th>
                    Hình ảnh
                </th>
                <th>
                    Tên Sản phẩm
                </th>
                <th>
                    Danh mục
                </th>
                <th>
                    Thương hiệu
                </th>
                <th>
                    Giá
                </th>
                <th>
                    Tình trạng
                </th>
                <th>
                    Hành động
                </th>
            </tr>
            </thead>

            <tbody>
            @foreach($list_product as $key => $product)
                <tr>
                    <td class="text-center">
                        <span>{{$product->product_id}}</span>
                    </td>

                    <td class="text-center">
                        <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" width="100px" height="100px" />
                    </td>

                    <td class="text-center">
                        <span>{{$product->product_name}}</span>
                    </td>

                    <td class="text-center">
                        <span>
                            {{$product->category_name}}
                        </span>
                    </td>

                    <td class="text-center">
                        <span>
                            {{$product->brand_name}}
                        </span>
                    </td>
                    <td class="text-center">
                        <span>
                            {{number_format($product->product_price)}}
                        </span>
                        <span class="smaller lighter">VNĐ</span>
                    </td>
                    <td class="text-center">
                        @if($product->product_status==0)
                            <a href="{{URL::to('active_product/'.$product->product_id)}}"> <span class="status-pill smaller red"></span> </a>
                        @else
                            <a href="{{URL::to('unactive_product/'.$product->product_id)}}"> <span class="status-pill smaller green"></span> </a>
                        @endif

                    </td>
                    <td class="row-actions">
                        <a href="{{URL::to('edit_product/'.$product->product_id)}}"><i class="os-icon os-icon-ui-49"></i></a><a onclick="return (confirm('Bạn có muốn xoá Sản phẩm này?'));" href="delete_product/{{$product->product_id}}" ><i class="os-icon os-icon-ui-15 text-danger"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#showProduct').dataTable({
            });
        });
    </script>

@endsection
