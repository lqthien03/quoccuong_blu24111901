<?php
include "config.php";

/* Paginations */
include LIBRARIES . "class/class.PaginationsAjax.php";
$pagingAjax = new PaginationsAjax();
$pagingAjax->perpage = (!empty($_GET['perpage'])) ? htmlspecialchars($_GET['perpage']) : 1;
$eShow = htmlspecialchars($_GET['eShow']);
$Sort = (!empty($_GET['Sort'])) ? htmlspecialchars($_GET['Sort']) : '';
$idList = (!empty($_GET['idList'])) ? htmlspecialchars($_GET['idList']) : 0;
$idCat = (isset($_GET['idCat']) && $_GET['idCat'] > 0) ? htmlspecialchars($_GET['idCat']) : 0;
$p = (!empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
$start = ($p - 1) * $pagingAjax->perpage;
$pageLink = "api/sortproduct.php?perpage=" . $pagingAjax->perpage;
$tempLink = "";
$where = "";
$params = array();
/* Math url */
if ($idList > 0) {
    $tempLink .= "&idList=" . $idList;
    $where .= " and id_list = " . $idList;
}
if ($idCat > 0) {
    $tempLink .= "&idCat=" . $idCat;
    $where .= " and id_cat = " . $idCat;
}
if ($Sort == 'name:asc') {
    $where .= " order by namevi asc";
}
if ($Sort == 'name:desc') {
    $where .= " order by namevi desc";
}
if ($Sort == 'price_min:asc') {
    $where .= " order by regular_price asc";
}
if ($Sort == 'price_min:desc') {
    $where .= " order by regular_price desc";
}

$tempLink .= "&p=";
$pageLink .= $tempLink;

/* Get data */
$sql = "select name$lang,desc$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type,file_attach  from #_product where type='thuc-don'  and find_in_set('noibat',status) and find_in_set('hienthi',status) $where";
$sqlCache = $sql . " limit $start, $pagingAjax->perpage";
$items = $cache->get($sqlCache, $params, 'result', 7200);
/* Count all data */
$countItems = count($cache->get($sql, $params, 'result', 7200));

/* Get page result */
$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if ($countItems) { ?>
    <div class="box-main-grid">
        <?php foreach ($items as $k => $v) { ?>
            <a href="<?= $v[$sluglang] ?>" class="item-menu" data-aos="fade-up" data-aos-duration="1000">
                <div class="menu-img">
                    <div class="scale-img">
                        <?= $func->getImage(['isLazy' => false, 'class' => 'lazy', 'sizes' => '365x285x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </div>
                </div>
                <div class="menu-info">
                    <h3 class="menu-name text-split-1"><?= $v['name' . $lang] ?></h3>
                    <div class="menu-price">
                        <p><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></p>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>
    <div class="pagination-ajax"><?= $pagingItems ?></div>
<?php } ?>
<script>
    BLUEWEB_FRAMEWORK.toolTip();
</script>