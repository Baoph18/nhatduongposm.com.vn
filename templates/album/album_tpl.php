<?php
$hoatdongsub = $cache->get("select photo from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('hoatdong'), 'result', 7200);
if (!empty($hoatdongsub)) { ?>
<div class="wrap-why">
    <div class="wrap-content">
        <div class="title-global">
            <div class="box-ttl">
                <div class="ttl">BĂNG KEO THẦN SƠN</div>
                <div class="ttl2"><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></div>
            </div>
        </div>
        <div class="row lst-hoatdong">
            <?php foreach($hoatdongsub as $k => $v) {?>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="item-hoatdong">
                        <a data-fancybox href="<?= UPLOAD_PHOTO_L.$v['photo'] ?>" title="<?= $v['name' . $lang] ?>">
                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '470x500x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</div>
<?php } ?>
