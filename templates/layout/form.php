<div class="box-form <?php if ($source != 'index') { echo 'form-sub';} ?>">
  <div class="wrap-content">
    <div class="form-tour-bg">
      <div class="ttl-tuvan">
        <div class="ttl">Explore Vietnam With VietNam</div>
        <div class="ttl2">Motorbike Tours</div>
        <div class="desc"><?=$optsetting['googlemap']?></div>
        <div class="btn-close"><i class="fa-regular fa-circle-xmark"></i> Close</div>
      </div>
      <form class="form-tour validation-tour" novalidate method="post" action="" enctype="multipart/form-data">
        <div class="tour-input">
          <label>Name</label>
          <input type="text" class="form-control" id="fullname-tour" name="dataTour[fullname]" placeholder="Name">
        </div>
        <div class="tour-input">
          <label>Phone</label>
          <input type="text" class="form-control" id="phone-tour" name="dataTour[phone]" placeholder="Phone">
        </div>
        <div class="tour-input">
          <label>Email</label>
          <input type="email" class="form-control" id="email-tour" name="dataTour[email]" placeholder="Email" required />
          <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
        </div>
        <div class="tour-input">
          <label>Select tour</label>
          <select class="form-control custom-select" required id="tour-tour" name="dataTour[tour]">
            <?php foreach($selecttour as $v){?>
              <option value="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></option>
            <?php } ?>
          </select>
          <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
        </div>
        <input type="hidden" name="check_spam_tour">

        <div class="tour-input c-btn">
          <button type="submit"  name="submit-tour" value="Send"><span>Send</span></button>
        </div>
      </form>
    </div>
  </div>
</div>