<div class="menu">
  <ul class="menu-main">
    <li><a class="<?php if ($com == '' || $com == 'index') echo 'active'; ?> transition" href="" title="TRANG CHỦ">TRANG CHỦ</a></li>
    <li>
      <a class="<?php if ($com == 'gioi-thieu') echo 'active'; ?> transition has-child" href="gioi-thieu" title="GIỚI THIỆU">GIỚI THIỆU</a>

    </li>
    <li>
      <a class="<?php if ($com == 'san-pham') echo 'active'; ?> transition has-child" href="san-pham" title="SẢN PHẨM">SẢN PHẨM</a>
      <?php if (count($splistmenu)) { ?>
        <ul>
          <?php foreach($splistmenu as $v) {?>
            <li>
              <a href="<?= $v[$sluglang] ?>"><?= $v['name' . $lang] ?></a>
            </li>
          <?php } ?>
        </ul>
      <?php } ?>
    </li>


    <li><a class="<?php if ($com == 'tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="TIN TỨC">TIN TỨC</a></li>
    <li><a class="<?php if ($com == 'lien-he') echo 'active'; ?> transition" href="lien-he" title="LIÊN HỆ">LIÊN HỆ</a></li>
    <li><a class="<?php if ($com == 'chinh-sach') echo 'active'; ?> transition" href="chinh-sach" title="Chính sách">Chính sách</a></li>
  </ul>
</div>