<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home-menu']='home/home_menu';
$route['blog-menu']='home/blog_menu';
$route['user-register']='register/user_register';
$route['admin-login-area']='register/admin_login_area';
$route['save-users']='register/save_users';
$route['manage-users']='register/manage_users';
$route['users-login-area']='register/users_login_area';
$route['add-admin']='register/add_admin';
$route['save-admin']='register/save_admin';
$route['manage-admin']='register/manage_admin';
$route['slider-image']='register/slider_image';
$route['save-slider-image']='register/save_slider_image';
$route['sliderpage']='register/slider_page';
$route['manage-users-page']='pagination/index';
$route['pagination/(:num)'] = 'pagination';
$route['search/(:num)'] = 'search';



