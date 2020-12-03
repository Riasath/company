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

//------------------------------------------------//
//admin login
//------------------------------------------------//

$route['admin-login']='Admin/admin_login';


//logout


$route['logout']='Admin/logout';




//popup
$route['save-popup']='Admin/save_popup';
$route['edit-popup/(.+)']='Admin/edit_popup/$1';
$route['update-popup']='Admin/update_popup';
$route['view-popup/(.+)']='Admin/view_popup/$1';
$route['delete-popup/(.+)']='Admin/delete_popup/$1';


//signup
$route['save-signup']='Admin/save_signup';

//sidebar
$route['save-sidebar']='Admin/save_sidebar';
$route['edit-sidebar/(.+)']='Admin/edit_sidebar/$1';
$route['update-sidebar']='Admin/update_sidebar';
$route['view-sidebar/(.+)']='Admin/view_sidebar/$1';
$route['delete-sidebar/(.+)']='Admin/delete_sidebar/$1';


//subscribe
$route['save-subscribe']='Admin/save_subscribe';


//------------------------------------------------------------//
//page_route_start

$route['erpsolutions']='pages/erpsolutions';
$route['home']='master_controller';
$route['about']='pages/about';
$route['service']='pages/service';
$route['digital-service']='pages/digital_service';

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
//------------------------------------------------------------//
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
//------------------------------------------------------------//
//for blog section

$route['add-blog']='slider/add_blog';
$route['save-blog']='slider/save_blog';
//------------------------------------------------------------//


//update & delete FOR testimonials
$route['manage-testimonials']='slider/manage_testimonials';
$route['edit-testimonials/(.+)']='slider/edit_testimonials/$1';
$route['update-testimonials']='slider/update_testimonials';
$route['delete-testimonials/(.+)']='slider/delete_testimonials/$1';
$route['view-testimonials/(.+)']='slider/view_testimonials/$1';


//------------------------------------------------------------//
//client_image_CRUD

$route['client-image']='slider/client_image';
$route['edit-client-image/(.+)']='slider/edit_client_image/$1';
$route['update-client-image']='slider/update_client_image';

//------------------------------------------------------------//
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

//------------------------------------------------------------//

// section delete

$route['delete-client/(.+)']='slider/delete_client/$1';
$route['delete-heading/(.+)']='slider/delete_heading/$1';
$route['delete-avatar/(.+)']='slider/delete_avatar/$1';
$route['delete-fmenu/(.+)']='slider/delete_fmenu/$1';
$route['delete-copyright/(.+)']='slider/delete_copyright/$1';



//------------------------------------------------------------//
//section delete
$route['view-client/(.+)']='slider/view_client/$1';
$route['view-heading/(.+)']='slider/view_heading/$1';
$route['view-avatar/(.+)']='slider/view_avatar/$1';
$route['view-fmenu/(.+)']='slider/view_fmenu/$1';
$route['view-copyright/(.+)']='slider/view_copyright/$1';

//------------------------------------------------------------//
//blog section CRUD 
$route['manage-blog']='slider/manage_blog';
$route['edit-blog/(.+)']='slider/edit_blog/$1';
$route['update-blog']='slider/update_blog';
$route['delete-blog/(.+)']='slider/delete_blog/$1';
$route['view-blog/(.+)']='slider/view_blog/$1';


//------------------------------------------------------------//
// dashboard route area

$route['edit-slider-list/(.+)']='Admin/edit_slider_list/$1';
$route['update-slider-list']='Admin/update_slider_list_info';
$route['delete-slider-list/(.+)']='Admin/delete_slider_list/$1';
$route['view-slider-list/(.+)']='Admin/view_slider_list/$1';

//footer icon


//------------------------------------------------------------//
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
$route['save-footericon']='Admin/save_footericon';
$route['update-footericon']='Admin/update_footericon';
$route['edit-footer-copyright/(.+)']='Admin/edit_footer_copyright/$1';
$route['save-footer-copyright']='Admin/save_footer_copyright';
$route['update-footer-copyright']='Admin/update_footer_copyright';

//delete all items

//------------------------------------------------------------//
$route['delete-testimonials-list/(.+)']='Admin/delete_testimonials_list/$1';
$route['delete-blog-list/(.+)']='Admin/delete_blog_list/$1';
$route['delete-client-list/(.+)']='Admin/delete_client_list/$1';
$route['delete-footertop-list/(.+)']='Admin/delete_footertop_list/$1';
$route['delete-footerbottom-list/(.+)']='Admin/delete_footerbottom_list/$1';
$route['delete-footericon-list/(.+)']='Admin/delete_footericon_list/$1';
$route['delete-footercopyright-list/(.+)']='Admin/delete_footercopyright_list/$1';



//------------------------------------------------------------//
//view items
$route['view-testimonials-list/(.+)']='Admin/view_testimonials_list/$1';
$route['view-blog-list/(.+)']='Admin/view_blog_list/$1';
$route['view-client-list/(.+)']='Admin/view_client_list/$1';
$route['view-footertop-list/(.+)']='Admin/view_footertop_list/$1';
$route['view-footerbottom-list/(.+)']='Admin/view_footerbottom_list/$1';
$route['view-footericon-list/(.+)']='Admin/view_footericon_list/$1';
$route['view-footercopyright-list/(.+)']='Admin/view_footercopyright_list/$1';

