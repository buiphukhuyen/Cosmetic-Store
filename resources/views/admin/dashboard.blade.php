@extends('admin.admin_layout')
@section('dashboard')
    <title>Trình quản lý Admin</title>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="text-primary">TRÌNH QUẢN LÝ QUẢN TRỊ VIÊN</h4>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="element-wrapper">

                <h6 class="element-header">
                    TỔNG QUAN
                </h6>
                <div class="element-content">
                    <div class="row">
                        <div class="col-sm-4 col-xxxl-3">
                            <a class="element-box el-tablo" href="#">
                                <div class="label">
                                    Sản phẩm Hiện có
                                </div>
                                <div class="value">
                                    {{$count_product}}
                                </div>
                                <div class="trending trending-up-basic">
                                    <span>12%</span><i class="os-icon os-icon-arrow-up2"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 col-xxxl-3">
                            <a class="element-box el-tablo" href="#">
                                <div class="label">
                                    Sản phẩm đã bán
                                </div>
                                <div class="value">
                                    {{$count_product_sold}}
                                </div>
                                <div class="trending trending-down-basic">
                                    <span>12%</span><i class="os-icon os-icon-arrow-down"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 col-xxxl-3">
                            <a class="element-box el-tablo" href="#">
                                <div class="label">
                                    Khách hàng
                                </div>
                                <div class="value">
                                    {{$count_customer}}
                                </div>
                                <div class="trending trending-down-basic">
                                    <span>9%</span><i class="os-icon os-icon-arrow-down"></i>
                                </div>
                            </a>
                        </div>
                        <div class="d-none d-xxxl-block col-xxxl-3">
                            <a class="element-box el-tablo" href="#">
                                <div class="label">
                                    Doanh thu
                                </div>
                                <div class="value">
                                    {{$ana_money}}
                                </div>
                                <div class="trending trending-up-basic">
                                    <span>triệu VNĐ</span><i class="os-icon os-icon-arrow-up2"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="element-wrapper">
        <h6 class="element-header">
            ĐƠN HÀNG MỚI
        </h6>
        <div class="element-box">
            <div class="table-responsive">
                <table class="table table-lightborder">
                    <thead>
                    <tr>
                        <th>
                            Khách hàng
                        </th>
                        <th>
                            Thời gian đặt
                        </th>
                        <th class="text-center">
                            Tổng tiền
                        </th>
                        <th class="text-center">
                            Tình trạng
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($new_order as $key => $order)
                        <tr>

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
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
