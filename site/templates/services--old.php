<section class="section pb-0">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="u-h1"><?= $this_page->title ?></div>
            </div>
        </div>
        <?php foreach($this_page->services as $s): ?>
        <div class="row mb-5 service pb-5">
            <div class="col-md-6 col-12 pe-xl-5 pe-md-4 mb-md-0 mb-4">
                <div class="service__gal row">
                    <div class="col-8 pe-2 h-100">
                        <div class="service__gal-main">
                            <a href="<?= $s->picture->url ?>" data-fancybox="serv<?= $s ?>">
                                <img class="w-100" src="<?= $s->picture->url ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-4 ps-2 h-100">
                        <div class="service__gal-mini">
                            <?php foreach($s->additional_pictures as $p): ?>
                            <a href="<?= $p->url ?>" data-fancybox="serv<?= $s ?>">
                                <img class="w-100" src="<?= $p->url ?>" alt="">
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 ps-xl-5 ps-md-4">
                <div class="service__info">
                    <div class="service__cat"><?= $s->category ?></div>
                    <div class="service__head mb-1">
                        <div class="service__title">
                            <?= $s->header ?>
                        </div>
                        <div class="service__price"><?= $s->price ?> леев</div>
                    </div>
                    <?php if($s->stars->id): ?>
                    <a href="<?= $s->review_pictures->first()->url; ?>" class="service__star mb-3" data-fancybox="review<?= $s ?>">
                        <div>
                            <svg class="o-star" width="17" height="16" viewBox="0 0 17 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.54894 0.927052C7.8483 0.0057416 9.1517 0.00573945 9.45106 0.92705L10.6329 4.56434C10.7668 4.97636 11.1507 5.25532 11.5839 5.25532H15.4084C16.3771 5.25532 16.7799 6.49494 15.9962 7.06434L12.9021 9.31231C12.5516 9.56695 12.405 10.0183 12.5389 10.4303L13.7207 14.0676C14.02 14.9889 12.9656 15.7551 12.1818 15.1857L9.08779 12.9377C8.7373 12.6831 8.2627 12.6831 7.91222 12.9377L4.81815 15.1857C4.03444 15.7551 2.97996 14.9889 3.27931 14.0676L4.46114 10.4303C4.59501 10.0183 4.44835 9.56695 4.09787 9.31231L1.00381 7.06434C0.220092 6.49494 0.622867 5.25532 1.59159 5.25532H5.41606C5.84929 5.25532 6.23324 4.97636 6.36712 4.56434L7.54894 0.927052Z" fill="#DBDBDB"/>
                            </svg>
                            <svg class="o-star<?= $s->stars->id < 2 ? '--disable' : '' ?>" width="17" height="16" viewBox="0 0 17 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.54894 0.927052C7.8483 0.0057416 9.1517 0.00573945 9.45106 0.92705L10.6329 4.56434C10.7668 4.97636 11.1507 5.25532 11.5839 5.25532H15.4084C16.3771 5.25532 16.7799 6.49494 15.9962 7.06434L12.9021 9.31231C12.5516 9.56695 12.405 10.0183 12.5389 10.4303L13.7207 14.0676C14.02 14.9889 12.9656 15.7551 12.1818 15.1857L9.08779 12.9377C8.7373 12.6831 8.2627 12.6831 7.91222 12.9377L4.81815 15.1857C4.03444 15.7551 2.97996 14.9889 3.27931 14.0676L4.46114 10.4303C4.59501 10.0183 4.44835 9.56695 4.09787 9.31231L1.00381 7.06434C0.220092 6.49494 0.622867 5.25532 1.59159 5.25532H5.41606C5.84929 5.25532 6.23324 4.97636 6.36712 4.56434L7.54894 0.927052Z" fill="#DBDBDB"/>
                            </svg>
                            <svg class="o-star<?= $s->stars->id < 3 ? '--disable' : '' ?>" width="17" height="16" viewBox="0 0 17 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.54894 0.927052C7.8483 0.0057416 9.1517 0.00573945 9.45106 0.92705L10.6329 4.56434C10.7668 4.97636 11.1507 5.25532 11.5839 5.25532H15.4084C16.3771 5.25532 16.7799 6.49494 15.9962 7.06434L12.9021 9.31231C12.5516 9.56695 12.405 10.0183 12.5389 10.4303L13.7207 14.0676C14.02 14.9889 12.9656 15.7551 12.1818 15.1857L9.08779 12.9377C8.7373 12.6831 8.2627 12.6831 7.91222 12.9377L4.81815 15.1857C4.03444 15.7551 2.97996 14.9889 3.27931 14.0676L4.46114 10.4303C4.59501 10.0183 4.44835 9.56695 4.09787 9.31231L1.00381 7.06434C0.220092 6.49494 0.622867 5.25532 1.59159 5.25532H5.41606C5.84929 5.25532 6.23324 4.97636 6.36712 4.56434L7.54894 0.927052Z" fill="#DBDBDB"/>
                            </svg>
                            <svg class="o-star<?= $s->stars->id < 4 ? '--disable' : '' ?>" width="17" height="16" viewBox="0 0 17 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.54894 0.927052C7.8483 0.0057416 9.1517 0.00573945 9.45106 0.92705L10.6329 4.56434C10.7668 4.97636 11.1507 5.25532 11.5839 5.25532H15.4084C16.3771 5.25532 16.7799 6.49494 15.9962 7.06434L12.9021 9.31231C12.5516 9.56695 12.405 10.0183 12.5389 10.4303L13.7207 14.0676C14.02 14.9889 12.9656 15.7551 12.1818 15.1857L9.08779 12.9377C8.7373 12.6831 8.2627 12.6831 7.91222 12.9377L4.81815 15.1857C4.03444 15.7551 2.97996 14.9889 3.27931 14.0676L4.46114 10.4303C4.59501 10.0183 4.44835 9.56695 4.09787 9.31231L1.00381 7.06434C0.220092 6.49494 0.622867 5.25532 1.59159 5.25532H5.41606C5.84929 5.25532 6.23324 4.97636 6.36712 4.56434L7.54894 0.927052Z" fill="#DBDBDB"/>
                            </svg>
                            <svg class="o-star<?= $s->stars->id < 5 ? '--disable' : '' ?>" width="17" height="16" viewBox="0 0 17 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.54894 0.927052C7.8483 0.0057416 9.1517 0.00573945 9.45106 0.92705L10.6329 4.56434C10.7668 4.97636 11.1507 5.25532 11.5839 5.25532H15.4084C16.3771 5.25532 16.7799 6.49494 15.9962 7.06434L12.9021 9.31231C12.5516 9.56695 12.405 10.0183 12.5389 10.4303L13.7207 14.0676C14.02 14.9889 12.9656 15.7551 12.1818 15.1857L9.08779 12.9377C8.7373 12.6831 8.2627 12.6831 7.91222 12.9377L4.81815 15.1857C4.03444 15.7551 2.97996 14.9889 3.27931 14.0676L4.46114 10.4303C4.59501 10.0183 4.44835 9.56695 4.09787 9.31231L1.00381 7.06434C0.220092 6.49494 0.622867 5.25532 1.59159 5.25532H5.41606C5.84929 5.25532 6.23324 4.97636 6.36712 4.56434L7.54894 0.927052Z" fill="#DBDBDB"/>
                            </svg>
                        </div>
                        <span class="service__star-text">Отзывов: <?= count($s->review_pictures)?></span>
                    </a>
                        <?php foreach($s->review_pictures as $rp): ?>
                            <?php if($s->review_pictures->first()->url == $rp->url) continue ?>
                            <a href="<?= $rp->url ?>" class="service__star mb-3 d-none" data-fancybox="review<?= $s ?>"></a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <div class="service__block">
                        <div class="service__text u-color-gray mb-3"><?= $s->text ?></div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        
    <div class="row mb-5">
            <div class="col-12">
                <div class="u-h1">Наши самолеты</div>
            </div>
        </div>
        <div class="row fly align-items-xxl-center mb-5 pb-5">
                <div class="col-md-4 col-12 mb-md-0 mb-3">
                    <div class="fly__item-img">
                        <img src="/site/assets/files/1075/img_air1.jpg" alt="Стинг TL2000">
                    </div>
                </div>
                <div class="col-xl-7 offset-xl-1 col-md-8 col-12">
                    <div class="u-h1 mb-3"><h2 style="font-weight: 600;font-size: 25px;line-height: 150%;">Стинг TL2000</h2></div>
                    <div class="u-text u-color-gray mb-4"><p>Подарочная карта предназначена любителям насладиться незабываемым и красочным приключением – полётом на самолёте, запечатлеть восхитительные виды с высоты птичьего полёта. Подарочная карта предназначена любителям насладиться незабываемым и красочным приключением – полётом на самолёте, запечатлеть восхитительные виды с высоты птичьего полёта.</p></div>
                </div>
        </div>

         <div class="row fly align-items-xxl-center mb-5 pb-5">
                <div class="col-md-4 col-12 mb-md-0 mb-3">
                    <div class="fly__item-img">
                        <img src="/site/assets/files/1075/img_air2.jpg" alt="PIPISTREL VIRUS">
                    </div>
                </div>
                <div class="col-xl-7 offset-xl-1 col-md-8 col-12">
                    <div class="u-h1 mb-3"><h2 style="font-weight: 600;font-size: 25px;line-height: 150%;">PIPISTREL VIRUS</h2></div>
                    <div class="u-text u-color-gray mb-4"><p>Подарочная карта предназначена любителям насладиться незабываемым и красочным приключением – полётом на самолёте, запечатлеть восхитительные виды с высоты птичьего полёта. Подарочная карта предназначена любителям насладиться незабываемым и красочным приключением – полётом на самолёте, запечатлеть восхитительные виды с высоты птичьего полёта.</p></div>
                </div>
        </div>

         <div class="row fly align-items-xxl-center mb-5 pb-5">
                <div class="col-md-4 col-12 mb-md-0 mb-3">
                    <div class="fly__item-img">
                        <img src="/site/assets/files/1075/img_air3.jpg" alt="SOKATA TB9">
                    </div>
                </div>
                <div class="col-xl-7 offset-xl-1 col-md-8 col-12">
                    <div class="u-h1 mb-3"><h2 style="font-weight: 600;font-size: 25px;line-height: 150%;">SOKATA TB9</h2></div>
                    <div class="u-text u-color-gray mb-4"><p>Подарочная карта предназначена любителям насладиться незабываемым и красочным приключением – полётом на самолёте, запечатлеть восхитительные виды с высоты птичьего полёта. Подарочная карта предназначена любителям насладиться незабываемым и красочным приключением – полётом на самолёте, запечатлеть восхитительные виды с высоты птичьего полёта.</p></div>
                </div>
        </div>

    </div>
</section>  
