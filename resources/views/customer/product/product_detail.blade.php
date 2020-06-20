@extends('customer.layout')
@section('product_detail')
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
    <header id="header" class="header has-sticky sticky-jump">
        <div class="header-wrapper">
            <div id="masthead" class="header-main hide-for-sticky">
                <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                    <!-- Logo -->
                    <div id="logo" class="flex-col logo">
                        <!-- Header logo -->
                        <a href="..\" title="Mẫu website shop mỹ phẩm làm đẹp chuẩn seo - Thiết kế bởi Topweb" rel="home">
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
    @foreach($product_detail as $key=>$val)
    <div class="page-title shop-page-title product-page-title">
        <div class="page-title-inner flex-row medium-flex-wrap container">
            <div class="flex-col flex-grow medium-text-center">
                <div class="is-small">
                    <nav class="woocommerce-breadcrumb breadcrumbs"><a href="..\.">Trang chủ</a> <span class="divider">&#47;</span> <a href="{{URL::to('danh-muc-san-pham/'.$val->category_id)}}">{{$val->category_name}}</a></nav>
                </div>
            </div>
            <!-- .flex-left -->
            <div class="flex-col medium-text-center">
            </div>
            <!-- .flex-right -->
        </div>
        <!-- flex-row -->
    </div>
    @endforeach
    <!-- .page-title -->
    <main id="main" class="">
        <div class="shop-container">
            <div class="container">
                <div class="woocommerce-notices-wrapper"></div>
            </div>
            <!-- /.container -->
            <div id="product-273" class="product type-product post-273 status-publish first instock product_cat-cham-soc-da-mat has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                <div class="row content-row row-divided row-large row-reverse">
                    <div id="product-sidebar" class="col large-3 hide-for-medium shop-sidebar ">
                        <aside id="block_widget-2" class="widget block_widget">
                            <span class="widget-title shop-sidebar">Tiêu chí hoạt động</span>
                            <div class="is-divider small"></div>
                            <div class="row tieu-chi-sidebar" id="row-527930768">
                                <div class="col small-12 large-12">
                                    <div class="col-inner">
                                        <div class="icon-box featured-box icon-box-left text-left">
                                            <div class="icon-box-img" style="width: 60px">
                                                <div class="icon">
                                                    <div class="icon-inner">
                                                        <img width="225" height="225" src="{{asset('public\customer\wp-content\uploads\2019\02\3.jpg')}}"
                                                             class="attachment-medium size-medium" alt=""
                                                              sizes="(max-width: 225px) 100vw, 225px">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="icon-box-text last-reset">
                                                <p><span style="font-size: 90%;">Phát hiện hàng giả, bạn trả hàng và nhận thêm <strong>500%</strong> giá trị.</span></p>
                                            </div>
                                        </div>
                                        <!-- .icon-box -->
                                        <div class="icon-box featured-box icon-box-left text-left">
                                            <div class="icon-box-img" style="width: 60px">
                                                <div class="icon">
                                                    <div class="icon-inner">
                                                        <img width="225" height="225" src="{{asset('public\customer\wp-content\uploads\2019\02\ỈE.jpg')}}" class="attachment-medium size-medium" alt="" sizes="(max-width: 225px) 100vw, 225px">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="icon-box-text last-reset">
                                                <p><span style="font-size: 90%;">Giao hàng miễn phí toàn HCM từ <strong>90K</strong>(huyện 200K).</span></p>
                                            </div>
                                        </div>
                                        <!-- .icon-box -->
                                        <div class="icon-box featured-box icon-box-left text-left">
                                            <div class="icon-box-img" style="width: 60px">
                                                <div class="icon">
                                                    <div class="icon-inner">
                                                        <img width="225" height="225" src="{{asset('public\customer\wp-content\uploads\2019\02\1.jpg')}}" class="attachment-medium size-medium" alt="" sizes="(max-width: 225px) 100vw, 225px">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="icon-box-text last-reset">
                                                <p><span style="font-size: 12.96px;">Được phép đổi trả hàng trong 14 ngày miễn phí</span></p>
                                            </div>
                                        </div>
                                        <!-- .icon-box -->
                                        <div class="icon-box featured-box icon-box-left text-left">
                                            <div class="icon-box-img" style="width: 60px">
                                                <div class="icon">
                                                    <div class="icon-inner">
                                                        <img width="225" height="225" src="{{asset('public\customer\wp-content\uploads\2019\02\2.jpg')}}" class="attachment-medium size-medium" alt="" sizes="(max-width: 225px) 100vw, 225px">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="icon-box-text last-reset">
                                                <p><span style="font-size: 12.96px;">Dịch vụ giao hàng dưới 120 phút tại Tp.HCM</span></p>
                                            </div>
                                        </div>
                                        <!-- .icon-box -->
                                    </div>
                                </div>
                                <style scope="scope">
                                </style>
                            </div>
                        </aside>

                        <!-- SẢN PHẨM MỚI CẬP NHẬT -->
                        <aside id="woocommerce_products-2" class="widget woocommerce widget_products">
                            <span class="widget-title shop-sidebar">Sản phẩm mới cập nhật</span>
                            <div class="is-divider small"></div>
                            <ul class="product_list_widget">
                                @foreach($list_new_product as $key=>$new_product)
                                <li>
                                    <a href="#">
                                        <img width="100" height="100" src="{{URL::to('public/uploads/product/'.$new_product->product_image)}}"
                                             class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="" srcset="{{URL::to('public/uploads/product/'.$new_product->product_image)}}" sizes="(max-width: 100px) 100vw, 100px">
                                        <span class="product-title">{{$new_product->product_name}}</span>
                                    </a>

                                    <ins>
                                        <span class="woocommerce-Price-amount amount">{{number_format($new_product->product_price)}}
                                            <span class="woocommerce-Price-currencySymbol">&#8363;
                                            </span>
                                        </span>
                                    </ins>
                                </li>
                                @endforeach
                            </ul>
                        </aside>
                        <aside id="flatsome_recent_posts-2" class="widget flatsome_recent_posts">
                            <span class="widget-title shop-sidebar">Bài viết mới cập nhật</span>
                            <div class="is-divider small"></div>
                            <ul>
                                <li class="recent-blog-posts-li">
                                    <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                                        <div class="flex-col mr-half">
                                            <div class="badge post-date  badge-square">
                                                <div class="badge-inner bg-fill" style="background: url(../../wp-content/uploads/2019/02/vichy-web-366x200-150x150.jpg); border:0;">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .flex-col -->
                                        <div class="flex-col flex-grow">
                                            <a href="..\..\di-tim-5-loai-kem-chong-nang-vat-ly-tot-cho-lan-da-ban-gai-chau-a\index.htm" title="Đi tìm 5 loại kem chống nắng vật lý tốt cho làn da bạn gái châu Á">Đi tìm 5 loại kem chống nắng vật lý tốt cho làn da bạn gái châu Á</a>
                                            <span class="post_comments op-7 block is-xsmall"><a href="..\..\di-tim-5-loai-kem-chong-nang-vat-ly-tot-cho-lan-da-ban-gai-chau-a\index.htm#respond"></a></span>
                                        </div>
                                    </div>
                                    <!-- .flex-row -->
                                </li>
                                <li class="recent-blog-posts-li">
                                    <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                                        <div class="flex-col mr-half">
                                            <div class="badge post-date  badge-square">
                                                <div class="badge-inner bg-fill" style="background: url(../../wp-content/uploads/2019/02/laneige_366x200_1-150x150.jpg); border:0;">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .flex-col -->
                                        <div class="flex-col flex-grow">
                                            <a href="..\..\top-8-kem-chong-nang-duọc-yeu-thich-nhat-danh-cho-co-nang-da-nhạy-cảm\index.htm" title="Top 8 kem chống nắng được yêu thích nhất dành cho cô nàng da nhạy cảm">Top 8 kem chống nắng được yêu thích nhất dành cho cô nàng da nhạy cảm</a>
                                            <span class="post_comments op-7 block is-xsmall"><a href="..\..\top-8-kem-chong-nang-duọc-yeu-thich-nhat-danh-cho-co-nang-da-nhạy-cảm\index.htm#respond"></a></span>
                                        </div>
                                    </div>
                                    <!-- .flex-row -->
                                </li>
                                <li class="recent-blog-posts-li">
                                    <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                                        <div class="flex-col mr-half">
                                            <div class="badge post-date  badge-square">
                                                <div class="badge-inner bg-fill" style="background: url(../../wp-content/uploads/2019/02/banner-b_n-h_ng_220x350-150x150.jpg); border:0;">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .flex-col -->
                                        <div class="flex-col flex-grow">
                                            <a href="..\..\chao-moi-nguoi\index.htm" title="Hướng dẫn sử dụng mỹ phẩm đúng cách">Hướng dẫn sử dụng mỹ phẩm đúng cách</a>
                                            <span class="post_comments op-7 block is-xsmall"><a href="..\..\chao-moi-nguoi\index.htm#respond"></a></span>
                                        </div>
                                    </div>
                                    <!-- .flex-row -->
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <!-- col large-3 -->

                    <!-- CHI TIẾT SẢN PHẨM -->
                    <div class="col large-9">
                        @foreach($product_detail as $key=>$value)
                        <div class="product-main">
                            <div class="row">
                                <div class="large-6 col">
                                    <div class="row row-small">
                                        <div class="col large-10">
                                            <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images relative mb-half has-hover" data-columns="4">
                                                <div class="badge-container is-larger absolute left top z-1">
                                                    <div class="callout badge badge-square">

                                                    </div>
                                                </div>
                                                <div class="image-tools absolute top show-on-hover right z-3">
                                                </div>
                                                <figure class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-0" data-flickity-options='{
                                                        "cellAlign": "center",
                                                        "wrapAround": true,
                                                        "autoPlay": false,
                                                        "prevNextButtons":true,
                                                        "adaptiveHeight": true,
                                                        "imagesLoaded": true,
                                                        "lazyLoad": 1,
                                                        "dragThreshold" : 15,
                                                        "pageDots": false,
                                                        "rightToLeft": false       }'>
                                                    <div data-thumb="" class="woocommerce-product-gallery__image slide first"><a href="#"><img width="600" height="600" src="{{URL::to('public/uploads/product/'.$value->product_image)}}" class="wp-post-image skip-lazy" alt="" data-caption="" data-large_image_width="600" data-large_image_height="600"  sizes="(max-width: 600px) 100vw, 600px"></a></div>
                                                    @if($value->product_image_gallery!=null)
                                                        @foreach(json_decode($value->product_image_gallery) as $picture)
                                                        <div data-thumb="" class="woocommerce-product-gallery__image slide">
                                                            <a href="#">
                                                                <img width="358" height="358" src="{{URL::to('public/uploads/product/'.$picture)}}" class="skip-lazy" alt=""     data-caption="" data-large_image_width="358" data-large_image_height="358" sizes="(max-width: 358px) 100vw, 358px"></a></div>
                                                        @endforeach
                                                    @endif
                                                </figure>
                                                <div class="image-tools absolute bottom left z-3">
                                                    <a href="#product-zoom" class="zoom-button button is-outline circle icon tooltip hide-for-small" title="Zoom">
                                                        <i class="icon-expand"></i>    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col large-2 large-col-first vertical-thumbnails pb-0">
                                            <div class="product-thumbnails thumbnails slider row row-small row-slider slider-nav-small small-columns-4" data-flickity-options='{
                                             "cellAlign": "left",
                                             "wrapAround": false,
                                             "autoPlay": true,
                                             "prevNextButtons": false,
                                             "asNavFor": ".product-gallery-slider",
                                             "percentPosition": true,
                                             "imagesLoaded": true,
                                             "pageDots": false,
                                             "rightToLeft": false,
                                             "contain":  true
                                             }'>
                                                <!---Thư viện ảnh -->
                                                <div class="col is-nav-selected first">
                                                    <a>
                                                        <img src="{{URL::to('public/uploads/product/'.$value->product_image)}}" alt="" width="100" height="100" class="attachment-woocommerce_thumbnail">          </a>
                                                </div>
                                                @if($value->product_image_gallery!=null)
                                                    @foreach(json_decode($value->product_image_gallery) as $picture)
                                                    <div class="col"><a>
                                                            <img src="{{URL::to('public/uploads/product/'.$picture)}}" alt="" width="100" height="100" class="lazy-load attachment-woocommerce_thumbnail"></a>
                                                    </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <!-- .product-thumbnails -->
                                        </div>
                                        <!-- .col -->
                                    </div>
                                </div>

                                <div class="product-info summary entry-summary col col-fit product-summary">
                                    <div class="pwb-single-product-brands pwb-clearfix">
                                        <a href="#" title="Aleda">
                                            <img width="120" height="60" src="{{URL::to('public/uploads/brand/'.$value->brand_image)}}" class="attachment-thumbnail size-thumbnail" alt="">
                                        </a>
                                    </div>
                                    <h1 class="product-title product_title entry-title">
                                        {{$value->product_name}}
                                    </h1>
                                    <div class="is-divider small"></div>
                                    <div class="price-wrapper">
                                        <p class="price product-page-price price-on-sale">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">{{number_format($value->product_price)}}
                                                    <span class="woocommerce-Price-currencySymbol">&#8363;
                                                    </span>
                                                </span>
                                            </ins>
                                        </p>
                                    </div>
                                    <div class="thong-bao">
                                        <h4>Hỗ trợ khách hàng:</h4>
                                        <p>Quý khách vui lòng xem kỹ trước khi đặt hàng, sản phẩm không được đổi trả vì lý do không thích, không hợp.</p>
                                        <p>Hotline tư vấn: 033.093.935</p>
                                    </div>

                                    <!-- MUA HÀNG -->
                                    <form class="cart" action="{{URL::to('/save-cart')}}" method="post" enctype='multipart/form-data'>
                                        @csrf
                                        <div class="sticky-add-to-cart-wrapper">
                                            <div class="sticky-add-to-cart">
                                                <div class="sticky-add-to-cart__product">
                                                    <img src="{{URL::to('public/uploads/product/'.$value->product_image)}}" class="sticky-add-to-cart-img">
                                                    <div class="product-title-small hide-for-small"><strong>{{$value->product_name}}</strong></div>
                                                    <div class="price-wrapper">
                                                        <p class="price product-page-price price-on-sale">
                                                            <ins><span class="woocommerce-Price-amount amount">{{number_format($value->product_price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="quantity buttons_added">
                                                    <input type="button" value="-" class="minus button is-form">
                                                    <label class="screen-reader-text">{{$value->product_name}}</label>
                                                    <input name="product_id_hidden" type="hidden" value="{{$value->product_id}}" />
                                                    <input type="number" id="quantity_5e8ab1c28ae66" class="input-text qty text" step="1" min="1" max="9999" name="quantity" value="1" title="SL" size="4" inputmode="numeric">
                                                    <input type="button" value="+" class="plus button is-form">
                                                </div>
                                                <button type="submit" name="add-to-cart" class="single_add_to_cart_button button alt">Mua hàng</button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="product_meta">
                                        <span class="posted_in">Danh mục: <a href="{{URL::to('/danh-muc-san-pham/'.$value->category_id)}}" rel="tag">{{$value->category_name}}</a></span>
                                    </div>
                                    <div class="social-icons share-icons share-row relative">
                                        <a href="whatsapp://send?text=Gel%20S%E1%BB%AFa%20Ch%E1%BB%91ng%20N%E1%BA%AFng%20Senka%20SPF50%2FPA%2B%2B%2B%2B%2080g%20Perfect%20UV%20Gel - https://shoplamdep.haiphongweb.com/san-pham/gel-sua-chong-nang-senka-spf50-pa-80g-perfect-uv-gel/" data-action="share/whatsapp/share" class="icon button circle is-outline tooltip whatsapp show-for-medium" title="Share on WhatsApp"><i class="icon-phone"></i></a><a href="//www.facebook.com/sharer.php?u=https://shoplamdep.haiphongweb.com/san-pham/gel-sua-chong-nang-senka-spf50-pa-80g-perfect-uv-gel/" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip facebook" title="Share on Facebook"><i class="icon-facebook"></i></a><a href="//twitter.com/share?url=https://shoplamdep.haiphongweb.com/san-pham/gel-sua-chong-nang-senka-spf50-pa-80g-perfect-uv-gel/" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip twitter" title="Share on Twitter"><i class="icon-twitter"></i></a><a href="mailto:enteryour@addresshere.com?subject=Gel%20S%E1%BB%AFa%20Ch%E1%BB%91ng%20N%E1%BA%AFng%20Senka%20SPF50%2FPA%2B%2B%2B%2B%2080g%20Perfect%20UV%20Gel&body=Check%20this%20out:%20https://shoplamdep.haiphongweb.com/san-pham/gel-sua-chong-nang-senka-spf50-pa-80g-perfect-uv-gel/" rel="nofollow" class="icon button circle is-outline tooltip email" title="Email to a Friend"><i class="icon-envelop"></i></a><a href="//pinterest.com/pin/create/button/?url=https://shoplamdep.haiphongweb.com/san-pham/gel-sua-chong-nang-senka-spf50-pa-80g-perfect-uv-gel/&media=https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/gel-sua-chong-nang-spf50-senka-80g.jpg&description=Gel%20S%E1%BB%AFa%20Ch%E1%BB%91ng%20N%E1%BA%AFng%20Senka%20SPF50%2FPA%2B%2B%2B%2B%2080g%20Perfect%20UV%20Gel" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip pinterest" title="Pin on Pinterest"><i class="icon-pinterest"></i></a><a href="//plus.google.com/share?url=https://shoplamdep.haiphongweb.com/san-pham/gel-sua-chong-nang-senka-spf50-pa-80g-perfect-uv-gel/" target="_blank" class="icon button circle is-outline tooltip google-plus" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" title="Share on Google+"><i class="icon-google-plus"></i></a><a href="//www.linkedin.com/shareArticle?mini=true&url=https://shoplamdep.haiphongweb.com/san-pham/gel-sua-chong-nang-senka-spf50-pa-80g-perfect-uv-gel/&title=Gel%20S%E1%BB%AFa%20Ch%E1%BB%91ng%20N%E1%BA%AFng%20Senka%20SPF50%2FPA%2B%2B%2B%2B%2080g%20Perfect%20UV%20Gel" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip linkedin" title="Share on LinkedIn"><i class="icon-linkedin"></i></a></div>
                                </div>
                                <!-- .summary -->
                            </div>
                            <!-- .row -->
                        </div>
                        <!-- .product-main -->
                        <div class="product-footer">
                            <div class="woocommerce-tabs wc-tabs-wrapper container tabbed-content">
                                <ul class="tabs wc-tabs product-tabs small-nav-collapse nav nav-uppercase nav-line nav-left" role="tablist">
                                    <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                                        <a href="#tab-description">Mô tả - Chi tiết sản phẩm</a>
                                    </li>
                                    <li class="pwb_tab_tab " id="tab-title-pwb_tab" role="tab" aria-controls="tab-pwb_tab">
                                        <a href="#tab-pwb_tab">Thương hiệu</a>
                                    </li>
                                    <li class="reviews_tab " id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                        <a href="#tab-reviews">Đánh giá (0)</a>
                                    </li>
                                </ul>
                                <div class="tab-panels">
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content active" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                                        <p>
                                            {!! $value->product_description !!}
                                        </p>
                                    </div>
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--pwb_tab panel entry-content " id="tab-pwb_tab" role="tabpanel" aria-labelledby="tab-title-pwb_tab">
                                        <h2>Thương hiệu</h2>
                                        <div id="tab-pwb_tab-content">
                                            <h3>{{$value->brand_name}}</h3>
                                            <span><img width="120" height="60" src="{{URL::to('public/uploads/brand/'.$value->brand_image)}}" class="attachment-thumbnail size-thumbnail" alt=""></span>
                                            <h3>{{$value->brand_description}}</h3>
                                        </div>
                                    </div>
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content " id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                                        <div id="reviews" class="woocommerce-Reviews row">
                                            <div id="comments" class="col large-12">
                                                <h3 class="woocommerce-Reviews-title normal">
                                                    Đánh giá
                                                </h3>
                                                <p class="woocommerce-noreviews">Chưa có đánh giá nào.</p>
                                            </div>
                                            <div id="review_form_wrapper" class="large-12 col">
                                                <div id="review_form" class="col-inner">
                                                    <div class="review-form-inner has-border">
                                                        <div id="respond" class="comment-respond">
                                                            <h3 id="reply-title" class="comment-reply-title">Hãy là người đầu tiên nhận xét &ldquo;Gel Sữa Chống Nắng Senka SPF50/PA++++ 80g Perfect UV Gel&rdquo; <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.htm#respond" style="display:none;">Hủy</a></small></h3>
                                                            <form action="https://shoplamdep.haiphongweb.com/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
                                                                <div class="comment-form-rating">
                                                                    <label for="rating">Đánh giá của bạn</label>
                                                                    <select name="rating" id="rating" required="">
                                                                        <option value="">Xếp hạng&hellip;</option>
                                                                        <option value="5">Rất tốt</option>
                                                                        <option value="4">Tốt</option>
                                                                        <option value="3">Trung bình</option>
                                                                        <option value="2">Không tệ</option>
                                                                        <option value="1">Rất tệ</option>
                                                                    </select>
                                                                </div>
                                                                <p class="comment-form-comment"><label for="comment">Nhận xét của bạn&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea></p>
                                                                <p class="comment-form-author"><label for="author">Tên&nbsp;<span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" required=""></p>
                                                                <p class="comment-form-email"><label for="email">Email&nbsp;<span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" required=""></p>
                                                                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Gửi đi"> <input type='hidden' name='comment_post_ID' value='273' id='comment_post_ID'>
                                                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0'>
                                                                </p>
                                                            </form>
                                                        </div>
                                                        <!-- #respond -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--ux_global_tab panel entry-content " id="tab-ux_global_tab" role="tabpanel" aria-labelledby="tab-title-ux_global_tab">
                                        <h3>Nhập thông tin thanh toán</h3>
                                    </div>
                                </div>
                                <!-- .tab-panels -->
                            </div>
                            <!-- .tabbed-content -->
                            <div class="related related-products-wrapper product-section">
                                <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                                    Sản phẩm tương tự
                                </h3>
                                <div class="row large-columns-5 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                                    @foreach($product_related as $key=>$pro_related)
                                    <div class="product-small col has-hover product type-product post-271 status-publish instock product_cat-cham-soc-da-mat product_tag-loreal has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                                        <div class="col-inner">
                                            <div class="badge-container absolute left top z-1">

                                            </div>
                                            <div class="product-small box ">
                                                <div class="box-image">
                                                    <div class="image-zoom">
                                                        <a href="{{URL::to('/san-pham/'.$pro_related->product_id)}}">
                                                            <img width="300" height="300" src="{{URL::to('/public/uploads/product/'.$pro_related->product_image)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 300px) 100vw, 300px">				</a>
                                                    </div>
                                                    <div class="image-tools is-small top right show-on-hover">
                                                    </div>
                                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                    </div>
                                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                    </div>
                                                </div>
                                                <!-- box-image -->
                                                <div class="box-text box-text-products">
                                                    <div class="title-wrapper">
                                                        <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                            {{$pro_related->category_name}}
                                                        </p>
                                                        <p class="name product-title"><a class="text" href="{{URL::to('/san-pham/'.$pro_related->product_id)}}">{{$pro_related->product_name}}</a></p>
                                                    </div>
                                                    <div class="price-wrapper">
                                                        <div class="pwb-brands-in-loop">
                                                            <span><a href="{{URL::to('/thuong-hieu/'.$pro_related->brand_id)}}">
                                                                    <img width="120" height="60" src="{{URL::to('/public/uploads/brand/'.$pro_related->brand_image)}}" class="attachment-thumbnail size-thumbnail" alt=""></a></span></div>
                                                        <span class="price">
                                                            <ins><span class="woocommerce-Price-amount amount">{{number_format($pro_related->product_price)}}
                                                                    <span class="woocommerce-Price-currencySymbol">&#8363;
                                                                    </span>
                                                                </span>
                                                            </ins>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- box-text -->
                                            </div>
                                            <!-- box -->
                                        </div>
                                        <!-- .col-inner -->
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col large-9 -->
                </div>
                <!-- .row -->
            @endforeach()
                <!-- ĐẶT HÀNG NHANH  -->
                <div class="devvn-popup-quickbuy" data-popup="popup-quickbuy" id="popup_content_273">
                    <div class="devvn-popup-inner">
                        <div class="devvn-popup-title">
                            <span>Đặt mua Gel Sữa Chống Nắng Senka SPF50/PA++++ 80g Perfect UV Gel</span>
                            <button type="button" class="devvn-popup-close"></button>
                        </div>
                        <div class="devvn-popup-content devvn-popup-content_273 ">
                            <div class="devvn-popup-content-left ">
                                <div class="devvn-popup-prod">
                                    <div class="devvn-popup-img"><img src="..\..\wp-content\uploads\2019\02\gel-sua-chong-nang-spf50-senka-80g-100x100.jpg" alt=""></div>
                                    <div class="devvn-popup-info">
                                        <span class="devvn_title">Gel Sữa Chống Nắng Senka SPF50/PA++++ 80g Perfect UV Gel</span>
                                        <span class="devvn_price"><del><span class="woocommerce-Price-amount amount">36.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">25.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
                                    </div>
                                </div>
                                <div class="devvn_prod_variable" data-simpleprice="25000">
                                    <form class="cart" action="https://shoplamdep.haiphongweb.com/san-pham/gel-sua-chong-nang-senka-spf50-pa-80g-perfect-uv-gel/" method="post" enctype='multipart/form-data'>
                                        <div class="sticky-add-to-cart-wrapper">
                                            <div class="sticky-add-to-cart">
                                                <div class="sticky-add-to-cart__product">
                                                    <img src="..\..\wp-content\uploads\2019\02\gel-sua-chong-nang-spf50-senka-80g-100x100.jpg" class="sticky-add-to-cart-img">
                                                    <div class="product-title-small hide-for-small"><strong>Gel Sữa Chống Nắng Senka SPF50/PA++++ 80g Perfect UV Gel</strong></div>
                                                    <div class="price-wrapper">
                                                        <p class="price product-page-price price-on-sale">
                                                            <del><span class="woocommerce-Price-amount amount">36.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">25.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="quantity buttons_added">
                                                    <input type="button" value="-" class="minus button is-form">		<label class="screen-reader-text" for="quantity_5e8ab1c2b7472">Gel Sữa Chống Nắng Senka SPF50/PA++++ 80g Perfect UV Gel số lượng</label>
                                                    <input type="number" id="quantity_5e8ab1c2b7472" class="input-text qty text" step="1" min="1" max="9999" name="quantity" value="1" title="SL" size="4" inputmode="numeric">
                                                    <input type="button" value="+" class="plus button is-form">
                                                </div>
                                                <button type="submit" name="add-to-cart" value="273" class="single_add_to_cart_button button alt">Mua hàng</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                Bạn vui lòng nhập đúng số điện thoại để chúng tôi sẽ gọi xác nhận đơn hàng trước khi giao hàng. Xin cảm ơn!
                            </div>
                            <div class="devvn-popup-content-right">
                                <form class="devvn_cusstom_info" id="devvn_cusstom_info" method="post">
                                    <div class="popup-customer-info">
                                        <div class="popup-customer-info-title">Thông tin người mua</div>
                                        <div class="popup-customer-info-group popup-customer-info-radio">
                                            <label>
                                                <input type="radio" name="customer-gender" value="1" checked/="">
                                                <span>Anh</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="customer-gender" value="2">
                                                <span>Chị</span>
                                            </label>
                                        </div>
                                        <div class="popup-customer-info-group">
                                            <div class="popup-customer-info-item-2">
                                                <input type="text" class="customer-name" name="customer-name" placeholder="Họ và tên">
                                            </div>
                                            <div class="popup-customer-info-item-2">
                                                <input type="text" class="customer-phone" name="customer-phone" placeholder="Số điện thoại">
                                            </div>
                                        </div>
                                        <div class="popup-customer-info-group">
                                            <div class="popup-customer-info-item-1">
                                                <input type="text" class="customer-email" name="customer-email" data-required="false" placeholder="Địa chỉ email (Không bắt buộc)">
                                            </div>
                                        </div>
                                        <div class="popup-customer-info-group">
                                            <div class="popup-customer-info-item-1">
                                                <textarea class="customer-address" name="customer-address" placeholder="Địa chỉ nhận hàng (Không bắt buộc)"></textarea>
                                            </div>
                                        </div>
                                        <div class="popup-customer-info-group">
                                            <div class="popup-customer-info-item-1">
                                                <textarea class="order-note" name="order-note" placeholder="Ghi chú đơn hàng (Không bắt buộc)"></textarea>
                                            </div>
                                        </div>
                                        <div class="popup-customer-info-group">
                                            <div class="popup-customer-info-item-1 popup_quickbuy_shipping">
                                                <div class="popup_quickbuy_shipping_title">Tổng:</div>
                                                <div class="popup_quickbuy_total_calc"></div>
                                            </div>
                                        </div>
                                        <div class="popup-customer-info-group">
                                            <div class="popup-customer-info-item-1">
                                                <button type="button" class="devvn-order-btn">Đặt hàng ngay</button>
                                            </div>
                                        </div>
                                        <div class="popup-customer-info-group">
                                            <div class="popup-customer-info-item-1">
                                                <div class="devvn_quickbuy_mess"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="prod_id" id="prod_id" value="273">
                                    <input type="hidden" name="prod_nonce" id="prod_nonce" value="">
                                    <input type="hidden" name="enable_ship" id="enable_ship" value="">
                                    <input name="require_address" id="require_address" type="hidden" value="0">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop container -->
    </main>
    <!-- #main -->
@endsection

