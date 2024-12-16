<div class="group-header <?= ($source != 'index') ? 'set-color' : '' ?>">
    <div class="header">
        <div class="wrap-content">
            <a class="logo-head peShiner" href="">
                <img onerror="this.src='<?= THUMBS ?>/150x110x1/assets/images/noimage.png';" src="<?= THUMBS ?>/150x110x1/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" alt="logo" title="logo" />
            </a>
            <a class="banner-head" href="">
                <img onerror="this.src='<?= THUMBS ?>/730x120x2/assets/images/noimage.png';" src="<?= THUMBS ?>/730x120x2/<?= UPLOAD_PHOTO_L . $banner['photo'] ?>" alt="banner" title="banner" />
            </a>
            <p class="hotline-head mb-0">
                <span class="number-hotline"><?= $func->formatPhone($optsetting['hotline']) ?></span>
                <span class="number-hotline"><?= $func->formatPhone($optsetting['hotline2']) ?></span>
            </p>
        </div>
    </div>