<?php
include "config.php";

/* Paginations */
include LIBRARIES . "class/class.PaginationsAjax.php";
$pagingAjax = new PaginationsAjax();
$pagingAjax->perpage = (!empty($_GET['perpage'])) ? htmlspecialchars($_GET['perpage']) : 1;
$eShow = htmlspecialchars($_GET['eShow']);
$idList = (!empty($_GET['idList'])) ? htmlspecialchars($_GET['idList']) : 0;
$idCat = (isset($_GET['idCat']) && $_GET['idCat'] > 0) ? htmlspecialchars($_GET['idCat']) : 0;
$p = (!empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
$start = ($p - 1) * $pagingAjax->perpage;
$pageLink = "api/product.php?perpage=" . $pagingAjax->perpage;
$tempLink = "";
$where = "";
$params = array();
/* Math url */
if ($idList > 0) {
    $tempLink .= "&idList=" . $idList;
    $where .= " and id_list = ?";
    array_push($params, $idList);
}
if ($idCat > 0) {
    $tempLink .= "&idCat=" . $idCat;
    $where .= " and id_cat = ?";
    array_push($params, $idCat);
}
$tempLink .= "&p=";
$pageLink .= $tempLink;

/* Get data */
$sql = "select name$lang,desc$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type,file_attach  from #_product where type='mon-an' $where and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc";
$sqlCache = $sql . " limit $start, $pagingAjax->perpage";
$items = $cache->get($sqlCache, $params, 'result', 7200);

/* Count all data */
$countItems = count($cache->get($sql, $params, 'result', 7200));

/* Get page result */
$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if ($countItems) { ?>
    <div class="grid-product-menu">
        <?php foreach ($items as $k => $v) { ?>
            <a class="box-product text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                <div class="item-product scale-img hover_sang2">
                    <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '290x287x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                </div>
            </a>
        <?php } ?>
    </div>
    <?php if ($k >= 7) { ?>
        <a href="mon-an">
            <div class="xemthem">
                Xem thêm
            </div>
        </a>
    <?php }
    ?>


<?php } ?>
<script>
    BLUEWEB_FRAMEWORK.toolTip();
</script>