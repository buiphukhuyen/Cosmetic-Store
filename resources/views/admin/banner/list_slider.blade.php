@extends('admin.admin_layout')
@section('list_brand')
    <title>Danh sách Banner</title>
    <link href="public/admin/components/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page level plugins -->
    <script src="public/admin/components/datatables/jquery.dataTables.min.js"></script>
    <script src="public/admin/components/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            DANH SÁCH BANNER
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
                    Tên Slide
                </th>
                <th>
                    Hình ảnh
                </th>
                <th>
                    Mô tả
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
            @foreach($list_slide as $key => $slide)
                <tr>
                    <td class="text-center">
                        <span>{{$slide->slider_id}}</span>
                    </td>
                    <td class="text-center">

                        <span>{{$slide->slider_name}}</span>
                    </td>
                    <td class="text-center">
                        <img src="public/uploads/slider/{{$slide->slider_image}}" width="100px" height="70px" />
                    </td>
                    <td class="text-center">
                        <span>
                            {{$slide->slider_description}}
                        </span>
                    </td>
                    <td class="text-center">
                        @if($slide->slider_status==0)
                            <a href="active_slider/{{$slide->slider_id}}"> <span class="status-pill smaller red"></span> </a>
                        @else
                            <a href="unactive_slider/{{$slide->slider_id}}"> <span class="status-pill smaller green"></span> </a>
                        @endif

                    </td>
                    <td class="row-actions">
                        <a href="edit_slider/{{$slide->slider_id}}"><i class="os-icon os-icon-ui-49"></i></a>
                        <a onclick="return (confirm('Bạn có muốn xoá Slide này?'));" href="delete_slider/{{$slide->slider_id}}" ><i class="os-icon os-icon-ui-15 text-danger"></i></a>
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
