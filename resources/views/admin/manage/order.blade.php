@extends('admin.admin_layout')
@section('list_product')
    <title>Danh sách đơn hàng</title>
    <link href="public/admin/components/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page level plugins -->
    <script src="public/admin/components/datatables/jquery.dataTables.min.js"></script>
    <script src="public/admin/components/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            DANH SÁCH ĐƠN HÀNG
        </h6>
    </div>
    <div class="table-responsive">
        <table class="table table-padded" id="showOrder">
            <thead>
            <tr class="row-actions">
                <th>
                    ID
                </th>
                <th>
                    Tên Người đặt
                </th>
                <th>
                    Thời gian đặt
                </th>
                <th>
                    Tổng giá tiền
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
            @foreach($all_order as $key => $order)
                <tr>
                    <td class="text-center">
                        <span>{{$order->order_id}}</span>
                    </td>

                    <td class="text-center">
                        <span>{{$order->customer_name}}</span>
                    </td>


                    <td class="text-center">
                        <span>
                            {{$order->created_at}}
                        </span>
                    </td>

                    <td class="text-center">
                       <span>
                            {{$order->order_total}}
                        </span>
                        <span class="smaller lighter">VNĐ</span>
                    </td>

                    <td class="text-center">
                        <span>
                            @if($order->order_status!="Đang chờ xử lý")
                                <a href="active_category_product/{{$order->order_id}}"> <span class="status-pill smaller red"></span> </a>
                            @else
                                <a href="unactive_category_product/{{$order->order_id}}"> <span class="status-pill smaller green"></span> </a>
                            @endif
                        </span>
                    </td>


                    <td class="row-actions">
                        <a href="{{URL::to('view-order/'.$order->order_id)}}"><i class="os-icon os-icon-ui-07"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#showOrder').dataTable({
            });
        });
    </script>

@endsection
