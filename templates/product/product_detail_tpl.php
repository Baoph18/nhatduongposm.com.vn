<div class="wrap-content">
    <div class="grid-pro-detail w-clear">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-9">
                <div class="box-detail">
                    <div class="row">
                        <div class="left-pro-detail col-md-6 col-lg-6 mb-4">

                            <a id="Zoom-1" class="MagicZoom"
                                data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;"
                                href="<?= ASSET . THUMBS ?>/560x560x2/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>"
                                title="<?= $rowDetail['name' . $lang] ?>">
                                <?= $func->getImage(['isLazy' => false, 'sizes' => '560x560x2', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
                            </a>
                            <?php if ($rowDetailPhoto) {
                                if (count($rowDetailPhoto) > 0) { ?>
                                    <div class="gallery-thumb-pro">
                                        <div class="owl-page owl-carousel owl-theme owl-pro-detail"
                                            data-xsm-items="2:0"
                                            data-sm-items="3:0"
                                            data-md-items="3:0"
                                            data-lg-items="4:0"
                                            data-xlg-items="4:0"
                                            data-rewind="1"
                                            data-autoplay="1"
                                            data-loop="0"
                                            data-lazyload="0"
                                            data-mousedrag="0"
                                            data-touchdrag="0"
                                            data-smartspeed="800"
                                            data-autoplayspeed="800"
                                            data-autoplaytimeout="5000"
                                            data-dots="0"
                                            data-animations="animate__fadeInDown, animate__backInUp, animate__rollIn, animate__backInRight, animate__zoomInUp, animate__backInLeft, animate__rotateInDownLeft, animate__backInDown, animate__zoomInDown, animate__fadeInUp, animate__zoomIn"
                                            data-nav="1"
                                            data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                                            data-navcontainer=".control-slideshow">
                                            <div>
                                                <a class="thumb-pro-detail" data-zoom-id="Zoom-1"
                                                    href="<?= ASSET . THUMBS ?>/560x560x2/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>"
                                                    title="<?= $rowDetail['name' . $lang] ?>">
                                                    <?= $func->getImage(['isLazy' => false, 'sizes' => '560x560x2', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
                                                </a>
                                            </div>
                                            <?php foreach ($rowDetailPhoto as $v) { ?>
                                                <div>
                                                    <a class="thumb-pro-detail" data-zoom-id="Zoom-1"
                                                        href="<?= ASSET . THUMBS ?>/560x560x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>"
                                                        title="<?= $rowDetail['name' . $lang] ?>">
                                                        <?= $func->getImage(['isLazy' => false, 'sizes' => '560x560x2', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="control-pro-detail control-owl transition"></div>
                                    </div>
                            <?php }
                            } ?>
                        </div>

                        <div class="right-pro-detail col-md-6 col-lg-6 mb-4">
                            <div class="breadcrumb-product">
                                <?php include TEMPLATE . LAYOUT . "breadcrumb.php" ?>
                            </div>
                            <h2 class="title-pro-detail"><?= $rowDetail['name' . $lang] ?></h2>
                            <!-- <div class="desc-pro-detail"><?= nl2br($func->decodeHtmlChars($rowDetail['desc' . $lang])) ?>
                            </div> -->
                            <div class="box-thongso">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th>Bảo hành</th>
                                            <td><?= $optdetail['baohanh'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Kích thước</th>
                                            <td><?= $optdetail['kichthuoc'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Khối lượng</th>
                                            <td><?= $optdetail['khoiluong'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Xuất xứ</th>
                                            <td><?= $optdetail['xuatxu'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Nhà sản xuất</th>
                                            <td><?= $optdetail['nhasanxuat'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Vận chuyển</th>
                                            <td><?= $optdetail['vanchuyen'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="zalocall">
                                <div class="buttonzalo"><a href="https://zalo.me/<?= $func->parsePhone($optsetting['zalo']) ?>">Chat Zalo</a></div>
                                <div class="buttoncall"><a href="tel:<?= $func->parsePhone($optsetting['hotline']) ?>"><?= $optsetting['hotline'] ?></a></div>
                            </div>


                        </div>
                    </div>


                </div>
                <div class="bottom-product-detail">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-lg-9">
                            <div class="tags-pro-detail w-clear">
                                <?php if (!empty($rowTags)) {
                                    foreach ($rowTags as $v) { ?>
                                        <a class="btn btn-sm btn-danger rounded" href="<?= $v[$sluglang] ?>"
                                            title="<?= $v['name' . $lang] ?>"><i class="fas fa-tags"></i><?= $v['name' . $lang] ?></a>
                                <?php }
                                } ?>
                            </div>

                            <div class="tabs-pro-detail">
                                <ul class="nav nav-tabs" id="tabsProDetail" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="info-pro-detail-tab" data-toggle="tab"
                                            href="#info-pro-detail" role="tab"><?= thongtinsanpham ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="commentfb-pro-detail-tab" data-toggle="tab"
                                            href="#commentfb-pro-detail" role="tab"><?= binhluan ?></a>
                                    </li>
                                </ul>
                                <div class="tab-content pt-4 pb-4" id="tabsProDetailContent">
                                    <div class="tab-pane fade show active" id="info-pro-detail" role="tabpanel">
                                        <div id="toc-content" class="cms-content">
                                            <?= $func->decodeHtmlChars($rowDetail['content' . $lang]) ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="commentfb-pro-detail" role="tabpanel">
                                        <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>" data-numposts="3"
                                            data-colorscheme="light" data-width="100%"></div>
                                    </div>
                                </div>
                            </div>
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
                    <div class="title-global">
                        <div class="ttl2"><?= sanphamcungloai ?></div>
                    </div>
                    <div class="content-main row">
                        <?php if (!empty($product)) {
                            foreach ($product as $k => $v) { ?>
                                <div class="col-6 col-sm-6 col-md-4">
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
                                                <a class="baogia-product" href="tel:<?= $func->parsePhone($optsetting['hotline']) ?>"><span>Báo giá:</span><b><?= $optsetting['hotline'] ?></b></a>
                                            </div>
                                        </div>
                                    </div>
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
            <div class="col-12 col-sm-12 col-lg-3">
                <div class="box-detail box-detail-sticky">
                    <!-- <div class="box-detail-sticky"> -->
                        <div class="box-tuvan" id="cauhoithuonggap">
                            <div class="title-global">
                                <h2 class="ttl3">Bạn cần tư vấn ?</h2>
                                <p class="txt"><?=$optsetting['tuvan']?></p>
                            </div>
                            <div class="box-nhanvien">
                                <?php foreach($tuvan as $k=>$v){
                                    $opttuvan = (!empty($v['options'])) ? json_decode($v['options'], true) : null;
                                ?>
                                    <div class="item-nhanvien item-nhanvien--v2">
                                        <div class="d-flex">
                                            <div class="img-thumb">
                                                <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '150x150x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                            </div>
                                            <div class="nv-info">
                                                <p class="nv-desc"><span><?=$v['desc'.$lang]?></span></p>
                                                <p class="nv-ttl"><span><?=$v['name'.$lang]?></span></p>
                                                <p class="nv-hotline"><a href="tel:<?= $func->parsePhone($opttuvan['hotline']) ?>">HOTLINE: <?=$opttuvan['hotline']?></a></p>

                                            </div>
                                        </div>
                                        <div class="nv-btn">
                                            <a href="tel:<?= $func->parsePhone($opttuvan['goingay']) ?>">Gọi ngay</a>
                                            <a href="https://zalo.me/<?= $func->parsePhone($opttuvan['zalo']) ?>">Chat Zalo</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>



    </div>

</div>