<div class="archive-product">
    <div class="wrap-content">
        <div class="title-global title-global--center">
            <h2 class="ttl2"><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></h2>
        </div>
        <div class="content-main w-clear">
            <?php if (!empty($product)) { ?>
                <div class="row">
                    <?php foreach ($product as $k => $v) { ?>
                        <div class="col-6 col-sm-6 col-md-3">
                            <div class="box-product">
                                <div class="product">
                                    <div class="text-decoration-none">
                                        <p class="pic-product scale-img">
                                            <a class="scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                                <?= $func->getImage(['sizes' => '261x229x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                            </a>
                                        </p>
                                        <h3 class="name-product text-split">
                                            <a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?> "><?= $v['name' . $lang] ?> </a>
                                        </h3>
                                        <a class="baogia-product" href="tel:<?= $func->parsePhone($optsetting['hotline']) ?>"><span>Báo giá:</span><b><?=$optsetting['hotline']?></b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <div class="alert alert-warning w-100" role="alert">
                    <strong><?= khongtimthayketqua ?></strong>
                </div>
            <?php } ?>
            <div class="clear"></div>
            <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
        </div>
        <?php if((isset($productDesc['content'.$lang]) && $productDesc['content'.$lang] != '')) { ?>
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-9">
                    <div class="article__content long" id="toc-content">
                        <?= $func->decodeHtmlChars($productDesc['content' . $lang]) ?>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-lg-3">
                    <div class="box-detail box-detail2">
                        <div class="title-left">MỤC LỤC</div>
                        <div class="meta-toc">
                            <div class="box-readmore">
                                <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
                            </div>
                        </div>
                        <div class="title-left">THÔNG TIN LIÊN HỆ</div>
                        <?php if (count($bannersp)) { ?>
                            <?php foreach ($bannersp as $v) { ?>
                                <a class="banner-pd" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
                                    <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                </a>
                            <?php } ?>
                        <?php } ?>

                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include TEMPLATE . LAYOUT . "bottom.php";?>