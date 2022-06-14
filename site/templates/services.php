<?php namespace ProcessWire; ?>
<?php 
    $w = $this_page->wedding->first;
    $j = $this_page->jump->first;
    $v = $this_page->vine->first;
?>
<section class="section py-3" id="wedding">
    <div class="container">
        
        <div class="row mb-5 inner">
            <div class="col-12 d-sm-none">
                <div class="inner__head mb-1">
                    <div class="inner__title mb-3">
                        <?= $w->title ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 pe-xl-5 pe-md-4 mb-md-0 mb-4">
                <?php $i_1 = 0; ?>
                <?php $i_2 = 0; ?>
                    
                <div class="inner__gal-main">
                <?php foreach ($w->images as $i1): ?>
                    <?php if ($i_1 == 0): ?>
                    <a href="<?= $i1->url ?>" data-fancybox="<?= $w->id ?>">
                        <img class="w-100" src="<?= $i1->size(590, 590)->url ?>" alt="">
                    </a>
                    <?php endif; ?>
                <?php $i_1++; ?>
                <?php endforeach; ?>
                </div>
                <div class="inner__gal-mini">
                    <?php foreach ($w->images as $i2): ?>
                        <?php if ($i_2 != 0): ?>
                            <div class="inner__gal-mini-item">
                                <a target="_blank" href="<?= $i2->url ?>" data-fancybox="<?= $w->id ?>">
                                    <?php if ($w->link && $i_2 == $w->images->count-1): ?>
                                        <a target="_blank" class="d-block" href="<?= $w->link ?>"><img class="inner__gal-mini-youtube" src="/site/templates/img/ico/youtube-big.svg" alt="youtube"></a>
                                    <?php endif; ?>
                                    <img class="w-100" src="<?= $i2->size(180, 180)->url ?>" alt="">
                                </a>
                            </div>
                            
                        <?php endif; ?>
                        <?php $i_2++; ?>
                    <?php endforeach; ?>
                    </div>
            </div>
            <div class="col-md-6 col-12 ps-xl-5 ps-md-4">
                <div class="inner__info">
                    <div class="d-sm-block d-none inner__head mb-1">
                        <div class="inner__title mb-4">
                            <?= $w->title ?>
                        </div>
                    </div>
                    <div class="inner__block">
                        <div class="inner__dop mb-4">
                            <div class="inner__dop-text mb-2">Выберите длительность:</div>
                            <?php $di = 1; ?>
                            <?php foreach ($w->duration as $d): ?>
                            <div class="inner__radio">
                                <input type="radio" class="btn-check js-duration" name="options" id="option<?= $di ?>" autocomplete="off" 
                                    data-duration="<?= $d->duration_time ?>"
                                    data-price="<?= $d->price ?>"
                                    value="<?= $d->duration_time ?>"
                                >
                                <label class="btn btn-secondary mb-1  <?= $di == 1 ? 'js-duration--active' : '' ?>" for="option<?= $di ?>"><?= $d->duration_time ?> мин</label>
                            </div>
                            <?php $di++ ?>
                            <?php endforeach; ?>
                        </div>
                        
                        <?php $ddi = 1; ?>
                        <?php foreach ($w->duration as $dd): ?>
                        <div class="mb-3 inner__duration-text duration-<?= $dd->duration_time ?> <?= $ddi == 1 ? 'inner__duration-text--active' : '' ?>">
                            <?= $dd->text ?>
                        </div>
                        <?php $ddi++ ?>
                        <?php endforeach; ?>
                        
                        <div class="inner__dop mb-4">    
                            <div class="inner__dop-text mb-2">Маршрут полета:</div>
                            <?php $dddi = 1; ?>
                            <?php foreach ($w->duration as $ddd): ?>
                                <div class="mb-3 inner__duration-text duration-<?= $ddd->duration_time ?> <?= $dddi == 1 ? 'inner__duration-text--active' : '' ?>">
                                    <?= $ddd->text ?>
                                </div>
                            <?php $dddi++ ?>
                            <?php endforeach; ?>
                        </div>
                        
                        <div class="inner__dop inner__dop-big mb-4">
                            <div class="inner__dop-left">
                                <div class="inner__dop-text mb-2">Выбор самолета:</div>
                                
                                <?php $ai = 1; ?>
                                <?php foreach ($w->aeroplanes as $a): ?>
                                <?php if ($ai == 1) {
                                    $aid = 'sokata';
                                } else if ($ai == 2) {
                                    $aid = 'pipistrel';
                                } else {
                                    $aid = 'sting';
                                }?>
                                <div class="custom-checkbox u-mb-4 js-fly">
                                    <input <?= $ai == 1 ? 'checked' : '' ?> class="custom-checkbox__input" type="radio" id="<?= $a->id ?>" name="fly" value="<?= $aid ?>">
                                    <label for="<?= $a->id ?>"><?= $a->title ?></label>
                                </div>
                                
                                <?php $ai++; ?>
                                <?php endforeach; ?>
                            </div>
                            <div class="inner__dop-right">
                                <?php $aai = 1; ?>
                                <?php foreach ($w->aeroplanes as $a): ?>
                                <?php if ($aai == 1) {
                                    $aid = 'sokata';
                                } else if ($aai == 2) {
                                    $aid = 'pipistrel';
                                } else {
                                    $aid = 'sting';
                                }?>
                                <img id="<?= $aid ?>" class="inner__dop-right-item <?= $aai == 1 ? 'inner__dop-right-item--active' : '' ?>" src="<?= $a->image->url ?>" alt="fly">
                                <?php $aai++; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <?php $si = 1 ?>
                        <?php foreach ($w->additional_service as $s): ?>
                            <div class="custom-checkbox u-mb-4 js-additional">
                                <input class="custom-checkbox__input" type="checkbox" id="add<?= $si ?>" name="additional" value="<?= $s->price ?>">
                                <label for="add<?= $si ?>"><?= $s->title ?> <b><?= $s->price ?> леев</b></label>
                            </div>
                        <?php $si++ ?>
                        <?php endforeach; ?>
                        
                        <div class="inner__footer">
                            <div class="inner__footer-wrapper">
                                Итого:
                                <b class="inner__footer-price"><span class="js-price1">ХХХ</span> леев</b>
                            </div>
                            <a href="#" class="button js-open-modal" data-modal="wedding">Заказать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section py-3" id="jump">
    <div class="container">
        
        <div class="row mb-5 inner">
            <div class="col-12 d-sm-none">
                <div class="inner__head mb-1">
                    <div class="inner__title mb-3">
                        <?= $j->title ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 pe-xl-5 pe-md-4 mb-md-0 mb-4">
                <?php $i_1 = 0; ?>
                <?php $i_2 = 0; ?>
                    
                <div class="inner__gal-main">
                <?php foreach ($j->images as $i1): ?>
                    <?php if ($i_1 == 0): ?>
                    <a href="<?= $i1->url ?>" data-fancybox="<?= $j->id ?>">
                        <img class="w-100" src="<?= $i1->size(590, 590)->url ?>" alt="">
                    </a>
                    <?php endif; ?>
                <?php $i_1++; ?>
                <?php endforeach; ?>
                </div>
                <div class="inner__gal-mini">
                    <?php foreach ($j->images as $i2): ?>
                        <?php if ($i_2 != 0): ?>
                            <div class="inner__gal-mini-item">
                                <a target="_blank" href="<?= $i2->url ?>" data-fancybox="<?= $j->id ?>">
                                    <?php if ($j->link && $i_2 == $j->images->count-1): ?>
                                        <a target="_blank" class="d-block" href="<?= $j->link ?>"><img class="inner__gal-mini-youtube" src="/site/templates/img/ico/youtube-big.svg" alt="youtube"></a>
                                    <?php endif; ?>
                                    <img class="w-100" src="<?= $i2->size(180, 180)->url ?>" alt="">
                                </a>
                            </div>
                            
                        <?php endif; ?>
                        <?php $i_2++; ?>
                    <?php endforeach; ?>
                    </div>
            </div>
            <div class="col-md-6 col-12 ps-xl-5 ps-md-4">
                <div class="inner__info">
                    <div class="d-sm-block d-none inner__head mb-1">
                        <div class="inner__title mb-4">
                            <?= $j->title ?>
                        </div>
                    </div>
                    <a href="img/serv21.png" class="inner__star mb-3 d-none" data-fancybox="review3"></a>
                    <a href="img/serv22.png" class="inner__star mb-3 d-none" data-fancybox="review3"></a>
                    <a href="img/serv23.png" class="inner__star mb-3 d-none" data-fancybox="review3"></a>
                    <div class="inner__block">
                        <div class="mb-3">Подарочная карта предназначена любителям насладиться незабываемым и красочным приключением – полётом на самолёте.15</div>
                        <div class="inner__dop inner__dop-big mb-4">
                            <div class="inner__dop-left w-100">
                                <div class="inner__dop-text mb-2">Выберите тип прыжка:</div>
                                <?php $ji = 1 ?>
                                <?php foreach ($j->type_jump as $tj): ?>
                                    <?php 
                                        if ($ji == 1) {
                                            $id = 'static_i';
                                            $val = 'static';
                                        } else {
                                            $id = 'tandem_i';
                                            $val = 'tandem';
                                        }
                                        ?>
                                    <div class="custom-checkbox u-mb-4 js-jump">
                                        <input <?= $ji == 1 ? 'checked' : '' ?> class="custom-checkbox__input" type="radio" id="<?= $id ?>" name="jump" value="<?= $val ?>" data-price="<?= $tj->price ?>">
                                        <label for="<?= $id ?>"><?= $tj->title ?></label>
                                    </div>
                                <?php $ji++ ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="inner__dop mb-4 js-jump-add-block" style="display: none;">
                            <div class="inner__dop-text mb-2">Дополнительные услуги:</div>
                            <?php foreach ($j->additional_service as $as): ?>
                            
                                <div class="custom-checkbox u-mb-4 js-jump-add">
                                    <input class="custom-checkbox__input" type="checkbox" id="add-jump" name="additional" value="<?= $as->price ?>">
                                    <label for="add-jump"><?= $as->title ?> <b><?= $as->price ?> евро</b></label>
                                </div>
                                
                            <?php endforeach; ?>
                        </div>
                        <div class="inner__footer">
                            <div class="inner__footer-wrapper">
                                Итого:
                                <b class="inner__footer-price"><span class="js-price2">90</span> евро</b>
                            </div>
                            <a href="#" class="button js-open-modal" data-modal="jump">Заказать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section py-3" id="vine">
    <div class="container">
        
        <div class="row mb-5 inner">
            <div class="col-12 d-sm-none">
                <div class="inner__head mb-1">
                    <div class="inner__title mb-3">
                        <?= $v->title ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 pe-xl-5 pe-md-4 mb-md-0 mb-4">
            <?php $i_1 = 0; ?>
            <?php $i_2 = 0; ?>
                
            <div class="inner__gal-main">
            <?php foreach ($v->images as $i1): ?>
                <?php if ($i_1 == 0): ?>
                <a href="<?= $i1->url ?>" data-fancybox="<?= $v->id ?>">
                    <img class="w-100" src="<?= $i1->size(590, 590)->url ?>" alt="">
                </a>
                <?php endif; ?>
            <?php $i_1++; ?>
            <?php endforeach; ?>
            </div>
            <div class="inner__gal-mini">
                <?php foreach ($v->images as $i2): ?>
                    <?php if ($i_2 != 0): ?>
                        <div class="inner__gal-mini-item">
                            <a target="_blank" href="<?= $i2->url ?>" data-fancybox="<?= $v->id ?>">
                                <?php if ($v->link && $i_2 == $v->images->count-1): ?>
                                    <a target="_blank" class="d-block" href="<?= $v->link ?>"><img class="inner__gal-mini-youtube" src="/site/templates/img/ico/youtube-big.svg" alt="youtube"></a>
                                <?php endif; ?>
                                <img class="w-100" src="<?= $i2->size(180, 180)->url ?>" alt="">
                            </a>
                        </div>
                        
                    <?php endif; ?>
                    <?php $i_2++; ?>
                <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-6 col-12 ps-xl-5 ps-md-4">
                <div class="inner__info">
                    <div class="d-sm-block d-none inner__head mb-1">
                        <div class="inner__title mb-4">
                            <?= $v->title ?>
                        </div>
                    </div>
                    <div class="inner__block">
                        <div class="mb-3"><?= $v->text ?></div>
                        <div class="inner__dop mb-4">
                            <div class="inner__dop-text mb-2">Маршрут полета:</div>
                            <div class="mb-3"><?= $v->promo_text ?></div>
                        </div>
                        <div class="inner__dop-left w-100">
                            <div class="inner__dop-text mb-2">Укажите количество пассажиров:</div>
                            <div class="custom-checkbox u-mb-4 js-passengers">
                                <input checked class="custom-checkbox__input" type="radio" id="passengers_2" name="passengers" value="2">
                                <label for="passengers_2">2 пассажира</label>
                            </div>
                            <div class="custom-checkbox u-mb-4 js-passengers">
                                <input class="custom-checkbox__input" type="radio" id="passengers_3" name="passengers" value="3">
                                <label for="passengers_3">3 пассажира</label>
                            </div>
                        </div>
                        
                        <div class="inner__dop inner__dop-big mb-4">
                            <div class="inner__dop-left">
                                <div class="inner__dop-text mb-2">Выбор самолета:</div>
                                
                                <?php $ai = 1; ?>
                                <?php foreach ($v->aeroplanes as $a): ?>
                                <?php if ($ai == 1) {
                                    $aid = 'sokata_i-vine';
                                    $aidv = 'sokata-vine';
                                } else if ($ai == 2) {
                                    $aid = 'pipistrel_i-vine';
                                    $aidv = 'pipistrel-vine';
                                } else {
                                    $aid = 'sting_i-vine';
                                    $aidv = 'sting-vine';
                                }?>
                                <div class="custom-checkbox u-mb-4 js-fly-vine">
                                    <input <?= $ai == 1 ? 'checked' : '' ?> class="custom-checkbox__input" type="radio" id="<?= $aid ?>" name="fly-vine" value="<?= $aidv ?>">
                                    <label for="<?= $aid ?>"><?= $a->title ?></label>
                                </div>
                                
                                <?php $ai++; ?>
                                <?php endforeach; ?>
                            </div>
                            <div class="inner__dop-right">
                                <?php $aai = 1; ?>
                                <?php foreach ($w->aeroplanes as $a): ?>
                                <?php if ($aai == 1) {
                                    $aid = 'sokata-vine';
                                } else if ($aai == 2) {
                                    $aid = 'pipistrel-vine';
                                } else {
                                    $aid = 'sting-vine';
                                }?>
                                <img id="<?= $aid ?>" class="inner__dop-right-item-vine  <?= $aai == 1 ? 'inner__dop-right-item-vine--active' : '' ?>" src="<?= $a->image->url ?>" alt="fly">
                                <?php $aai++; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="inner__footer">
                            <div class="inner__footer-wrapper">
                                Итого:
                                <b class="inner__footer-price"><span class="js-price3"><?= $v->price ?></span> евро</b>
                            </div>
                            <a href="#" class="button js-open-modal" data-modal="vine">Заказать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section mt-sm-5 mt-3 py-3 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <a href="/flights#sting">
                    <img class="w-100" src="/site/templates/img/sting.jpg" alt="sokata">
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="/flights#pipistrel">
                    <img class="w-100" src="/site/templates/img/pipistrel.jpg" alt="sokata">
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="/flights#sokata">
                    <img class="w-100" src="/site/templates/img/sokata.jpg" alt="sokata">
                </a>
            </div>
        </div>
    </div>
