    <!-- giới thiệu -->
    <div class="wrap-gioithieu">
        <div class="wrap-content">
            <div class="box-main-gioithieu">
                <div class="criteria-container">
                    <div class="criteria-box">
                        <div class="criteria-logo" href="">
                            <div class="peShiner2">
                                <?= $func->getImage(['isLazy' => false, 'class' => 'lazy', 'sizes' => '150x150x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $logo['name' . $lang]]) ?>
                            </div>
                        </div>
                        <div id="vortex" class="">
                            <?php foreach ($tieuchi as $v) { ?>
                                <div>
                                    <div class="criteria-item rotateY_img">
                                        <div class="criteria-info">
                                            <div class="criteria-icon">
                                                <?= $func->getImage(['isLazy' => false, 'class' => 'lazy', 'sizes' => '50x50x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>

                                            </div>
                                            <p class="criteria-name text-split-2"><?= $v['name' . $lang] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="info-gioithieu">
                    <span class="tieudesub">Giới thiệu</span>
                    <span class="tieude title-effect"><?= $gioithieu['name' . $lang] ?></span>
                    <div class="desc-gioithieu"> <?= htmlspecialchars_decode($gioithieu['desc' . $lang]) ?></div>

                    <div class="group-hotline-gioithieu">
                        <div class="box-hotline-gioithieu">
                            <i class="bi bi-telephone-fill"></i>
                            <div class="">
                                <p>Hotline tư vấn</p>
                                <p><?= $func->formatPhone($optsetting['hotline']) ?></p>
                            </div>
                        </div>
                        <div class="box-hotline-gioithieu">
                            <i class="bi bi-telephone-fill"></i>
                            <div class="">
                                <p>Hotline tư vấn</p>
                                <p><?= $func->formatPhone($optsetting['hotline']) ?></p>
                            </div>
                        </div>
                    </div>
                    <a href="gioi-thieu" class="xem-them-gioithieu">
                        <div>
                            <i class="bi bi-journal-text"></i>
                        </div>
                        <div>
                            <p>Xem thêm</p>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="wrap-menu-noibat">
        <div class="wrap-content">
            <div class="title-main">
                <span class="title-effect">Menu nổi bật</span>
                <p class="slogan"><?= $slogan['name' . $lang] ?></p>
            </div>
            <div class="box-main-menu-noibat" data-aos="fade-up" data-aos-duration="1000">
                <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:10,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:10,screen:991|items:3|margin:20,screen:1199|items:3|margin:20" data-rewind="1" data-autoplay="0" data-loop="1" data-lazyload="1" data-mousedrag="1" data-center="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-menu-noibat">
                    <?php foreach ($menu_noibat as $v) { ?>
                        <a href="<?= $v[$sluglang] ?>" class="item-menu">
                            <div class="menu-img">
                                <div class="scale-img">
                                    <?= $func->getImage(['isLazy' => false, 'class' => 'lazy', 'sizes' => '365x285x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>

                                </div>
                            </div>
                            <div class="menu-info">
                                <h3 class="menu-name text-split-1"><?= $v['name' . $lang] ?></h3>
                                <div class="menu-price">
                                    <p><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></p>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                </div>
                <div class="control-menu-noibat control-owl transition"></div>
            </div>
        </div>
    </div>
    <!-- dịch vụ -->
    <div class="wrap-dichvu">
        <div class="wrap-content">
            <div class="title-main">
                <span class="title-effect">Dịch vụ nổi bật</span>
                <p class="slogan"><?= $slogan['name' . $lang] ?></p>
            </div>
            <div class="box-main-dichvu">
                <div class="left-dichvu">
                    <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:10,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:10,screen:991|items:1|margin:20,screen:1199|items:1|margin:20" data-rewind="1" data-autoplay="0" data-loop="1" data-lazyload="1" data-mousedrag="1" data-center="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-img-dichvu">
                        <?php foreach ($dichvu_img as $v) { ?>
                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '365x285x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        <?php } ?>
                    </div>
                    <div class="control-img-dichvu control-owl transition"></div>
                </div>
                <div class="right-dichvu">
                    <div>
                        <?php foreach ($dichvu as $k => $v) { ?>
                            <div class="dichvu-item">
                                <div class="dichvu-number">
                                    <p>0<?= $k + 1 ?></p>
                                </div>
                                <div class="dichvu-info">
                                    <h3 class="dichvu-name text-split-2"><?= $v['name' . $lang] ?></h3>

                                </div>

                            </div>
                        <?php  }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hình ảnh -->
    <div class="wrap-hinhanh">
        <div class="wrap-content">
            <div class="box-main-hinhanh" data-aos="fade-up" data-aos-duration="1000">
                <?php foreach ($hinhanh as $k => $v) {
                    if ($k < 6) {
                        $thump = "";
                        if ($k == 0) $thump = '375x275x1';
                        else if ($k == 1) $thump = '375x170x1';
                        else if ($k == 2) $thump = '375x275x1';
                        else if ($k == 3) $thump = '300x255x1';
                        else if ($k == 4) $thump = '355x205x1';
                        else if ($k == 5) $thump = '475x255x1';



                ?>

                        <a href="<?= $v[$sluglang] ?>" class="hinhanh-image-item hinhanh-image-item-<?= ($k++) ?>">
                            <?php if ($k == 2) { ?>
                                <div class="title-main">
                                    <span class="title-effect">Album của quán</span>
                                    <p class="slogan"><?= $slogan['name' . $lang] ?></p>
                                </div>
                            <?php }
                            ?>
                            <div class="hinhanh-image-item-m scale-img">
                                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/<?= $thump ?>/assets/images/noimage.png';" data-src="<?= THUMBS ?>/<?= $thump ?>/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" />
                                <div class="hinhanh-txt">
                                    <span><?= $v['name' . $lang] ?></span>
                                </div>
                            </div>

                            <?php if ($k == 5) { ?>
                                <div class="title-item2">
                                    <h3>Kính cháo quý khách</h3>
                                </div>
                            <?php }
                            ?>
                        </a>
                <?php }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- đặt bàn -->
    <div class="wrap-book" id="datban">
        <div class="wrap-content">
            <div class="box-main-book">
                <div class="left-book" data-aos="fade-right" data-aos-duration="1000">
                    <form class="validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
                        <div class="title-main">
                            <span class="title-effect">Liên hệ đặt bàn</span>
                            <p class="slogan"><?= $slogan['name' . $lang] ?></p>
                        </div>
                        <div class="item-group">
                            <input type="text" name="dataNewsletter[fullname]" id="fullname-newsletter" placeholder="Họ tên" class="input" required="">
                            <div></div>
                            <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                        </div>
                        <div class="item-group">
                            <input type="number" name="dataNewsletter[phone]" id="phone-newsletter" placeholder="Số điện thoại" class="input" required="">
                            <div></div>
                            <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                        </div>

                        <div class="item-group">
                            <input type="text" name="dataNewsletter[email]" id="email-newsletter" placeholder="Email" class="input" required="">
                            <div></div>
                            <div class="invalid-feedback">Vui lòng nhập email</div>
                        </div>

                        <div class="item-group">
                            <textarea class="input" id="notes-newsletter" rows="5" placeholder="Ghi chú" name="dataNewsletter[notes]"></textarea>
                            <div></div>
                            <div class="invalid-feedback">Vui lòng nhập ghi chú</div>
                        </div>

                        <div class="newsletter-button">
                            <input type="hidden" class="" name="dataNewsletter[type]" value="dangkynhantin">
                            <input type="hidden" class="" name="dataNewsletter[date_created]" value="<?= time() ?>">
                            <input type="submit" name="submit-newsletter" value="Đặt bàn tại đây" disabled>
                            <input type="hidden" class="" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- tin tức -->
    <div class="wrap-tintuc">
        <div class="wrap-content">
            <div class="title-main">
                <span class="title-effect">Tin tức</span>
                <p class="slogan"><?= $slogan['name' . $lang] ?></p>
            </div>
            <div class="box-main-tintuc" data-aos="fade-up" data-aos-duration="1000">
                <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:10,screen:425|items:1|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:10,screen:991|items:3|margin:20,screen:1199|items:3|margin:60" data-rewind="1" data-autoplay="1" data-loop="1" data-lazyload="1" data-mousedrag="1" data-center="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-share">
                    <?php foreach ($tintuc as $v) { ?>
                        <div class="box-tintuc" title="<?= $v['name' . $lang] ?>">
                            <div class="tintuc-item">
                                <div class="tintuc-img scale-img">
                                    <a href="<?= $v[$sluglang] ?>">
                                        <?= $func->getImage(['isLazy' => false, 'class' => 'lazy w-100', 'sizes' => '360x420x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                    </a>
                                </div>
                                <div class="tintuc-info">


                                    <a href="<?= $v[$sluglang] ?>">
                                        <h3 class="tintuc-name text-split-2"><?= $v['name' . $lang] ?></h3>
                                    </a>
                                    <p class="tintuc-desc text-split-3"><?= $v['desc' . $lang] ?></p>
                                    <a href="<?= $v[$sluglang] ?>">
                                        <div class="tintuc-xemthem"></div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>