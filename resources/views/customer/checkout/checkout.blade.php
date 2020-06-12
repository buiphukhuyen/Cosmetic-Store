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
                            <div class="woocommerce-notices-wrapper"></div>
                            <div class="woocommerce-form-coupon-toggle">
                                <div class="woocommerce-info message-wrapper">
                                    <div class="message-container container medium-text-center">
                                        Bạn có mã ưu đãi? <a href="#" class="showcoupon">Ấn vào đây để nhập mã</a>
                                    </div>
                                </div>
                            </div>
                            <form class="checkout_coupon woocommerce-form-coupon has-border is-dashed" method="post" style="display:none">
                                <p>Nếu bạn có mã giảm giá, vui lòng điền vào phía bên dưới.</p>
                                <div class="coupon">
                                    <div class="flex-row medium-flex-wrap">
                                        <div class="flex-col flex-grow">
                                            <input type="text" name="coupon_code" class="input-text" placeholder="Mã ưu đãi" id="coupon_code" value="" />
                                        </div>
                                        <div class="flex-col">
                                            <button type="submit" class="button expand" name="apply_coupon" value="Áp dụng">Áp dụng</button>
                                        </div>
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- coupon -->
                            </form>
                            <div class="woocommerce-notices-wrapper"></div>
                            <form name="checkout" method="post" class="checkout woocommerce-checkout " action="{{URL::to('/save-checkout-customer')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row pt-0 ">
                                    <div class="large-7 col  ">
                                        <div id="customer_details">
                                            <div class="clear">
                                                <div class="woocommerce-billing-fields">
                                                    <h3>Thông tin thanh toán</h3>
                                                    <div class="woocommerce-billing-fields__field-wrapper">
                                                        <p class="form-row form-row-wide validate-required" id="billing_last_name_field" data-priority="20">
                                                            <label for="billing_last_name" class="">
                                                                Họ và tên&nbsp;<abbr class="required" title="bắt buộc">*</abbr>
                                                            </label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="text" class="input-text " name="shipping_name" placeholder="Họ và tên"  value=""/></span></p>
                                                        <p class="form-row address-field form-row-wide validate-required" id="billing_address_1_field" data-priority="50">
                                                            <label for="billing_address_1" class="">Địa chỉ&nbsp;<abbr class="required" title="bắt buộc">*</abbr>
                                                            </label><span class="woocommerce-input-wrapper">
                                                                <input type="text" class="input-text " name="shipping_address" placeholder="Địa chỉ"  value="" autocomplete="address-line1" /></span></p>
                                                        <p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100">
                                                            <label for="billing_phone" class="">Số điện thoại&nbsp;<abbr class="required" title="bắt buộc">*</abbr>
                                                            </label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="tel" class="input-text " name="shipping_phone" placeholder="Số điện thoại"  value="" autocomplete="tel" /></span></p>
                                                        <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="110">
                                                            <label for="billing_email" class="">Địa chỉ email&nbsp;<abbr class="required" title="bắt buộc">*</abbr>
                                                            </label><span class="woocommerce-input-wrapper">
                                                                <input type="email" class="input-text " name="shipping_email" placeholder="Địa chỉ Email"  value="" autocomplete="email username" /></span></p>
                                                    </div>
                                                </div>
                                                <div class="woocommerce-account-fields">
                                                    <p class="form-row form-row-wide create-account">
                                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount"  type="checkbox" name="createaccount" value="1" /> <span>Tạo tài khoản mới?</span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="clear">
                                                <div class="woocommerce-shipping-fields">
                                                </div>
                                                <div class="woocommerce-additional-fields">
                                                    <h3>Thông tin bổ sung</h3>
                                                    <div class="woocommerce-additional-fields__field-wrapper">
                                                        <p class="form-row notes" id="order_comments_field" data-priority=""><label for="order_comments" class="">Ghi chú đơn hàng&nbsp;<span class="optional">(tuỳ chọn)</span></label><span class="woocommerce-input-wrapper">
                                                                <textarea name="shipping_notes" class="input-text " id="order_comments" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn."  rows="2" cols="5"></textarea></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- large-7 -->
                                    <div class="large-5 col">
                                        <div class="col-inner has-border">
                                            <div class="checkout-sidebar sm-touch-scroll">
                                                <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                                                <div id="order_review" class="woocommerce-checkout-review-order">
                                                    <table class="shop_table woocommerce-checkout-review-order-table">

                                                        <thead>
                                                        <tr>
                                                            <th class="product-name">Sản phẩm</th>
                                                            <th class="product-total">Tổng</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($content as $v_content)
                                                        <tr class="cart_item">
                                                            <td class="product-name">{{$v_content->name}}<strong class="product-quantity"> &times; {{$v_content->qty}}</strong>
                                                            </td>
                                                            <td class="product-total">
                                                                <span class="woocommerce-Price-amount amount">{{number_format($v_content->price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>

                                                        <tfoot>
                                                        <tr class="cart-subtotal">
                                                            <th>Tạm tính</th>
                                                            <td><span class="woocommerce-Price-amount amount">{{Cart::tax()}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Tổng</th>
                                                            <td><strong><span class="woocommerce-Price-amount amount">{{Cart::total()}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></strong> </td>
                                                        </tr>

                                                        </tfoot>
                                                    </table>
                                                    <div id="payment" class="woocommerce-checkout-payment">
                                                        <ul class="wc_payment_methods payment_methods methods">
                                                            <li class="wc_payment_method payment_method_bacs">
                                                                <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs"  checked='checked' data-order_button_text="" />
                                                                <label for="payment_method_bacs">
                                                                    Chuyển khoản ngân hàng 	</label>
                                                                <div class="payment_box payment_method_bacs" >
                                                                    <p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng Mã đơn hàng của bạn trong phần Nội dung thanh toán. Đơn hàng sẽ đươc giao sau khi tiền đã chuyển.</p>
                                                                </div>
                                                            </li>
                                                            <li class="wc_payment_method payment_method_cod">
                                                                <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod"  data-order_button_text="" />
                                                                <label for="payment_method_cod">
                                                                    Trả tiền mặt khi nhận hàng 	</label>
                                                                <div class="payment_box payment_method_cod" style="display:none;">
                                                                    <p>Trả tiền mặt khi giao hàng</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="form-row place-order">
                                                            <noscript>
                                                                Trình duyệt của bạn không hỗ trợ JavaScript, hoặc nó bị vô hiệu hóa, hãy đảm bảo bạn nhấp vào <em>Cập nhật giỏ hàng</em> trước khi bạn thanh toán. Bạn có thể phải trả nhiều hơn số tiền đã nói ở trên, nếu bạn không làm như vậy.			<br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Cập nhật tổng">Cập nhật tổng</button>
                                                            </noscript>
                                                            <div class="woocommerce-terms-and-conditions-wrapper">
                                                            </div>
                                                            <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Đặt hàng" data-value="Đặt hàng">Đặt hàng</button>
                                                            <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="3b518b76c3" /><input type="hidden" name="_wp_http_referer" value="/thanh-toan/" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="woocommerce-privacy-policy-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- large-5 -->
                                </div>
                                <!-- row -->
                            </form>
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
