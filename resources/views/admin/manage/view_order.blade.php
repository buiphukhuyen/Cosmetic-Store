
@extends('admin.admin_layout')
@section('list_product')
    <style>
        .element-wrapper.compact {
            padding-bottom: 0rem;
        }
    </style>
    <title>Chi tiết đơn hàng</title>
    <link href="public/admin/components/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page level plugins -->
    <script src="public/admin/components/datatables/jquery.dataTables.min.js"></script>
    <script src="public/admin/components/datatables/dataTables.bootstrap4.min.js"></script>

    <div class="element-wrapper compact pt-4">
        <div class="element-actions d-none d-sm-block">
            <a class="btn btn-primary" href="{{url('print-order/'.$order_by_id[0]->order_id)}}"><i class="os-icon os-icon-ui-22" style="color: white"></i><span style="color: white">In đơn hàng</span></a>
        </div>
        <div class="element-wrapper">
            <h6 class="element-header">
                CHI TIẾT ĐƠN HÀNG
            </h6>
        </div>

    </div>
    <!-- Page Heading -->

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
                        <th>
                            Thành tiền
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

                        <td class="text-center">
                        <span>
                            {{number_format($detail->product_sales_quantity*$detail->product_price)}}
                        </span>
                            <span class="smaller lighter">VNĐ</span>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="form-buttons-w text-right compact">
                    <a class="btn btn-grey"><span>{{$order_by_id[0]->payment_method}}</span></a>
                    @if($order_by_id[0]->order_subtotal != null)
                    <a class="btn btn-success" style="color: white">Giảm giá: <span>{{$order_by_id[0]->order_subtotal}}</span><span class="smaller lighter" style="color: white; font-size: 8pt">VNĐ</span></a>
                    @endif
                    <a class="btn btn-primary"><i class="os-icon os-icon-ui-22" style="color: white"></i><span style="color: white">Tổng tiền:  {{$order_by_id[0]->order_total}}</span><span class="smaller lighter" style="color: white; font-size: 8pt">VNĐ</span></a>

                </div>
                @if($order_by_id[0]->order_status == "Đang chờ xử lý")
                    <a class="btn btn-danger" href="{{\Illuminate\Support\Facades\URL::to('verify_order/'.$order_by_id[0]->order_id)}}"><i class="os-icon os-icon-check-square" style="color: white"></i><span style="color: white">DUYỆT ĐƠN</span></a>

                @endif
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
