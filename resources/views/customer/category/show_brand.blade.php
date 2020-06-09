@extends('customer.layout')
@section('show_brand')
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
                                <a href="..\..\gio-hang\index.htm" title="Giỏ hàng" class="header-cart-link is-small">
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
                                <a href="..\..\tai-khoan\index.htm" class="nav-top-link nav-top-not-logged-in " data-open="#login-form-popup">
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
    <div class="shop-page-title category-page-title page-title ">
        <div class="page-title-inner flex-row  medium-flex-wrap container">
            <div class="flex-col flex-grow medium-text-center">
                @foreach($brand_name as $key=>$name)
                <h1 class="shop-page-title is-xlarge">
                    {{$name->brand_name}}
                </h1>

                <div class="is-small">
                    <nav class="woocommerce-breadcrumb breadcrumbs"><a href="../">Trang chủ</a> <span class="divider">&#47;</span> {{$name->brand_name}}</nav>
                </div>
                @endforeach
                <div class="category-filtering category-filter-row show-for-medium">
                    <a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left" class="filter-button uppercase plain">
                        <i class="icon-menu"></i>
                        <strong>Lọc</strong>
                    </a>
                    <div class="inline-block">
                    </div>
                </div>
            </div>
            <!-- .flex-left -->
            <div class="flex-col medium-text-center">
                <p class="woocommerce-result-count hide-for-medium">
                    Hiển thị một kết quả duy nhất
                </p>
                <form class="woocommerce-ordering" method="get">
                    <select name="orderby" class="orderby" aria-label="Đơn hàng của cửa hàng">
                        <option value="menu_order" selected='selected'>Thứ tự mặc định</option>
                        <option value="popularity">Thứ tự theo mức độ phổ biến</option>
                        <option value="rating">Thứ tự theo điểm đánh giá</option>
                        <option value="date">Mới nhất</option>
                        <option value="price">Thứ tự theo giá: thấp đến cao</option>
                        <option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
                    </select>
                    <input type="hidden" name="paged" value="1">
                </form>
            </div>
            <!-- .flex-right -->
        </div>
        <!-- flex-row -->
    </div>
    <!-- .page-title -->
    <main id="main" class="">
        <div class="row category-page-row">
            <div class="col large-3 hide-for-medium ">
                <div id="shop-sidebar" class="sidebar-inner col-inner">
                    <aside id="woof_widget-2" class="widget WOOF_Widget">
                        <div class="widget widget-woof">
                            <div class="woof woof_sid woof_sid_widget" data-sid="widget" data-shortcode="woof sid='widget' start_filtering_btn='0' price_filter='2' redirect='' ajax_redraw='1' " data-redirect="" data-autosubmit="1" data-ajax-redraw="1">
                                <a href="#" class="woof_edit_view" data-sid="widget">show blocks helper</a>
                                <div></div>
                                <!--- here is possible drop html code which is never redraws by AJAX ---->
                                <div class="woof_redraw_zone" data-woof-ver="2.1.7">
                                    <div data-css-class="woof_price2_search_container" class="woof_price2_search_container woof_container">
                                        <div class="woof_container_overlay_item"></div>
                                        <div class="woof_container_inner">
                                            <h4>Tìm khoảng giá</h4>
                                            <div class="woof_price_filter_dropdown_container">
                                                <select class="woof_price_filter_dropdown">
                                                    <option value="-1">filter by price</option>
                                                    <option value=" 100000-500000"><span class="woocommerce-Price-amount amount">100.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span> - <span class="woocommerce-Price-amount amount">500.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span> (1)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-css-class="woof_container_pwb-brand" class="woof_container woof_container_checkbox woof_container_pwb-brand woof_container_2 woof_container_thnghiu">
                                        <div class="woof_container_overlay_item"></div>
                                        <div class="woof_container_inner woof_container_inner_thnghiu">
                                            <h4>Thương hiệu	    <a href="javascript: void(0);" title="toggle" class="woof_front_toggle woof_front_toggle_opened" data-condition="opened">+</a>
                                            </h4>
                                            <div class="woof_block_html_items woof_section_scrolled" style="max-height:300px; overflow-y: auto;">
                                                <ul class="woof_list woof_list_checkbox">
                                                    <li class="woof_term_33 "><input type="checkbox" id="woof_33_5e8ab1ae4aeaa" class="woof_checkbox_term woof_checkbox_term_33" data-tax="pwb-brand" name="3w-clinic" data-term-id="33" value="33"><label class="woof_checkbox_label " for="woof_33_5e8ab1ae4aeaa">3W clinic<span class="woof_checkbox_count">(1)</span></label>
                                                        <input type="hidden" value="3W clinic" data-anchor="woof_n_pwb-brand_3w-clinic">
                                                    </li>
                                                </ul>
                                            </div>
                                            <input type="hidden" name="woof_t_pwb-brand" value="Brands"><!-- for red button search nav panel -->
                                        </div>
                                    </div>
                                    <div data-css-class="woof_container_pa_xuat-xu" class="woof_container woof_container_checkbox woof_container_pa_xuat-xu woof_container_3 woof_container_">
                                        <div class="woof_container_overlay_item"></div>
                                        <div class="woof_container_inner woof_container_inner_">
                                            <h4>	    <a href="javascript: void(0);" title="toggle" class="woof_front_toggle woof_front_toggle_opened" data-condition="opened">+</a>
                                            </h4>
                                            <div class="woof_block_html_items">
                                                <ul class="woof_list woof_list_checkbox">
                                                </ul>
                                            </div>
                                            <input type="hidden" name="woof_t_pa_xuat-xu" value=""><!-- for red button search nav panel -->
                                        </div>
                                    </div>
                                    <div class="woof_submit_search_form_container">
                                        <button style="float: left;" class="button woof_submit_search_form">Lọc tìm sản phẩm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- .sidebar-inner -->
            </div>
            <!-- #shop-sidebar -->
            <div class="col large-9">
                <div class="shop-container">
                    <div class="woocommerce-notices-wrapper"></div>
                    <div class="woof_products_top_panel"></div>
                    <div class="products row row-small large-columns-6 medium-columns-3 small-columns-2 has-equal-box-heights equalize-box">
                        @foreach($brand_by_id as $key=>$pro)
                            <div class="product-small col has-hover product type-product post-283 status-publish first instock product_cat-clinic-spa product_cat-giam-beo product_cat-triet-long product_tag-melano-cc has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                                <div class="col-inner">
                                    <div class="badge-container absolute left top z-1">
                                        <div class="callout badge badge-square">
                                            <div class="badge-inner secondary on-sale"><span class="onsale">-20%</span></div>
                                        </div>
                                    </div>
                                    <div class="product-small box ">
                                        <div class="box-image">
                                            <div class="image-zoom">
                                                <a href="#">
                                                    <img width="212" height="238" src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">				</a>
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
                                                @foreach($category as $key=>$cate)
                                                    @if($cate->category_id==$pro->category_id)
                                                        <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                            {{$cate->category_name}}
                                                        </p>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <p class="name product-title">
                                                <a class="text" href="#">{{$pro->product_description}}</a>
                                            </p>
                                            <div class="price-wrapper">
                                                <div class="pwb-brands-in-loop">
                                                    <span>
                                                        <a href="#">
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
                    <!-- row -->
                </div>
                <!-- shop container -->
            </div>
        </div>
    </main>
    <!-- #main -->
@endsection
