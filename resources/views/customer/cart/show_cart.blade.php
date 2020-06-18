@extends('customer.layout')
@section('show_cart')
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
                                <a href="..\..\gio-hang\index.htm" class="header-cart-link off-canvas-toggle nav-top-link is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">
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
                            <div class="woocommerce row row-large row-divided">
                                <div class="col large-7 pb-0 ">
                                    <form class="woocommerce-cart-form" action="{{URL::to('/update-cart-quantity')}}" method="post">
                                        @csrf
                                        <div class="cart-wrapper sm-touch-scroll">
                                            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                                <thead>
                                                <tr>
                                                    <th class="product-name" colspan="3">Sản phẩm</th>
                                                    <th class="product-price">Giá</th>
                                                    <th class="product-quantity">Số lượng</th>
                                                    <th class="product-subtotal">Tổng</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($content as $v_content)
                                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                                    <td class="product-remove">
                                                        <a href="{{URL::to('delete-to-cart/'.$v_content->rowId)}}" class="remove" aria-label="Xóa sản phẩm này" data-product_id="269" data-product_sku="">&times;</a>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a href="{{URL::to('/san-pham/'.$v_content->id)}}"><img width="300" height="300" src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 300px) 100vw, 300px" /></a>
                                                    </td>
                                                    <td class="product-name" data-title="Sản phẩm">
                                                        <a href="{{URL::to('/san-pham/'.$v_content->id)}}">{{$v_content->name}}</a>
                                                        <div class="show-for-small mobile-product-price">
                                                            <span class="mobile-product-price__qty">{{$v_content->qty}} x </span>
                                                            <span class="woocommerce-Price-amount amount">{{number_format($v_content->price)}}
                                                                <span class="woocommerce-Price-currencySymbol">&#8363;
                                                                </span></span>
                                                        </div>
                                                    </td>
                                                    <td class="product-price" data-title="Giá">
                                                        <span class="woocommerce-Price-amount amount">{{number_format($v_content->price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                    </td>
                                                    <td class="product-quantity" data-title="Số lượng">
                                                            <div class="quantity buttons_added">
                                                                <input type="button" value="-" class="minus button is-form">
                                                                <input
                                                                    type="number"
                                                                    class="input-text qty text"
                                                                    step="1"
                                                                    min="1"
                                                                    max="9999"
                                                                    name="cart_qty[]"
                                                                    value="{{$v_content->qty}}"
                                                                    title="SL"
                                                                    size="4"
                                                                    inputmode="numeric" />
                                                                <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart[]" />
                                                                <input type="button" value="+" class="plus button is-form">
                                                            </div>

                                                    </td>
                                                    <td class="product-subtotal" data-title="Tổng">
                                                        <span class="woocommerce-Price-amount amount">
                                                            <?php
                                                                $subtotal = $v_content->price * $v_content->qty;
                                                                echo number_format($subtotal);
                                                            ?><span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="6" class="actions clear">
                                                        <div class="continue-shopping pull-left text-left">
                                                            <a class="button-continue-shopping button primary is-outline"  href="https://shoplamdep.haiphongweb.com/mua/">
                                                                &#8592; Tiếp tục xem sản phẩm    </a>
                                                        </div>
                                                        <button type="submit" class="button primary mt-0 pull-left small" name="update_cart" value="Cập nhật giỏ hàng">Cập nhật giỏ hàng</button>

                                                        <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="19c702aaee" />

                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                                <div class="cart-collaterals large-5 col pb-0">
                                    <div class="cart-sidebar col-inner ">
                                        <div class="cart_totals ">
                                            <table cellspacing="0">
                                                <thead>
                                                <tr>
                                                    <th class="product-name" colspan="2" style="border-width:3px;">Cộng giỏ hàng</th>
                                                </tr>
                                                </thead>
                                            </table>
                                            <h2>Cộng giỏ hàng</h2>
                                            <table cellspacing="0" class="shop_table shop_table_responsive">
                                                <tr class="cart-subtotal">
                                                    <th>Tạm tính</th>
                                                    <td data-title="Tạm tính"><span class="woocommerce-Price-amount amount">{{Cart::initial()}}<span class="woocommerce-Price-currencySymbol"> &#8363;</span></span></td>
                                                </tr>

                                                @if(\Illuminate\Support\Facades\Session::get('coupon'))
                                                    @foreach(\Illuminate\Support\Facades\Session::get('coupon') as $key=>$coupon)
                                                        <tr class="cart-subtotal">
                                                            <th>Mã giảm giá ({{$coupon['coupon_code']}})</th>
                                                                <td data-title="Giảm"><span class="woocommerce-Price-amount amount"> {{$coupon['coupon_discount']}} <span class="woocommerce-Price-currencySymbol">%</span></span></td>
                                                        </tr>
                                                            <tr class="cart-subtotal">
                                                                <th>Số tiền giảm</th>
                                                                <td data-title="Giảm"><span class="woocommerce-Price-amount amount"> {{Cart::setGlobalDiscount($coupon['coupon_discount'])}} {{Cart::discount()}} <span class="woocommerce-Price-currencySymbol"> &#8363;</span></span></td>
                                                            </tr>

                                                    @endforeach
                                                @endif
                                                <tr class="order-total">
                                                    <th>Tổng tiền thanh toán</th>
                                                    <td data-title="Tổng"><strong><span class="woocommerce-Price-amount amount">{{Cart::total()}}<span class="woocommerce-Price-currencySymbol"> &#8363;</span></span></strong> </td>
                                                </tr>
                                            </table>
                                            <div class="wc-proceed-to-checkout">
                                                <a href="{{URL::to('/login-checkout')}}" class="checkout-button button alt wc-forward">
                                                    Tiến hành thanh toán</a>
                                            </div>
                                        </div>
                                        <form action="{{URL::to('check-coupon')}}" class="checkout_coupon mb-0" method="post">
                                            @csrf
                                            <div class="coupon">
                                                <h3 class="widget-title"><i class="icon-tag" ></i> Phiếu ưu đãi</h3>
                                                @if(\Illuminate\Support\Facades\Session::get('coupon'))
                                                    @foreach(\Illuminate\Support\Facades\Session::get('coupon') as $key=>$coupon)
                                                <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="{{$coupon['coupon_code']}}" placeholder="Mã ưu đãi" disabled/>
                                                <input  type="submit" class="is-form expand" name="apply_coupon" value="Xoá mã giảm giá" />
                                                    @endforeach
                                                @else
                                                    <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Mã ưu đãi" />
                                                    <input  type="submit" class="is-form expand" name="apply_coupon" value="Áp dụng" />
                                                @endif
                                            </div>
                                        </form>
                                        <?php
                                        use Illuminate\Support\Facades\Session;
                                        $success = Session::get('add_coupon_success');
                                        if($success) {
                                            echo '<div style="background-color: #326E50; color:white; text-align: center" role="alert">
                                                <strong style="color: white">Hợp lệ! </strong>'.$success.'
                                                 </div>';
                                            Session::put('add_coupon_success', null);
                                        }
                                        $error = Session::get('add_coupon_error');
                                        if($error) {
                                            echo '<div style="background-color: red; color:white; text-align: center" role="alert">
                                                <strong style="color: white">Thất bại! </strong>'.$error.'
                                                 </div>';
                                            Session::put('add_coupon_error', null);
                                        }
                                        ?>
                                        <div class="cart-sidebar-content relative"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-footer-content after-cart-content relative"></div>
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
