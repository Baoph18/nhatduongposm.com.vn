<div class="menu-res">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>
        <a class="logo-header" href="">
            <?= $func->getImage(['sizes' => '', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
        </a>
        <div class="search-res">
            <p class="icon-search transition"><i class="fa fa-search"></i></p>
            <div class="search-grid w-clear">
                <input type="text" name="keyword-res" id="keyword-res" placeholder="<?= nhaptukhoatimkiem ?>" onkeypress="doEnter(event,'keyword-res');" />
                <p onclick="onSearch('keyword-res');"><i class="fa fa-search"></i></p>
            </div>
        </div>
    </div>
    <nav id="menu">
        <ul>
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
            <li><a class="<?php if ($com == 'chinh-sach') echo 'active'; ?> transition" href="chinh-sach" title="Chính sách">CHÍNH SÁCH</a></li>
            <div class="mobile_menu_section mm-listitem">
                <p class="mobile_menu_section-title">Thông Tin Liên Hệ</p><br>
                <p class="mobile_menu_help">
                    <svg class="icon icon--bi-phone" viewBox="0 0 24 24">
                        <g stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square">
                            <path d="M17 15l-3 3-8-8 3-3-5-5-3 3c0 9.941 8.059 18 18 18l3-3-5-5z" stroke="#333333"></path>
                            <path d="M14 1c4.971 0 9 4.029 9 9m-9-5c2.761 0 5 2.239 5 5" stroke="#333333"></path>
                        </g>
                    </svg>
                    <a href="tel:<?= $func->parsePhone($optsetting['hotline']) ?>" rel="nofollow"><?= $optsetting['hotline'] ?>  (Hotline/Zalo)</a>
                </p>
                <p class="mobile_menu_help">
                    <svg class="icon icon--bi-email" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#333333" d="M.916667 10.08333367l3.66666667-2.65833334v4.65849997zm20.1666667 0L17.416667 7.42500033v4.65849997z"></path>
                            <path stroke="#333333" stroke-width="2" d="M4.58333367 7.42500033L.916667 10.08333367V21.0833337h20.1666667V10.08333367L17.416667 7.42500033"></path>
                            <path stroke="#333333" stroke-width="2" d="M4.58333367 12.1000003V.916667H17.416667v11.1833333m-16.5-2.01666663L21.0833337 21.0833337m0-11.00000003L11.0000003 15.5833337"></path>
                            <path d="M8.25000033 5.50000033h5.49999997M8.25000033 9.166667h5.49999997" stroke="#333333" stroke-width="2" stroke-linecap="square"></path>
                        </g>
                    </svg>
                    <a href="mailto:<?= $optsetting['email'] ?>" rel="nofollow"><?= $optsetting['email'] ?></a>
                </p>
            </div>
        </ul>
    </nav>
</div>