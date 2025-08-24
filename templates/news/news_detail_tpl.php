<div class="detail-content">
    <div class="wrap-content">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-9">
                <div class="title-main"><span><?= $rowDetail['name' . $lang] ?></span></div>
                <div class="time-main"><i class="fas fa-calendar-week"></i><span><?= ngaydang ?>: <?= date("d/m/Y h:i A", $rowDetail['date_created']) ?></span></div>
                <?php if (!empty($rowDetail['content' . $lang])) { ?>
                    <div class="cont-detail cms-content">
                        <div class="content-main w-clear" id="toc-content"><?= $func->decodeHtmlChars($rowDetail['content' . $lang]) ?></div>
                        <div class="share">
                            <b><?= chiase ?>:</b>
                            <div class="social-plugin w-clear">
                                <?php
                                $params = array();
                                $params['oaid'] = $optsetting['oaidzalo'];
                                echo $func->markdown('social/share', $params);
                                ?>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-warning w-100" role="alert">
                        <strong><?= noidungdangcapnhat ?></strong>
                    </div>
                <?php } ?>
            </div>
            <div class="col-12 col-sm-12 col-lg-3">
                <div class="meta-toc">
                    <div class="box-readmore">
                        <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="box-detail">
        <div class="wrap-content">
            <div class="title-global">
                <div class="ttl2">Bài viết khác</div>
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
</div>