//footermenu

//------------------------------------------------------------//
$route['save-footermenu']='Admin/save_footermenu';



//test about

//short story
//------------------------------------------------------------//
$route['add-short-story']='slider/add_short_story';
$route['save-short-story']='Admin/save_short_story';
$route['edit-shortstory-list/(.+)']='Admin/edit_shortstory_list/$1';
$route['update-shortstory-list']='Admin/update_shortstory_list';
$route['delete-shortstory-list/(.+)']='Admin/delete_shortstory_list/$1';
$route['view-shortstory-list/(.+)']='Admin/view_shortstory_list/$1';

//foundation
//------------------------------------------------------------//
$route['save-foundation']='Admin/save_foundation';
$route['edit-foundation-list/(.+)']='Admin/edit_foundation_list/$1';
$route['update-foundation-list']='Admin/update_foundation_list';
$route['delete-foundation-list/(.+)']='Admin/delete_foundation_list/$1';
$route['view-foundation-list/(.+)']='Admin/view_foundation_list/$1';

//------------------------------------------------------------//
//work

$route['save-work']='Admin/save_work';
$route['edit-work/(.+)']='Admin/edit_work/$1';
$route['update-work']='Admin/update_work';
$route['delete-work/(.+)']='Admin/delete_work/$1';
$route['view-work/(.+)']='Admin/view_work/$1';

//expert
$route['save-expert']='Admin/save_expert';
$route['edit-expert/(.+)']='Admin/edit_expert/$1';
$route['update-expert']='Admin/update_expert';
$route['delete-expert/(.+)']='Admin/delete_expert/$1';
$route['view-expert/(.+)']='Admin/view_expert/$1';
//team
$route['save-team']='Admin/save_team';
$route['edit-team/(.+)']='Admin/edit_team/$1';
$route['update-team']='Admin/update_team';
$route['delete-team/(.+)']='Admin/delete_team/$1';
$route['view-team/(.+)']='Admin/view_team/$1';
//promo
$route['save-promo']='Admin/save_promo';
$route['edit-promo/(.+)']='Admin/edit_promo/$1';
$route['update-promo']='Admin/update_promo';
$route['view-promo/(.+)']='Admin/view_promo/$1';
$route['delete-promo/(.+)']='Admin/delete_promo/$1';
//vision
$route['save-vision']='Admin/save_vision';
$route['edit-vision/(.+)']='Admin/edit_vision/$1';
$route['update-vision']='Admin/update_vision';
$route['view-vision/(.+)']='Admin/view_vision/$1';
$route['delete-vision/(.+)']='Admin/delete_vision/$1';

//feedback
$route['save-feedback']='Admin/save_feedback';
$route['edit-feedback/(.+)']='Admin/edit_feedback/$1';
$route['update-feedback']='Admin/update_feedback';
$route['view-feedback/(.+)']='Admin/view_feedback/$1';
$route['delete-feedback/(.+)']='Admin/delete_feedback/$1';
//partner
$route['save-partner']='Admin/save_partner';
$route['edit-partner/(.+)']='Admin/edit_partner/$1';
$route['update-partner']='Admin/update_partner';
$route['view-partner/(.+)']='Admin/view_partner/$1';
$route['delete-partner/(.+)']='Admin/delete_partner/$1';
//partner image
$route['save-partner-image']='Admin/save_partner_image';
$route['edit-partner-image/(.+)']='Admin/edit_partner_image/$1';
$route['update-partner-image']='Admin/update_partner_image';
$route['view-partner-image/(.+)']='Admin/view_partner_image/$1';
$route['delete-partner-image/(.+)']='Admin/delete_partner_image/$1';


//Software development menu
//service

$route['save-eservice']='Admin/save_eservice';
$route['edit-eservice/(.+)']='Admin/edit_eservice/$1';
$route['update-eservice']='Admin/update_eservice';
$route['view-eservice/(.+)']='Admin/view_eservice/$1';
$route['delete-eservice/(.+)']='Admin/delete_eservice/$1';

//agency
$route['save-agency']='Admin/save_agency';
$route['edit-agency/(.+)']='Admin/edit_agency/$1';
$route['update-agency']='Admin/update_agency';
$route['view-agency/(.+)']='Admin/view_agency/$1';
$route['delete-agency/(.+)']='Admin/delete_agency/$1';
//feature
$route['save-feature']='Admin/save_feature';
$route['edit-feature/(.+)']='Admin/edit_feature/$1';
$route['update-feature']='Admin/update_feature';
$route['view-feature/(.+)']='Admin/view_feature/$1';
$route['delete-feature/(.+)']='Admin/delete_feature/$1';



