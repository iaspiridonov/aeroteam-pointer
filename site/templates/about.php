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
                </div>
            </div>
        </div>
    </div>
</section>