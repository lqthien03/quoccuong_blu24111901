<?php
/* Thực đơn */
$nametype = "san-pham";
$config['product'][$nametype]['title_main'] = "Sản phẩm";
$config['product'][$nametype]['dropdown'] = true;
$config['product'][$nametype]['list'] = true;
$config['product'][$nametype]['view'] = true;
$config['product'][$nametype]['copy'] = true;
$config['product'][$nametype]['copy_image'] = true;
$config['product'][$nametype]['slug'] = true;
$config['product'][$nametype]['show_images'] = true;
$config['product'][$nametype]['check'] = array("noibat" => noibat, "hienthi" => hienthi);
$config['product'][$nametype]['images'] = true;
$config['product'][$nametype]['regular_price'] = true;
$config['product'][$nametype]['desc'] = true;
$config['product'][$nametype]['schema'] = true;
$config['product'][$nametype]['seo'] = true;
$config['product'][$nametype]['width'] = 285;
$config['product'][$nametype]['height'] = 300;
$config['product'][$nametype]['thumb'] = '100x100x1';
$config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* Thực đơn (List) */
$config['product'][$nametype]['title_main_list'] = danhmuccap1;
$config['product'][$nametype]['images_list'] = false;
$config['product'][$nametype]['slug_list'] = true;
$config['product'][$nametype]['check_list'] = array("noibat" => noibat, "hienthi" => hienthi);
$config['product'][$nametype]['desc_list'] = true;
$config['product'][$nametype]['seo_list'] = true;

/* Hình ảnh */
$nametype = "hinh-anh";
$config['product'][$nametype]['title_main'] = "Album Hình ảnh";
$config['product'][$nametype]['check'] = array("noibat" => noibat, "hienthi" => hienthi);
$config['product'][$nametype]['view'] = true;
$config['product'][$nametype]['copy'] = true;
$config['product'][$nametype]['slug'] = true;
$config['product'][$nametype]['images'] = true;
$config['product'][$nametype]['show_images'] = true;
$config['product'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh",
        "title_sub_photo" => hinhanh,
        "check_photo" => array("hienthi" => hienthi),
        "number_photo" => 2,
        "images_photo" => true,
        "avatar_photo" => true,
        "name_photo" => true,
        "width_photo" => 540,
        "height_photo" => 540,
        "thumb_photo" => '100x100x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP'
    )
);
$config['product'][$nametype]['seo'] = true;
$config['product'][$nametype]['width_icon'] = 135;
$config['product'][$nametype]['height_icon'] = 100;
$config['product'][$nametype]['width'] = 270;
$config['product'][$nametype]['height'] = 270;
$config['product'][$nametype]['thumb'] = '100x100x1';
$config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

// hình ảnh dịch vụ
$nametype = "hinh-dich-vu";
$config['product'][$nametype]['title_main'] = "Hình ảnh dịch vụ";
$config['product'][$nametype]['check'] = array("hienthi" => hienthi);
$config['product'][$nametype]['view'] = true;
$config['product'][$nametype]['copy'] = true;
$config['product'][$nametype]['images'] = true;
$config['product'][$nametype]['show_images'] = true;
$config['product'][$nametype]['width'] = 270;
$config['product'][$nametype]['height'] = 270;
$config['product'][$nametype]['thumb'] = '100x100x1';
$config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';