//product
$route['save-product']='Admin/save_product';
$route['edit-product/(.+)']='Admin/edit_product/$1';
$route['update-product']='Admin/update_product';
$route['view-product/(.+)']='Admin/view_product/$1';
$route['delete-product/(.+)']='Admin/delete_product/$1';
//Quality
$route['save-quality']='Admin/save_quality';
$route['edit-quality/(.+)']='Admin/edit_quality/$1';
$route['update-quality']='Admin/update_quality';
$route['view-quality/(.+)']='Admin/view_quality/$1';
$route['delete-quality/(.+)']='Admin/delete_quality/$1';
//Qualityitems
$route['save-qualityitem']='Admin/save_qualityitem';
$route['edit-qualityitem/(.+)']='Admin/edit_qualityitem/$1';
$route['update-qualityitem']='Admin/update_qualityitem';
$route['view-qualityitem/(.+)']='Admin/view_qualityitem/$1';
$route['delete-qualityitem/(.+)']='Admin/delete_qualityitem/$1';


//tools
$route['save-tools']='Admin/save_tools';
$route['edit-tools/(.+)']='Admin/edit_tools/$1';
$route['update-tools']='Admin/update_tools';
$route['view-tools/(.+)']='Admin/view_tools/$1';
$route['delete-tools/(.+)']='Admin/delete_tools/$1';


//tools_box
$route['save-tools-box']='Admin/save_tools_box';
$route['edit-tools-box/(.+)']='Admin/edit_tools_box/$1';
$route['update-tools_box']='Admin/update_tools_box';
$route['view-tools-box/(.+)']='Admin/view_tools_box/$1';
$route['delete-tools-box/(.+)']='Admin/delete_tools_box/$1';


//contact
$route['save-contact']='Admin/save_contact';
$route['edit-contact/(.+)']='Admin/edit_contact/$1';
$route['update-contact']='Admin/update_contact';
$route['view-contact/(.+)']='Admin/view_contact/$1';
$route['delete-contact/(.+)']='Admin/delete_contact/$1';

//contact form
$route['save-contact-form']='Admin/save_contact_form';


//digital marketing menu

//dservice
$route['save-dservice']='Admin/save_dservice';
$route['edit-dservice/(.+)']='Admin/edit_dservice/$1';
$route['update-dservice']='Admin/update_dservice';
$route['view-dservice/(.+)']='Admin/view_dservice/$1';
$route['delete-dservice/(.+)']='Admin/delete_dservice/$1';

//description
$route['save-description']='Admin/save_description';
$route['edit-description/(.+)']='Admin/edit_description/$1';
$route['update-description']='Admin/update_description';
$route['view-description/(.+)']='Admin/view_description/$1';
$route['delete-description/(.+)']='Admin/delete_description/$1';

//tell us
$route['save-tell']='Admin/save_tell';
$route['edit-tell/(.+)']='Admin/edit_tell/$1';
$route['update-tell']='Admin/update_tell';
$route['view-tell/(.+)']='Admin/view_tell/$1';
$route['delete-tell/(.+)']='Admin/delete_tell/$1';

//levels
$route['save-levels']='Admin/save_levels';
$route['edit-levels/(.+)']='Admin/edit_levels/$1';
$route['update-levels']='Admin/update_levels';
$route['view-levels/(.+)']='Admin/view_levels/$1';
$route['delete-levels/(.+)']='Admin/delete_levels/$1';

//levelsbox
$route['save-levelsbox']='Admin/save_levelsbox';
$route['edit-levelsbox/(.+)']='Admin/edit_levelsbox/$1';
$route['update-levelsbox']='Admin/update_levelsbox';
$route['view-levelsbox/(.+)']='Admin/view_levelsbox/$1';
$route['delete-levelsbox/(.+)']='Admin/delete_levelsbox/$1';

//accordon
$route['save-accordon']='Admin/save_accordon';
$route['edit-accordon/(.+)']='Admin/edit_accordon/$1';
$route['update-accordon']='Admin/update_accordon';
$route['view-accordon/(.+)']='Admin/view_accordon/$1';
$route['delete-accordon/(.+)']='Admin/delete_accordon/$1';

//brand
$route['save-brand']='Admin/save_brand';
$route['edit-brand/(.+)']='Admin/edit_brand/$1';
$route['update-brand']='Admin/update_brand';
$route['view-brand/(.+)']='Admin/view_brand/$1';
$route['delete-brand/(.+)']='Admin/delete_brand/$1';
//brandbox
$route['save-brandbox']='Admin/save_brandbox';
$route['edit-brandbox/(.+)']='Admin/edit_brandbox/$1';
$route['update-brandbox']='Admin/update_brandbox';
$route['view-brandbox/(.+)']='Admin/view_brandbox/$1';
$route['delete-brandbox/(.+)']='Admin/delete_brandbox/$1';
//contact page
$route['contactform']='Admin/save_contactform';

//contact address
$route['save-address']='Admin/save_address';
$route['edit-address/(.+)']='Admin/edit_address/$1';
$route['update-address']='Admin/update_address';
$route['view-address/(.+)']='Admin/view_address/$1';
$route['delete-address/(.+)']='Admin/delete_address/$1';