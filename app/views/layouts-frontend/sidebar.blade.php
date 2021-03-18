<header>
    <div class="main_header">
        <div class="header_top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="header_contact_info">
                            <ul>
                                <li><a href="tel:(+800)123456789"><i class="icon-call-in"></i> (+800)123456789</a></li>
                                <li><a href="mailto:http://1.envato.market/9LbxW"><i class="icon-envelope"></i> has@posthemes.com</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="language_currency text-right">
                            <ul>
                                <li class="currency"><a href="#"> USD $ <i class="icon-right ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">€ Euro</a></li>
                                        <li><a href="#">£ Pound Sterling</a></li>
                                        <li><a href="#">$ US Dollar</a></li>
                                    </ul>
                                </li>
                                <li class="account">@empty($_SESSION[AUTH])<a href="#"><i class="icon-user"></i>  Setting <i class="icon-right ion-ios-arrow-down"></i></a>@endempty @isset($_SESSION[AUTH])<a href="#" class="d-flex align-items-center"><img  src="@isset($_SESSION[AUTH]['avatar']){{$_SESSION[AUTH]['avatar']}} @endisset" alt="" width="20" height="20"> @isset($_SESSION[AUTH]) {{$_SESSION[AUTH]['name']}}@endisset </a>@endisset
                                    <ul class="dropdown_currency">
                                        @empty($_SESSION[AUTH])
                                            <li><a href="{{BASE_URL.'login-member'}}">Login</a></li>
                                            <li><a href="{{BASE_URL.'login-member'}}">SignUp</a></li>
                                        @endempty
                                        @isset($_SESSION[AUTH])
                                            <li><a href="logout-member">LogOut</a></li>
                                        @endisset
                                    </ul>
                                </li>
{{--                                <li class="language">--}}