</section>






<div class="modal" data-modal="wedding">
    <form action="/ajax.php" method="POST">
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <input type="hidden" name="price" class="js-price1" value="900">
        <input type="hidden" name="duration" class="js-modal-wedding-duration" value="15">
        <input type="hidden" name="prefix" value="+373">
        <input type="hidden" name="fly-name" value="Предложение руки и сердца">
        <input type="hidden" name="aeroplane" class="js-modal-wedding-fly" value="SOKATA TB9">
        <input type="hidden" name="addi1" class="js-modal-wedding-add1" value="0">
        <input type="hidden" name="addi2" class="js-modal-wedding-add2" value="0">
        <div class="modal__title">Предложение руки и сердца</div>
        <div class="mb-4">
            <div class="modal__context">Выбрано:</div>
            <ul class="modal__options">
                <li>Длительность: <span class="js-modal-wedding-duration">15</span> минут</li>
                <li>Самолет: <span class="js-modal-wedding-fly">SOKATA TB9</span></li>
                <li class="js-modal-wedding-add1">Монтаж видео, организация</li>
                <li class="js-modal-wedding-add2">Видеосъемка в салоне и исходники видео</li>
            </ul>
        </div>
        <div class="mb-5">
            <div class="modal__context">Контактные данные</div>
            <div class="modal__bot cta-form__container">
                <div class="modal__wrapper modal__wrapper--w33 pe-md-3">
                    <input class="input input--cta" name="name" type="text" placeholder="Имя, Фамилия">
                </div>
                <div class="modal__wrapper modal__wrapper--w33 pe-md-3">
                    <input class="js-phone" type="text" name="phone" onkeyup="this.value = this.value.replace (/\D/, '')" maxlength="10" placeholder="Телефон">
                </div>
                <div class="modal__wrapper modal__wrapper--w33">
                    <input class="input input--cta" type="text" name="address" placeholder="Адрес доставки">
                </div>
            </div>
        </div>
        <div class="modal__price-wrapper">
            <div>
                <div class="modal__text">Итого:</div>
                <div class="modal__price"><span class="js-price1">XXX</span> леев</div>
            </div>
            <button type="submit" class="button">Заказать</button>
        </div>

        <div class="modal__info">
            <svg class="me-3" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.8" d="M8.99935 17.3346C4.39698 17.3346 0.666016 13.6037 0.666016 9.0013C0.666016 4.39893 4.39698 0.667969 8.99935 0.667969C13.6017 0.667969 17.3327 4.39893 17.3327 9.0013C17.3276 13.6016 13.5996 17.3296 8.99935 17.3346ZM8.16602 11.5013V13.168H9.83268V11.5013H8.16602ZM8.16602 4.83464V9.83464H9.83268V4.83464H8.16602Z" fill="#B8BBC0"/>
            </svg>
            Ваш сертификат будет годен в течении 3-х месяцев
        </div>
    </form>
