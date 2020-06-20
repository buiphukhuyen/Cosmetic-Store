@extends('customer.layout')
@section('home')
    <style>
        .text {
            display: -webkit-box;
            margin: 0 auto;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            height: 40px;
        }
    </style>
        <header id="header" class="header has-sticky sticky-jump">
            <div class="header-wrapper">
                <div id="masthead" class="header-main hide-for-sticky">
                    <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                        <!-- Logo -->
                        <div id="logo" class="flex-col logo">
                            <!-- Header logo -->
                            <a href="." title="Website shop mỹ phẩm làm đẹp chuẩn SEO" rel="home">
                                <img width="221" height="70" src="{{asset('public/customer/wp-content/uploads\2019\05\shop3.jpg')}}" class="header_logo header-logo" alt="Mẫu website shop mỹ phẩm làm đẹp chuẩn seo"><img width="221" height="70" src="public/customer/wp-content/uploads\2019\05\shop3.jpg" class="header-logo-dark" alt="Mẫu website shop mỹ phẩm làm đẹp chuẩn seo"></a>
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
                                        <div class="row row-small" id="row-1150705779">
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
                                                        </form>
                                                    </div>
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
                                    <a href="{{URL::to('/show-cart')}}" class="header-cart-link off-canvas-toggle nav-top-link is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">
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
    <!-- HEAD - Danh mục -->
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
            <li id="menu-item-900" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-900"><a href="bai-viet\tin-tuc\index.htm" class="nav-top-link">Tin tức</a></li>
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
    </div><!-- .flex-row -->
    </div><!-- .header-bottom -->
    <div class="header-bg-container fill">
        <div class="header-bg-image fill"></div>
        <div class="header-bg-color fill"></div>
    </div>
    <!-- .header-bg-container -->   </div><!-- header-wrapper-->
    </header>
        <main id="main" class="">
        <div id="content" role="main" class="content-area">
            <section class="section" id="section_1742583869">
                <div class="bg section-bg fill bg-fill  bg-loaded">
                </div>
                <!-- .section-bg -->
                <div class="section-content relative">
                    <div class="row row-collapse slider-row" id="row-1171119138">
                        <div class="col cot1 medium-2 small-12 large-2">
                            <div class="col-inner">
                            </div>
                        </div>
                        <div class="col cot2 medium-7 small-12 large-7">
                            <div class="col-inner">
                                <div class="row row-collapse" id="row-1650279263">
                                    <div class="col medium-9 small-12 large-9">
                                        <div class="col-inner">
                                            <div class="slider-wrapper relative" id="slider-895841192">
                                                <div class="slider slider-nav-simple slider-nav-normal slider-nav-light slider-style-normal" data-flickity-options='{
                              "cellAlign": "center",
                              "imagesLoaded": true,
                              "lazyLoad": 1,
                              "freeScroll": false,
                              "wrapAround": true,
                              "autoPlay": 6000,
                              "pauseAutoPlayOnHover" : true,
                              "prevNextButtons": true,
                              "contain" : true,
                              "adaptiveHeight" : true,
                              "dragThreshold" : 10,
                              "percentPosition": true,
                              "pageDots": true,
                              "rightToLeft": false,
                              "draggable": true,
                              "selectedAttraction": 0.1,
                              "parallax" : 0,
                              "friction": 0.6        }'>
                                                    @foreach($slider as $key => $slide)
                                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1349624217">
                                                        <div class="img-inner image-cover dark" style="padding-top:402px;">
                                                            <img width="650" height="400" src="public/uploads/slider/{{$slide->slider_image}}" class="lazy-load attachment-original size-original" alt="" srcset="">
                                                        </div>
                                                        <style scope="scope">
                                                            #image_1349624217 {
                                                                width: 100%;
                                                            }
                                                        </style>
                                                    </div>
                                                    @endforeach

                                                </div>
                                                <div class="loading-spin dark large centered"></div>
                                                <style scope="scope">
                                                </style>
                                            </div>
                                            <!-- .ux-slider-wrapper -->
                                        </div>
                                    </div>
                                    <div class="col medium-3 small-12 large-3">
                                        <div class="col-inner">
                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_431481681">
                                                <div class="img-inner image-cover dark" style="padding-top:201px;">
                                                    <img width="220" height="200" src="public\customer\wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/fit_me_2.jpg" class="lazy-load attachment-original size-original" alt="">
                                                </div>
                                                <style scope="scope">
                                                    #image_431481681 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>
                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2096692644">
                                                <div class="img-inner image-cover dark" style="padding-top:201px;">
                                                    <img width="220" height="200" src="public\customer\wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/cetaphi_vuong.jpg" class="lazy-load attachment-original size-original" alt="">
                                                </div>
                                                <style scope="scope">
                                                    #image_2096692644 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>
                                    <style scope="scope">
                                    </style>
                                </div>
                            </div>
                        </div>
                        <div class="col cot3 medium-3 small-12 large-3">
                            <div class="col-inner">
                                <div class="container section-title-container">
                                    <h3 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:64%;color:rgb(50, 110, 81);">Chất lượng cho tất cả</span><b></b></h3>
                                </div>
                                <!-- .section-title -->
                                <div class="row row-collapse" id="row-365129085">
                                    <div class="col medium-6 small-12 large-6">
                                        <div class="col-inner">
                                            <div class="icon-box featured-box icon-box-center text-center">
                                                <div class="icon-box-img" style="width: 70px">
                                                    <div class="icon">
                                                        <div class="icon-inner">
                                                            <img width="70" height="70" src="public\customer\wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/img_quality_1.jpg" class="lazy-load attachment-medium size-medium" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icon-box-text last-reset">
                                                    <p><span style="font-size: 80%;">Thanh toán</span><br><span style="font-size: 80%;">khi nhận hàng</span></p>
                                                </div>
                                            </div>
                                            <!-- .icon-box -->
                                            <div class="icon-box featured-box icon-box-center text-center">
                                                <div class="icon-box-img" style="width: 70px">
                                                    <div class="icon">
                                                        <div class="icon-inner">
                                                            <img width="225" height="225" src="public\customer\wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/1.jpg" class="lazy-load attachment-medium size-medium" alt="" srcset="" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/1.jpg 225w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/1-150x150.jpg 150w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/1-100x100.jpg 100w" sizes="(max-width: 225px) 100vw, 225px">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icon-box-text last-reset">
                                                    <p><span style="font-size: 80%;">14 ngày đổi trả</span><br><span style="font-size: 80%;">miễn phí</span></p>
                                                </div>
                                            </div>
                                            <!-- .icon-box -->
                                        </div>
                                    </div>
                                    <div class="col medium-6 small-12 large-6">
                                        <div class="col-inner">
                                            <div class="icon-box featured-box icon-box-center text-center">
                                                <div class="icon-box-img" style="width: 70px">
                                                    <div class="icon">
                                                        <div class="icon-inner">
                                                            <img width="225" height="225" src="public\customer\wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/2.jpg" class="lazy-load attachment-medium size-medium" alt="" srcset="" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/2.jpg 225w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/2-150x150.jpg 150w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/2-100x100.jpg 100w" sizes="(max-width: 225px) 100vw, 225px">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icon-box-text last-reset">
                                                    <p><span style="font-size: 80%;">Giao hàng</span><br><span style="font-size: 80%;">dưới 120 phút</span></p>
                                                </div>
                                            </div>
                                            <!-- .icon-box -->
                                            <div class="icon-box featured-box icon-box-center text-center">
                                                <div class="icon-box-img" style="width: 70px">
                                                    <div class="icon">
                                                        <div class="icon-inner">
                                                            <img width="225" height="225" src="public\customer\wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/3.jpg" class="lazy-load attachment-medium size-medium" alt="" srcset="" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/3.jpg 225w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/3-150x150.jpg 150w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/3-100x100.jpg 100w" sizes="(max-width: 225px) 100vw, 225px">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icon-box-text last-reset">
                                                    <p><span style="font-size: 80%;">Sản phẩm</span><br><span style="font-size: 80%;">chính hãng</span></p>
                                                </div>
                                            </div>
                                            <!-- .icon-box -->
                                        </div>
                                    </div>
                                    <style scope="scope">
                                    </style>
                                </div>
                                <div class="gap-element clearfix" style="display:block; height:auto; padding-top:30px"></div>
                                <div class="icon-box featured-box icon-box-left text-left">
                                    <div class="icon-box-img" style="width: 40px">
                                        <div class="icon">
                                            <div class="icon-inner">
                                                <img width="40" height="40" src="public\customer\wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/img_hotline.png" class="lazy-load attachment-medium size-medium" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-box-text last-reset">
                                        <p><span style="font-size: 85%;">Dịch vụ CSKH chu đáo </span><br><span style="font-size: 85%;">Hotline: <span style="color: #ff6600;"><b>1900 636 900</b></span></span></p>
                                    </div>
                                </div>
                                <!-- .icon-box -->
                            </div>
                        </div>
                        <style scope="scope">
                        </style>
                    </div>
                </div>
                <!-- .section-content -->
                <style scope="scope">
                    #section_1742583869 {
                        padding-top: 0px;
                        padding-bottom: 0px;
                        background-color: rgb(245, 251, 246);
                    }
                </style>
            </section>
            <!-- Sản phẩm mới -->
            <section class="section row-sp deal-hot" id="section_289245873">
                <div class="bg section-bg fill bg-fill  bg-loaded">
                </div>
                <!-- .section-bg -->
                <div class="section-content relative">
                    <div class="container section-title-container">
                        <h3 class="section-title section-title-normal"><b></b><span class="section-title-main">SẢN PHẨM MỚI NHẤT</span></h3>
                    </div>
                    <!-- .section-title -->
                    <div class="row large-columns-6 medium-columns-3 small-columns-2 row-collapse slider row-slider slider-nav-simple slider-nav-outside slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                        @foreach($product as $key=>$pro)
                            <div class="col">
                                <div class="col-inner">
                                    <div class="badge-container absolute left top z-1">
                                        <div class="callout badge badge-square">
                                            <div class="badge-inner secondary on-sale">
                                                <span class="onsale">-19%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-overlay-add image-zoom image-cover" style="padding-top:100%;">
                                                <a href="{{URL::to('/san-pham/'.$pro->product_id)}}">
                                                    <img width="358" height="358" src="{{URL::to('public/uploads/product/'.$pro->product_image)}}"  class="lazy-load attachment-original size-original" sizes="(max-width: 358px) 100vw, 358px">									</a>
                                                <div class="overlay fill" style="background-color: rgba(255, 255, 255, 0.27)"></div>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>
                                        <!-- box-image -->
                                        <div class="box-text text-left">
                                            <div class="title-wrapper">
                                                @foreach($category as $key=>$cate)
                                                    @if($cate->category_id==$pro->category_id)
                                                        <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                            {{$cate->category_name}}
                                                        </p>
                                                    @endif
                                                @endforeach
                                                <p class="name product-title">
                                                    <a class="text" href="{{URL::to('/san-pham/'.$pro->product_id)}}">{{$pro->product_name}}</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <div class="pwb-brands-in-loop">
                                                    <span>
                                                        <a href="{{URL::to('/thuong-hieu/'.$pro->brand_id)}}" >
                                                            @foreach($brand as $key=>$bra)
                                                               @if($bra->brand_id==$pro->brand_id)
                                                                   <img width="120" height="60" src="{{URL::to('public/uploads/brand/'.$bra->brand_image)}}" class="lazy-load attachment-thumbnail size-thumbnail" alt="">
                                                               @endif
                                                           @endforeach
                                                        </a>
                                                   </span>
                                                </div>
                                                    <span class="price">

                                                        <ins>
                                                        <span class="woocommerce-Price-amount amount">{{number_format($pro->product_price)}}
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
                            <!-- col -->
                        @endforeach
                    </div>
                </div>
                <!-- .section-content -->
                <style scope="scope">
                    #section_289245873 {
                        padding-top: 10px;
                        padding-bottom: 10px;
                        background-color: rgb(245, 251, 246);
                    }
                </style>
            </section>
            <!--Thương hiệu -->
            <section class="section row-sp thuong-hieu" id="section_1158551858">
                <div class="bg section-bg fill bg-fill  bg-loaded">
                </div>
                <!-- .section-bg -->
                <div class="section-content relative">
                    <div class="container section-title-container">
                        <h3 class="section-title section-title-normal"><b></b><span class="section-title-main">Thương hiệu nổi bật</span></h3>
                    </div>
                    <!-- .section-title -->
                    <div class="row row-small row-thuong-hieu" id="row-457468224">
                        @foreach($brand as $key=>$brans)
                            <div class="col medium-3 small-6 large-3">
                                <div class="col-inner">
                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2055271255">
                                        <a class="" href="{{URL::to('/thuong-hieu/'.$brans->brand_id)}}" target="_self">
                                            <div class="img-inner image-color dark">
                                                <img width="150" height="75" src="public/uploads/brand/{{$brans->brand_image}}" class="lazy-load attachment-original size-original" alt="">
                                            </div>
                                        </a>
                                        <style scope="scope">
                                            #image_2055271255 {
                                                width: 100%;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <style scope="scope">
                    #section_1158551858 {
                        padding-top: 10px;
                        padding-bottom: 10px;
                        background-color: rgb(245, 251, 246);
                    }
                </style>
            </section>

            <!-- Danh mục Trang điểm -->
            <section class="section category-row" id="section_1976849048">
                <div class="bg section-bg fill bg-fill  bg-loaded">
                </div><!-- .section-bg -->

                <div class="section-content relative">

                    <div class="row" id="row-784981604">
                        <div class="col small-12 large-12"><div class="col-inner">
                                <div class="tieu-de-row">
                                    <div class="left">
                                        <h2><a href="#" target="blank">Trang điểm</a></h2>
                                    </div>
                                    <div class="clearboth"></div>
                                </div>
                            </div></div>
                    </div>
                    <div class="row row-collapse" id="row-1989959363">
                        <div class="col cot1 medium-2 small-12 large-2"><div class="col-inner">
                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_938668062">
                                    <div class="img-inner dark">
                                        <img width="220" height="350" src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/220-x-350.jpg" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/220-x-350.jpg" class="attachment-original size-original lazy-load-active" alt="" srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/220-x-350.jpg 220w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/220-x-350-189x300.jpg 189w" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/220-x-350.jpg 220w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/220-x-350-189x300.jpg 189w" sizes="(max-width: 220px) 100vw, 220px">
                                    </div>

                                    <style scope="scope">

                                        #image_938668062 {
                                            width: 100%;
                                        }
                                    </style>
                                </div>

                                <div class="cloud-tag">
                                    <ul>
                                        <li><a href="#" target="blank">Sữa rửa mặt</a></li>
                                        <li><a href="#" target="blank">Nước hoa hồng</a></li>
                                        <li><a href="#" target="blank">Nước cân bằng</a></li>
                                        <li><a href="#" target="blank">Toner</a></li>
                                        <li><a href="#" target="blank">Essenser</a></li>
                                        <li><a href="#" target="blank">Tinh chất</a></li>
                                        <li><a href="#" target="blank">Emulsion</a></li>
                                    </ul>
                                </div>
                            </div></div>
                        <div class="col cot2 row-sp medium-9 small-12 large-9"><div class="col-inner">
                                <div class="row row-collapse" id="row-2056097756">
                                    <div class="col medium-4 small-12 large-4"><div class="col-inner">
                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_705518200">
                                                <a class="" href="#" target="_blank" rel="noopener noreferrer">						<div class="img-inner image-zoom dark">
                                                        <img width="366" height="200" src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/omg-desktop_4.jpg" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/omg-desktop_4.jpg" class="attachment-original size-original lazy-load-active" alt="" srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/omg-desktop_4.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/omg-desktop_4-300x164.jpg 300w" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/omg-desktop_4.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/omg-desktop_4-300x164.jpg 300w" sizes="(max-width: 366px) 100vw, 366px">
                                                    </div>
                                                </a>
                                                <style scope="scope">

                                                    #image_705518200 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>

                                        </div></div>
                                    <div class="col medium-4 small-12 large-4"><div class="col-inner">
                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1201493303">
                                                <a class="" href="#" target="_self">						<div class="img-inner image-zoom dark">
                                                        <img width="366" height="200" src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/5_lopneni_366x200_1.jpg" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/5_lopneni_366x200_1.jpg" class="attachment-original size-original lazy-load-active" alt="" srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/5_lopneni_366x200_1.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/5_lopneni_366x200_1-300x164.jpg 300w" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/5_lopneni_366x200_1.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/5_lopneni_366x200_1-300x164.jpg 300w" sizes="(max-width: 366px) 100vw, 366px">
                                                    </div>
                                                </a>
                                                <style scope="scope">

                                                    #image_1201493303 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>

                                        </div></div>
                                    <div class="col medium-4 small-12 large-4"><div class="col-inner">
                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2146228890">
                                                <a class="" href="#" target="_self">						<div class="img-inner image-zoom dark">
                                                        <img width="366" height="200" src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/artboard_5_copy.jpg" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/artboard_5_copy.jpg" class="attachment-original size-original lazy-load-active" alt="" srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/artboard_5_copy.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/artboard_5_copy-300x164.jpg 300w" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/artboard_5_copy.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/artboard_5_copy-300x164.jpg 300w" sizes="(max-width: 366px) 100vw, 366px">
                                                    </div>
                                                </a>
                                                <style scope="scope">

                                                    #image_2146228890 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>

                                        </div></div>

                                    <style scope="scope">

                                    </style>
                                </div>
                                <div class="container section-title-container"><h3 class="section-title section-title-normal"><b></b><span class="section-title-main">Nổi bật và bán chạy</span><b></b><a href="{{URL::to('danh-muc-san-pham/'.$list_trangdiem[0]->category_id)}}" target="">+ Xem thêm<i class="icon-angle-right"></i></a></h3></div><!-- .section-title -->


                                <div class="row large-columns-5 medium-columns-3 small-columns-2 row-collapse slider row-slider slider-nav-simple slider-nav-push flickity-enabled is-draggable slider-lazy-load-active" data-flickity-options="{&quot;imagesLoaded&quot;: true, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 5, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: true,&quot;pageDots&quot;: false, &quot;rightToLeft&quot;: false, &quot;autoPlay&quot; : false}" tabindex="0">
                                    @foreach($list_trangdiem as $key=>$pro)
                                        <div class="col">
                                            <div class="col-inner">
                                                <div class="badge-container absolute left top z-1">
                                                    <div class="callout badge badge-square">
                                                        <div class="badge-inner secondary on-sale">
                                                            <span class="onsale">-19%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-small box has-hover box-normal box-text-bottom">
                                                    <div class="box-image">
                                                        <div class="image-overlay-add image-zoom image-cover" style="padding-top:100%;">
                                                            <a href="{{URL::to('/san-pham/'.$pro->product_id)}}">
                                                                <img width="358" height="358" src="{{URL::to('public/uploads/product/'.$pro->product_image)}}"  class="lazy-load attachment-original size-original" sizes="(max-width: 358px) 100vw, 358px">									</a>
                                                            <div class="overlay fill" style="background-color: rgba(255, 255, 255, 0.27)"></div>
                                                        </div>
                                                        <div class="image-tools top right show-on-hover">
                                                        </div>
                                                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                        </div>
                                                    </div>
                                                    <!-- box-image -->
                                                    <div class="box-text text-left">
                                                        <div class="title-wrapper">
                                                            @foreach($category as $key=>$cate)
                                                                @if($cate->category_id==$pro->category_id)
                                                                    <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                                        {{$cate->category_name}}
                                                                    </p>
                                                                @endif
                                                            @endforeach
                                                            <p class="name product-title">
                                                                <a class="text" href="{{URL::to('/san-pham/'.$pro->product_id)}}">{{$pro->product_name}}</a>
                                                            </p>
                                                        </div>
                                                        <div class="price-wrapper">
                                                            <div class="pwb-brands-in-loop">
                                                    <span>
                                                        <a href="{{URL::to('/thuong-hieu/'.$pro->brand_id)}}" >
                                                            @foreach($brand as $key=>$bras)
                                                                @if($bras->brand_id==$pro->brand_id)
                                                                    <img width="120" height="60" src="{{URL::to('public/uploads/brand/'.$bras->brand_image)}}" class="lazy-load attachment-thumbnail size-thumbnail" alt="">
                                                                @endif
                                                            @endforeach
                                                        </a>
                                                   </span>
                                                            </div>
                                                            <span class="price">

                                                        <ins>
                                                        <span class="woocommerce-Price-amount amount">{{number_format($pro->product_price)}}
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
                                        <!-- col -->
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <style scope="scope">

                        </style>
                    </div>
                </div><!-- .section-content -->


                <style scope="scope">

                    #section_1976849048 {
                        padding-top: 10px;
                        padding-bottom: 10px;
                        background-color: rgb(245, 251, 246);
                    }
                </style>
            </section>

            <!-- Danh mục Chăm sóc da mặt -->
            <section class="section category-row cham-soc-da-mat" id="section_575941787">
                <div class="bg section-bg fill bg-fill  bg-loaded">
                </div><!-- .section-bg -->
                <div class="section-content relative">

                    <div class="row" id="row-92797852">
                        <div class="col small-12 large-12"><div class="col-inner">
                                <div class="tieu-de-row">
                                    <div class="left">
                                        <h2><a href="#" target="blank">Chăm sóc da mặt</a></h2>
                                    </div>
                                    <div class="clearboth"></div>
                                </div>
                            </div></div>
                    </div>
                    <div class="row row-collapse" id="row-1281978336">
                        <div class="col cot1 medium-2 small-12 large-2"><div class="col-inner">
                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_34280763">
                                    <div class="img-inner dark">
                                        <img width="220" height="350" src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/banner-b_n-h_ng_220x350.jpg" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/banner-b_n-h_ng_220x350.jpg" class="attachment-original size-original lazy-load-active" alt="" srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/banner-b_n-h_ng_220x350.jpg 220w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/banner-b_n-h_ng_220x350-189x300.jpg 189w" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/banner-b_n-h_ng_220x350.jpg 220w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/banner-b_n-h_ng_220x350-189x300.jpg 189w" sizes="(max-width: 220px) 100vw, 220px">
                                    </div>

                                    <style scope="scope">

                                        #image_34280763 {
                                            width: 100%;
                                        }
                                    </style>
                                </div>

                                <div class="cloud-tag">
                                    <ul>
                                        <li><a href="#" target="blank">Sữa rửa mặt</a></li>
                                        <li><a href="#" target="blank">Nước hoa hồng</a></li>
                                        <li><a href="#" target="blank">Nước cân bằng</a></li>
                                        <li><a href="#" target="blank">Toner</a></li>
                                        <li><a href="#" target="blank">Essenser</a></li>
                                        <li><a href="#" target="blank">Tinh chất</a></li>
                                        <li><a href="#" target="blank">Emulsion</a></li>
                                    </ul>
                                </div>
                            </div></div>
                        <div class="col cot2 row-sp medium-9 small-12 large-9"><div class="col-inner">
                                <div class="row row-collapse" id="row-873151909">
                                    <div class="col medium-4 small-12 large-4"><div class="col-inner">
                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_391263548">
                                                <a class="" href="#" target="_blank" rel="noopener noreferrer">						<div class="img-inner image-zoom dark">
                                                        <img width="366" height="200" src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/vichy-web-366x200.jpg" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/vichy-web-366x200.jpg" class="attachment-original size-original lazy-load-active" alt="" srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/vichy-web-366x200.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/vichy-web-366x200-300x164.jpg 300w" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/vichy-web-366x200.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/vichy-web-366x200-300x164.jpg 300w" sizes="(max-width: 366px) 100vw, 366px">
                                                    </div>
                                                </a>
                                                <style scope="scope">

                                                    #image_391263548 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>

                                        </div></div>
                                    <div class="col medium-4 small-12 large-4"><div class="col-inner">
                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_512303338">
                                                <a class="" href="#" target="_self">						<div class="img-inner image-zoom dark">
                                                        <img width="366" height="200" src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/larocheposay-desktop-2018-09-24_2.jpg" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/larocheposay-desktop-2018-09-24_2.jpg" class="attachment-original size-original lazy-load-active" alt="" srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/larocheposay-desktop-2018-09-24_2.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/larocheposay-desktop-2018-09-24_2-300x164.jpg 300w" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/larocheposay-desktop-2018-09-24_2.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/larocheposay-desktop-2018-09-24_2-300x164.jpg 300w" sizes="(max-width: 366px) 100vw, 366px">
                                                    </div>
                                                </a>
                                                <style scope="scope">

                                                    #image_512303338 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>

                                        </div></div>
                                    <div class="col medium-4 small-12 large-4"><div class="col-inner">
                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_977586321">
                                                <a class="" href="#" target="_self">						<div class="img-inner image-zoom dark">
                                                        <img width="366" height="200" src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/laneige_366x200_1.jpg" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/laneige_366x200_1.jpg" class="attachment-original size-original lazy-load-active" alt="" srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/laneige_366x200_1.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/laneige_366x200_1-300x164.jpg 300w" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/laneige_366x200_1.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/laneige_366x200_1-300x164.jpg 300w" sizes="(max-width: 366px) 100vw, 366px">
                                                    </div>
                                                </a>
                                                <style scope="scope">

                                                    #image_977586321 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>

                                        </div></div>

                                    <style scope="scope">

                                    </style>
                                </div>
                                <div class="container section-title-container"><h3 class="section-title section-title-normal"><b></b><span class="section-title-main">Nổi bật và bán chạy</span><b></b><a href="{{URL::to('danh-muc-san-pham/'.$list_damat[0]->category_id)}}" target="">+ Xem thêm<i class="icon-angle-right"></i></a></h3></div><!-- .section-title -->


                                <div class="row large-columns-5 medium-columns-3 small-columns-2 row-collapse slider row-slider slider-nav-simple slider-nav-push flickity-enabled is-draggable slider-lazy-load-active" data-flickity-options="{&quot;imagesLoaded&quot;: true, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 5, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: true,&quot;pageDots&quot;: false, &quot;rightToLeft&quot;: false, &quot;autoPlay&quot; : false}" tabindex="0">

                                    @foreach($list_damat as $key=>$pro)
                                        <div class="col">
                                            <div class="col-inner">
                                                <div class="badge-container absolute left top z-1">
                                                    <div class="callout badge badge-square">
                                                        <div class="badge-inner secondary on-sale">
                                                            <span class="onsale">-19%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-small box has-hover box-normal box-text-bottom">
                                                    <div class="box-image">
                                                        <div class="image-overlay-add image-zoom image-cover" style="padding-top:100%;">
                                                            <a href="{{URL::to('/san-pham/'.$pro->product_id)}}">
                                                                <img width="358" height="358" src="{{URL::to('public/uploads/product/'.$pro->product_image)}}"  class="lazy-load attachment-original size-original" sizes="(max-width: 358px) 100vw, 358px">									</a>
                                                            <div class="overlay fill" style="background-color: rgba(255, 255, 255, 0.27)"></div>
                                                        </div>
                                                        <div class="image-tools top right show-on-hover">
                                                        </div>
                                                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                        </div>
                                                    </div>
                                                    <!-- box-image -->
                                                    <div class="box-text text-left">
                                                        <div class="title-wrapper">
                                                            @foreach($category as $key=>$cate)
                                                                @if($cate->category_id==$pro->category_id)
                                                                    <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                                        {{$cate->category_name}}
                                                                    </p>
                                                                @endif
                                                            @endforeach
                                                            <p class="name product-title">
                                                                <a class="text" href="{{URL::to('/san-pham/'.$pro->product_id)}}">{{$pro->product_name}}</a>
                                                            </p>
                                                        </div>
                                                        <div class="price-wrapper">
                                                            <div class="pwb-brands-in-loop">
                                                    <span>
                                                        <a href="{{URL::to('/thuong-hieu/'.$pro->brand_id)}}" >
                                                            @foreach($brand as $key=>$bras)
                                                                @if($bras->brand_id==$pro->brand_id)
                                                                    <img width="120" height="60" src="{{URL::to('public/uploads/brand/'.$bras->brand_image)}}" class="lazy-load attachment-thumbnail size-thumbnail" alt="">
                                                                @endif
                                                            @endforeach
                                                        </a>
                                                   </span>
                                                            </div>
                                                            <span class="price">

                                                        <ins>
                                                        <span class="woocommerce-Price-amount amount">{{number_format($pro->product_price)}}
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
                                        <!-- col -->
                                    @endforeach

                                </div>
                            </div></div>

                        <style scope="scope">

                        </style>
                    </div>
                </div><!-- .section-content -->


                <style scope="scope">

                    #section_575941787 {
                        padding-top: 10px;
                        padding-bottom: 10px;
                        background-color: rgb(245, 251, 246);
                    }
                </style>
            </section>


            <!--- Clinic & Spa -->

            <section class="section category-row spa" id="section_676010474">
                <div class="bg section-bg fill bg-fill  bg-loaded">





                </div><!-- .section-bg -->

                <div class="section-content relative">

                    <div class="row" id="row-1970465483">
                        <div class="col small-12 large-12"><div class="col-inner">
                                <div class="tieu-de-row">
                                    <div class="left">
                                        <h2><a href="#" target="blank">Clinic &amp; Spa</a></h2>
                                    </div>
                                    <div class="clearboth"></div>
                                </div>
                            </div></div>
                    </div>
                    <div class="row row-collapse" id="row-1117372180">
                        <div class="col cot1 medium-2 small-12 large-2"><div class="col-inner">
                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1381528674">
                                    <div class="img-inner dark">
                                        <img width="220" height="350" src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/giam-beo4.jpg" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/giam-beo4.jpg" class="attachment-original size-original lazy-load-active" alt="" srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/giam-beo4.jpg 220w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/giam-beo4-189x300.jpg 189w" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/giam-beo4.jpg 220w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/giam-beo4-189x300.jpg 189w" sizes="(max-width: 220px) 100vw, 220px">
                                    </div>

                                    <style scope="scope">

                                        #image_1381528674 {
                                            width: 100%;
                                        }
                                    </style>
                                </div>

                                <div class="cloud-tag">
                                    <ul>
                                        <li><a href="#" target="blank">Triệt lông</a></li>
                                        <li><a href="#" target="blank">Tẩy tế bào da</a></li>
                                        <li><a href="#" target="blank">Điều trị mụn</a></li>
                                        <li><a href="#" target="blank">Nâng cơ</a></li>
                                        <li><a href="#" target="blank">Chăm sóc tóc</a></li>
                                        <li><a href="#" target="blank">Giảm béo</a></li>
                                        <li><a href="#" target="blank">Chăm sóc da mặt</a></li>
                                        <li><a href="#" target="blank">Trị tàn nhang</a></li>
                                    </ul>
                                </div>
                            </div></div>
                        <div class="col cot2 row-sp medium-9 small-12 large-9"><div class="col-inner">
                                <div class="row row-collapse" id="row-1024475138">
                                    <div class="col medium-4 small-12 large-4"><div class="col-inner">
                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1116117423">
                                                <a class="" href="#" target="_blank" rel="noopener noreferrer">						<div class="img-inner image-zoom dark">
                                                        <img width="366" height="200" src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/vichy-web-366x200.jpg" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/vichy-web-366x200.jpg" class="attachment-original size-original lazy-load-active" alt="" srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/vichy-web-366x200.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/vichy-web-366x200-300x164.jpg 300w" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/vichy-web-366x200.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/vichy-web-366x200-300x164.jpg 300w" sizes="(max-width: 366px) 100vw, 366px">
                                                    </div>
                                                </a>
                                                <style scope="scope">

                                                    #image_1116117423 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>

                                        </div></div>
                                    <div class="col medium-4 small-12 large-4"><div class="col-inner">
                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_598401935">
                                                <a class="" href="#" target="_self">						<div class="img-inner image-zoom dark">
                                                        <img width="366" height="200" src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/larocheposay-desktop-2018-09-24_2.jpg" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/larocheposay-desktop-2018-09-24_2.jpg" class="attachment-original size-original lazy-load-active" alt="" srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/larocheposay-desktop-2018-09-24_2.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/larocheposay-desktop-2018-09-24_2-300x164.jpg 300w" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/larocheposay-desktop-2018-09-24_2.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/larocheposay-desktop-2018-09-24_2-300x164.jpg 300w" sizes="(max-width: 366px) 100vw, 366px">
                                                    </div>
                                                </a>
                                                <style scope="scope">

                                                    #image_598401935 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>

                                        </div></div>
                                    <div class="col medium-4 small-12 large-4"><div class="col-inner">
                                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1277265133">
                                                <a class="" href="#" target="_self">						<div class="img-inner image-zoom dark">
                                                        <img width="366" height="200" src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/laneige_366x200_1.jpg" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/laneige_366x200_1.jpg" class="attachment-original size-original lazy-load-active" alt="" srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/laneige_366x200_1.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/laneige_366x200_1-300x164.jpg 300w" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/laneige_366x200_1.jpg 366w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/laneige_366x200_1-300x164.jpg 300w" sizes="(max-width: 366px) 100vw, 366px">
                                                    </div>
                                                </a>
                                                <style scope="scope">

                                                    #image_1277265133 {
                                                        width: 100%;
                                                    }
                                                </style>
                                            </div>

                                        </div></div>

                                    <style scope="scope">

                                    </style>
                                </div>
                                <div class="container section-title-container"><h3 class="section-title section-title-normal"><b></b><span class="section-title-main">Nổi bật và bán chạy</span><b></b><a href="{{URL::to('danh-muc-san-pham/'.$list_clinicspa[0]->category_id)}}" target="">+ Xem thêm<i class="icon-angle-right"></i></a></h3></div><!-- .section-title -->


                                <div class="row large-columns-5 medium-columns-3 small-columns-2 row-collapse slider row-slider slider-nav-simple slider-nav-push flickity-enabled is-draggable slider-lazy-load-active" data-flickity-options="{&quot;imagesLoaded&quot;: true, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 5, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: true,&quot;pageDots&quot;: false, &quot;rightToLeft&quot;: false, &quot;autoPlay&quot; : false}" tabindex="0">

                                    @foreach($list_clinicspa as $key=>$pro)
                                        <div class="col">
                                            <div class="col-inner">
                                                <div class="badge-container absolute left top z-1">
                                                    <div class="callout badge badge-square">
                                                        <div class="badge-inner secondary on-sale">
                                                            <span class="onsale">-19%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-small box has-hover box-normal box-text-bottom">
                                                    <div class="box-image">
                                                        <div class="image-overlay-add image-zoom image-cover" style="padding-top:100%;">
                                                            <a href="{{URL::to('/san-pham/'.$pro->product_id)}}">
                                                                <img width="358" height="358" src="{{URL::to('public/uploads/product/'.$pro->product_image)}}"  class="lazy-load attachment-original size-original" sizes="(max-width: 358px) 100vw, 358px">									</a>
                                                            <div class="overlay fill" style="background-color: rgba(255, 255, 255, 0.27)"></div>
                                                        </div>
                                                        <div class="image-tools top right show-on-hover">
                                                        </div>
                                                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                        </div>
                                                    </div>
                                                    <!-- box-image -->
                                                    <div class="box-text text-left">
                                                        <div class="title-wrapper">
                                                            @foreach($category as $key=>$cate)
                                                                @if($cate->category_id==$pro->category_id)
                                                                    <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                                        {{$cate->category_name}}
                                                                    </p>
                                                                @endif
                                                            @endforeach
                                                            <p class="name product-title">
                                                                <a class="text" href="{{URL::to('/san-pham/'.$pro->product_id)}}">{{$pro->product_name}}</a>
                                                            </p>
                                                        </div>
                                                        <div class="price-wrapper">
                                                            <div class="pwb-brands-in-loop">
                                                    <span>
                                                        <a href="{{URL::to('/thuong-hieu/'.$pro->brand_id)}}" >
                                                            @foreach($brand as $key=>$bras)
                                                                @if($bras->brand_id==$pro->brand_id)
                                                                    <img width="120" height="60" src="{{URL::to('public/uploads/brand/'.$bras->brand_image)}}" class="lazy-load attachment-thumbnail size-thumbnail" alt="">
                                                                @endif
                                                            @endforeach
                                                        </a>
                                                   </span>
                                                            </div>
                                                            <span class="price">
                                                        <del>

                                                        </del>
                                                        <ins>
                                                        <span class="woocommerce-Price-amount amount">{{number_format($pro->product_price)}}
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
                                        <!-- col -->
                                    @endforeach
                                </div>
                                <button class="flickity-button flickity-prev-next-button previous" type="button" aria-label="Previous"><svg class="flickity-button-icon" viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path></svg></button><button class="flickity-button flickity-prev-next-button next" type="button" aria-label="Next"><svg class="flickity-button-icon" viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path></svg></button>
                                </div>
                            </div>
                        </div>

                        <style scope="scope">

                        </style>
                    </div>
                </div><!-- .section-content -->


                <style scope="scope">

                    #section_676010474 {
                        padding-top: 10px;
                        padding-bottom: 10px;
                        background-color: rgb(245, 251, 246);
                    }
                </style>
            </section>
        </div>
    </main>
@endsection
