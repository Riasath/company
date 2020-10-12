<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'master_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['blog']='master_controller/blog_menu';
$route['home']='master_controller/index';
$route['contact']='master_controller/contact';
$route['login-register']='login/login_register';
$route['save-user']='login/save_user';
$route['login-area']='login/users_login_area';
$route['add-slider']='login/add_slider';
$route['save-slider']='login/save_slider';
$route['add-slides-item']='login/add_slides_item';
$route['save-slides-item']='login/save_slides_item';
$route['manage-slider']='slider/manage_slider';
$route['edit-slider/(.+)']='slider/edit_slider/$1';
$route['update-slider']='slider/update_slider_info';
$route['delete-slider/(.+)']='slider/delete_slider/$1';
$route['view-slider/(.+)']='slider/view_slider/$1';

