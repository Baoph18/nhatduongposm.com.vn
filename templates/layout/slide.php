<?php if($template != 'product/product_detail'){?>
<div class="slideshow <?php if ($source != 'index') { echo 'slidenone'; } ?>">
    <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1" data-rewind="1" data-autoplay="0" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="0" data-smartspeed="800" data-autoplayspeed="800" data-autoplaytimeout="5000" data-dots="1" data-animations="" data-nav="0" data-navcontainer=".control-slideshow">
        <?php foreach ($slider as $v) { ?>
            <div class="slideshow-item" owl-item-animation>
                <?php if ($source == 'index') { ?>
                    <a class="slideshow-image" href="<?= $v['link'] ?>"  title="<?= $v['name' . $lang] ?>">
                        <?= $func->getImage(['class' => 'w-100', 'sizes' => '', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>

                    </a>

                <?php } else {?>
                    <a class="slideshow-image-sub" data-fancybox href="<?= $v['link_video'] ?>" title="<?= $v['name' . $lang] ?>">
                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </a>
                <?php } ?>

            </div>

        <?php } ?>
    </div>
</div>
<?php } ?>

