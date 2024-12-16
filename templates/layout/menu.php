<div class="w-menu">
    <div class="menu">
        <div class="wrap-content">
            <ul class="menu-main ">
                <li class=""><a class="<?php if ($com == '' || $com == 'index') echo 'active'; ?> transition" href="" title="<?= trangchu ?>"><?= trangchu ?></a></li>
                <li class=""><a class="<?php if ($com == 'gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu" title="<?= gioithieu ?>"><?= gioithieu ?></a></li>

                <li>
                    <a class="has-child <?php if ($com == 'thuc-don') echo 'active'; ?> transition" href="thuc-don" title="Thực đơn">Thực đơn</a>
                    <?php if (count($thucdonListMenu)) { ?>
                        <ul>
                            <?php foreach ($thucdonListMenu as $klist => $vlist) {
                                $thucdonCatMenu = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                                <li>
                                    <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                    <?php if (!empty($thucdonCatMenu)) { ?>
                                        <ul>
                                            <?php foreach ($thucdonCatMenu as $kcat => $vcat) {
                                                $productItemMenu = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                                                <li>
                                                    <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>

                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
                <li class=""><a class="<?php if ($com == 'dat-ban') echo 'active'; ?> transition" href="#" id="scrollToForm" title="Đặt bàn - đặc tiệc">Đặt bàn - đặc tiệc</a></li>
                <li class=""><a class="<?php if ($com == 'hinh-anh') echo 'active'; ?> transition" href="hinh-anh" title="Hình ảnh">Hình ảnh</a></li>
                <li class=""><a class="<?php if ($com == 'tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="Tin tức">Tin tức</a></li>
                <li class=""><a class="<?php if ($com == 'lien-he') echo 'active'; ?> transition" href="lien-he" title="<?= lienhe ?>"><?= lienhe ?></a></li>
                <li class="ml-auto">
                    <div class="search w-clear">
                        <input type="text" id="keyword" placeholder="<?= nhaptukhoatimkiem ?>" onkeypress="doEnter(event,'keyword');" value="<?= (!empty($_GET['keyword'])) ? $_GET['keyword'] : '' ?>" />
                        <p onclick="onSearch('keyword');"><i class="bi bi-search"></i></p>
                    </div>
                </li>
            </ul>


        </div>
    </div>
</div>
</div>
<?php include TEMPLATE . LAYOUT . "mmenu.php"; ?>
<script>
    document.getElementById('scrollToForm').addEventListener('click', function(event) {
        event.preventDefault(); // Ngăn hành động mặc định của thẻ <a>

        const form = document.getElementById('datban');
        const yOffset = 400; // Điều chỉnh khoảng cách cuộn theo nhu cầu của bạn
        const yPosition = form.getBoundingClientRect().top + window.pageYOffset + yOffset;

        window.scrollTo({
            top: yPosition,
            behavior: 'smooth' // Cuộn mượt mà
        });
    });
</script>