<?php
if (!defined('SOURCES')) die("Error");
/* static */
$popup = $cache->get("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('popup', 'photo_static'), 'fetch', 7200);

/* multi */
$gioithieu = $d->rawQueryOne("select name$lang,desc$lang,content$lang,photo,photo1 from #_static where type = ? limit 0,1", array('gioi-thieu'));
$menu_noibat = $d->rawQuery("select name$lang,desc$lang,photo, regular_price, slugvi, slugen, id from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('thuc-don'));
$menu_chinh = $d->rawQuery("select name$lang,desc$lang,photo, regular_price, slugvi, slugen, id from #_product where type = ? and find_in_set('chinh',status) and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('thuc-don'));
$tintuc = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('tin-tuc'));
$tieuchi = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('tieu-chi'));
$dichvu = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('dich-vu'));
$feedback = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang,content$lang, date_created, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('feedback'));
$dichvu_img = $d->rawQuery("select id, name$lang, slugvi, slugen, photo from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('hinh-dich-vu'));
$hinhanh = $d->rawQuery("select id, name$lang, slugvi, slugen, photo from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('hinh-anh'));
$dichvuNoibat = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang,icon, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('dich-vu'));
$tiktok = $d->rawQuery("select name$lang, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('tiktok'));
$video = $cache->get("select name$lang, desc$lang, link_video,photo from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('video'), 'result', 7200);
/* SEO */
$seopage = $d->rawQueryOne("select * from #_seopage where type = ? limit 0,1", array('trang-chu'));
$seo->set('h1', $seopage['title' . $seolang]);
if (!empty($seopage['title' . $seolang])) $seo->set('title', $seopage['title' . $seolang]);
else $seo->set('title', $titleMain);
if (!empty($seopage['keywords' . $seolang])) $seo->set('keywords', $seopage['keywords' . $seolang]);
if (!empty($seopage['description' . $seolang])) $seo->set('description', $seopage['description' . $seolang]);
$seo->set('url', $func->getPageURL());
$imgJson = (!empty($seopage['options'])) ? json_decode($seopage['options'], true) : null;
if (!empty($seopage['photo'])) {
    if (empty($imgJson) || ($imgJson['p'] != $seopage['photo'])) {
        $imgJson = $func->getImgSize($seopage['photo'], UPLOAD_SEOPAGE_L . $seopage['photo']);
        $seo->updateSeoDB(json_encode($imgJson), 'seopage', $seopage['id']);
    }
    if (!empty($imgJson)) {
        $seo->set('photo', $configBase . THUMBS . '/' . $imgJson['w'] . 'x' . $imgJson['h'] . 'x2/' . UPLOAD_SEOPAGE_L . $seopage['photo']);
        $seo->set('photo:width', $imgJson['w']);
        $seo->set('photo:height', $imgJson['h']);
        $seo->set('photo:type', $imgJson['m']);
    }
}
