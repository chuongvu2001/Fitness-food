<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/clima/clima/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jan 2021 04:56:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Clima - Multipurpose eCommerce HTML Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $__env->make('layouts-frontend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>

<!--header area start-->

<?php echo $__env->make('layouts-frontend.overlay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts-frontend.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!-- customer login start -->
<div class="customer_login">
    <div class="container">
        <div class="row">
            <!--login area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form">
                    <h2>login</h2>
                    <form action="<?php echo e(BASE_URL . 'login-member-front'); ?>" method="POST">
                        <p>
                            <label>Email <span>*</span></label>
                            <input type="email" name="email">
                        </p>
                        <p>
                            <label>Passwords <span>*</span></label>
                            <input type="password" name="password">
                        </p>
                        <div class="login_submit">
                            <a href="#">Lost your password?</a>
                            <label for="remember">
                                <input id="remember" type="checkbox">
                                Remember me
                            </label>
                            <button type="submit">login</button>

                        </div>

                    </form>
                </div>
            </div>
            <!--login area start-->

            <!--register area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form register">
                    <h2>Register</h2>
                    <form action="signup-member" method="POST" enctype="multipart/form-data">
                        <p>
                            <label>User name<span>*</span></label>
                            <input type="text" name="name">
                        </p>
                        <p>
                            <label>Email address  <span>*</span></label>
                            <input type="email" name="email">
                        </p>
                        <p>
                            <label>Avatar</label>
                            <input type="file" class="pt-1" name="avatar">
                        </p>
                        <p>
                            <label>Passwords <span>*</span></label>
                            <input type="password" name="password">
                        </p>
                        <div class="login_submit">
                            <button type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--register area end-->
        </div>
    </div>
</div>
<!-- customer login end -->

<?php echo $__env->make('layouts-frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!-- JS
============================================ -->

<?php echo $__env->make('layouts-frontend.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>


<!-- Mirrored from demo.hasthemes.com/clima/clima/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jan 2021 04:56:50 GMT -->
</html><?php /**PATH /Library/WebServer/Documents/ChunStore/app/views/frontend/member.blade.php ENDPATH**/ ?>