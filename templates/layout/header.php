<div class="header <?php if ($source != 'index') { echo 'header-product';} ?>">
  <div class="header-top">
    <div class="wrap-content">
      <marquee behavior="scroll" direction="left" scrollamount="4"><?= $func->decodeHtmlChars($slogan['content' . $lang]) ?></marquee>
    </div>
  </div>
  <div class="header-midd">
    <div class="wrap-content">
      <div class="d-flex">
        <div class="cont-left">
          <a class="logo-header" href="">
            <?= $func->getImage(['sizes' => '', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
          </a>
        </div>
        <div class="cont-midd">
          <div class="box-search">
            <div class="search w-clear">
              <input type="text" id="keyword" placeholder="Nhập từ khoá tìm kiếm" onkeypress="doEnter(event,'keyword');" />
              <p onclick="onSearch('keyword');"></p>
            </div>

          </div>
        </div>
        <ul class="cont-right">
          <li class="hotline">
            <p>Hotline hỗ trợ</p>
            <b><?= $optsetting['hotline'] ?></b>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="header-bottom">
    <div class="wrap-content">
      <?php include TEMPLATE . LAYOUT . "menu.php"; ?>
    </div>
  </div>
  <?php include TEMPLATE . LAYOUT . "mmenu.php"; ?>
</div>