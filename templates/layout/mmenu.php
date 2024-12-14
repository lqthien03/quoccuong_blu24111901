<?php if ($deviceType == 'mobile') { ?>
    <div class="wrap__logommenu">
        <div class="wrap_logommenu">
            <div class="logommenu">
                <a class="logo-head" href="">
                    <img onerror="this.src='<?= THUMBS ?>/120x45x3/assets/images/noimage.png';"
                        src="<?= THUMBS ?>/120x45x3/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" alt="logo" title="logo" />
                </a>
            </div>
        </div>
        <div class="header_mobile">
            <div class="menumobile">
                <div class="wrap-content">
                    <div class="flex_menumobile">
                        <div class="menu-icon open" aria-label="Menu" id="btn-menu-mobile" title="Menu">
                            <i class="fa-solid fa-bars-staggered"></i>
                        </div>

                        <div class="search w-100 w-clear ml-1">
                            <input type="text" id="keyword2" placeholder="<?= nhaptukhoatimkiem ?>"
                                onkeypress="doEnter(event,'keyword2');"
                                value="<?= (!empty($_GET['keyword2'])) ? $_GET['keyword2'] : '' ?>" />
                            <p onclick="onSearch('keyword2');"><i class="bi bi-search"></i></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap_scrolldmuc">
                <div class="wrap-content">
                    <div class="flex_scrolldmuc">
                        <div class="left_iconhomescroll">
                            <a href=" ">
                                <i class="fa-solid fa-house"></i>
                            </a>
                        </div>
                        <div class="center_scrolldmu">
                            <ul>
                                <li><a href="gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                                <li><a href="thuc-don" title="Thực đơn">Thực đơn</a></li>
                                <li><a href="hinh-anh" title="Hình ảnh">Hình ảnh</a></li>
                                <li><a href="tin-tuc" title="Tin tức">Tin tức</a></li>
                                <li><a href="lien-he" title="Liên hệ">Liên hệ</a></li>
                            </ul>
                        </div>
                        <div class="right_scrolldmu">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!--  -->
    <div class="header-menu">
        <div class="navigation-horizontal">
            <div class="title">
                <div class="logommenu">
                    <a class="logo-head" href="">
                        <img onerror="this.src='<?= THUMBS ?>/120x45x3/assets/images/noimage.png';"
                            src="<?= THUMBS ?>/120x45x3/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" alt="logo" title="logo" />
                    </a>
                </div>
                <div class="close-menu" title="Đóng">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="col-menu" data-section="header_nav">
                <ul id="nav-col" class="nav-col">
                </ul>
                <ul id="nav" class="nav">

                    <li class="nav-item ">
                        <a class="nav-link" href="" title="Trang chủ">
                            Trang chủ
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="gioi-thieu" title="Giới thiệu">
                            Giới thiệu
                        </a>
                    </li>
                    <li class="nav-item has-childs">
                        <a href="thuc-don" class="nav-link" title="Thực đơn">
                            Thực đơn
                            <?php if (count($thucdonListMenu)) { ?>
                                <i class="open_mnu down_icon"></i>
                            <?php } ?>
                        </a>
                        <?php if (count($thucdonListMenu)) { ?>
                            <ul class="dropdown-menu" style="display: none;">
                                <?php foreach ($thucdonListMenu as $klist => $vlist) {
                                    $thucdonCatMenu = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="<?= $vlist[$sluglang] ?>"
                                            title="<?= $vlist['name' . $lang] ?>"><?= $vlist['name' . $lang] ?>
                                            <?php if (count($thucdonCatMenu)) { ?>
                                                <i class="open_mnu down_icon"></i>
                                            <?php } ?>
                                        </a>
                                        <ul class="dropdown-menu drop2menu" style="display: none;">
                                            <?php foreach ($thucdonCatMenu as $kcat => $vcat) { ?>
                                                <li class="nav-item-lv3">
                                                    <a class="nav-link" href="<?= $vcat[$sluglang] ?>"
                                                        title="<?= $vcat['name' . $lang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="hinh-anh" title="Hình ảnh">
                            Hình ảnh
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="tin-tuc" title="Tin tức">
                            Tin tức
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="lien-he" title="Liên hệ">
                            Liên hệ
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                <div class="sudes-header-hotline">
                    <div class="frame-fix">
                        <a title="Điện thoại: 0343608693" href="tel:0343608693"></a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
                            </path>
                        </svg>
                        <div class="text-box">
                            <span class="acc-text-small">Hotline hỗ trợ:</span>
                            <span class="acc-text">0343608693</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>