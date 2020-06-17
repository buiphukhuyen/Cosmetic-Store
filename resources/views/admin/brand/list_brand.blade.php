@extends('admin.admin_layout')
@section('list_brand')
    <title>Danh sách thương hiệu</title>
    <link href="public/admin/components/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page level plugins -->
    <script src="public/admin/components/datatables/jquery.dataTables.min.js"></script>
    <script src="public/admin/components/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            DANH SÁCH THƯƠNG HIỆU SẢN PHẨM
        </h6>
    </div>
    <div class="table-responsive">
        <table class="table table-padded" id="showBrand">
            <thead>
            <tr class="row-actions">
                <th>
                    ID
                </th>
                <th>
                    Tên thương hiệu
                </th>
                <th>
                    Logo thương hiệu
                </th>
                <th>
                    Ngày tạo
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
            @foreach($list_brand as $key => $brand)
                <tr>
                    <td class="text-center">
                        <span>{{$brand->brand_id}}</span>
                    </td>
                    <td class="text-center">

                        <span>{{$brand->brand_name}}</span>
                    </td>
                    <td class="text-center">
                        <img src="public/uploads/brand/{{$brand->brand_image}}" width="100px" height="70px" />
                    </td>
                    <td class="text-center">
                        <span>
                            {{$brand->created_at}}
                        </span>
                    </td>
                    <td class="text-center">
                        @if($brand->brand_status==0)
                            <a href="active_brand/{{$brand->brand_id}}"> <span class="status-pill smaller red"></span> </a>
                        @else
                            <a href="unactive_brand/{{$brand->brand_id}}"> <span class="status-pill smaller green"></span> </a>
                        @endif

                    </td>
                    <td class="row-actions">
                        <a href="edit_brand/{{$brand->brand_id}}"><i class="os-icon os-icon-ui-49"></i></a>
                        <a href="{{URL::to('/thuong-hieu/'.$brand->brand_id)}}" target="_blank" rel="noopener noreferrer"><i class="os-icon os-icon-grid-10"></i></a>
                        <a onclick="return (confirm('Bạn có muốn xoá Thương hiệu này?'));" href="delete_brand/{{$brand->brand_id}}" ><i class="os-icon os-icon-ui-15 text-danger"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#showBrand').dataTable({
            });
        });
    </script>

@endsection
