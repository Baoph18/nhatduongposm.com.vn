<!-- Css Files -->
<?php
$css->set("css/animate.min.css");
$css->set("bootstrap/bootstrap.css");
$css->set("fontawesome611/all.css");
$css->set("confirm/confirm.css");
$css->set("holdon/HoldOn.css");
$css->set("holdon/HoldOn-style.css");
$css->set("mmenu/mmenu.css");
$css->set("fancybox3/jquery.fancybox.css");
$css->set("fancybox3/jquery.fancybox.style.css");
$css->set("photobox/photobox.css");
$css->set("slick/slick.css");
$css->set("slick/slick-theme.css");
$css->set("slick/slick-style.css");
$css->set("fotorama/fotorama.css");
$css->set("fotorama/fotorama-style.css");
$css->set("magiczoomplus/magiczoomplus.css");
// $css->set("datetimepicker/jquery.datetimepicker.css");
$css->set("owlcarousel2/owl.carousel.css");
$css->set("owlcarousel2/owl.theme.default.css");
$css->set("simplenotify/simple-notify.css");
$css->set("fileuploader/font-fileuploader.css");
$css->set("fileuploader/jquery.fileuploader.min.css");
$css->set("fileuploader/jquery.fileuploader-theme-dragdrop.css");
$css->set("bootstrap-datepicker/bootstrap-datepicker.min.css");
$css->set("css/style.css");
echo $css->get();
?>

<!-- Background -->
<?php
$bgbody = $d->rawQueryOne("select status, options, photo from #_photo where act = ? and type = ? limit 0,1", array('photo_static', 'background'));

if (!empty($bgbody['status']) && strpos($bgbody['status'], 'hienthi') !== false) {
    $bgbodyOptions = json_decode($bgbody['options'], true)['background'];
    if ($bgbodyOptions['type_show']) {
        echo '<style type="text/css">body{background: url(' . UPLOAD_PHOTO_L . $bgbody['photo'] . ') ' . $bgbodyOptions['repeat'] . ' ' . $bgbodyOptions['position'] . ' ' . $bgbodyOptions['attachment'] . ' ;background-size:' . $bgbodyOptions['size'] . '}</style>';
    } else {
        echo ' <style type="text/css">body{background-color:#' . $bgbodyOptions['color'] . '}</style>';
    }
}
?>

<!-- Js Google Analytic -->
<?= $func->decodeHtmlChars($setting['analytics']) ?>

<!-- Js Head -->
<?= $func->decodeHtmlChars($setting['headjs']) ?>