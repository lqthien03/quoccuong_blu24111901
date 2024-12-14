<?php
// giới thiệu

$nametype = "gioi-thieu";
$config['static'][$nametype]['title_main'] = "Giới thiệu";
$config['static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['static'][$nametype]['name'] = true;
$config['static'][$nametype]['desc'] = true;
$config['static'][$nametype]['content'] = true;
$config['static'][$nametype]['content_cke'] = true;
$config['static'][$nametype]['images'] = true;
$config['static'][$nametype]['width'] = 500;
$config['static'][$nametype]['height'] = 500;
$config['static'][$nametype]['thumb'] = '100x100x1';
$config['static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';


$nametype = "slogan";
$config['static'][$nametype]['title_main'] = "Slogan";
$config['static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['static'][$nametype]['name'] = true;

/* copyright */
$nametype = "copyright";
$config['static'][$nametype]['title_main'] = "Copyright";
$config['static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['static'][$nametype]['name'] = true;

/* Liên hệ */
$nametype = "lienhe";
$config['static'][$nametype]['title_main'] = lienhe;
$config['static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['static'][$nametype]['content'] = true;
$config['static'][$nametype]['content_cke'] = true;

/* Footer */
$nametype = "footer";
$config['static'][$nametype]['title_main'] = "Footer";
$config['static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['static'][$nametype]['name'] = true;
$config['static'][$nametype]['content'] = true;
$config['static'][$nametype]['content_cke'] = true;

// chứng nhận
// $nametype = "chung-nhan";
// $config['static'][$nametype]['title_main'] = "Chứng nhận";
// $config['static'][$nametype]['check'] = array("hienthi" => hienthi);
// $config['static'][$nametype]['content'] = true;
// $config['static'][$nametype]['content_cke'] = true;