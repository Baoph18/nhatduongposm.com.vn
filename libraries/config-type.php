<?php
/* Config type - Group */
$config['group'] = array(

);

/* Config type - Product */
require_once LIBRARIES . 'type/config-type-product.php';

/* Config type - Tags */
// require_once LIBRARIES . 'type/config-type-tags.php';

/* Config type - Newsletter */
require_once LIBRARIES . 'type/config-type-newsletter.php';

/* Config type - News */
require_once LIBRARIES . 'type/config-type-news.php';

/* Config type - Static */
require_once LIBRARIES . 'type/config-type-static.php';

/* Config type - Photo */
require_once LIBRARIES . 'type/config-type-photo.php';

/* Seo page */
$config['seopage']['page'] = array(
    "san-pham" => "Sản phẩm",
    "dich-vu" => "Dịch Vụ",
    "chinh-sach" => "Chính sách",
    "tin-tuc" => "Tin Tức"
);
$config['seopage']['width'] = 300;
$config['seopage']['height'] = 200;
$config['seopage']['thumb'] = '300x200x1';
$config['seopage']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Setting */
$config['setting']['address'] = true;
$config['setting']['phone'] = true;
$config['setting']['hotline'] = true;
$config['setting']['zalo'] = true;
$config['setting']['oaidzalo'] = true;
$config['setting']['email'] = true;
$config['setting']['website'] = true;
$config['setting']['fanpage'] = true;
$config['setting']['coords'] = true;
$config['setting']['coords_iframe'] = true;

/* Quản lý import */
$config['import']['images'] = true;
$config['import']['thumb'] = '100x100x1';
$config['import']['img_type'] = ".jpg|.gif|.png|.jpeg|.gif";

/* Quản lý export */
$config['export']['category'] = false;

/* Quản lý tài khoản */
$config['user']['active'] = false;
$config['user']['admin'] = false;
$config['user']['check_admin'] = array("hienthi" => "Kích hoạt");
$config['user']['member'] = false;
$config['user']['check_member'] = array("hienthi" => "Kích hoạt");

/* Quản lý phân quyền */
$config['permission']['active'] = false;
$config['permission']['check'] = array("hienthi" => "Kích hoạt");

/* Quản lý liên lệ */
$config['contact']['check'] = array("hienthi" => "Xác nhận");

/* Quản lý địa điểm */
$config['places']['active'] = false;
$config['places']['check_city'] = array("hienthi" => "Hiển thị");
$config['places']['check_district'] = array("hienthi" => "Hiển thị");
$config['places']['check_ward'] = array("hienthi" => "Hiển thị");
$config['places']['placesship'] = false;

/* Quản lý giỏ hàng */
$config['order']['active'] = false;
$config['order']['search'] = false;
$config['order']['excel'] = false;
$config['order']['word'] = false;
$config['order']['excelall'] = false;
$config['order']['wordall'] = false;
$config['order']['thumb'] = '100x100x1';

/* Quản lý thông báo đẩy */
$config['onesignal'] = false;
