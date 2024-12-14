<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<?php if ($com == 'tim-kiem') { ?>
    <div class="div_kq_search mb-4"><?= $titleMain ?> (<?= $total ?>): <span>"<?php echo $tukhoa_show; ?>"</span></div>
<?php } ?>

<?php if (!empty($Producthot)) { ?>
    <div class="wrap_producthot mb-2 mt-2">
        <div class="position-relative slide_index slide_producthot">
            <div class="owl-page owl-carousel owl-theme"
                data-items="screen:0|items:2|margin:8,screen:425|items:2|margin:10,screen:575|items:2|margin:20,screen:767|items:2|margin:20,screen:991|items:4|margin:20,screen:1199|items:4|margin:20"
                data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                data-smartspeed="500" data-autoplayspeed="500" data-autoplaytimeout="5000" data-dots="0" data-nav="1"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                data-navcontainer=".control-producthot">
                <?php foreach ($Producthot as $k => $v) { ?>
                    <div class="box-product">
                        <div class="pic-product">
                            <a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>"
                                title="<?= $v['name' . $lang] ?>">
                                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/285x285x1/assets/images/noimage.png';"
                                    data-src="<?= WATERMARK ?>/product/285x285x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>"
                                    alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </a>
                            <div class="product-tool d-flex align-items-stretch justify-content-between transition mb-0">
                                <a class="product-detail-view text-decoration-none text-hover-main transition"
                                    href="<?= $v[$sluglang] ?>" title="Xem chi tiêt">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                        width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <circle cx="10" cy="10" r="7" />
                                        <line x1="21" y1="21" x2="15" y2="15" />
                                    </svg>
                                    <span>Chi tiêt</span>
                                </a>
                                <a class="product-quick-view text-decoration-none text-hover-main transition"
                                    data-slug="<?= $v[$sluglang] ?>" title="Xem nhanh">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="18"
                                        height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <circle cx="12" cy="12" r="2" />
                                        <path
                                            d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                    </svg>
                                    <span>Xem nhanh</span>
                                </a>
                            </div>
                        </div>
                        <h3 class="mb-0"><a class="text-decoration-none text-split name-product" href="<?= $v[$sluglang] ?>"
                                title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
                        <p class="price-product">
                            <?php if ($v['discount']) { ?>
                                <span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>
                                <span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
                                <span class="price-per"><?= '-' . $v['discount'] . '%' ?></span>
                            <?php } else { ?>
                                <span
                                    class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
                            <?php } ?>
                        </p>
                        <p class="cart-product d-flex flex-wrap justify-content-between">
                            <span class="cart-add addcart transition" data-id="<?= $v['id'] ?>"
                                data-action="addnow"><?= themvaogiohang ?></span>
                            <span class="cart-buy addcart transition" data-id="<?= $v['id'] ?>"
                                data-action="buynow"><?= muangay ?></span>
                        </p>
                    </div>
                <?php } ?>
            </div>
            <div class="control-producthot control-owl transition"></div>
        </div>
    </div>
<?php } ?>
<div class="row row-20">
    <?php if (!empty($product)) { ?>
        <?php foreach ($product as $k => $v) { ?>
            <div class="col-md-3 col-sm-6 col-6 col-20" data-aos="fade-up" data-aos-duration="1000">
                <div class="box-product">
                    <div class="pic-product">
                        <a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                            <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/285x285x1/assets/images/noimage.png';"
                                data-src="<?= WATERMARK ?>/product/285x285x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>"
                                alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                        </a>
                        <div class="product-tool d-flex align-items-stretch justify-content-between transition mb-0">
                            <a class="product-detail-view text-decoration-none text-hover-main transition"
                                href="<?= $v[$sluglang] ?>" title="Xem chi tiêt">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="18"
                                    height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="10" cy="10" r="7" />
                                    <line x1="21" y1="21" x2="15" y2="15" />
                                </svg>
                                <span>Chi tiêt</span>
                            </a>
                            <a class="product-quick-view text-decoration-none text-hover-main transition"
                                data-slug="<?= $v[$sluglang] ?>" title="Xem nhanh">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="18"
                                    height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="12" r="2" />
                                    <path
                                        d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                </svg>
                                <span>Xem nhanh</span>
                            </a>
                        </div>
                    </div>
                    <h3 class="mb-0"><a class="text-decoration-none text-split name-product" href="<?= $v[$sluglang] ?>"
                            title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
                    <p class="price-product">
                        <?php if ($v['discount']) { ?>
                            <span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>
                            <span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
                            <span class="price-per"><?= '-' . $v['discount'] . '%' ?></span>
                        <?php } else { ?>
                            <span
                                class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
                        <?php } ?>
                    </p>
                    <p class="cart-product d-flex flex-wrap justify-content-between">
                        <span class="cart-add addcart transition" data-id="<?= $v['id'] ?>"
                            data-action="addnow"><?= themvaogiohang ?></span>
                        <span class="cart-buy addcart transition" data-id="<?= $v['id'] ?>"
                            data-action="buynow"><?= muangay ?></span>
                    </p>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <div class="col-12">
            <div class="alert alert-warning w-100" role="alert">
                <strong><?= khongtimthayketqua ?></strong>
            </div>
        </div>
    <?php } ?>

    <div class="col-12">
        <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
    </div>
</div>