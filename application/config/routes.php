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
$route['add-testimonials']='slider/add_testimonials';
$route['save-testimonials']='slider/save_testimonials';
$route['add-client']='slider/add_client';
$route['save-client-image']='slider/save_client_image';



//page_route_start

$route['erpsolutions']='pages/erpsolutions';
$route['home']='master_controller';
$route['micro-finance']='pages/micro_finance';
$route['office-mgt']='pages/office_mgt';
$route['e-commerce']='pages/e_commerce';
$route['school-mgt']='pages/school_mgt';
$route['point-sale']='pages/point_sale';
$route['storage']='pages/storage';
$route['testimonials']='pages/testimonials';
$route['mobile-app']='pages/mobile_app';
$route['cloud-app']='pages/cloud_app';
$route['iot-app']='pages/iot_app';
$route['pay-per']='pages/pay_per';
$route['local-seo']='pages/local_seo';
$route['seo']='pages/seo';
$route['email-marketing']='pages/email_marketing';
$route['media-marketing']='pages/media_marketing';
$route['blog']='pages/blog';
$route['contact']='pages/contact';
$route['service-promo']='pages/service_promo';

//footer section route

$route['add-footer']='slider/add_footer';
$route['add-footer-heading']='slider/add_footer_heading';
$route['save-footer-heading']='slider/save_footer_heading';
$route['save-footer-heading']='slider/save_footer_heading';
$route['footer-menu']='slider/footer_menu';
$route['save-footer-menu']='slider/save_footer_menu';
$route['add-icon']='slider/add_icon';
$route['save-footer-icon']='slider/save_footer_icon';
$route['add-copyright']='slider/add_copyright';
$route['save-copyright']='slider/save_copyright';

//for blog section

$route['add-blog']='slider/add_blog';
$route['save-blog']='slider/save_blog';



//update & delete FOR testimonials
$route['manage-testimonials']='slider/manage_testimonials';
$route['edit-testimonials/(.+)']='slider/edit_testimonials/$1';
$route['update-testimonials']='slider/update_testimonials';
$route['delete-testimonials/(.+)']='slider/delete_testimonials/$1';
$route['view-testimonials/(.+)']='slider/view_testimonials/$1';



//client_image_CRUD

$route['client-image']='slider/client_image';
$route['edit-client-image/(.+)']='slider/edit_client_image/$1';
$route['update-client-image']='slider/update_client_image';


//Footer Section edit
$route['manage-footer-heading']='slider/manage_footer_heading';
$route['edit-heading/(.+)']='slider/edit_heading/$1';
$route['update-heading']='slider/update_heading'; 
$route['manage-icon']='slider/manage_icon'; 
$route['edit-avatar/(.+)']='slider/edit_avatar/$1';
$route['update-avatar']='slider/update_avatar';
$route['manage-fmenu']='slider/manage_fmenu';
$route['edit-fmenu/(.+)']='slider/edit_fmenu/$1';
$route['update-fmenu']='slider/update_fmenu';
$route['manage-copyright']='slider/manage_copyright';
$route['edit-copyright/(.+)']='slider/edit_copyright/$1';
$route['update-copyright']='slider/update_copyright';



// section delete

$route['delete-client/(.+)']='slider/delete_client/$1';
$route['delete-heading/(.+)']='slider/delete_heading/$1';
$route['delete-avatar/(.+)']='slider/delete_avatar/$1';
$route['delete-fmenu/(.+)']='slider/delete_fmenu/$1';
$route['delete-copyright/(.+)']='slider/delete_copyright/$1';




//section delete
$route['view-client/(.+)']='slider/view_client/$1';
$route['view-heading/(.+)']='slider/view_heading/$1';
$route['view-avatar/(.+)']='slider/view_avatar/$1';
$route['view-fmenu/(.+)']='slider/view_fmenu/$1';
$route['view-copyright/(.+)']='slider/view_copyright/$1';


//blog section CRUD 
$route['manage-blog']='slider/manage_blog';
$route['edit-blog/(.+)']='slider/edit_blog/$1';
$route['update-blog']='slider/update_blog';
$route['delete-blog/(.+)']='slider/delete_blog/$1';
$route['view-blog/(.+)']='slider/view_blog/$1';



// dashboard route area

$route['edit-slider-list/(.+)']='Admin/edit_slider_list/$1';
$route['update-slider-list']='Admin/update_slider_list_info';
$route['delete-slider-list/(.+)']='Admin/delete_slider_list/$1';
$route['view-slider-list/(.+)']='Admin/view_slider_list/$1';


$route['edit-testimonials-list/(.+)']='Admin/edit_testimonials_list/$1';
$route['update-testimonials-list']='Admin/update_testimonials_list';
$route['save-testimonials-list']='Admin/save_testimonials_list';
$route['edit-blog-list/(.+)']='Admin/edit_blog_list/$1';
$route['update-blog-list']='Admin/update_blog_list';
$route['save-blog-list']='Admin/save_blog_list';
$route['edit-client-list/(.+)']='Admin/edit_client_list/$1';
$route['update-client-list']='Admin/update_client_list';
$route['save-client-list']='Admin/save_client_list';
$route['edit-footertop-list/(.+)']='Admin/edit_footertop_list/$1';
$route['save-footertop']='Admin/save_footertop';
$route['update-footertop-list']='Admin/update_footertop_list';
$route['edit-footerbottom-list/(.+)']='Admin/edit_footerbottom_list/$1';
$route['save-footerbottom']='Admin/save_footerbottom';
$route['update-footerbottom']='Admin/update_footerbottom';
$route['edit-footericon/(.+)']='Admin/edit_footericon/$1';
$route['save-footerbottom']='Admin/save_footerbottom';
$route['update-footerbottom']='Admin/update_footerbottom';







