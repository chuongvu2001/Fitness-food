<?php
const BASE_URL = 'http://localhost/chunstore/';
const PUBLIC_URL = BASE_URL . 'public/';
const THEME_ASSET_URL = PUBLIC_URL . 'theme/';
const MEMBER_ROLE = [
    'admin'=>200,
    'member'=>1,
];
const AUTH = 'session_auth';
function checkAuth($role = MEMBER_ROLE['member']){
    if(!isset($_SESSION[AUTH]) || empty($_SESSION[AUTH]) || $_SESSION[AUTH]['role']<$role){
        header('location: ' . BASE_URL .'login');
        die;
    }
}