<?php
include "config.php";

/* Paginations */
include LIBRARIES . "class/class.PaginationsAjax.php";
$pagingAjax = new PaginationsAjax();
$pagingAjax->perpage = (!empty($_GET['perpage'])) ? htmlspecialchars($_GET['perpage']) : 1;
$isPerpage = htmlspecialchars($_GET['isPerpage']);
$eShow = htmlspecialchars($_GET['eShow']);
$noibat = htmlspecialchars($_GET['noibat']);
$idList = (!empty($_GET['idList'])) ? htmlspecialchars($_GET['idList']) : 0;
$p = (!empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
$start = ($p - 1) * $pagingAjax->perpage;
$pageLink = "api/product.php?perpage=" . $pagingAjax->perpage;
$tempLink = "";
$where = "";
$params = array();

$splistnb2 = $cache->get("select name$lang, slugvi, slugen, id from #_product_list where type = ? and id = ? order by numb,id desc", array('san-pham',$idList), 'fetch', 7200);


/* Math url */
if ($idList) {
    $tempLink .= "&idList=" . $idList;
    $where .= " and id_list = ?";
    array_push($params, $idList);
}
if ($noibat==1) {
    $where .= " and find_in_set('noibat',status)";
}
$tempLink .= "&p=";
$pageLink .= $tempLink;

/* Get data */
$sql = "select name$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type from #_product where type='san-pham' $where and find_in_set('hienthi',status) order by numb,id desc";
$sqlCache = $sql . " limit $start, $pagingAjax->perpage";
$items = $cache->get($sqlCache, $params, 'result', 7200);

/* Count all data */
$countItems = count($cache->get($sql, $params, 'result', 7200));

/* Get page result */
$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if ($countItems) { ?>
    <div class="grid-page w-clear">
        <?php foreach ($items as $k => $v) { ?>
            <div class="product <?=($isPerpage==1)?'product--v2':''?>">
                <a class="box-product text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                    <p class="pic-product scale-img">
                        <?= $func->getImage(['sizes' => '270x270x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </p>
                    <h3 class="name-product text-split"><?= $v['name' . $lang] ?></h3>
                    <p class="price-product">
                        <?php if ($v['discount']) { ?>
                            <span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>
                            <span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
                            <span class="price-per"><?= '-' . $v['discount'] . '%' ?></span>
                        <?php } else { ?>
                            <span class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
                        <?php } ?>
                    </p>
                </a>
            </div>
        <?php } ?>
    </div>

    <?php if ($isPerpage==1) { ?>
    <div class="pagination-ajax"><?= $pagingItems ?></div>
<?php } } ?>