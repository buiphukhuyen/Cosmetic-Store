@extends('admin.admin_layout')
@section('list_category')
    <title>Danh sách danh mục</title>
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
                             ID
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
                        @foreach($list_category as $key => $cate_pro)
                         <tr>
                             <td class="text-center">
                                 <span>{{$cate_pro->category_id}}</span>
                             </td>

                             <td class="text-center">

                                 <span>{{$cate_pro->category_name}}</span>
                             </td>
                             <td class="text-center">
                        <span>
                            {{$cate_pro->created_at}}
                        </span>
                             </td>
                             <td class="text-center">
                                 @if($cate_pro->category_status==0)
                                    <a href="active_category_product/{{$cate_pro->category_id}}"> <span class="status-pill smaller red"></span> </a>
                                 @else
                                     <a href="unactive_category_product/{{$cate_pro->category_id}}"> <span class="status-pill smaller green"></span> </a>
                                 @endif

                             </td>
                             <td class="row-actions">
                                 <a href="edit_category_product/{{$cate_pro->category_id}}"><i class="os-icon os-icon-ui-49"></i></a><a onclick="return (confirm('Bạn có muốn xoá Danh mục này?'));" href="delete_category_product/{{$cate_pro->category_id}}" ><i class="os-icon os-icon-ui-15 text-danger"></i></a>
                             </td>
                         </tr>
                        @endforeach
                     </tbody>
                 </table>
          </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#showCategory').dataTable({
            });
        });
    </script>

    <script>
        function DeleteCategory(category_id) {
            if ) {
                Delete(category_id);
            }
            else {
                return false;
            }
        }
    </script>

@endsection
