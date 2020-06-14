
@extends('admin.admin_layout')
@section('list_product')

    <title>Chi tiết đơn hàng</title>
    <link href="public/admin/components/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page level plugins -->
    <script src="public/admin/components/datatables/jquery.dataTables.min.js"></script>
    <script src="public/admin/components/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            CHI TIẾT ĐƠN HÀNG
        </h6>
    </div>

    <div class="element-wrapper">
        <div class="element-box">
                <h6 class="element-box-header">
                    THÔNG TIN KHÁCH HÀNG
                </h6>
                <div class="table-responsive">
                    <table class="table table-padded" id="showDetail_Info">
                        <thead>
                        <tr class="row-actions">
                            <th>
                                ID
                            </th>
                            <th>
                                Tên Người mua
                            </th>
                            <th>
                                Số điện thoại
                            </th>
                            <th>
                                Email
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td class="text-center">
                                <span>{{$order_by_id[0]->customer_id}}</span>
                            </td>

                            <td class="text-center">
                                <span>{{$order_by_id[0]->customer_name}}</span>
                            </td>

                            <td class="text-center">
                        <span>
                            {{$order_by_id[0]->customer_phone}}
                        </span>
                            </td>

                            <td class="text-center">
                       <span>
                            {{$order_by_id[0]->customer_email}}
                        </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>

    <div class="element-wrapper">
        <div class="element-box">
            <h6 class="element-box-header">
                THÔNG TIN VẬN CHUYỂN
            </h6>
            <div class="table-responsive">
                <table class="table table-padded" id="showDetail_Info">
                    <thead>
                    <tr class="row-actions">
                        <th>
                            ID
                        </th>
                        <th>
                            Tên người nhận
                        </th>
                        <th>
                            Địa chỉ
                        </th>
                        <th>
                            Số điện thoại
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Ghi chú
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td class="text-center">
                            <span>{{$order_by_id[0]->shipping_id}}</span>
                        </td>

                        <td class="text-center">
                            <span>{{$order_by_id[0]->shipping_name}}</span>
                        </td>

                        <td class="text-center">
                        <span>
                            {{$order_by_id[0]->shipping_address}}
                        </span>
                        </td>

                        <td class="text-center">
                        <span>
                            {{$order_by_id[0]->shipping_phone}}
                        </span>
                        <td class="text-center">
                        <span>
                            {{$order_by_id[0]->shipping_email}}
                        </span>
                        </td>
                        <td class="text-center">
                        <span>
                            {{$order_by_id[0]->shipping_notes}}
                        </span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="element-wrapper">
        <div class="element-box">
            <h6 class="element-box-header">
                CHI TIẾT ĐƠN HÀNG
            </h6>
            <div class="table-responsive">
                <table class="table table-padded" id="showDetail_Info">
                    <thead>
                    <tr class="row-actions">
                        <th>
                            ID
                        </th>
                        <th>
                            Tên sản phẩm
                        </th>

                        <th>
                            Số lượng
                        </th>
                        <th>
                            Giá sản phẩm
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($order_by_id as $key=>$detail)
                    <tr>
                        <td class="text-center">
                            <span>{{$detail->product_id}}</span>
                        </td>

                        <td class="text-center">
                            <span>{{$detail->product_name}}</span>
                        </td>

                        </span>
                        <td class="text-center">
                        <span>
                            {{$detail->product_sales_quantity}}
                        </span>
                        </td>

                        <td class="text-center">
                        <span>
                            {{number_format($detail->product_price)}}
                        </span>
                            <span class="smaller lighter">VNĐ</span>
                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="form-buttons-w text-right compact">
                    <a class="btn btn-grey"><span>{{$order_by_id[0]->payment_method}}</span></a>
                    <a class="btn btn-primary"><i class="os-icon os-icon-ui-22" style="color: white"></i><span style="color: white">Tổng tiền:  {{$order_by_id[0]->order_total}}</span><span class="smaller lighter" style="color: white; font-size: 8pt">VNĐ</span></a>

                </div>

            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#showOrder').dataTable({
            });
        });
    </script>

@endsection
