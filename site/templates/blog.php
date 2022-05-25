<?php namespace ProcessWire; ?>
<section class="section pb-0">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="u-h1"><?= $this_page->title ?></div>
            </div>
        </div>
        <?php 
            $blog = $pages->findOne("template=blog");
            //var_dump($blog);
            $blog_pages = $blog->children();
            foreach($blog_pages as $p) { 
        ?>
        <div class="row mb-5 service pb-5">
            <div class="col-md-6 col-12 pe-xl-5 pe-md-4 mb-md-0 mb-4">
                <a>
                                <img class="w-100" src="<?= $p->picture->url ?>" alt="">
                            </a>
            </div>
            <div class="col-md-6 col-12 ps-xl-5 ps-md-4">
                <div class="service__info">
                    <div class="service__head mb-1">
                        <div class="service__title">
                            <?= $p->title ?>
                        </div>
                    </div>
                   
                    <div class="blog__block">
                        <div class="blog__text u-color-gray mb-3"><?= $p->seo_description ?></div>
                        <?php
                            if($p->time_format->id == 1 && ($p->time < 5 && $p->time > 1 || $p->time < 25 && $p->time > 21|| $p->time < 35 && $p->time > 31 
                            || $p->time < 45 && $p->time > 41 || $p->time < 55 && $p->time > 51)) {
                            $word = ' минуты';
                            } elseif($p->time_format->id == 1 && ($p->time == 1 || $p->time == 21 || $p->time == 31 || $p->time == 41 || $p->time == 51)) {
                            $word = ' минута';
                            } elseif($p->time_format->id == 1) {
                            $word = ' минут';
                            } elseif($p->time_format->id == 2 && ($p->time == 1 || $p->time == 21)) {
                            $word = ' час';
                            } elseif($p->time_format->id == 1 && ($p->time < 5 && $p->time > 1  || $p->time < 25 && $p->time > 21)) {
                            $word = ' часа';
                            } else {
                            $word = 'часов';
                            }
                        ?>
                        <div class="blog__text u-color-gray mb-3">Время прочтения: <?= $p->time . ' ' . $word ?></div>
                        <div class="blog__text u-color-gray mb-3"><?= $p->date ?></div>
                        <div style='padding: 0;' class="button" data-modal="1"><a style='color: white;min-width: 180px;padding: 10px 35px;' href='/blog/<?= $p->name ?>'>Читать</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!--div class="row mb-5 service pb-5">
            <div class="col-md-6 col-12 pe-xl-5 pe-md-4 mb-md-0 mb-4">
                 <a href="/img/blog2.png" data-fancybox="serv1">
                    <img class="w-100" src="/img/blog2.png" alt="">
                 </a>
            </div>
            <div class="col-md-6 col-12 ps-xl-5 ps-md-4">
                <div class="service__info">
                    <div class="service__head mb-1">
                        <div class="service__title">
                           Блог 2
                        </div>
                    </div>
                   
                    <div class="blog__block">
                        <div class="blog__text u-color-gray mb-3">Подарочная карта предназначена любителям насладиться незабываемым и красочным приключением – полётом на самолёте, запечатлеть восхитительные виды с высоты птичьего полёта.</div>
                        <div class="blog__text u-color-gray mb-3">Время прочтения: 5 минут</div>
                        <div class="blog__text u-color-gray mb-3">10.03.2022</div>
                        <div class="button" data-modal="1"><a style='color: white;' href='/blog/text'>Читать</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5 service pb-5">
            <div class="col-md-6 col-12 pe-xl-5 pe-md-4 mb-md-0 mb-4">
                 <a href="/img/blog3.png" data-fancybox="serv1">
                    <img class="w-100" src="/img/blog3.png" alt="">
                 </a>
            </div>
            <div class="col-md-6 col-12 ps-xl-5 ps-md-4">
                <div class="service__info">
                    <div class="service__head mb-1">
                        <div class="service__title">
                           Блог 3
                        </div>
                    </div>
                   
                    <div class="blog__block">
                        <div class="blog__text u-color-gray mb-3">Подарочная карта предназначена любителям насладиться незабываемым и красочным приключением – полётом на самолёте, запечатлеть восхитительные виды с высоты птичьего полёта.</div>
                        <div class="blog__text u-color-gray mb-3">Время прочтения: 5 минут</div>
                        <div class="blog__text u-color-gray mb-3">10.03.2022</div>
                        <div class="button" data-modal="1"><a style='color: white;' href='/blog/text'>Читать</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5 service pb-5">
            <div class="col-md-6 col-12 pe-xl-5 pe-md-4 mb-md-0 mb-4">
                <a href="/img/blog4.png" data-fancybox="serv1">
                   <img class="w-100" src="/img/blog4.png" alt="">
                </a>
            </div>
            <div class="col-md-6 col-12 ps-xl-5 ps-md-4">
                <div class="service__info">
                    <div class="service__head mb-1">
                        <div class="service__title">
                           Блог 4
                        </div>
                    </div>
                   
                    <div class="blog__block">
                        <div class="blog__text u-color-gray mb-3">Подарочная карта предназначена любителям насладиться незабываемым и красочным приключением – полётом на самолёте, запечатлеть восхитительные виды с высоты птичьего полёта.</div>
                        <div class="blog__text u-color-gray mb-3">Время прочтения: 5 минут</div>
                        <div class="blog__text u-color-gray mb-3">10.03.2022</div>
                        <div class="button" data-modal="1"><a style='color: white;' href='/blog/text'>Читать</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5 service pb-5">
            <div class="col-md-6 col-12 pe-xl-5 pe-md-4 mb-md-0 mb-4">
                 <a href="/img/blog5.png" data-fancybox="serv1">
                    <img class="w-100" src="/img/blog5.png" alt="">
                 </a>
            </div>
            <div class="col-md-6 col-12 ps-xl-5 ps-md-4">
                <div class="service__info">
                    <div class="service__head mb-1">
                        <div class="service__title">
                           Блог 5
                        </div>
                    </div>
                   
                    <div class="blog__block">
                        <div class="blog__text u-color-gray mb-3">Подарочная карта предназначена любителям насладиться незабываемым и красочным приключением – полётом на самолёте, запечатлеть восхитительные виды с высоты птичьего полёта.</div>
                        <div class="blog__text u-color-gray mb-3">Время прочтения: 5 минут</div>
                        <div class="blog__text u-color-gray mb-3">10.03.2022</div>
                        <div class="button" data-modal="1"><a style='color: white;' href='/blog/text'>Читать</a></div>
                    </div>
                </div>
            </div>
        </div-->

    </div>
</section>  
