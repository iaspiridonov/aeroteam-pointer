<section class="section py-0">
    <img class="fly__bg" src="<?= $this_page->picture->url ?>" alt="fly">
</section>
            
<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="u-h1 mb-5">
                    <?= $this_page->title ?>
                </div>
            </div>
            <?php foreach($this_page->our_team as $t): ?>
            <div class="col-md-4 col-sm-6 col-6 mb-5 scale-img__hover">
                <a><img src="<?= $t->picture->url ?>" alt="team" class="mb-xl-4 mb-3 w-100"></a>
                <div class="team__name"><?= $t->pilot_name ?></div>
                <div class="team__position"><?= $t->pilot_position ?></div>
            </div>
            <?php endforeach; ?>
            <!--div class="col-md-4 col-sm-6 col-6 mb-5">
                <img src="img/team2.png" alt="team" class="mb-xl-4 mb-3 w-100">
                <div class="team__name">Иван Кульца</div>
                <div class="team__position">Менеджер по продажам</div>
            </div>
            <div class="col-md-4 col-sm-6 col-6 mb-5">
                <img src="img/team3.png" alt="team" class="mb-xl-4 mb-3 w-100">
                <div class="team__name">Анастасия Кирья</div>
                <div class="team__position">СММ менеджер</div>
            </div>
            <div class="col-md-4 col-sm-6 col-6 mb-5">
                <img src="img/team4.png" alt="team" class="mb-xl-4 mb-3 w-100">
                <div class="team__name">Клюев Сергей</div>
                <div class="team__position">Пилот</div>
            </div>
            <div class="col-md-4 col-sm-6 col-6 mb-5">
                <img src="img/team5.png" alt="team" class="mb-xl-4 mb-3 w-100">
                <div class="team__name">Мокану Сергей</div>
                <div class="team__position">Пилот</div>
            </div>
            <div class="col-md-4 col-sm-6 col-6 mb-5">
                <img src="img/team6.png" alt="team" class="mb-xl-4 mb-3 w-100">
                <div class="team__name">Анастасия Кирья</div>
                <div class="team__position">Инструктор</div>
            </div-->
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="u-h1">Галерея</div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="gallery"> 
                    <?php $i=1; foreach($this_page->gallery as $p): ?>
                    <?php if($i > 12) break; ?>
                    <a href="<?= $p->getOriginal() == null ? $p->url : $p->getOriginal()->url ?>" class="gallery__item gallery__item--<?= $i ?>" data-fancybox="gallery-grid">
                        <img src="<?= $p->getOriginal() == null ? $p->url : $p->getOriginal()->url ?>" alt="Gallery image 1" class="gallery__img" >
                    </a>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    <!--a href="img/gal-grid2.png" class="gallery__item gallery__item--2" data-fancybox="gallery-grid">
                        <img src="img/gal-grid2.png" alt="Gallery image 1" class="gallery__img">
                    </a>
                    <a href="gal-grid3.png" class="gallery__item gallery__item--3" data-fancybox="gallery-grid">
                        <img src="img/gal-grid3.png" alt="Gallery image 1" class="gallery__img">
                    </a>
                    <a href="img/gal-grid4.png" class="gallery__item gallery__item--4" data-fancybox="gallery-grid">
                        <img src="img/gal-grid4.png" alt="Gallery image 1" class="gallery__img">
                    </a>
                    <a href="img/gal-grid5.png" class="gallery__item gallery__item--5" data-fancybox="gallery-grid">
                        <img src="img/gal-grid5.png" alt="Gallery image 1" class="gallery__img">
                    </a>
                    <a href="img/gal-grid6.png" class="gallery__item gallery__item--6" data-fancybox="gallery-grid">
                        <img src="img/gal-grid6.png" alt="Gallery image 1" class="gallery__img">
                    </a>
                    <a href="img/gal-grid7.png" class="gallery__item gallery__item--7" data-fancybox="gallery-grid">
                        <img src="img/gal-grid7.png" alt="Gallery image 1" class="gallery__img">
                    </a>
                    <a href="img/gal-grid8.png" class="gallery__item gallery__item--8" data-fancybox="gallery-grid">
                        <img src="img/gal-grid8.png" alt="Gallery image 1" class="gallery__img">
                    </a>
                    <a href="img/gal-grid9.png" class="gallery__item gallery__item--9" data-fancybox="gallery-grid">
                        <img src="img/gal-grid9.png" alt="Gallery image 1" class="gallery__img">
                    </a>
                    <a href="img/gal-grid10.png" class="gallery__item gallery__item--10" data-fancybox="gallery-grid">
                        <img src="img/gal-grid10.png" alt="Gallery image 1" class="gallery__img">
                    </a>
                    <a href="img/gal-grid11.png" class="gallery__item gallery__item--11" data-fancybox="gallery-grid">
                        <img src="img/gal-grid11.png" alt="Gallery image 1" class="gallery__img">
                    </a>
                    <a href="img/gal-grid12.png" class="gallery__item gallery__item--12" data-fancybox="gallery-grid">
                        <img src="img/gal-grid12.png" alt="Gallery image 1" class="gallery__img">
                    </a-->
                </div>
            </div>
            <div class="col-12 text-center mt-sm-5 mt-3">
                <a class="more" href="#">Еще фотографии 100+</a>
            </div>
        </div>
    </div>
</section>