</div>

<div class="modal" data-modal="jump">
    <form action="/ajax.php" method="POST">
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <input type="hidden" class="js-modal-jump-type" name="fly-name" value="static">
        <input type="hidden" name="currency" value="евро">
        <input type="hidden" name="fly-name" value="Прыжок с парашютом">
        <input type="hidden" name="prefix" value="+373">
        <input type="hidden" name="addi1" class="js-modal-jump-add" value="0">
        <input type="hidden" name="price" class="js-price2" value="90">
        <div class="modal__title">Прыжок с парашютом</div>
        <div class="mb-4">
            <div class="modal__context">Выбрано:</div>
            <ul class="modal__options">
                <li class="js-modal-jump-type"></li>
                <li class="js-modal-jump-add">Видеосъемка в салоне и исходники видео</li>
            </ul>
        </div>
        <div class="mb-5">
            <div class="modal__context">Контактные данные</div>
            <div class="modal__bot cta-form__container">
                <div class="modal__wrapper modal__wrapper--w33 pe-md-3">
                    <input class="input input--cta" name="name" type="text" placeholder="Имя, Фамилия" required>
                </div>
                <div class="modal__wrapper modal__wrapper--w33 pe-md-3">
                    <input class="js-phone2" type="text" name="phone" onkeyup="this.value = this.value.replace (/\D/, '')" maxlength="10" placeholder="Телефон" required>
                </div>
                <div class="modal__wrapper modal__wrapper--w33">
                    <input class="input input--cta" type="text" name="address" placeholder="Адрес доставки">
                </div>
            </div>
        </div>
        <div class="modal__price-wrapper">
            <div>
                <div class="modal__text">Итого:</div>
                <div class="modal__price"><span class="js-price2">90</span> евро</div>
            </div>
            <button type="submit" class="button">Заказать</button>
        </div>

        <div class="modal__info">
            <svg class="me-3" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.8" d="M8.99935 17.3346C4.39698 17.3346 0.666016 13.6037 0.666016 9.0013C0.666016 4.39893 4.39698 0.667969 8.99935 0.667969C13.6017 0.667969 17.3327 4.39893 17.3327 9.0013C17.3276 13.6016 13.5996 17.3296 8.99935 17.3346ZM8.16602 11.5013V13.168H9.83268V11.5013H8.16602ZM8.16602 4.83464V9.83464H9.83268V4.83464H8.16602Z" fill="#B8BBC0"/>
            </svg>
            Ваш сертификат будет годен в течении 3-х месяцев
        </div>
    </form>
