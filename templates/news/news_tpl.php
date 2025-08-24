<div class="wrap-news">
    <div class="wrap-content">
        <div class="title-global title-global--center">
            <h2 class="ttl2"><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></h2>
        </div>

        <div class="content-main row">
            <?php if (!empty($news)) {
                foreach ($news as $k => $v) { ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 item-news-mb">
                        <a class="item-news" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                            <div class="img-thumb">
                                <span class="scale-img">
                                    <?= $func->getImage(['class' => 'w-100', 'sizes' => '405x269x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                </span>
                            </div>
                            <div class="news-info">
                                <div class="cate"><?=$titleMain?> <span class="date"><?= date("d/m/Y", $v['date_created']) ?></span></div>
                                <h3 class="news-name">
                                    <?= $v['name' . $lang] ?>
                                </h3>
                                <div class="desc"><?= $v['desc' . $lang] ?></div>
                                <div class="timhieu"><span>Tìm hiểu thêm</span></div>
                            </div>
                        </a>
                    </div>
                <?php }
            } else { ?>
                <div class="col-12">
                    <div class="alert alert-warning w-100" role="alert">
                        <strong><?= khongtimthayketqua ?></strong>
                    </div>
                </div>
            <?php } ?>
            <div class="clear"></div>
            <div class="col-12">
                <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
            </div>
        </div>
    </div>
</div>
