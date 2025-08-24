<div class="wrap-content">
    <form class="form-cart validation-cart" novalidate method="post" action="thanh-toan" enctype="multipart/form-data">
        <div class="wrap-cart">
            <?= $flash->getMessages("frontend") ?>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="top-room">
                        <div class="section-room">
                            <div class="info-room">
                                <div class="img-room">
                                    <?= $func->getImage(['isLazy' => false, 'sizes' => '80x80x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rs_room['photo'], 'alt' => $rs_room['name' . $lang]]) ?>
                                </div>
                                <div class="content-room">
                                    <h3 class="ttl"><?=$rs_room['name'.$lang]?></h3>
                                    <div class="rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                    <div class="room-address"><?=$optsetting['address']?></div>
                                </div>
                            </div>
                            <div class="detail-book detail-book-3item">
                                <div class="item">
                                    <b>Nhận phòng</b>
                                    <?=$checkin?>
                                </div>
                                <div class="item">
                                    <b>Trả phòng</b>
                                    <?=$checkout?>
                                </div>
                                <div class="item">
                                    <b>Số đêm</b>
                                    <?=$checkout-$checkin?>
                                </div>
                            </div>
                            <div class="detail-book">
                                <div class="item">
                                    <b>Loại phòng</b>
                                    <?=$rs_room['name'.$lang]?>
                                </div>
                            </div>
                            <div class="detail-book">
                                <div class="item">
                                    <b>Đủ chỗ ngủ cho</b>
                                    <?=$sokhach?>
                                </div>
                            </div>
                        </div>
                        <div class="section-room">
                            <p class="title-room2">Chi tiết giá</p>
                            <div class="item-detail-price-room">
                                <div class="detail-price-room">
                                    <div>1 phòng x <?=$checkout-$checkin?> đêm</div>
                                    <?php
                                        if ($rs_room['sale_price']) $price = $rs_room['sale_price'];
                                        else $price = $rs_room['regular_price'];
                                        $totaldem = $checkout-$checkin;
                                        $price_re = $totaldem*$rs_room['regular_price'];
                                        $price_giam = $totaldem*$rs_room['sale_price'];
                                    ?>
                                    <div class="price-all">
                                        <?php  if ($rs_room['sale_price']) {?>
                                            <span class="price-all-discount">- <?= $rs_room['discount'] . '%' ?></span><span class="price-all-nodiscount"><?=$func->formatMoney($rs_room['regular_price']*($checkout-$checkin));?></span>
                                        <?php } ?>

                                        <div><?=$func->formatMoney($price*($checkout-$checkin));?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-detail-price-room detail-price-room-2">
                                <div class="ttl2">Tổng tiền thanh toán</div>
                                <div class="price-all2"> <div><?=$func->formatMoney($price*($checkout-$checkin));?></div></div>

                            </div>
                            <?php if ($rs_room['discount']) { ?>
                                <div class="detail-emp"><i class="fa-duotone fa-piggy-bank"></i> Chúc mừng! Bạn đã tiết kiệm được <b><?=$func->formatMoney($totaldem*($rs_room['regular_price']-$rs_room['sale_price']));?></b></div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="bottom-room">
                        <div class="section-room">
                            <p class="title-room2">Thông tin phòng</p>
                            <div class="top-room01">
                                <div class="img-room">
                                    <?php if ($rs_room['discount']) { ?>
                                        <span class="price-per">Giảm <?= $rs_room['discount'] . '%' ?></span>
                                    <?php } ?>
                                    <?= $func->getImage(['isLazy' => false, 'sizes' => '700x250x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rs_room['photo'], 'alt' => $rs_room['name' . $lang]]) ?>
                                </div>
                                <div class="ttl"><?=$rs_room['name' . $lang]?></div>
                                <div class="desc"> <?= $func->decodeHtmlChars($rs_room['content' . $lang]) ?></div>
                                <div class="cont">
                                    <div class="ttl-uudai"><?=$uudai['name' . $lang]?></div>
                                    <div class="desc-uudai">
                                        <?= $func->decodeHtmlChars($uudai['content' . $lang]) ?>
                                    </div>
                                </div>
                                <div class="detail-emp"><i class="fa-regular fa-check"></i> Phòng trống sẽ được xác nhận sớm.</div>
                            </div>
                        </div>
                        <div class="section-room">
                            <p class="title-room2">Thông tin liên hệ</p>
                            <div class="information-room">
                                <div class="input-room">
                                    <input type="text" class="form-control text-sm" id="fullname" name="dataRoom[fullname]" placeholder="<?= hoten ?>" value="<?= (!empty($flash->has('fullname'))) ? $flash->get('fullname') : '' ?>" required />
                                    <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
                                </div>
                                <div class="form-row">
                                    <div class="input-room col-md-6">
                                        <input type="email" class="form-control text-sm" id="email" name="dataRoom[email]" placeholder="Email" value="<?= (!empty($flash->has('email'))) ? $flash->get('email') : '' ?>" required />
                                        <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                                    </div>
                                    <div class="input-room col-md-6">
                                        <input type="number" class="form-control text-sm" id="phone" name="dataRoom[phone]" placeholder="<?= sodienthoai ?>" value="<?= (!empty($flash->has('phone'))) ? $flash->get('phone') : '' ?>" required />
                                        <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>
                                    </div>
                                </div>
                                <div class="input-room">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Tôi đặt phòng giúp cho người khác." name ="dataRoom[content]" id="dataRoom[content]">
                                        <label class="form-check-label" for="dataRoom[content]">
                                            Tôi đặt phòng giúp cho người khác.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="<?=$func->formatMoney($price*($checkout-$checkin));?>" name="dataRoom[total_price2]">
                            <input type="hidden" value="<?=$price*($checkout-$checkin)?>" name="dataRoom[total_price]">
                            <input type="hidden" value="<?=$checkin?>" name="dataRoom[checkin]">
                            <input type="hidden" value="<?=$checkout?>" name="dataRoom[checkout]">
                            <input type="hidden" value="<?=$rs_room['name'.$lang]?>" name="dataRoom[loaiphong]">
                            <input type="hidden" value="<?=$sokhach?>" name="dataRoom[sokhach]">
                            <input type="hidden" value="<?=$checkout-$checkin?>" name="dataRoom[sodem]">
                            <input type="submit" class="btn btn-primary btn-room w-100" name="thanhtoan" value="Hoàn tất gửi yêu cầu" disabled />
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>