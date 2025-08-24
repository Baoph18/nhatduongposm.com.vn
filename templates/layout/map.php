<div class="wrap-map">
    <div class="wrap-content">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                <div class="bg-map">
                <?php if($source=='contact') {?>
                    <div class="contact-map"><?= $func->decodeHtmlChars($optsetting['coords_iframe']) ?></div>
                    <?php  } ?>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                <div class="bg-map bg-map02 box-tuvan">
                    <div class="title-global">
                        <div class="ttl2 ttl4">Liên hệ</div>
                    </div>
                    <div class="contact-text"><?= htmlspecialchars_decode($lienhe['content' . $lang]) ?></div>

                    <form class="contact-form validation-contact" novalidate method="post" action="" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="tuvan-input col-sm-6">
                                <input type="text" class="form-control text-sm" id="fullname-contact" name="dataContact[fullname]" placeholder="<?= hoten ?>" value="<?= $flash->get('fullname') ?>" required />
                                <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
                            </div>
                            <div class="tuvan-input col-sm-6">
                                <input type="number" class="form-control text-sm" id="phone-contact" name="dataContact[phone]" placeholder="<?= sodienthoai ?>" value="<?= $flash->get('phone') ?>" required />
                                <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="tuvan-input col-sm-6">
                                <input type="text" class="form-control text-sm" id="address-contact" name="dataContact[address]" placeholder="<?= diachi ?>" value="<?= $flash->get('address') ?>" required />
                                <div class="invalid-feedback"><?= vuilongnhapdiachi ?></div>
                            </div>
                            <div class="tuvan-input col-sm-6">
                                <input type="email" class="form-control text-sm" id="email-contact" name="dataContact[email]" placeholder="Email" value="<?= $flash->get('email') ?>" required />
                                <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                            </div>
                        </div>
                        <div class="tuvan-input">
                            <input type="text" class="form-control text-sm" id="subject-contact" name="dataContact[subject]" placeholder="<?= chude ?>" value="<?= $flash->get('subject') ?>" required />
                            <div class="invalid-feedback"><?= vuilongnhapchude ?></div>
                        </div>
                        <div class="tuvan-input">
                            <textarea class="form-control text-sm" id="content-contact" name="dataContact[content]" placeholder="<?= noidung ?>" required /><?= $flash->get('content') ?></textarea>
                            <div class="invalid-feedback"><?= vuilongnhapnoidung ?></div>
                        </div>
                        <input type="submit" class=" c-btn2 btn btn-primary mr-2" name="submit-contact" value="<?= gui ?>" disabled />
                        <input type="reset" class="c-btn2 btn btn-secondary" value="<?= nhaplai ?>" />
                        <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>