<div class="content-static">
    <div class="wrap-content">
        <div class="title-global title-global--center"><span class="ttl2"><?= $static['name' . $lang] ?></span></div>
        <?php if (!empty($static)) { ?>
            <div class="content-main w-clear wrap-content"><?= $func->decodeHtmlChars($static['content' . $lang]) ?></div>
        <?php } else { ?>
            <div class="alert alert-warning w-100" role="alert">
                <strong><?= dangcapnhatdulieu ?></strong>
            </div>
        <?php } ?>
    </div>
</div>
<?php if (!empty($faq) || !empty($tuvan)) { ?>
    <div class="wrap-tuvan">
        <div class="wrap-content">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="wrap-faq" id="cauhoithuonggap">
                        <div class="title-global">
                            <h2 class="ttl2">Câu hỏi thường gặp? </h2>
                            <p class="txt"><?=$optsetting['cauhoi']?></p>
                        </div>
                        <div class="box-faq">
                            <?php foreach($faq as $k=>$v){?>
                                <div class="js-faq">
                                    <p class="ttl js-faq-link <?=($k==0)?'is-active':''?>"><span><?=$k+1?>. <?=$v['name'.$lang]?></span></p>
                                    <div class="desc js-faq-content" style="<?=($k==0)?'display: block;':''?>">
                                        <?= $func->decodeHtmlChars($v['desc' . $lang]) ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="box-tuvan" id="cauhoithuonggap">
                        <div class="title-global">
                            <h2 class="ttl2">Bạn cần tư vấn ?</h2>
                            <p class="txt"><?=$optsetting['tuvan']?></p>
                        </div>
                        <div class="box-nhanvien">
                            <?php foreach($tuvan as $k=>$v){
                                $opttuvan = (!empty($v['options'])) ? json_decode($v['options'], true) : null;
                            ?>
                                <div class="item-nhanvien">
                                    <div class="img-thumb">
                                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '150x150x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                    </div>
                                    <div class="nv-info">
                                        <p class="nv-desc"><span><?=$v['desc'.$lang]?></span></p>
                                        <p class="nv-ttl"><span><?=$v['name'.$lang]?></span></p>
                                        <p class="nv-hotline"><a href="tel:<?= $func->parsePhone($opttuvan['hotline']) ?>">HOTLINE: <?=$opttuvan['hotline']?></a></p>
                                        <div class="nv-btn">
                                            <a href="tel:<?= $func->parsePhone($opttuvan['goingay']) ?>">Gọi ngay</a>
                                            <a href="https://zalo.me/<?= $func->parsePhone($opttuvan['zalo']) ?>">Chat Zalo</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (!empty($hoatdong)) { ?>
    <div class="wrap-hoatdong">
        <div class="wrap-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="title-global">
                        <div class="ttl"><?=$bvhoatdong['name'.$lang]?></div>
                        <div class="ttl2"><?=$bvhoatdong['desc'.$lang]?></div>
                        <div class="desc"><?=$bvhoatdong['content'.$lang]?></div>
                        <div class="box-btn">
                            <div class="c-btn"><a href="hoat-dong" target="_blank"><span>Tìm hiểu thêm</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8">
                    <div class="row lst-hoatdong">
                        <?php foreach($hoatdong as $k => $v) {?>
                            <div class="col-6 col-sm-6">
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
        </div>
    </div>
<?php } ?>