@extends('admin.admin_layout')
@section('list_category')
    <title>Danh sách Mã giảm giá</title>
    <link href="public/admin/components/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page level plugins -->
    <script src="public/admin/components/datatables/jquery.dataTables.min.js"></script>
    <script src="public/admin/components/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            DANH SÁCH MÃ GIẢM GIÁ
        </h6>
    </div>
    <div class="table-responsive">
        <table class="table table-padded" id="showCoupon">
            <thead>
            <tr class="row-actions">
                <th>
                    ID
                </th>
                <th>
                    Tên Mã giảm giá
                </th>
                <th>
                    Mã giảm giá
                </th>
                <th>
                   Số lượng
                </th>
                <th>
                    Số giảm
                </th>
                <th>
                    Hành động
                </th>
            </tr>
            </thead>

            <tbody>
            @foreach($list_coupon as $key => $coupon)
                <tr>
                    <td class="text-center">
                        <span>{{$coupon->coupon_id}}</span>
                    </td>

                    <td class="text-center">

                        <span>{{$coupon->coupon_name}}</span>
                    </td>

                    <td class="text-center">

                        <span>{{$coupon->coupon_code}}</span>
                    </td>

                    <td class="text-center">
                        <span>
                            {{$coupon->coupon_times}}
                        </span>
                    </td>
                    <td class="text-center">
                            <span>{{$coupon->coupon_discount}} %</span> </a>

                    </td>
                    <td class="row-actions">
                        <a href="edit_coupon/{{$coupon->coupon_id}}"><i class="os-icon os-icon-ui-49"></i></a>
                        <a onclick="return (confirm('Bạn có muốn xoá Mã giảm giá này?'));" href="delete_coupon/{{$coupon->coupon_id}}" ><i class="os-icon os-icon-ui-15 text-danger"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#showCoupon').dataTable({
            });
        });
    </script>


@endsection
