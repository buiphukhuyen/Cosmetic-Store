@extends('admin.admin_layout')
@section('list_category')
    <title>Danh sách Quản trị viên</title>
    <link href="public/admin/components/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page level plugins -->
    <script src="public/admin/components/datatables/jquery.dataTables.min.js"></script>
    <script src="public/admin/components/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            DANH SÁCH QUẢN TRỊ VIÊN
        </h6>
    </div>
    <div class="table-responsive">
        <table class="table table-padded" id="showCustomer">
            <thead>
            <tr class="row-actions">
                <th>
                    ID
                </th>
                <th>
                    Tên Quản trị viên
                </th>
                <th>
                    Email
                </th>
                <th>
                    Số điện thoại
                </th>
                <th>
                    Cập nhật
                </th>
                <th>
                    Hành động
                </th>
            </tr>
            </thead>

            <tbody>
            @foreach($list_admin as $key => $admin)
                <tr>
                    <td class="text-center">
                        <span>{{$admin->admin_id}}</span>
                    </td>

                    <td class="text-center">

                        <span>{{$admin->admin_name}}</span>
                    </td>

                    <td class="text-center">
                        <span>
                            {{$admin->admin_email}}
                        </span>
                    </td>

                    <td class="text-center">
                        <span>
                            {{$admin->admin_phone}}
                        </span>
                    </td>
                    <td class="text-center">
                        <span>
                            {{$admin->updated_at}}
                        </span>
                    </td>
                    <td class="row-actions">
                        <a href="edit_admin/{{$admin->admin_id}}"><i class="os-icon os-icon-ui-49"></i></a>
                        <a onclick="return (confirm('Bạn có muốn xoá Quản trị viên này?'));" href="delete_admin/{{$admin->admin_id}}" ><i class="os-icon os-icon-ui-15 text-danger"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#showCustomer').dataTable({
            });
        });
    </script>


@endsection
