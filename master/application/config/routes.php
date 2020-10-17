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