</div>

<div class="modal" data-modal="vine">
    <form action="/ajax.php" method="POST">
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <input type="hidden" name="passengers" class="js-modal-vine-passengers" value="2">
        <input type="hidden" name="currency" value="евро">
        <input type="hidden" name="fly-name" value="Полет на винодельню">
        <input type="hidden" name="prefix" value="+373">
        <input type="hidden" name="aeroplane" class="js-modal-vine-fly" value="0">
        <input type="hidden" name="price" class="js-modal-vine-price" value="<?= $v->price ?>">
        <div class="modal__title">Полет на винодельню</div>
        <div class="mb-4">
            <div class="modal__context">Выбрано:</div>
            <ul class="modal__options">
                <li>Пассажиров: <span class="js-modal-vine-passengers">2</span></li>
                <li>Самолет: <span class="js-modal-vine-fly">SOKATA TB9</span></li>
            </ul>
        </div>
        <div class="mb-5">
            <div class="modal__context">Контактные данные</div>
            <div class="modal__bot cta-form__container">
                <div class="modal__wrapper modal__wrapper--w33 pe-md-3">
                    <input class="input input--cta" name="name" type="text" placeholder="Имя, Фамилия" required>
                </div>
                <div class="modal__wrapper modal__wrapper--w33 pe-md-3">
                    <input class="js-phone3" type="text" name="phone" onkeyup="this.value = this.value.replace (/\D/, '')" maxlength="10" placeholder="Телефон" required>
                </div>
                <div class="modal__wrapper modal__wrapper--w33">
                    <input class="input input--cta" type="text" name="address" placeholder="Адрес доставки">
                </div>
            </div>
        </div>
        <div class="modal__price-wrapper">
            <div>
                <div class="modal__text">Итого:</div>
                <div class="modal__price"><span><?= $v->price ?></span> евро</div>
            </div>
            <button type="submit" class="button">Заказать</button>
        </div>

        <div class="modal__info">
            <svg class="me-3" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.8" d="M8.99935 17.3346C4.39698 17.3346 0.666016 13.6037 0.666016 9.0013C0.666016 4.39893 4.39698 0.667969 8.99935 0.667969C13.6017 0.667969 17.3327 4.39893 17.3327 9.0013C17.3276 13.6016 13.5996 17.3296 8.99935 17.3346ZM8.16602 11.5013V13.168H9.83268V11.5013H8.16602ZM8.16602 4.83464V9.83464H9.83268V4.83464H8.16602Z" fill="#B8BBC0"/>
            </svg>
            Ваш сертификат будет годен в течении 3-х месяцев
        </div>
    </form>
</div>