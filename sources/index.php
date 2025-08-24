<?php
if (!defined('SOURCES')) die("Error");
$default = $cache->get("select photo from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('default', 'photo_static'), 'fetch', 7200);
$popup = $cache->get("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('popup', 'photo_static'), 'fetch', 7200);
$partner = $cache->get("select name$lang, link, photo from #_photo where type = ? and find_in_set('hienthi',status) order by numb, id desc", array('doitac'), 'result', 7200);
$splist = $cache->get("select name$lang, slugvi, slugen, id, photo from #_product_list where type = ? and find_in_set('hienthi',status) and find_in_set('noibat',status) order by numb,id desc", array('san-pham'), 'result', 7200);
$spnb = $cache->get("select name$lang, slugvi, slugen, id, photo from #_product where type = ? and find_in_set('hienthi',status) and find_in_set('noibat',status) order by numb,id desc limit 10", array('san-pham'), 'result', 7200);

$tinhnang = $cache->get("select name$lang,desc$lang,photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('tinhnang'), 'result', 7200);
$trangchu = $cache->get("select name$lang, desc$lang, photo, content$lang from #_static where type = ? limit 0,1", array('trangchu'), 'fetch', 7200);
$bvtrangchu = $cache->get("select name$lang,desc$lang,photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('bvtrangchu'), 'result', 7200);
$baogia = $cache->get("select name$lang,desc$lang,photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('baogia'), 'result', 7200);

$newsnb = $cache->get("select name$lang, desc$lang, photo,date_created,slugvi, slugen from #_news where type = ? and find_in_set('hienthi',status) and find_in_set('noibat',status) order by numb,id desc limit 10", array('tin-tuc'), 'result', 7200);

/* SEO */
$seoDB = $seo->getOnDB(0, 'setting', 'update', 'setting');
if (!empty($seoDB['title' . $seolang])) $seo->set('h1', $seoDB['title' . $seolang]);
if (!empty($seoDB['title' . $seolang])) $seo->set('title', $seoDB['title' . $seolang]);
if (!empty($seoDB['keywords' . $seolang])) $seo->set('keywords', $seoDB['keywords' . $seolang]);
if (!empty($seoDB['description' . $seolang])) $seo->set('description', $seoDB['description' . $seolang]);
$seo->set('url', $func->getPageURL());
$imgJson = (!empty($default['options'])) ? json_decode($default['options'], true) : null;
if (empty($imgJson) || ($imgJson['p'] != $default['photo'])) {
    $imgJson = $func->getImgSize($default['photo'], UPLOAD_PHOTO_L . $default['photo']);
    $seo->updateSeoDB(json_encode($imgJson), 'photo', $default['id']);
}
if (!empty($imgJson)) {
    $seo->set('photo', $configBase . THUMBS . '/' . $imgJson['w'] . 'x' . $imgJson['h'] . 'x2/' . UPLOAD_PHOTO_L . $default['photo']);
    $seo->set('photo:width', $imgJson['w']);
    $seo->set('photo:height', $imgJson['h']);
    $seo->set('photo:type', $imgJson['m']);
}
