
<?php if(count($trangtb)){ ?>
    <div class="wrap-trangtb">
        <div class="wrap-content">
            <div class="title-global title-global--left">
                <div class="ttl"><span>Lựa chọn thần sơn</span></div>
                <div class="ttl2"><?=$trangtb['name'.$lang]?></div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                <div class="img-thumb">
                    <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '', 'upload' => UPLOAD_NEWS_L, 'image' => $trangtb['photo'], 'alt' => $trangtb['name' . $lang]]) ?>
                </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <?php foreach($bvtrangtb as $v) {?>
                        <div class="item-trangtb">
                            <div class="ttl"><?= $v['name' . $lang] ?></div>
                            <div class="desc"><?= $v['desc' . $lang] ?></div>
                        </div>
                    <?php } ?>
                </div>


            </div>
        </div>
    </div>
<?php } ?>

<div class="wrap-dktuvan">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-left">
            <div class="name-dktuvan">Đăng ký tư vấn</div>
            <div class="desc-dktuvan">Để lại thông tin để chúng tôi liên hệ với bạn sớm nhất</div>
            <form class="form-tuvan validation-tuvan" novalidate method="post" action="" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-12 col-md-6 tuvan-input">
                        <input type="text" class="form-control" id="name-tuvan" name="dataTuvan[name]" placeholder="Họ và tên">
                    </div>
                    <div class="col-12 col-md-6 tuvan-input">
                        <input type="text" class="form-control" id="phone-tuvan" name="dataTuvan[phone]" placeholder="Số điện thoại">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-md-6 tuvan-input">
                        <input type="email" class="form-control" id="email-tuvan" name="dataTuvan[email]" placeholder="Email" required />
                        <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                    </div>
                    <div class="col-12 col-md-6 tuvan-input">
                        <select id="dichvu" class="form-control" name="dataTuvan[dichvu]">
                            <option value="">Chọn dịch vụ</option>
                            <?php foreach($dichvu as $v) {?>
                                <option value="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                    </div>
                </div>
                <div class="tuvan-input">
                    <textarea class="form-control" id="content-tuvan" name="dataTuvan[content]" placeholder="Nội dung"></textarea>
                    <div class="invalid-feedback"><?= vuilongnhapnoidung ?></div>
                </div>
                <input type="hidden" name="check_spam_tuvan">

                <div class="tuvan-button c-btn-submit">
                    <button type="submit"  name="submit-tuvan" value="Gửi yêu cầu"><span>Gửi yêu cầu</span></button>
                </div>
            </form>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-right">
            <div class="name-dktuvan">Các bước liên hệ báo giá</div>
            <div class="desc-dktuvan">Để lại thông tin để chúng tôi liên hệ với bạn sớm nhất</div>
            <div class="box-baogia">
                <?php foreach($baogia as $k=>$v) {?>
                    <div class="baogia-it">
                        <div class="numb"><?=$k+1?></div>
                        <div class="ttl"><?= $v['name' . $lang] ?></div>
                        <div class="desc"><?= $v['desc' . $lang] ?></div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div>