<?php namespace ProcessWire;

    $fly = $pages->findOne('template=flying');
?>              

<?php $flyNum = 1; ?>
    <?php foreach ($fly->fly as $p): ?>
        
    <?php if ($flyNum == 1 ) {
        $id = 'sting';
    } else if ($flyNum == 2) {
        $id = 'pipistrel';
    } else {
        $id = 'sokata';
    }
    
    ?>
    <section class="section py-3" id="<?= $id ?>">
        <div class="container">
            
            <div class="row mb-5 inner">
                <div class="col-12 d-sm-none">
                    <div class="inner__head mb-1">
                        <div class="inner__title mb-4">
                            <?= $p->title ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 pe-xl-5 pe-md-4 mb-md-0 mb-4">
                    <?php $i_1 = 0; ?>
                    <?php $i_2 = 0; ?>
                        
                        <div class="inner__gal-main">
                            
                        <?php foreach ($p->images as $i1): ?>
                            <?php if ($i_1 == 0): ?>
                            <a href="<?= $i1->url ?>" data-fancybox="<?= $p->id ?>">
                                <img class="w-100" src="<?= $i1->size(590, 590)->url ?>" alt="">
                            </a>
                            <?php endif; ?>
                        <?php $i_1++; ?>
                        <?php endforeach; ?>
                        </div>
                        <div class="inner__gal-mini">
                            <?php foreach ($p->images as $i2): ?>
                                <?php if ($i_2 != 0): ?>
                                    <div class="inner__gal-mini-item">
                                        <a target="_blank" href="<?= $i2->url ?>" data-fancybox="<?= $p->id ?>">
                                            <?php if ($p->link && $i_2 == $p->images->count-1): ?>
                                                <a target="_blank" class="d-block" href="<?= $p->link ?>"><img class="inner__gal-mini-youtube" src="/site/templates/img/ico/youtube-big.svg" alt="youtube"></a>
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
                                <?= $p->title ?>
                            </div>
                        </div>
                        <div class="inner__block">
                            <div class="mb-3">
                                <div class="d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                      </svg>
                                    <span class="ps-2">Вместимость <?= $p->capacity ?></span>
                                </div>
                                <?php if ($p->checkbox): ?>
                                    <div class="d-flex align-items-center">
                                        <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" viewBox="0 -256 1792 1792" id="svg2" version="1.1" inkscape:version="0.48.3.1 r9886" width="16" height="16" sodipodi:docname="plane_font_awesome.svg">
                                            <metadata id="metadata12">
                                            <rdf:RDF>
                                                <cc:Work rdf:about="">
                                                <dc:format>image/svg+xml</dc:format>
                                                <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
                                                </cc:Work>
                                            </rdf:RDF>
                                            </metadata>
                                            <defs id="defs10"/>
                                            <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="640" inkscape:window-height="480" id="namedview8" showgrid="false" inkscape:zoom="0.13169643" inkscape:cx="896" inkscape:cy="896" inkscape:window-x="0" inkscape:window-y="25" inkscape:window-maximized="0" inkscape:current-layer="svg2"/>
                                            <g transform="matrix(1,0,0,-1,205.01695,1330.9831)" id="g4">
                                            <path d="m 1397,1324 q 0,-87 -149,-236 l -240,-240 143,-746 1,-6 q 0,-14 -9,-23 L 1079,9 q -9,-9 -23,-9 -21,0 -29,18 L 753,593 508,348 Q 576,110 576,96 576,82 567,73 L 503,9 Q 494,0 480,0 462,0 452,16 L 297,296 17,451 q -17,9 -17,28 0,14 9,23 l 64,65 q 9,9 23,9 14,0 252,-68 L 593,753 18,1027 q -18,8 -18,29 0,14 9,23 l 64,64 q 9,9 23,9 4,0 6,-1 l 746,-143 240,240 q 149,149 236,149 32,0 52.5,-20.5 20.5,-20.5 20.5,-52.5 z" id="path6" inkscape:connector-curvature="0" style="fill:currentColor"/>
                                            </g>
                                        </svg>
                                        <span class="ps-2">Возможность управления</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="inner__dop mb-4">
                                <div class="inner__dop-text mb-2">Выберите длительность:</div>
                                    <?php $di = 1; ?>
                                <?php foreach ($p->duration as $d): ?>
                                    <div class="inner__radio">
                                        <input type="radio" class="btn-check js-duration-fly-<?= $flyNum ?>" name="options-<?= $flyNum ?>" id="option<?= $flyNum ?><?= $di ?>" autocomplete="off" 
                                            data-duration="<?= $d->duration_time ?>"
                                            data-price="<?= $d->price ?>"
                                            value="<?= $d->duration_time ?>"
                                        >
                                        <label class="btn btn-secondary mb-1 <?= $di == 1 ? "js-duration-fly-{$flyNum}--active" : '' ?>" for="option<?= $flyNum ?><?= $di ?>"><?= $d->duration_time ?> мин</label>
                                    </div>
                                    <?php $di++; ?>
                                <?php endforeach; ?>
                            </div>
                            <?php $ddi = 1; ?>
                            <?php foreach ($p->duration as $dd): ?>
                            <div class="mb-3 inner__duration-text js-text-<?= $flyNum ?> <?= $ddi == 1 ? 'inner__duration-text--active' : '' ?> duration-fly-<?= $flyNum ?>-<?= $dd->duration_time ?>">
                                <?= $dd->text ?>
                            </div>
                            <?php $ddi++ ?>
                            <?php endforeach; ?>
                            
                            <div class="inner__dop mb-4">    
                                <div class="inner__dop-text mb-2">Маршрут полета:</div>
                                <?php $dddi = 1; ?>
                                <?php foreach ($p->duration as $ddd): ?>
                                    <div class="mb-3 inner__duration-text js-text-<?= $flyNum ?> <?= $dddi == 1 ? 'inner__duration-text--active' : '' ?> duration-fly-<?= $flyNum ?>-<?= $ddd->duration_time ?>">
                                        <?= $ddd->text ?>
                                    </div>
                                <?php $dddi++ ?>
                                <?php endforeach; ?>
                            </div>
                            
                            <div class="inner__dop mb-4">
                                <div class="inner__dop-text mb-2">Дополнительные услуги:</div>
                            </div>
                            <?php $si = 1 ?>
                            <?php foreach ($p->additional_service as $s): ?>
                                <div class="custom-checkbox u-mb-4 js-fly-<?= $flyNum ?>-additionals">
                                    <input class="fly-<?= $flyNum ?>-add<?= $si ?> custom-checkbox__input" type="checkbox" id="fly-<?= $flyNum ?>-add<?= $si ?>" name="additional" value="<?= $s->price ?>">
                                    <label for="fly-<?= $flyNum ?>-add<?= $si ?>"><?= $s->title ?> <b><?= $s->price ?> леев</b></label>
                                </div>
                            <?php $si++ ?>
                            <?php endforeach; ?>
                            
                            <div class="inner__footer">
                                <div class="inner__footer-wrapper">
                                    Итого:
                                    <b class="inner__footer-price"><span class="js-modal-fly-price-<?= $flyNum ?>">ХХХ</span> леев</b>
                                </div>
                                <a href="#" class="button js-open-modal" data-modal="fly" data-title="<?= $p->title ?>" data-fly="<?= $flyNum ?>">Заказать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <?php $flyNum++ ?>
    <?php endforeach; ?>

    <section class="section py-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <a href="/services#wedding">
                        <img class="w-100" src="/site/assets/files/1184/bann-3.svg" alt="sokata">
                    </a>
                </div>
                <div class="col-4">
                    <a href="/services#jump">
                        <img class="w-100" src="/site/assets/files/1185/bann-4.svg" alt="sokata">
                    </a>
                </div>
                <div class="col-4">
                    <a href="/services#vine">
                        <img class="w-100" src="/site/assets/files/1186/bann-2.svg" alt="sokata">
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    
    <div class="modal" data-modal="fly">
        <form action="/ajax.php" method="POST">
            <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
            <input type="hidden" name="duration" class="js-modal-fly-duration" value="15">
            <input type="hidden" name="prefix" value="+373">
            <input type="hidden" name="price" class="js-modal-fly-price js-modal-price-all" value="15">
            <input type="hidden" name="fly-name" class="js-modal-fly-title" value="STING - TL2000">
            <input type="hidden" name="addi1" class="js-modal-fly-add1" value="0">
            <input type="hidden" name="addi2" class="js-modal-fly-add2" value="0">
            <div class="modal__title js-modal-fly-title">Полет на самолете STING - TL2000</div>
            <div class="mb-4">
                <div class="modal__context">Выбрано:</div>
                <ul class="modal__options">
                    <li>Длительность: <span class="js-modal-fly-duration">15</span> минут</li>
                    <li class="js-modal-fly-add1">Видеосъемка в салоне и исходники видео</li>
                    <li class="js-modal-fly-add2">Видеосъемка с нескольких ракурсов и монтаж</li>
                </ul>
            </div>
            <div class="mb-5">
                <div class="modal__context">Контактные данные</div>
                <div class="modal__bot cta-form__container">
                    <div class="modal__wrapper modal__wrapper--w33 pe-md-3">
                        <input class="input input--cta" name="name" type="text" placeholder="Имя, Фамилия" required>
                    </div>
                    <div class="modal__wrapper modal__wrapper--w33 pe-md-3">
                        <input class="js-phone" type="text" name="phone" placeholder="Телефон" required>
                    </div>
                    <div class="modal__wrapper modal__wrapper--w33">
                        <input class="input input--cta" type="text" name="address" placeholder="Адрес доставки">
                    </div>
                </div>
            </div>
            <div class="modal__price-wrapper">
                <div>
                    <div class="modal__text">Итого:</div>
                    <div class="modal__price">
                        <span class="js-modal-price-all">XXX</span> леев
                    </div>
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