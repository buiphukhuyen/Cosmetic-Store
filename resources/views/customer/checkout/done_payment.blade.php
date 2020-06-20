@extends('customer.layout')
@section('checkout')
    <style>
        body.home #mega_menu {
            display: none;
        }
        .text {
            display: -webkit-box;
            margin: 0 auto;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            height: 35px;
        }
    </style>
    <?php
    ?>
    <header id="header" class="header has-sticky sticky-jump">
        <div class="header-wrapper">
            <div id="masthead" class="header-main hide-for-sticky">
                <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                    <!-- Logo -->
                    <div id="logo" class="flex-col logo">
                        <!-- Header logo -->
                        <a href="." title="Mẫu website shop mỹ phẩm làm đẹp chuẩn seo - Thiết kế bởi Topweb" rel="home">
                            <img width="221" height="70" src="{{asset('public/customer/wp-content/uploads\2019\05\shop3.jpg')}}"    class="header_logo header-logo" alt="Mẫu website shop mỹ phẩm làm đẹp chuẩn seo"><img width="221" height="70" src="{{asset('public\customer\wp-content\uploads\2019\05\shop3.jpgs')}}" class="header-logo-dark" alt="Mẫu website shop mỹ phẩm làm đẹp chuẩn seo"></a>
                    </div>
                    <!-- Mobile Left Elements -->
                    <div class="flex-col show-for-medium flex-left">
                        <ul class="mobile-nav nav nav-left ">
                            <li class="nav-icon has-icon">
                                <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-controls="main-menu" aria-expanded="false">
                                    <i class="icon-menu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Left Elements -->
                    <div class="flex-col hide-for-medium flex-left
               flex-grow">
                        <ul class="header-nav header-nav-main nav nav-left  nav-uppercase">
                            <li class="header-block">
                                <div class="header-block-block-1">
                                    <div class="row row-small" id="row-825065180">
                                        <div class="col medium-9 small-12 large-9">
                                            <div class="col-inner">
                                                <div class="gap-element clearfix" style="display:block; height:auto; padding-top:13px"></div>
                                                <div class="searchform-wrapper ux-search-box relative is-normal">
                                                    <form role="search" method="post" class="searchform" action="{{URL::to('/tim-kiem')}}">
                                                        @csrf
                                                        <div class="flex-row relative">
                                                            <!-- .flex-col -->
                                                            <div class="flex-col flex-grow">
                                                                <input type="search" class="search-field mb-0" name="keywords" value="" placeholder="Tìm kiếm sản phẩm">
                                                            </div>
                                                            <!-- .flex-col -->
                                                            <div class="flex-col">
                                                                <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
                                                                    <i class="icon-search"></i>
                                                                </button>
                                                            </div>
                                                            <!-- .flex-col -->
                                                        </div>
                                                        <!-- .flex-row -->
                                                        <div class="live-search-results text-left z-top"></div>
                                                    </form>                                                </div>
                                            </div>
                                        </div>
                                        <div class="col medium-3 small-12 large-3">
                                            <div class="col-inner">
                                                <div class="gap-element clearfix" style="display:block; height:auto; padding-top:10px"></div>
                                                <div class="icon-box featured-box icon-box-left text-left">
                                                    <div class="icon-box-img" style="width: 42px">
                                                        <div class="icon">
                                                            <div class="icon-inner">
                                                                <img width="42" height="40" src="{{asset('public/customer/wp-content/uploads\2019\02\icon_03.png')}}" class="attachment-medium size-medium" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="icon-box-text last-reset">
                                                        <p style="text-align: left;"><span style="font-size: 85%; color: #326e51;">Hỗ trợ</span><br><span style="font-size: 85%; color: #326e51;">khách hàng</span></p>
                                                    </div>
                                                </div>
                                                <!-- .icon-box -->
                                            </div>
                                        </div>
                                        <style scope="scope">
                                        </style>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Right Elements -->
                    <div class="flex-col hide-for-medium flex-right">
                        <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
                            <li class="cart-item has-icon has-dropdown">
                                <a href="{{URL::to('/show-cart')}}"  title="Giỏ hàng" class="header-cart-link is-small">
                                       <span class="header-cart-title">
                                       Giỏ hàng     </span>
                                    <span class="image-icon header-cart-icon" data-icon-label="0">
                                       <img class="cart-img-icon" alt="Giỏ hàng" src="{{asset('public/customer/wp-content/uploads\2019\02\icon_01.png')}}">
                                       </span><!-- .cart-img-inner -->
                                </a>
                                <ul class="nav-dropdown nav-dropdown-default">
                                    <li class="html widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">
                                        </div>
                                    </li>
                                </ul>
                                <!-- .nav-dropdown -->
                            </li>
                            <?php
                            $customer_id = \Illuminate\Support\Facades\Session::get('customer_id');
                            $customer_name = \Illuminate\Support\Facades\Session::get('customer_name');
                            if($customer_id!=NULL) {
                            ?>
                            <li class="account-item has-icon">
                                <a href="{{URL::to('logout-checkout')}}" class="nav-top-link nav-top-not-logged-in">
                                    <span>Chào <?php echo Session::get('customer_name');?> / Đăng xuất  </span>
                                </a><!-- .account-login-link -->
                            </li>
                            <?php
                            }else {?>
                            <li class="account-item has-icon">
                                <a href="#" class="nav-top-link nav-top-not-logged-in " data-open="#login-form-popup">
                                    <span>
                                    Đăng nhập     / Đăng ký  </span>
                                </a><!-- .account-login-link -->
                            </li>
                            <?php
                            }?>
                        </ul>
                    </div>
                    <!-- Mobile Right Elements -->
                    <div class="flex-col show-for-medium flex-right">
                        <ul class="mobile-nav nav nav-right ">
                            <li class="cart-item has-icon">
                                <a href="{{URL::to('/show-cart')}}"  class="header-cart-link off-canvas-toggle nav-top-link is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">
                        <span class="image-icon header-cart-icon" data-icon-label="0">
                        <img class="cart-img-icon" alt="Giỏ hàng" src="{{asset('public/customer/wp-content/uploads\2019\02\icon_01.png')}}">
                        </span><!-- .cart-img-inner -->
                                </a>
                                <!-- Cart Sidebar Popup -->
                                <div id="cart-popup" class="mfp-hide widget_shopping_cart">
                                    <div class="cart-popup-inner inner-padding">
                                        <div class="cart-popup-title text-center">
                                            <h4 class="uppercase">Giỏ hàng</h4>
                                            <div class="is-divider"></div>
                                        </div>
                                        <div class="widget_shopping_cart_content">
                                            <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>
                                        </div>
                                        <div class="cart-sidebar-content relative"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- .header-inner -->
            </div>
            <!-- .header-main -->
            <div id="wide-nav" class="header-bottom wide-nav nav-dark flex-has-center hide-for-medium">
                <div class="flex-row container">
                    <div class="flex-col hide-for-medium flex-left">
                        <ul class="nav header-nav header-bottom-nav nav-left  nav-uppercase">
                            <div id="mega-menu-wrap" class="ot-vm-click">
                                <div id="mega-menu-title">
                                    <i class="icon-menu"></i> DANH MỤC SẢN PHẨM
                                </div>
                                @php($index=26)
                                <ul id="mega_menu" class="menu">
                                    @foreach($category as $key=>$cate)
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-{{$index}}">
                                            <a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}" class="nav-top-link">{{$cate->category_name}}</a>
                                        </li>
                                        <a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}"></a>
                                        </li>
                                        @php($index++)
                                    @endforeach
                                </ul>
                            </div>
                        </ul>
                    </div>
                    <!-- flex-col -->
                    <div class="flex-col hide-for-medium flex-center">
                        <ul class="nav header-nav header-bottom-nav nav-center  nav-uppercase">
                            <li id="menu-item-37" class="deal-hap-dan menu-item menu-item-type-custom menu-item-object-custom  menu-item-37"><a href="#" class="nav-top-link">Deal hấp dẫn</a></li>
                            <li id="menu-item-38" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-38"><a href="#" class="nav-top-link">Thương hiệu</a></li>
                            <li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-39"><a href="#" class="nav-top-link">Hàng mới về</a></li>
                            <li id="menu-item-40" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-40"><a href="#" class="nav-top-link">Sản phẩm bán chạy</a></li>
                            <li id="menu-item-41" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-41"><a href="#" class="nav-top-link">Clinic &#038; Spa</a></li>
                            <li id="menu-item-900" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-900"><a href="..\..\bai-viet\tin-tuc\index.htm" class="nav-top-link">Tin tức</a></li>
                        </ul>
                    </div>
                    <!-- flex-col -->
                    <div class="flex-col hide-for-medium flex-right flex-grow">
                        <ul class="nav header-nav header-bottom-nav nav-right  nav-uppercase">
                            <li class="html header-button-1">
                                <div class="header-button">
                                    <a href="#" class="button plain is-outline" style="border-radius:5px;">
                                        <span>Tra cứu đơn hàng</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- flex-col -->
                </div>
                <!-- .flex-row -->
            </div>
            <!-- .header-bottom -->
            <div class="header-bg-container fill">
                <div class="header-bg-image fill"></div>
                <div class="header-bg-color fill"></div>
            </div>
            <!-- .header-bg-container -->
        </div>
        <!-- header-wrapper-->
    </header>
    <main id="main" class="">
        <div id="content" class="content-area page-wrapper" role="main">
            <div class="row row-main">
                <div class="large-12 col">
                    <div class="col-inner">
                        <div class="woocommerce">
                            <div class="row">
                                <div class="large-7 col">
                                    <section class="woocommerce-order-details">
                                        <h2 class="woocommerce-order-details__title">Chi tiết đơn hàng</h2>
                                        <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">
                                            <thead>
                                            <tr>
                                                <th class="woocommerce-table__product-name product-name">Sản phẩm</th>
                                                <th class="woocommerce-table__product-table product-total">Tổng</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($res as $key=>$order)
                                            <tr class="woocommerce-table__line-item order_item">
                                                <td class="woocommerce-table__product-name product-name">
                                                    <a href="">{{$order->product_name}}</a> <strong class="product-quantity">&times; {{$order->product_sales_quantity}}</strong>	</td>

                                                <td class="woocommerce-table__product-total product-total">
                                                    <span class="woocommerce-Price-amount amount">{{number_format($order->product_price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>	</td>
                                            </tr>
                                            @endforeach
                                            </tbody>


                                        </table>

                                    </section>

                                </div>

                                <div class="large-5 col">
                                    <div class="is-well col-inner entry-content">
                                        <p class="success-color woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><strong>Cảm ơn bạn. Đơn hàng của bạn đã được nhận.</strong></p>

                                        <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

                                            <li class="woocommerce-order-overview__order order">
                                                Mã đơn hàng:						<strong>{{$order->order_id}}</strong>
                                            </li>

                                            <li class="woocommerce-order-overview__date date">
                                                Ngày:							<strong>{{$order->created_at}}</strong>
                                            </li>


                                            <li class="woocommerce-order-overview__total total">
                                                Tổng cộng:						<strong><span class="woocommerce-Price-amount amount">{{$order->order_total}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></strong>
                                            </li>

                                            <li class="woocommerce-order-overview__payment-method method">
                                                Phương thức thanh toán:							<strong>{{$payment[0]->payment_method}}</strong>
                                            </li>

                                        </ul>

                                        <div class="clear"></div>
                                    </div>
                                </div>



                            </div>
                        </div>


                    </div><!-- .col-inner -->
                </div><!-- .large-12 -->
            </div><!-- .row -->
        </div>


    </main><!-- #main -->

@endsection
