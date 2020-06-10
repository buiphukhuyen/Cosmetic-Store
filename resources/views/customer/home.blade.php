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
                                                        <form role="search" method="get" class="searchform" action="https://shoplamdep.haiphongweb.com/">
                                                            <div class="flex-row relative">
                                                                <div class="flex-col search-form-categories">
                                                                    <select class="search_categories resize-select mb-0" name="product_cat">
                                                                        <option value="" selected='selected'>All</option>
                                                                        <option value="cham-soc-da-mat">Chăm sóc da mặt</option>
                                                                        <option value="cham-soc-toc">Chăm sóc tóc</option>
                                                                        <option value="clinic-spa">Clinic &amp; Spa</option>
                                                                        <option value="giam-beo">Giảm béo</option>
                                                                        <option value="trang-diem">Trang điểm</option>
                                                                        <option value="triet-long">Triệt lông</option>
                                                                    </select>
                                                                </div>
                                                                <!-- .flex-col -->
                                                                <div class="flex-col flex-grow">
                                                                    <input type="search" class="search-field mb-0" name="s" value="" placeholder="Tìm kiếm sản phẩm, danh mục...">
                                                                    <input type="hidden" name="post_type" value="product">
                                                                </div>
                                                                <!-- .flex-col -->
                                                                <div class="flex-col">
                                                                    <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
                                                                        <i class="icon-search"></i>				</button>
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
                                    <a href="gio-hang\index.htm" title="Giỏ hàng" class="header-cart-link is-small">
                                       <span class="header-cart-title">
                                       Giỏ hàng     </span>
                                        <span class="image-icon header-cart-icon" data-icon-label="0">
                                       <img class="cart-img-icon" alt="Giỏ hàng" src="{{asset('public/customer/wp-content/uploads\2019\02\icon_01.png')}}">
                                       </span><!-- .cart-img-inner -->
                                    </a>
                                    <ul class="nav-dropdown nav-dropdown-default">
                                        <li class="html widget_shopping_cart">
                                            <div class="widget_shopping_cart_content">
                                                <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- .nav-dropdown -->
                                </li>
                                <li class="account-item has-icon
                                    ">
                                    <a href="tai-khoan\index.htm" class="nav-top-link nav-top-not-logged-in " data-open="#login-form-popup">
                                    <span>
                                    Đăng nhập     / Đăng ký  </span>
                                    </a><!-- .account-login-link -->
                                </li>
                            </ul>
                        </div>
                        <!-- Mobile Right Elements -->
                        <div class="flex-col show-for-medium flex-right">
                            <ul class="mobile-nav nav nav-right ">
                                <li class="cart-item has-icon">
                                    <a href="gio-hang\index.htm" class="header-cart-link off-canvas-toggle nav-top-link is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">
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
                                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1349624217">
                                                        <div class="img-inner image-cover dark" style="padding-top:402px;">
                                                            <img width="650" height="400" src="public\customer\wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/hasaki_homepage_650x400.jpg" class="lazy-load attachment-original size-original" alt="" srcset="" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/hasaki_homepage_650x400.jpg 650w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/hasaki_homepage_650x400-300x185.jpg 300w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/hasaki_homepage_650x400-600x369.jpg 600w" sizes="(max-width: 650px) 100vw, 650px">
                                                        </div>
                                                        <style scope="scope">
                                                            #image_1349624217 {
                                                                width: 100%;
                                                            }
                                                        </style>
                                                    </div>
                                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_732217164">
                                                        <div class="img-inner image-cover dark" style="padding-top:402px;">
                                                            <img width="650" height="400" src="public\customer\wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/app_2019-01-08_2.jpg" class="lazy-load attachment-original size-original" alt="" srcset="" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/app_2019-01-08_2.jpg 650w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/app_2019-01-08_2-300x185.jpg 300w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/app_2019-01-08_2-600x369.jpg 600w" sizes="(max-width: 650px) 100vw, 650px">
                                                        </div>
                                                        <style scope="scope">
                                                            #image_732217164 {
                                                                width: 100%;
                                                            }
                                                        </style>
                                                    </div>
                                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_60434173">
                                                        <div class="img-inner image-cover dark" style="padding-top:402px;">
                                                            <img width="650" height="400" src="public\customer\wp-content\themes\flatsome\assets\img\lazy.png" data-src="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/650x440_copy_1.jpg" class="lazy-load attachment-original size-original" alt="" srcset="" data-srcset="https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/650x440_copy_1.jpg 650w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/650x440_copy_1-300x185.jpg 300w, https://shoplamdep.haiphongweb.com/wp-content/uploads/2019/02/650x440_copy_1-600x369.jpg 600w" sizes="(max-width: 650px) 100vw, 650px">
                                                        </div>
                                                        <style scope="scope">
                                                            #image_60434173 {
                                                                width: 100%;
                                                            }
                                                        </style>
                                                    </div>
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
                                                    <a class="text" href="#">{{$pro->product_description}}</a>
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
                                                        <del>
                                                            <span class="woocommerce-Price-amount amount">148.000
                                                                <span class="woocommerce-Price-currencySymbol">&#8363;
                                                                </span>
                                                        </span>
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
                        @foreach($brand as $key=>$brand)
                            <div class="col medium-3 small-6 large-3">
                                <div class="col-inner">
                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2055271255">
                                        <a class="" href="{{URL::to('/thuong-hieu/'.$brand->brand_id)}}" target="_self">
                                            <div class="img-inner image-color dark">
                                                <img width="150" height="75" src="public/uploads/brand/{{$brand->brand_image}}" class="lazy-load attachment-original size-original" alt="">
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
        </div>
    </main>
@endsection
