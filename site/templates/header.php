<?php
setlocale(LC_ALL, 'ru_RU', 'ru_RU.UTF-8', 'ru', 'russian');
$template = $page->template();
$this_page = $pages->findOne("template={$template}");
if($template == 'home') {
    $home = $this_page;
} else {
    $home = $pages->findOne("template=home"); 
}
//используем поле home_contacts 
foreach($home->home_contacts as $h) {
    $logo = $h->logo->url;
    $phone = $h->phone_number_in_header;
    $logo_at_footer = $h->logo_at_footer->url;
    $name = $h->consultant_name;
    $position = $h->consultant_position;
    $email = $h->email;
    $telegram = $h->telegram;
    $whatsapp = $h->whatsapp;
    $viber = $h->viber;
    $youtube = $h->youtube;
    $facebook = $h->facebook;
    $instagram = $h->instagram;
}


?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/node_modules/bootstrap5/src/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/node_modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="/node_modules/intl-tel-input/build/css/intlTelInput.min.css">
    <link rel="stylesheet" href="/node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/node_modules/@fancyapps/ui/dist/fancybox.css">
    <link rel="stylesheet" href="/site/templates/styles/main.min.css">
    <link rel="icon" href="/site/templates/img/ico/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/site/templates/img/ico/favicon.ico" type="image/x-icon">
    <title><?= $this_page->seo_title ?></title>
    <meta name="description" content="<?= $this_page->seo_description ?>">
  </head>
  <body>

<nav class="navbar navbar-expand-lg sticky-top bg-white">
    <div class="container">
        <a class="navbar-brand order-0" href="/">
            <img style="width: 83px;height: 78px;object-fit: none;" src="/site/assets/files/1039/logo.svg" alt="logo" loading="lazy">
        </a>
        <div class="collapse navbar-collapse order-3 order-lg-1" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link<?= $this_page->title == $home->title ? " nav-link--active" : "" ?>" href="/"><?= $home->title ?></a>
                </li>
                <?php foreach($home->children() as $page): ?>
                    <?php if($page->template == 'certificates' && $user->name == 'guest') {?>
                    <?php continue; }?>
                    <li class="nav-item">
                        <a class="nav-link<?= $this_page->title == $page->title ? " nav-link--active" : "" ?> "href="/<?= $page->name ?>"><?= $page->title ?></a>
                    </li>
                <?php endforeach; ?>
                <!--li class="nav-item">
                    <a class="nav-link" href="/fly">Полеты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/service">Услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">О нас</a>
                </li-->
                <li class="nav-item">
                    <a href="#" class="js-open-modal button d-flex d-lg-none mt-3" data-modal="1">Заказать сертификат</a>
                </li>
            </ul>
        </div>
        <button class="navbar-toggler order-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.25 22.5H15V20H26.25V22.5ZM26.25 16.25H3.75V13.75H26.25V16.25ZM26.25 10H3.75V7.5H26.25V10Z" fill="#292323"/>
            </svg>
        </button>
        <div class="d-flex order-1 order-lg-3">
            <a href="tel:+37379472172" class="button button--transparent me-3">
                <div class="u-line-height-1"><?= $phone ?></div>
                <div class="u-font-size-0p75">Бесплатная консультация</div>
            </a>
            <a href="#" class="button d-none d-lg-flex js-open-modal" data-modal="1">Заказать сертификат</a>
        </div>
    </div>
</nav>