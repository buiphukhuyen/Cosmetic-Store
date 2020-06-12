@extends('customer.layout')
@section('login_checkout')
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
    $content=Cart::content();
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
                                            <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>
                                        </div>
                                    </li>
                                </ul>
                                <!-- .nav-dropdown -->
                            </li>
                            <li class="account-item has-icon
                     ">
                                <a href="#" class="nav-top-link nav-top-not-logged-in " data-open="#login-form-popup">
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
                            <div class="woocommerce-notices-wrapper"></div>
                            <div class="account-container lightbox-inner">
                                <div class="col2-set row row-divided row-large" id="customer_login">
                                    <div class="col-1 large-6 col pb-0">
                                        <div class="account-login-inner">
                                            <h3 class="uppercase">Đăng nhập</h3>
                                            <form action="{{URL::to('/login-customer')}}" class="woocommerce-form woocommerce-form-login login" method="post">
                                                @csrf
                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="username">Địa chỉ email&nbsp;<span class="required">*</span></label>
                                                    <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="customer_email" id="username" autocomplete="username" value="">
                                                </p>
                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="password">Mật khẩu&nbsp;<span class="required">*</span></label>
                                                    <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="customer_password" id="password" autocomplete="current-password">
                                                </p>
                                                <p class="form-row">
                                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                                        <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Ghi nhớ mật khẩu</span>
                                                    </label>
                                                    <?php
                                                    use Illuminate\Support\Facades\Session;
                                                    $error_login = Session::get('error_login');
                                                    if($error_login) {
                                                        echo '<p class="text-danger text-center" style="color: red">'.$error_login.'</p>';
                                                        Session::put('error_login', null);
                                                    }
                                                    ?>
                                                    <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="2080123d63"><input type="hidden" name="_wp_http_referer" value="/tai-khoan/">						<button type="submit" class="woocommerce-Button button woocommerce-form-login__submit" name="login" value="Đăng nhập">Đăng nhập</button>
                                                </p>
                                                <p class="woocommerce-LostPassword lost_password">
                                                    <a href="lost-password\index.htm">Quên mật khẩu?</a>
                                                </p>
                                            </form>
                                        </div>
                                        <!-- .login-inner -->
                                    </div>
                                    <div class="col-2 large-6 col pb-0">
                                        <div class="account-register-inner">
                                            <h3 class="uppercase">Đăng ký</h3>
                                            <form action="{{URL::to('add-customer')}}" method="post" class="woocommerce-form woocommerce-form-register register">
                                                @csrf
                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="reg_name">Họ và tên&nbsp;<span class="required">*</span></label>
                                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="reg_name" id="reg_name" value="">
                                                </p>
                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="reg_email">Địa chỉ email&nbsp;<span class="required">*</span></label>
                                                    <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="reg_email" id="reg_email" value="">
                                                </p>
                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="password">Mật khẩu&nbsp;<span class="required">*</span></label>
                                                    <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="reg_password" id="reg_password">
                                                </p>
                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="reg_phone">Số điện thoại&nbsp;<span class="required">*</span></label>
                                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="reg_phone" id="reg_phone" value="">
                                                </p>
                                                <div class="woocommerce-privacy-policy-text"></div>
                                                <p class="woocommerce-FormRow form-row">
                                                    <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="dd300aa97e"><input type="hidden" name="_wp_http_referer">
                                                    <button type="submit" class="woocommerce-Button button" name="register" value="Đăng ký">Đăng ký</button>
                                                </p>
                                            </form>
                                        </div>
                                        <!-- .register-inner -->
                                    </div>
                                    <!-- .large-6 -->
                                </div>
                                <!-- .row -->
                            </div>
                            <!-- .account-login-container -->
                        </div>
                    </div>
                    <!-- .col-inner -->
                </div>
                <!-- .large-12 -->
            </div>
            <!-- .row -->
        </div>
    </main>
    <!-- #main -->
@endsection
