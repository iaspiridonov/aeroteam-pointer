<?php
    $flying = $pages->findOne('template=flying');
?>
<section class="section py-0">
    <img class="fly__bg" src="<?= $flying->picture->url ?>" alt="fly">
</section>

<section class="section mt-5">
    <div class="container">
        <?php foreach($flying->flying as $f): ?>
            <div class="row fly align-items-xxl-center mb-5 pb-5">
                <div class="col-md-4 col-12 mb-md-0 mb-3">
                    <div class="fly__item-img">
                        <img src="<?= $f->picture->url ?>" alt="fly">
                    </div>
                </div>
                <div class="col-xl-7 offset-xl-1 col-md-8 col-12">
                    <div class="u-h1 mb-3"><?= $f->header ?></div>
                    <div class="u-text u-color-gray mb-4"><?= $f->text ?></div>
                    <?php
                    $people_count = ''; 
                    if($f->min_people_count) {
                        $people_count .= "от {$f->min_people_count} ";
                    }
                    if($f->people_count && $f->people_count > $f->min_people_count) {
                        $people_count .= "до {$f->people_count}";
                    }                    
                    if($f->min_people_count == $f->people_count && $people_count){
                        $people_count = $f->people_count;
                    }
                    if($people_count): 
                    ?>   
                        <div class="u-text u-color-gray mb-xxl-5 mb-md-4 mb-2">Количество человек: <?= $people_count ?></div>
                    <?php endif; ?>
                    <div>
                       <!-- <select name="item1" class="js-enter-item">
                            <?php foreach($f->rates as $rate): ?>
                                <?php
                                //составим корректную строчку
                                if($rate->time_format->id == 1 && ($rate->time < 5 && $rate->time > 1 || $rate->time < 25 && $rate->time > 21|| $rate->time < 35 && $rate->time > 31 
                                                                    || $rate->time < 45 && $rate->time > 41 || $rate->time < 55 && $rate->time > 51)) {
                                    $word = ' минуты';
                                } elseif($rate->time_format->id == 1 && ($rate->time == 1 || $rate->time == 21 || $rate->time == 31 || $rate->time == 41 || $rate->time == 51)) {
                                    $word = ' минута';
                                } elseif($rate->time_format->id == 1) {
                                    $word = ' минут';
                                } elseif($rate->time_format->id == 2 && ($rate->time == 1 || $rate->time == 21)) {
                                    $word = ' час';
                                } elseif($rate->time_format->id == 1 && ($rate->time < 5 && $rate->time > 1  || $rate->time < 25 && $rate->time > 21)) {
                                    $word = ' часа';
                                } else {
                                    $word = 'часов';
                                }
                                ?>
                                <option value="<?= $rate ?>"><?= $rate->time . $word . ' - ' . $rate->price . ' леев' ?></option>
                            <?php endforeach; ?>                          
                            <!--option value="2">30 минут - 1500 леев</option
                        </select>
                        <a href="#" class="button ms-sm-3 ms-2 mt-3">Заказать</a>-->
                        <div class="service__price">900 леев</div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!--div class="row fly align-items-xxl-center mb-5 pb-5">
            <div class="col-md-4 col-12 mb-md-0 mb-3">
                <div class="fly__item-img">
                    <img src="img/fly2.jpg" alt="fly">
                </div>
            </div>
            <div class="col-xl-7 offset-xl-1 col-md-8 col-12">
                <div class="u-h1 mb-3">Полет на спортивном самолёте с возможность управлять самолетом</div>
                <div class="u-text u-color-gray mb-4">Воздушный пилотаж — это возможность испытать уникальные ощущения и получить эмоции, с которыми не сравнится ни один обычный авиарейс.</div>
                <div class="u-text u-color-gray mb-xxl-5 mb-md-4 mb-2">Количество человек: 1</div>
                <div>
                    <select name="item1" class="js-enter-item">
                        <option value="1">15 минут - 900 леев</option>
                        <option value="2">30 минут - 1500 леев</option>
                    </select>
                    <a href="#" class="button ms-sm-3 ms-2 mt-3">Заказать</a>
                </div>
            </div>
        </div>
        <div class="row fly align-items-xxl-center mb-5 pb-5">
            <div class="col-md-4 col-12 mb-md-0 mb-3">
                <div class="fly__item-img">
                    <img src="img/fly3.jpg" alt="fly">
                </div>
            </div>
            <div class="col-xl-7 offset-xl-1 col-md-8 col-12">
                <div class="u-h1 mb-3">Эксурсионный полет на 3-х
                    местном самолёте с
                    возможностью управлять</div>
                <div class="u-text u-color-gray mb-4">Классические летательные аппараты от легендарного американского производителя, признанные самыми массовыми и популярными за всю историю авиации.</div>
                <div class="u-text u-color-gray mb-xxl-5 mb-md-4 mb-2">Количество человек: 1</div>
                <div>
                    <select name="item1" class="js-enter-item">
                        <option value="1">15 минут - 900 леев</option>
                        <option value="2">30 минут - 1500 леев</option>
                    </select>
                    <a href="#" class="button ms-sm-3 ms-2 mt-3">Заказать</a>
                </div>
            </div>
        </div-->
    </div>
</section>
