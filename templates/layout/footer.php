<div class="footer">
    <div class="footer-article">
        <div class="bgr-white-footer padding-top-bottom d-flex flex-wrap justify-content-between">
            <div class="footer-news">
                <div class="title-main">
                    <span class="title-effect name-footer"><?= $footer['name' . $lang] ?></span>
                </div>
                <div class="footer-info"><?= $func->decodeHtmlChars($footer['content' . $lang]) ?></div>

            </div>
            <div class="footer-news">
                <img class="lazy image-footer" onerror="this.src='<?= THUMBS ?>/220x310x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/220x310x1/<?= UPLOAD_PHOTO_L . $mocua['photo'] ?>" />
            </div>
            <div class="footer-news">
                <p class="footer-title">Facebook của chúng tôi</p>
                <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 1); ?>
            </div>

        </div>
    </div>
    <div class="footer-powered">
        <div class="wrap-content">
            <div class="row text-align-center">
                <div class="footer-copyright col-md-12">Copyright © 2024 <?= $copyright['name' . $lang] ?>. Designed by
                    <a href="https://blueweb.com.vn/" class=" text-decoration-none" title="Blueweb.com.vn">Blueweb.com.vn</a>
                </div>

            </div>
        </div>
    </div>
    <!-- map -->


    <?= $addons->set('footer-map', 'footer-map', 6); ?>
    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>

<a class="btn-youtube btn-frame text-decoration-none" target="_blank" href="<?= $optsetting['youtube'] ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'youtube2.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>
<!-- <div class="quick_contact hidden_m2">
    <a class="button_gradient" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
        <span class="button_gradient">
            <i class="fas fa-phone-alt"></i>
        </span>
        <p class="contact-phone"><?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?></p>
    </a>
</div>
<div class="quick_contact2 hidden_m2">
    <a class="button_gradient" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline2']); ?>">
        <span class="button_gradient">
            <i class="fas fa-phone-alt"></i>
        </span>
        <p class="contact-phone"><?= preg_replace('/[^0-9]/', '', $optsetting['hotline2']); ?></p>
    </a>
</div> -->