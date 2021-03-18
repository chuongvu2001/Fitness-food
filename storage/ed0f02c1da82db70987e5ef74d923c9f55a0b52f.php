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
                                <li class="account"><?php if(empty($_SESSION[AUTH])): ?><a href="#"><i class="icon-user"></i>  Setting <i class="icon-right ion-ios-arrow-down"></i></a><?php endif; ?> <?php if(isset($_SESSION[AUTH])): ?><a href="#" class="d-flex align-items-center"><img  src="<?php if(isset($_SESSION[AUTH]['avatar'])): ?><?php echo e($_SESSION[AUTH]['avatar']); ?> <?php endif; ?>" alt="" width="20" height="20"> <?php if(isset($_SESSION[AUTH])): ?> <?php echo e($_SESSION[AUTH]['name']); ?><?php endif; ?> </a><?php endif; ?>
                                    <ul class="dropdown_currency">
                                        <?php if(empty($_SESSION[AUTH])): ?>
                                            <li><a href="<?php echo e(BASE_URL.'login-member'); ?>">Login</a></li>
                                            <li><a href="<?php echo e(BASE_URL.'login-member'); ?>">SignUp</a></li>
                                        <?php endif; ?>
                                        <?php if(isset($_SESSION[AUTH])): ?>
                                            <li><a href="logout-member">LogOut</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>



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
                            <a href="index.html"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <!--main menu start-->
                        <div class="main_menu">
                            <nav>
                                <ul>
                                    <?php $__currentLoopData = $cate_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <?php if($item->id_grade == 0): ?>
                                        <a  href="index.html"><?php echo e($item->cate_name); ?>

                                            <?php if(isset($cate)): ?>
                                            <i class="fa fa-angle-down"></i>
                                            <?php endif; ?>
                                        </a>
                                        <?php endif; ?>
                                        <ul class="sub_menu">
                                            <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <a href="index.html"><?php echo e($c->cate_name); ?></a>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





































































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
                                                <a href="#"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/s-product/product.jpg" alt=""></a>
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
                                                <a href="#"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/s-product/product2.jpg" alt=""></a>
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
<!--header area end--><?php /**PATH /Library/WebServer/Documents/ChunStore/app/views/layouts-frontend/sidebar.blade.php ENDPATH**/ ?>