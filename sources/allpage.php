<?php
if (!defined('SOURCES')) die("Error");

/* static */
$banner = $cache->get("select photo from #_photo where type = ? and act = ? limit 0,1", array('banner', 'photo_static'), 'fetch', 7200);
$copyright = $cache->get("select name$lang from #_static where type = ? limit 0,1", array('copyright'), 'fetch', 7200);
$favicon = $cache->get("select photo from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('favicon', 'photo_static'), 'fetch', 7200);
$logo = $cache->get("select id, photo, options from #_photo where type = ? and act = ? limit 0,1", array('logo', 'photo_static'), 'fetch', 7200);
$mocua = $cache->get("select id, photo, options from #_photo where type = ? and act = ? limit 0,1", array('thoi-gian-mo-cua', 'photo_static'), 'fetch', 7200);
$slogan = $d->rawQueryOne("select name$lang from #_static where type = ? limit 0,1", array('slogan'));
$footer = $cache->get("select name$lang,desc$lang, content$lang from #_static where type = ? limit 0,1", array('footer'), 'fetch', 7200);
$chungnhan = $cache->get("select name$lang,desc$lang, content$lang from #_static where type = ? limit 0,1", array('chung-nhan'), 'fetch', 7200);
/* multi */
$tagsProduct = $d->rawQuery("select name$lang, slugvi, slugen, id from #_tags where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('san-pham'));
$tagsNews = $d->rawQuery("select name$lang, slugvi, slugen, id from #_tags where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('tin-tuc'));
$policy = $d->rawQuery("select name$lang, slugvi, slugen, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('chinh-sach'));
$social = $d->rawQuery("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('social'));
$newsListMenu = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_list where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('tin-tuc'));
$thucdonListMenu = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_list where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('thuc-don'));
$productHot = $d->rawQuery("select id, name$lang,desc$lang, slugvi, slugen, photo, regular_price, sale_price, discount,file_attach  from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('san-pham'));
$map_nb = $cache->get("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo,numb from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('chi-nhanh'), 'result', 7200);
$dichvuList = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_list where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('dich-vu'));
$sanphamList = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_list where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('san-pham'));

// 
$cauhoi = $d->rawQuery("select name$lang,content$lang, id from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('cau-hoi-thuong-gap'));
$slider = $cache->get("select name$lang, desc$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('slide'), 'result', 7200);
$partner = $d->rawQuery("select name$lang, link, photo from #_photo where type = ? and find_in_set('hienthi',status) order by numb, id desc", array('doitac'));
/* Get statistic */
$counter = $statistic->getCounter();
$online = $statistic->getOnline();

/* Newsletter */
if (!empty($_POST['submit-newsletter'])) {
    $responseCaptcha = $_POST['recaptcha_response_newsletter'];
    $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
    $scoreCaptcha = (!empty($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;
    $actionCaptcha = (!empty($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';
    $testCaptcha = (!empty($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;
    $dataNewsletter = (!empty($_POST['dataNewsletter'])) ? $_POST['dataNewsletter'] : null;

    /* Valid data */
    if (empty($dataNewsletter['email'])) {
        $flash->set('error', emailkhongduoctrong);
    }

    if (!empty($dataNewsletter['email']) && !$func->isEmail($dataNewsletter['email'])) {
        $flash->set('error', emailkhonghople);
    }

    $error = $flash->get('error');

    if (!empty($error)) {
        $func->transfer($error, $configBase, false);
    }

    /* Save data */
    if (($scoreCaptcha >= 0.5 && $actionCaptcha == 'Newsletter') || $testCaptcha == true) {
        foreach ($dataNewsletter as $column => $value) {
            $dataNewsletter[$column] = htmlspecialchars($value);
        }

        if ($d->insert('newsletter', $dataNewsletter)) {
            $func->transfer(dangkynhantinthanhcong, $configBase);
        } else {
            $func->transfer(dangkynhantinthatbai, $configBase, false);
        }
    } else {
        $func->transfer(dangkynhantinthatbai, $configBase, false);
    }
}
