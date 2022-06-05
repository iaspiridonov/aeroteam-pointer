<?php namespace ProcessWire; ?>

<section class="section--main">
    <div class="main-bg"></div>
    <div class="container">
        <div class="banners cta-form">
        <?php foreach ($home->banners as $banner): ?>
            <a href="<?= $banner->text_plain ?>" class="banners__item">
            <?php bd($banner->image) ?>
                <img src="<?= $banner->image->size(304, 304)->src ?>" alt="<?= $banner->image->description ?>">
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
//используем поле gallery_after_certificate_form 
foreach($home->gallery_after_certificate_form as $h) {
    $header = $h->header;
    $text = $h->text;
    $gallery = $h->text_block;
}
?>
<section class="section section--weekend">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 col-sm-6 col-12 mb-4 mb-sm-0">
                <div class="u-h1 mb-3">
                    <?= $header ?>
                </div>
                <div class="u-text u-text u-text--gray">
                    <?= $text ?>  
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-12 position-relative">
                <div class="swiper js-swiper-weekend">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php foreach($gallery as $picture): ?>
                            <div class="swiper-slide">
                                <div class="weekend-item">
                                    <div class="weekend-item__img">
                                        <img src="<?= $picture->picture->url ?>" alt="weekend">
                                    </div>
                                    <div class="weekend-item__text">
                                        <div class="weekend-item__text-title"><?= $picture->header ?></div>
                                        <div class="weekend-item__text-desc"><?= $picture->text ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev weekend-item__nav weekend-item__nav--prev"></div>
                    <div class="swiper-button-next weekend-item__nav weekend-item__nav--next"></div>
            </div>
        </div>
    </div>
</section>
<?php 
//используем поле gift_certificate 
foreach($home->gift_certificate as $h) {
    $header = $h->header;
    $text = $h->text;
    $picture = $h->picture;
}
?>
<section class="section section--blue">
    <div class="container">
        <div class="row align-items-md-center">
            <div class="col-12 col-sm-5 col-md-6 mb-4 mb-sm-0">
                <img class="u-mw-100" src="<?= $picture->url ?>" alt="cert">
            </div>
            <div class="col-12 col-sm-7 col-md-6 text-center">
                <div class="u-h1 text-white mb-3 mb-lg-4">
                    <?= $header ?>
                </div>
                <div class="u-text text-white mb-3 mb-lg-4">
                    <?= $text ?>  
                </div>
                <div>
                    <a href="#" class="button button--secondary js-open-modal" data-modal="1">
                        Заказать
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
//используем поле gallery_after_gift_certificate 
foreach($home->gallery_after_gift_certificate as $h) {
    $header = $h->header;
    $text = $h->text;
    $gallery = $h->pictures;
}
?>
<section class="section">
    <div class="container container__photo-go">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <div class="u-h1 mb-2">
                    <?= $header ?>
                </div>
                <div class="u-text u-text--gray mb-4">
                    <?= $text ?>
                </div>
                <div>
                    <a href="#" class="button button--secondary js-open-modal" data-modal="1">Подарить полет</a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach($gallery as $picture): ?>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-2 px-1">
                    <a style="max-width: 220px;max-height: 220px;width: 100%;height: 100%;" href="<?= $picture->url ?>" data-fancybox="gal">
                        <img style="object-fit: cover;" class="w-100 h-100 o-moveY" src="<?= $picture->url ?>" alt="gallery1">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="go__photo">Загрузить ещё</a>
    </div>
</section>

<section class="section">
    <div class="container">


        <div class="swiper js-swiper-main">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row align-items-lg-center">
                        <div class="col-lg-5 col-md-6 col-12 mb-md-0 mb-4">
                            <div class="swiper-main__nav mb-lg-5 mb-4">
                                <div class="swiper-main-prev">
                                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.5348 0.877319L0.0498047 9.36232L8.5348 17.8473L9.9498 16.4333L2.8778 9.36232L9.9498 2.29132L8.5348 0.877319Z"/>
                                    </svg>                                        
                                </div>
                                <div class="swiper-main-pagination mx-3"></div>
                                <div class="swiper-main-next">
                                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.4652 0.877319L9.9502 9.36232L1.4652 17.8473L0.0501957 16.4333L7.1222 9.36232L0.0501957 2.29132L1.4652 0.877319Z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="u-h1 mb-4">Незабываемое предложение руки и сердца</div>
                            <div class="u-text mb-4">Удивите свою вторую половинку романтическим путешествием! Предлагаем романтический полет на самолете – незабываемые и яркие впечатления гарантированы!</div>
                            <div>
                                <a href="#" class="button button--transparent">Подробнее</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 offset-lg-1">
                            <img class="w-100" src="img/pred.png" alt="pred">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row align-items-lg-center">
                        <div class="col-lg-5 col-md-6 col-12 mb-md-0 mb-4">
                            <div class="swiper-main__nav mb-5">
                                <div class="swiper-main-prev">
                                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.5348 0.877319L0.0498047 9.36232L8.5348 17.8473L9.9498 16.4333L2.8778 9.36232L9.9498 2.29132L8.5348 0.877319Z"/>
                                    </svg>                                        
                                </div>
                                <div class="swiper-main-pagination mx-3"></div>
                                <div class="swiper-main-next">
                                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.4652 0.877319L9.9502 9.36232L1.4652 17.8473L0.0501957 16.4333L7.1222 9.36232L0.0501957 2.29132L1.4652 0.877319Z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="u-h1 mb-4">Слайд 2</div>
                            <div class="u-text mb-4">Удивите свою вторую половинку романтическим путешествием! Предлагаем романтический полет на самолете – незабываемые и яркие впечатления гарантированы!</div>
                            <div>
                                <a href="#" class="button button--transparent">Подробнее</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 offset-lg-1">
                            <img class="w-100" src="img/pred.png" alt="pred">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  