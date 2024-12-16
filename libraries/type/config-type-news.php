<?php
/* Tin tức */
$nametype = "tieu-chi";
$config['news'][$nametype]['title_main'] = "Tiêu chí";
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("hienthi" => hienthi);
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['width'] = 42;
$config['news'][$nametype]['height'] = 42;
$config['news'][$nametype]['thumb'] = '42x42x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* Dịch vụ */
$nametype = "dich-vu";
$config['news'][$nametype]['title_main'] = "Dịch vụ";
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("noibat" => noibat, "hienthi" => hienthi);
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['width'] = 42;
$config['news'][$nametype]['height'] = 42;
$config['news'][$nametype]['thumb'] = '42x42x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* Feedback */
$nametype = "feedback";
$config['news'][$nametype]['title_main'] = "Feedback";
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("hienthi" => hienthi);
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['width'] = 70;
$config['news'][$nametype]['height'] = 70;
$config['news'][$nametype]['thumb'] = '70x70x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

$nametype = "tin-tuc";
$config['news'][$nametype]['title_main'] = tintuc;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("danhmucnoibat" => "Danh mục", "noibat" => noibat, "hienthi" => hienthi);
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['schema'] = true;
$config['news'][$nametype]['width'] = 360;
$config['news'][$nametype]['height'] = 420;
$config['news'][$nametype]['thumb'] = '360x420x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* Chính sách */
$nametype = "chinh-sach";
$config['news'][$nametype]['title_main'] = chinhsach;
$config['news'][$nametype]['check'] = array("hienthi" => hienthi);
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['schema'] = true;
$config['news'][$nametype]['width'] = 576;
$config['news'][$nametype]['height'] = 432;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';


/* Quản lý mục (Không cấp) */
if (isset($config['news'])) {
    foreach ($config['news'] as $key => $value) {
        if (!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false)) {
            $config['shownews'] = 1;
            break;
        }
    }
}
