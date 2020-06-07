@extends('admin.admin_layout')
@section('list_category')

    <link href="public/admin/components/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page level plugins -->
    <script src="public/admin/components/datatables/jquery.dataTables.min.js"></script>
    <script src="public/admin/components/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page Heading -->
    <div class="element-wrapper">
        <h6 class="element-header">
            DANH SÁCH DANH MỤC SẢN PHẨM
        </h6>
    </div>

             <div class="table-responsive">
                 <table class="table table-padded" id="showCategory">
                     <thead>
                     <tr class="row-actions">
                         <th>
                             STT
                         </th>
                         <th>
                             Tên danh mục
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
                         <tr>
                             <td class="text-center">
                                 <span>1</span>
                             </td>

                             <td class="text-center">

                                 <span>Nội dung</span>
                             </td>
                             <td class="text-center">
                        <span>
                            Nội dung 2
                        </span><span class="smaller lighter">Lớp</span>
                             </td>
                             <td class="text-center">
                                 <span class="status-pill smaller green"></span>
                                 <span>Hoạt động</span>
                             </td>
                             <td class="row-actions">
                                 <a href="" data-target=".bd-update-major" data-toggle="modal" data-majorid="@item.Major_Id" data-majorname="@item.Major_Name"><i class="os-icon os-icon-ui-49"></i></a><a href="/MajorClass/Detail_Major/@item.Major_Id"><i class="os-icon os-icon-eye"></i></a><a href="#" onclick="DeleteMajor('@item.Major_Id');"><i class="os-icon os-icon-ui-15 text-danger"></i></a>
                             </td>
                         </tr>
                     </tbody>
                 </table>
          </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#showCategory').dataTable({
            });
        });
    </script>

@endsection
