<?php
if (!defined('SOURCES')) die("Error");

/* SEO */
$seo->set('title', $titleMain);

/* breadCrumbs */
if (!empty($titleMain)) $breadcr->set($com, $titleMain);
$breadcrumbs = $breadcr->get();


/* Data */
$dataRoom = (!empty($_POST['dataRoom'])) ? $_POST['dataRoom'] : null;
$checkin = (!empty($dataRoom['checkin'])) ? htmlspecialchars($dataRoom['checkin']) : '';
$checkout = (!empty($dataRoom['checkout'])) ? htmlspecialchars($dataRoom['checkout']) : '';
$loaiphong = (!empty($dataRoom['loaiphong'])) ? htmlspecialchars($dataRoom['loaiphong']) : '';
$sokhach = (!empty($dataRoom['sokhach'])) ? htmlspecialchars($dataRoom['sokhach']) : '';


$rs_room = $d->rawQueryOne("select name$lang,content$lang, photo, options, discount, sale_price, regular_price from #_product where type = ? and id = ? and find_in_set('hienthi',status) limit 0,1", array('san-pham',$loaiphong));
