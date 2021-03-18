<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
session_start();
require_once "./commons/utils.php";
require_once "./vendor/autoload.php";
require_once "./config/database.php";
switch ($url){
    case "/":$ctr = new \App\Controllers\HomeController();
    $ctr->index();
    break;
    case "cate-list":
        checkAuth(MEMBER_ROLE['admin']);
        $ctr = new \App\Controllers\CategoryController();
    $ctr->listCate();
    break;
    case "cate-detail": $ctr = new \App\Controllers\CategoryController();
        checkAuth(MEMBER_ROLE['admin']);
    $ctr->cateDetail();
    break;
    case "cate-add":
        checkAuth(MEMBER_ROLE['admin']);
        $ctr = new \App\Controllers\CategoryController();
    $ctr->cateAdd();
    break;
    case "cate-save": $ctr = new \App\Controllers\CategoryController();
        checkAuth(MEMBER_ROLE['admin']);
    $ctr->cateSave();
    break;
    case "cate-remove":$ctr = new \App\Controllers\CategoryController();
        checkAuth(MEMBER_ROLE['admin']);
    $ctr->cateRemove();
    break;
    case "cate-edit":
        checkAuth(MEMBER_ROLE['admin']);
        $ctr = new \App\Controllers\CategoryController();
    $ctr->cateEdit();
    break;
    case "edit-save":$ctr = new \App\Controllers\CategoryController();
        checkAuth(MEMBER_ROLE['admin']);
    $ctr->editSave();
    break;
    case "login": $ctr = new \App\Controllers\HomeController();
    $ctr->login();
    break;
    case "post-login" : $ctr = new \App\Controllers\HomeController();
    $ctr->loginForm();
    break;
    case "logout" : $ctr = new \App\Controllers\HomeController();
    $ctr->logout();
    break;
    case "product-list":$ctr = new \App\Controllers\ProductController();
        checkAuth(MEMBER_ROLE['admin']);
        $ctr->productList();
        break;
    case "product-add":$ctr = new \App\Controllers\ProductController();
        checkAuth(MEMBER_ROLE['admin']);
        $ctr->productAdd();
        break;
    case "product-save":$ctr = new \App\Controllers\ProductController();
        checkAuth(MEMBER_ROLE['admin']);
        $ctr->productSave();
        break;
    case "login-member": $ctr = new \App\Controllers\HomeController();
        $ctr->loginMember();
        break;
    case "product-detail": $ctr = new \App\Controllers\HomeController();
        $ctr->productDetail();
        break;
    case "login-member-front": $ctr = new \App\Controllers\HomeController();
        $ctr->loginFront();
        break;
    case "logout-member": $ctr = new \App\Controllers\HomeController();
        $ctr->logoutMember();
        break;
    case "signup-member": $ctr = new \App\Controllers\HomeController();
        $ctr->signupMember();
        break;
    default:echo "Not Found!";
    break;
}