<div class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-sm-12 col-md-6 cont-foot1">
               <div>
                    <div class="title-footer"><?=$footer['name' . $lang]?></div>
                    <div class="content-footer">
                        <?= $func->decodeHtmlChars($footer['content' . $lang]) ?>
                    </div>
               </div>

            </div>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <div class="col-12 col-sm-5 col-md-5 cont-foot2">
                <div class="title-footer">TỔNG ĐÀI HỖ TRỢ </div>
                <div class="info-footer">
                    <div class="d-flex   info-footer--v2">
                         <div class="info-box2">
                            <div class="icon-circle">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="info-text">
                                <div>Tư vấn trực tiếp</div>
                                <span><?= $optsetting['phone'] ?></span>
                            </div>
                        </div>

                        <div class="info-box">
                            <div class="icon-circle">
                                <i class="fa-solid fa-mobile-screen"></i>
                            </div>
                            <div class="info-text">
                                <div>Khiếu nại &amp; Bảo hành</div>
                                <span><?= $optsetting['phone2'] ?></span>
                            </div>
                        </div>
                        <div class="footer-note">
                             Phục vụ 24/7 (cả ngày lễ và chủ nhật)
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 cont-foot4">
               <div class="col-inner">
                    <div class="title-footer">SẢN PHẨM</div>
                    <ul>
                    <?php foreach($splistmenu as $v) {?>
                        <li>
                            <a href="<?= $v[$sluglang] ?>"><?= $v['name' . $lang] ?> </a>
                        </li>
                    <?php } ?>
                    </ul>

		        </div>
            </div>
            <d class="col-12 col-sm-12 col-md-6 cont-foot3">
                <div class="title-footer">CHÍNH SÁCH</div>
                    <ul class="mb24">
                        <?php foreach($chinhsach as $k=>$v){if($k<6){?>
                            <li><a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><span class="CS-footer">- <?=$v['name'.$lang]?></span></a></li>
                        <?php } } ?>
                    </ul>
            </div>
        </div>
        <a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= $func->parsePhone($optsetting['zalo']) ?>">
            <div class="animated infinite zoomIn kenit-alo-circle"></div>
            <div class="animated infinite pulse kenit-alo-circle-fill"></div>
            <i><img src="assets/images/zl.png" alt="Zalo"></i>
        </a>
        <div class="hotline-fix">
            <a href="tel:<?= $func->parsePhone($optsetting['hotline']) ?>" class="text-decoration-none">HOTLINE<span><?=$optsetting['hotline']?></span></a>
        </div>
    </div>
</div>