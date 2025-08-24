<?php
/* Hình share mặc định */
$nametype = "default";
$config['photo']['photo_static'][$nametype]['title_main'] = "Hình share mặc định";
$config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['photo']['photo_static'][$nametype]['images'] = true;
$config['photo']['photo_static'][$nametype]['width'] = 640;
$config['photo']['photo_static'][$nametype]['height'] = 700;
$config['photo']['photo_static'][$nametype]['thumb'] = '120x100x1';
$config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Logo */
$nametype = "logo";
$config['photo']['photo_static'][$nametype]['title_main'] = "Logo";
$config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['photo']['photo_static'][$nametype]['images'] = true;
$config['photo']['photo_static'][$nametype]['width'] = 368*2;
$config['photo']['photo_static'][$nametype]['height'] = 78*2;
$config['photo']['photo_static'][$nametype]['thumb'] = '120x100x1';
$config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Favicon */
$nametype = "favicon";
$config['photo']['photo_static'][$nametype]['title_main'] = "Favicon";
$config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['photo']['photo_static'][$nametype]['images'] = true;
$config['photo']['photo_static'][$nametype]['width'] = 50;
$config['photo']['photo_static'][$nametype]['height'] = 50;
$config['photo']['photo_static'][$nametype]['thumb'] = '120x100x1';
$config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Popup */
// $nametype = "popup";
// $config['photo']['photo_static'][$nametype]['title_main'] = "Popup";
// $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
// $config['photo']['photo_static'][$nametype]['images'] = true;
// $config['photo']['photo_static'][$nametype]['name'] = true;
// $config['photo']['photo_static'][$nametype]['link'] = true;
// $config['photo']['photo_static'][$nametype]['width'] = 800;
// $config['photo']['photo_static'][$nametype]['height'] = 530;
// $config['photo']['photo_static'][$nametype]['thumb'] = '800x530x1';
// $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Slideshow */
$nametype = "slide";
$config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow";
$config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
$config['photo']['man_photo'][$nametype]['number_photo'] = 2;
$config['photo']['man_photo'][$nametype]['images_photo'] = true;
$config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
$config['photo']['man_photo'][$nametype]['link_photo'] = true;
$config['photo']['man_photo'][$nametype]['video_photo'] = true;
$config['photo']['man_photo'][$nametype]['name_photo'] = true;
$config['photo']['man_photo'][$nametype]['desc_photo'] = true;
$config['photo']['man_photo'][$nametype]['content_photo'] = true;
$config['photo']['man_photo'][$nametype]['width_photo'] = 1440;
$config['photo']['man_photo'][$nametype]['height_photo'] = 628;
$config['photo']['man_photo'][$nametype]['thumb_photo'] = '200x100x1';
$config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Đối tác */
$nametype = "doitac";
$config['photo']['man_photo'][$nametype]['title_main_photo'] = "Đối tác";
$config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
$config['photo']['man_photo'][$nametype]['number_photo'] = 5;
$config['photo']['man_photo'][$nametype]['images_photo'] = true;
$config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
$config['photo']['man_photo'][$nametype]['link_photo'] = true;
$config['photo']['man_photo'][$nametype]['name_photo'] = true;
$config['photo']['man_photo'][$nametype]['width_photo'] = 217;
$config['photo']['man_photo'][$nametype]['height_photo'] = 120;
$config['photo']['man_photo'][$nametype]['thumb_photo'] = '175x95x2';
$config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';