{{--                                </li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_middle sticky-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 offset-md-5 offset-lg-0 col-5 offset-3 col-sm-5">
                        <div class="logo">
                            <a href="index.html"><img src="{{THEME_ASSET_URL}}assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <!--main menu start-->
                        <div class="main_menu">
                            <nav>
                                <ul>
                                    @foreach($cate_all as $key => $item)
                                    <li>
                                        @if($item->id_grade == 0)
                                        <a  href="index.html">{{$item->cate_name}}
                                            @isset($cate)
                                            <i class="fa fa-angle-down"></i>
                                            @endisset
                                        </a>
                                        @endif
                                        <ul class="sub_menu">
                                            @foreach($cate as $key => $c)
                                            <li>
                                                <a href="index.html">{{$c->cate_name}}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
{{--                                    <li class="mega_items"><a class="active" href="shop.html">shop<i class="fa fa-angle-down"></i></a>--}}
{{--                                        <div class="mega_menu">--}}
{{--                                            <ul class="mega_menu_inner">--}}
{{--                                                <li><a href="#">Shop Layouts</a>--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="shop-fullwidth.html">Full Width</a></li>--}}
{{--                                                        <li><a href="shop-fullwidth-list.html">Full Width list</a></li>--}}
{{--                                                        <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>--}}
{{--                                                        <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>--}}
{{--                                                        <li><a href="shop-list.html">List View</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </li>--}}
{{--                                                <li><a href="#">other Pages</a>--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="cart.html">cart</a></li>--}}
{{--                                                        <li><a href="wishlist.html">Wishlist</a></li>--}}
{{--                                                        <li><a href="checkout.html">Checkout</a></li>--}}
{{--                                                        <li><a href="my-account.html">my account</a></li>--}}
{{--                                                        <li><a href="404.html">Error 404</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </li>--}}
{{--                                                <li><a href="#">Product Types</a>--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="product-details.html">product details</a></li>--}}
{{--                                                        <li><a href="product-sidebar.html">product sidebar</a></li>--}}
{{--                                                        <li><a href="product-grouped.html">product grouped</a></li>--}}
{{--                                                        <li><a href="variable-product.html">product variable</a></li>--}}

{{--                                                    </ul>--}}
{{--                                                </li>--}}
{{--                                                <li><a href="#">Makeup</a>--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="shop.html">Eyes</a></li>--}}
{{--                                                        <li><a href="shop.html">Lips</a></li>--}}
{{--                                                        <li><a href="shop.html">Face</a></li>--}}
{{--                                                        <li><a href="shop.html">Makeup Tools</a></li>--}}

{{--                                                    </ul>--}}
{{--                                                </li>--}}
{{--                                                <li class="h_banner_menu2">--}}
{{--                                                    <div class="header_banner_menu">--}}
{{--                                                        <a href="#"><img src="{{THEME_ASSET_URL}}assets/img/bg/banner12.jpg" alt=""></a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="header_banner_menu">--}}
{{--                                                        <a href="#"><img src="{{THEME_ASSET_URL}}assets/img/bg/banner13.jpg" alt=""></a>--}}
{{--                                                    </div>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>--}}
{{--                                        <ul class="sub_menu pages">--}}
{{--                                            <li><a href="blog-details.html">blog details</a></li>--}}
{{--                                            <li><a href="blog-fullwidth.html">blog fullwidth</a></li>--}}
{{--                                            <li><a href="blog-sidebar.html">blog sidebar</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="contact.html"> Contact Us</a></li>--}}
{{--                                    <li><a href="about.html"> About us</a></li>--}}
{{--                                    <li><a href="#">pages <i class="fa fa-angle-down"></i></a>--}}
{{--                                        <ul class="sub_menu pages">--}}
{{--                                            <li><a href="about.html">About Us</a></li>--}}
{{--                                            <li><a href="services.html">services</a></li>--}}
{{--                                            <li><a href="faq.html">Frequently Questions</a></li>--}}
{{--                                            <li><a href="contact.html">contact</a></li>--}}
{{--                                            <li><a href="login.html">login</a></li>--}}
{{--                                            <li><a href="404.html">Error 404</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
                                </ul>
                            </nav>
                        </div>
                        <!--main menu end-->
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                        <div class="header_account_area">
                            <div class="header_account_list search_list">
                                <a href="javascript:void(0)"><i class="icon-magnifier icons"></i></a>
                                <div class="dropdown_search">
                                    <form action="#">
                                        <input placeholder="Search entire store here ..." type="text">
                                        <button type="submit"><i class="icon-magnifier icons"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="header_account_list">
                                <a href="wishlist.html"><i class="icon-heart"></i>
                                    <span class="item_count">3</span>
                                </a>
                            </div>
                            <div class="header_account_list  mini_cart_wrapper">
                                <a href="javascript:void(0)"><i class="icon-bag"></i>
                                    <span class="item_count">2</span>
                                </a>
                                <!--mini cart-->
                                <div class="mini_cart">
                                    <div class="cart_gallery">
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="{{THEME_ASSET_URL}}assets/img/s-product/product.jpg" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Juicy Couture Tricot</a>
                                                <p>1 x <span> $30.00 </span></p>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-ios-close-outline"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="{{THEME_ASSET_URL}}assets/img/s-product/product2.jpg" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Juicy Couture Juicy</a>
                                                <p>1 x <span> $29.00 </span></p>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-ios-close-outline"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini_cart_table">
                                        <div class="cart_table_border">
                                            <div class="cart_total">
                                                <span>Sub total:</span>
                                                <span class="price">$125.00</span>
                                            </div>
                                            <div class="cart_total mt-10">
                                                <span>total:</span>
                                                <span class="price">$125.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini_cart_footer">
                                        <div class="cart_button">
                                            <a href="cart.html"><i class="fa fa-shopping-cart"></i> View cart</a>
                                        </div>
                                        <div class="cart_button">
                                            <a href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
                                        </div>

                                    </div>
                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header area end-->