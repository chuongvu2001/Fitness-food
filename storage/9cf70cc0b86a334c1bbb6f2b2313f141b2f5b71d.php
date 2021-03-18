<!doctype html>
<html class="no-js" lang="en">
<!-- Mirrored from demo.hasthemes.com/clima/clima/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jan 2021 04:52:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Clima - Multipurpose eCommerce HTML Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $__env->make('.layouts-frontend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
<!--header area start-->


<?php echo $__env->make('layouts-frontend.overlay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts-frontend.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--slider area start-->
<section class="slider_section">
    <div class="slider_area owl-carousel">
        <div class="single_slider d-flex align-items-center" data-bgimg="<?php echo e(THEME_ASSET_URL); ?>assets/img/slider/slider1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider_content">
                            <h2>new Styles</h2>
                            <h1>Natural Skincare</h1>
                            <p>
                                Lab Series Skincare for Women - Lookfantastic UK
                            </p>
                            <a href="../../../index.php">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider d-flex align-items-center" data-bgimg="<?php echo e(THEME_ASSET_URL); ?>assets/img/slider/slider2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider_content">
                            <h2>makeup Enhance</h2>
                            <h1>Natural Beauty</h1>
                            <p>
                                Cosmetics Siennas Eyeshadow Palette Tutorial
                            </p>
                            <a href="../../../index.php">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--slider area end-->

<!--shipping area start-->
<div class="shipping_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/about/shipping1.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h3>Free Shipping</h3>
                        <p>On all orders over $75.00</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/about/shipping2.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h3>Free Returns</h3>
                        <p>If goods have problems</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/about/shipping3.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h3>Secure Payment</h3>
                        <p>100% secure payment</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/about/shipping4.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h3>Gift Service</h3>
                        <p>Support gift service</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--shipping area end-->

<!--product area start-->
<div class="product_area  mb-95">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>Featured products </h2>
                    <p>	Browse the collection of our Featured products.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product_carousel product_column4 owl-carousel">
                <div class="col-lg-3">
                    <div class="product_items">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product1.jpg" alt=""></a>
                                    <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product2.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-20%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                            <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="../../../index.php">Juicy Couture Tricot Logo Stripe Jacket</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$35.00</span>
                                        <span class="current_price">$28.00</span>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product3.jpg" alt=""></a>
                                    <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product4.jpg" alt=""></a>

                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                            <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="../../../index.php">New Balance Fresh Foam Kaymin</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$45.00</span>
                                        <span class="current_price">$36.00</span>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product_items">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product5.jpg" alt=""></a>
                                    <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product6.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-20%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                            <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="../../../index.php">New Balance Arishi Sport v1</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$45.00</span>
                                        <span class="current_price">$28.00</span>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product7.jpg" alt=""></a>
                                    <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product8.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-20%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                            <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="../../../index.php">Calvin Klein Jeans Reflective Logo Full</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$56.00</span>
                                        <span class="current_price">$48.00</span>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product_items">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product9.jpg" alt=""></a>
                                    <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product10.jpg" alt=""></a>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                            <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="../../../index.php">Juicy Couture Juicy Quilted Terry Track</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$67.00</span>
                                        <span class="current_price">$57.00</span>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product11.jpg" alt=""></a>
                                    <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product12.jpg" alt=""></a>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                            <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="../../../index.php">Fila Locker Room Varsity Jacket</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$76.00</span>
                                        <span class="current_price">$65.00</span>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product_items">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product13.jpg" alt=""></a>
                                    <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product14.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-20%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                            <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="../../../index.php">New Balance Fresh Foam LAZR v1 Sport</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$47.00</span>
                                        <span class="current_price">$37.00</span>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product2.jpg" alt=""></a>
                                    <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product1.jpg" alt=""></a>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                            <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="../../../index.php">Brixton Patrol All Terrain Anorak Jacket</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$26.00</span>
                                        <span class="current_price">$22.00</span>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product_items">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product4.jpg" alt=""></a>
                                    <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product3.jpg" alt=""></a>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                            <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="../../../index.php">Trans-Weight Hooded Wind and Water</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$45.00</span>
                                        <span class="current_price">$35.00</span>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product6.jpg" alt=""></a>
                                    <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product5.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-20%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                            <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="../../../index.php">Water and Wind Resistant Insulated</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$54.00</span>
                                        <span class="current_price">$48.00</span>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--product area end-->

<!--categories banner area-->
<div class="categories_banner_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>Shop By Categories</h2>
                    <p>Browse our featured cateogries.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="categories_banner">
                    <img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/bg/banner1.jpg" alt="">
                    <div class="categories_banner_text">
                        <ul>
                            <li><a href="#">Hair care</a></li>
                            <li><a href="#">Make Up</a></li>
                            <li><a href="#">Skin care</a></li>
                            <li><a href="#">Bath & Body</a></li>
                            <li><a href="#">View All</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--categories banner end-->

<!--brand area start-->
<div class="brand_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand_container owl-carousel ">
                    <div class="single_brand">
                        <a href="#"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/brand/brand1.jpg" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/brand/brand2.jpg" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/brand/brand3.jpg" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/brand/brand4.jpg" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/brand/brand5.jpg" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/brand/brand6.jpg" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/brand/brand7.jpg" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/brand/brand1.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--brand area end-->

<!--product area start-->
<div class="product_area  mb-95">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_header">
                    <div class="section_title">
                        <h2>Our Categories</h2>
                        <p>Browse the collection of our tab products.</p>
                    </div>
                    <div class="product_tab_btn">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#makeup" role="tab" aria-controls="makeup" aria-selected="true">
                                    Makeup
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#skin" role="tab" aria-controls="skin" aria-selected="false">
                                    Skin Care
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#health" role="tab" aria-controls="health" aria-selected="false">
                                    Health Care
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_container">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="makeup" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product1.jpg" alt=""></a>
                                            <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product2.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-20%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                    <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="../../../index.php">Juicy Couture Tricot Logo Stripe Jacket</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$35.00</span>
                                                <span class="current_price">$28.00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product7.jpg" alt=""></a>
                                            <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product8.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-20%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                    <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="../../../index.php">Calvin Klein Jeans Reflective Logo Full</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$56.00</span>
                                                <span class="current_price">$48.00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product9.jpg" alt=""></a>
                                            <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product10.jpg" alt=""></a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                    <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="../../../index.php">Juicy Couture Juicy Quilted Terry Track</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$67.00</span>
                                                <span class="current_price">$57.00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product13.jpg" alt=""></a>
                                            <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product14.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-20%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                    <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="../../../index.php">New Balance Fresh Foam LAZR v1 Sport</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$47.00</span>
                                                <span class="current_price">$37.00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product4.jpg" alt=""></a>
                                            <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product3.jpg" alt=""></a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                    <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="../../../index.php">Trans-Weight Hooded Wind and Water</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$45.00</span>
                                                <span class="current_price">$35.00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="skin" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product9.jpg" alt=""></a>
                                            <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product10.jpg" alt=""></a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                    <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="../../../index.php">Juicy Couture Juicy Quilted Terry Track</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$67.00</span>
                                                <span class="current_price">$57.00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product13.jpg" alt=""></a>
                                            <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product14.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-20%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                    <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="../../../index.php">New Balance Fresh Foam LAZR v1 Sport</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$47.00</span>
                                                <span class="current_price">$37.00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product4.jpg" alt=""></a>
                                            <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product3.jpg" alt=""></a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                    <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="../../../index.php">Trans-Weight Hooded Wind and Water</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$45.00</span>
                                                <span class="current_price">$35.00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product1.jpg" alt=""></a>
                                            <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product2.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-20%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                    <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="../../../index.php">Juicy Couture Tricot Logo Stripe Jacket</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$35.00</span>
                                                <span class="current_price">$28.00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product7.jpg" alt=""></a>
                                            <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product8.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-20%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                    <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="../../../index.php">Calvin Klein Jeans Reflective Logo Full</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$56.00</span>
                                                <span class="current_price">$48.00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="health" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product9.jpg" alt=""></a>
                                            <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product10.jpg" alt=""></a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                    <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="../../../index.php">Juicy Couture Juicy Quilted Terry Track</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$67.00</span>
                                                <span class="current_price">$57.00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product1.jpg" alt=""></a>
                                            <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product2.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-20%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                    <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="../../../index.php">Juicy Couture Tricot Logo Stripe Jacket</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$35.00</span>
                                                <span class="current_price">$28.00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product7.jpg" alt=""></a>
                                            <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product8.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-20%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                    <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="../../../index.php">Calvin Klein Jeans Reflective Logo Full</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$56.00</span>
                                                <span class="current_price">$48.00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product4.jpg" alt=""></a>
                                            <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product3.jpg" alt=""></a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                    <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="../../../index.php">Trans-Weight Hooded Wind and Water</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$45.00</span>
                                                <span class="current_price">$35.00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product13.jpg" alt=""></a>
                                            <a class="secondary_img" href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/product/product14.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-20%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="../../../index.php" title="Add tob cart"><i class="icon-bag icons"></i></a></li>
                                                    <li class="wishlist"><a href="../../../index.php" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-shuffle icons"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-eye icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="../../../index.php">New Balance Fresh Foam LAZR v1 Sport</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$47.00</span>
                                                <span class="current_price">$37.00</span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--product area end-->

<!--blog area start-->
<section class="blog_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>From Our Blog</h2>
                    <p>There are latest blog posts </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog_carousel blog_column3 owl-carousel">
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/blog/blog1.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <h4 class="post_title"><a href="../../../index.php"> This is First Post For XipBlog</a></h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ...
                                </p>
                                <footer class="blog_footer">
                                    <a href="../../../index.php">Read More</a>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/blog/blog2.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <h4 class="post_title"><a href="../../../index.php"> This is Secound Post For XipBlog</a></h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ...
                                </p>
                                <footer class="blog_footer">
                                    <a href="../../../index.php">Read More</a>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/blog/blog3.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <h4 class="post_title"><a href="../../../index.php"> This is Third Post For XipBlog</a></h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ...
                                </p>
                                <footer class="blog_footer">
                                    <a href="../../../index.php">Read More</a>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="../../../index.php"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/blog/blog4.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <h4 class="post_title"><a href="../../../index.php"> This is Fourth Post For XipBlog</a></h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ...
                                </p>
                                <footer class="blog_footer">
                                    <a href="../../../index.php">Read More</a>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!--blog area end-->

<!--testimonial area start-->
<div class="testimonial_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>Testimonials</h2>
                    <p>What they say </p>
                </div>
            </div>
        </div>
        <div class="testimonial_container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial_thumb_wrapper testimonial_thumb_column3">
                        <div class="testimonial_thumb">
                            <img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/about/testimonial1.png" alt="">
                        </div>
                        <div class="testimonial_thumb">
                            <img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/about/testimonial2.png" alt="">
                        </div>
                        <div class="testimonial_thumb">
                            <img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/about/testimonial3.png" alt="">
                        </div>
                        <div class="testimonial_thumb">
                            <img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/about/testimonial1.png" alt="">
                        </div>
                    </div>
                    <div class="testimonial_content_wrapper  testimonial_content_collumn1">
                        <div class="testimonial_content">
                            <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !</p>
                            <a href="https://hasthemes.com/">Demo@hasthemes.com</a>
                            <h3>orando BLoom</h3>
                        </div>
                        <div class="testimonial_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores suscipit itaque sit incidunt temporibus nulla debitis maxime vitae eveniet non aspernatur sunt, ex impedit totam corporis dolor.</p>
                            <a href="https://hasthemes.com/">Demo@hasthemes.com</a>
                            <h3>orando BLoom</h3>
                        </div>
                        <div class="testimonial_content">
                            <p> voluptas laboriosam rem? Nemo quos quod nesciunt labore sequi sunt inventore. Blanditiis, at debitis eaque maxime sequi dignissimos ex harum aut, voluptate iusto hic numquam magni fugiat neque quod!</p>
                            <a href="https://hasthemes.com/">Demo@hasthemes.com</a>
                            <h3>orando BLoom</h3>
                        </div>
                        <div class="testimonial_content">
                            <p>repellat repellendus porro numquam, rerum facilis quia alias. Earum ex, sequi odit ad similique. Facilis cum velit distinctio ratione ex accusantium. Iste dicta alias quas ipsa, labore, nobis impedit</p>
                            <a href="https://hasthemes.com/">Demo@hasthemes.com</a>
                            <h3>orando BLoom</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--testimonial area end-->

<!--banner area start-->
<div class="banner_area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single_banner">
                    <div class="banner_thumb">
                        <a href="#"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/bg/banner2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single_banner">
                    <div class="banner_thumb">
                        <a href="#"><img src="<?php echo e(THEME_ASSET_URL); ?>assets/img/bg/banner3.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--banner area end-->



<?php echo $__env->make('layouts-frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--news letter popup start-->
<div class="newletter-popup">
    <div id="boxes" class="newletter-container">
        <div id="dialog" class="window">
            <div id="popup2">
                <span class="b-close"><span>close</span></span>
            </div>
            <div class="box">
                <div class="newletter-title">
                    <h2>Newsletter</h2>
                </div>
                <div class="box-content newleter-content">
                    <label class="newletter-label">Enter your email address to subscribe our notification of our new post &amp; features by email.</label>
                    <div id="frm_subscribe">
                        <form name="subscribe" id="subscribe_popup">
                            <!-- <span class="required">*</span><span>Enter you email address here...</span>-->
                            <input type="text" value="" name="subscribe_pemail" id="subscribe_pemail" placeholder="Enter you email address here...">
                            <input type="hidden" value="" name="subscribe_pname" id="subscribe_pname">
                            <div id="notification"></div>
                            <a class="theme-btn-outlined" onclick="email_subscribepopup()"><span>Subscribe</span></a>
                        </form>
                        <div class="subscribe-bottom">
                            <input type="checkbox" id="newsletter_popup_dont_show_again">
                            <label for="newsletter_popup_dont_show_again">Don't show this popup again</label>
                        </div>
                    </div>
                    <!-- /#frm_subscribe -->
                </div>
                <!-- /.box-content -->
            </div>
        </div>

    </div>
    <!-- /.box -->
</div>
<!--news letter popup start-->


<?php echo $__env->make('.layouts-frontend.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>


<!-- Mirrored from demo.hasthemes.com/clima/clima/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jan 2021 04:54:36 GMT -->
</html><?php /**PATH /Library/WebServer/Documents/ChunStore/app/views//layouts-frontend/main.blade.php ENDPATH**/ ?>