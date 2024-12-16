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
    <div class="wrap-product">
        <div class="wrap-content">
            <div class="title-main">
                <span class="title-effect">Sản phẩm của chúng tôi</span>
                <p class="line"></p>
                <p class="slogan"><?= $slogan['name' . $lang] ?></p>
            </div>
            <div class="box-main-product">
                <div class="choose_list">
                    <p class="title-menu active" data-list="">Tất Cả</p>
                    <?php foreach ($sanphamList as $k => $v) { ?>
                        <p class="title-menu" data-list="<?= $v['id'] ?>"><?= $v['name' . $lang] ?></p>
                    <?php } ?>
                </div>
                <div class="wp_dv_index">
                    <div class="show_padding" data-list=""></div>
                </div>

                <a href="san-pham" class="xemthem-sanpham">
                    <div>Xem thêm</div>
                </a>
            </div>
        </div>
    </div>
    <!-- dịch vụ -->
    <div class="wrap-dichvu">
        <div class="wrap-content">
            <div class="title-main">
                <span class="title-effect">Dịch vụ nổi bật</span>
                <p class="line"></p>
                <p class="slogan"><?= $slogan['name' . $lang] ?></p>
            </div>
            <div class="box-main-dichvu">
                <div class="left-dichvu">
                    <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:10,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:10,screen:991|items:1|margin:20,screen:1199|items:1|margin:20" data-rewind="1" data-autoplay="0" data-loop="1" data-lazyload="1" data-mousedrag="1" data-center="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-img-dichvu">
                        <?php foreach ($dichvu_img as $v) { ?>
                            <?= $func->getImage(['isLazy' => false, 'class' => 'lazy w-100', 'sizes' => '365x285x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        <?php } ?>
                    </div>
                    <div class="control-img-dichvu control-owl transition"></div>
                </div>
                <div class="right-dichvu">
                    <div class="slick_dichvu">
                        <?php foreach ($dichvu as $k => $v) { ?>
                            <div>
                                <div class="dichvu-item">
                                    <div class="dichvu-number">
                                        <p>0<?= $k + 1 ?></p>
                                    </div>
                                    <div class="dichvu-info">
                                        <h3 class="dichvu-name text-split-2"><?= $v['name' . $lang] ?></h3>

                                    </div>
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
            <div class="title-main">
                <span class="title-effect">Album hình ảnh</span>
                <p class="line"></p>
                <p class="slogan"><?= $slogan['name' . $lang] ?></p>
            </div>
            <div class="box-main-hinhanh">
                <?php foreach ($hinhanh as $k => $v) {
                    if ($k < 6) { ?>
                        <div class="item-hinhanh">
                            <div class="hinhanh-img scale-img" data-fancybox="gallery" data-src="<?= ASSET . UPLOAD_PRODUCT_L . $v['photo'] ?>">
                                <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '386x275x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                            </div>
                            <div class="hinhanh-info">
                                <h3 class="hinhanh-name text-split-1"><?= $v['name' . $lang] ?></h3>
                            </div>
                        </div>
                <?php }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- tin tức -->
    <div class="wrap-tintuc">
        <div class="wrap-content">
            <div class="title-main">
                <span class="title-effect">Tin tức & sự kiện</span>
                <p class="line"></p>
                <p class="slogan"><?= $slogan['name' . $lang] ?></p>
            </div>
            <div class="box-main-tintuc" data-aos="fade-up" data-aos-duration="1000">
                <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:10,screen:425|items:1|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:10,screen:991|items:2|margin:0,screen:1199|items:2|margin:0" data-rewind="1" data-autoplay="0" data-loop="1" data-lazyload="1" data-mousedrag="1" data-center="0" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="1" data-nav="1" data-navcontainer=".control-share">
                    <?php foreach ($tintuc as $v) { ?>
                        <div class="box-tintuc" title="<?= $v['name' . $lang] ?>">
                            <div class="tintuc-item">
                                <div class="tintuc-img scale-img">
                                    <a href="<?= $v[$sluglang] ?>">
                                        <?= $func->getImage(['isLazy' => false, 'class' => 'lazy w-100', 'sizes' => '295x200x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                    </a>
                                </div>
                                <div class="tintuc-info">
                                    <div class="tintuc-time">
                                        <i class="bi bi-calendar2-week"></i>
                                        <p>
                                            <?= date("d/m/Y", $v['date_created']) ?>
                                        </p>
                                    </div>
                                    <a href="<?= $v[$sluglang] ?>">
                                        <h3 class="tintuc-name text-split-1"><?= $v['name' . $lang] ?></h3>
                                    </a>
                                    <p class="tintuc-desc text-split-3"><?= $v['desc' . $lang] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="box-main-mxh">
                <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:10,screen:425|items:1|margin:10,screen:575|items:2|margin:10,screen:767|items:3|margin:10,screen:991|items:4|margin:60,screen:1199|items:4|margin:60" data-rewind="1" data-autoplay="0" data-loop="1" data-lazyload="1" data-mousedrag="1" data-center="0" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-share">
                    <?php foreach ($social as $v) { ?>
                        <a href="<?= $v['link'] ?>" target="_blank">
                            <?= $func->getImage(['isLazy' => false, 'class' => 'lazy w-100', 'sizes' => '255x130x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </a>
                    <?php  }
                    ?>
                </div>

            </div>
        </div>
    </div>
    <!-- feedback -->
    <div class="wrap-feedback">
        <div class="wrap-content">
            <div class="box-main-feedback">
                <div class="left-feedback">
                    <div class="title-main">
                        <span class="title-effect">Feedback khách hàng</span>
                        <p class="slogan"><?= $slogan['name' . $lang] ?></p>
                    </div>
                    <div class="slick_feedback">
                        <?php foreach ($feedback as $v) { ?>
                            <div>
                                <div class="feedback-item">
                                    <div class="feedback-img scale-img">
                                        <?= $func->getImage(['isLazy' => false, 'class' => 'lazy w-100', 'sizes' => '70x70x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                    </div>
                                    <div class="feedback-info">
                                        <h3 class="feedback-name text-split-1"><?= $v['name' . $lang] ?></h3>
                                        <p class="feedback-desc text-split-1"><?= $v['desc' . $lang] ?></p>
                                        <p class="feedback-content text-split-3"><?= $v['content' . $lang] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        ?>
                    </div>
                </div>
                <div class="right-feedback">
                    <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1|margin:10,screen:425|items:1|margin:10,screen:575|items:1|margin:10,screen:767|items:3|margin:10,screen:991|items:1|margin:10,screen:1199|items:1|margin:10" data-rewind="1" data-autoplay="0" data-loop="1" data-lazyload="1" data-mousedrag="1" data-center="0" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-youtube">
                        <?php foreach ($video as $v) { ?>
                            <a href="<?= $v['link_video'] ?>" class="item-video" data-fancybox="video" data-aos="fade-up" data-aos-duration="1000">
                                <div class="video-img scale-img">
                                    <?= $func->getImage(['isLazy' => false, 'class' => 'lazy w-100', 'sizes' => '600x468x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                    <div class="play-video"></div>
                                </div>
                            </a>

                        <?php }
                        ?>
                    </div>
                </div>

            </div>

        </div>
    </div>