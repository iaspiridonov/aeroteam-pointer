<?php
setlocale(LC_ALL, 'ru_RU', 'ru_RU.UTF-8', 'ru', 'russian');
$template = $page->template();
$this_page = $pages->findOne("template={$template}");
$this_language = $user->language;
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
            <!-- <img src="/site/templates/img/logo.png" alt="logo" loading="lazy"> -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="125 100 170.53 110.81" width="68px" height="67px"><defs><style>.cls-1,.cls-2{fill:#0982c7;}.cls-1{fill-rule:evenodd;}</style></defs><title>Aero Team logo 2021</title><path class="cls-1" d="M274.17,192.72A77.23,77.23,0,1,1,162.09,94.9a76.15,76.15,0,1,0,112.08,97.82"/><path class="cls-2" d="M225.67,176.14h2v-5.41c0-2.36,1.28-3.44,2.71-3.44,1.92,0,2.2,1.41,2.2,3.39v5.46h2v-5.7c0-1.85.75-3.15,2.66-3.15s2.25,1.46,2.25,3v5.81h2v-6.07c0-2.34-.75-4.62-4-4.62a3.77,3.77,0,0,0-3.3,1.93,3.39,3.39,0,0,0-3.26-1.93,3.7,3.7,0,0,0-3.34,1.89h0v-1.63h-1.85Zm-4.73-5v.66a2.82,2.82,0,0,1-3,3c-1.36,0-2.24-.51-2.24-1.7,0-1.67,2.29-2,4.16-2Zm-5.45-2.9a4.31,4.31,0,0,1,3-1.19,2.24,2.24,0,0,1,2.48,2.2v.44h-1.45c-3.17,0-5.74.92-5.74,3.61,0,2,1.67,3.12,3.61,3.12a4,4,0,0,0,3.65-1.84h0c0,.52,0,1.05.07,1.58h1.76a15.25,15.25,0,0,1-.09-1.89v-5.33c0-1.8-1.27-3.47-4.35-3.47A6.12,6.12,0,0,0,214.3,167Zm-12,1.85a3.21,3.21,0,0,1,3.23-3,2.83,2.83,0,0,1,3,3Zm8.36,1.58V171c0-2.69-1.41-5.5-5.08-5.5a5.28,5.28,0,0,0-5.4,5.47,5.18,5.18,0,0,0,5.37,5.48,5.45,5.45,0,0,0,4.62-2.13l-1.49-1.15a3.59,3.59,0,0,1-2.86,1.57,3.28,3.28,0,0,1-3.52-3Zm-16.28,4.49h2.11v-13.6h5v-2H190.58v2h5Z"/><path class="cls-2" d="M170.94,112.75l.28-24.19,5.43-5.3a8.45,8.45,0,0,0,2-3l.68-1.2c.39-1,.58-2.56-.18-3.34s-2.3-.62-3.29-.27l-1.31.68a8.33,8.33,0,0,0-3,1.89l-5.43,5.3L141.88,83a4.63,4.63,0,0,0-3.28,1.31l-1.54,1.51a.94.94,0,0,0-.25.91.91.91,0,0,0,.69.65L157.62,92c-1.88,2.07-3.38,3.87-5.21,6l-1.88,2.25L143,98.69a.92.92,0,0,0-.85.24l-1.31,1.29a.91.91,0,0,0-.28.75.93.93,0,0,0,.41.68l7,4.54,4.37,7.06.12.15a.9.9,0,0,0,.55.27.92.92,0,0,0,.76-.25l1.32-1.29a.93.93,0,0,0,.26-.84l-1.47-7.6,2.29-1.82c2.23-1.78,4.06-3.24,6.17-5.07L166.46,117a.92.92,0,0,0,.63.7.94.94,0,0,0,.92-.22l1.54-1.51a4.55,4.55,0,0,0,1.39-3.24"/><path class="cls-2" d="M210.67,152.38a5.55,5.55,0,1,0,5.54-5.48,5.48,5.48,0,0,0-5.54,5.48m2.11,0a3.44,3.44,0,1,1,3.43,3.63A3.35,3.35,0,0,1,212.78,152.38Zm-9.35,5.22h2v-5.24c0-2.29,1.06-3.34,3-3.34a3.75,3.75,0,0,1,1,.15l.09-2.13a2.8,2.8,0,0,0-.88-.14,3.54,3.54,0,0,0-3.13,1.88h0v-1.61h-2Zm-10.74-6.07a3.22,3.22,0,0,1,3.24-3,2.82,2.82,0,0,1,3,3Zm8.36,1.58v-.7c0-2.69-1.41-5.51-5.08-5.51a5.28,5.28,0,0,0-5.39,5.48,5.18,5.18,0,0,0,5.37,5.48,5.46,5.46,0,0,0,4.62-2.13l-1.5-1.15a3.59,3.59,0,0,1-2.86,1.57,3.28,3.28,0,0,1-3.52-3ZM179,151.9l3-7.15h0l2.91,7.15Zm-4.75,5.7h2.46l1.54-3.85h7.42l1.56,3.85h2.47L183,142h-1.92Z"/><path class="cls-2" d="M290.48,190v.62a2.65,2.65,0,0,1-2.79,2.85c-1.28,0-2.1-.48-2.1-1.59,0-1.57,2.14-1.88,3.9-1.88Zm-5.12-2.72a4,4,0,0,1,2.78-1.11,2.11,2.11,0,0,1,2.34,2.06v.41h-1.37c-3,0-5.38.87-5.38,3.38,0,1.9,1.57,2.93,3.38,2.93a3.73,3.73,0,0,0,3.43-1.73h0c0,.5,0,1,.06,1.49h1.65a15.71,15.71,0,0,1-.08-1.78v-5c0-1.69-1.2-3.26-4.09-3.26a5.79,5.79,0,0,0-3.87,1.44Zm-8.66,7.43h2l3.83-9.78h-2l-2.8,7.49-2.93-7.49h-2.15Zm-15.54-4.89a5.2,5.2,0,1,0,5.2-5.14A5.14,5.14,0,0,0,261.16,189.81Zm2,0a3.22,3.22,0,1,1,3.22,3.4A3.14,3.14,0,0,1,263.14,189.81Zm-9.38,3.4a3.41,3.41,0,1,1,3.21-3.4A3.14,3.14,0,0,1,253.76,193.21Zm5.07-14.11H257v7.22h0a4.09,4.09,0,0,0-3.4-1.65,5.14,5.14,0,0,0,0,10.27,4.14,4.14,0,0,0,3.4-1.65h0v1.41h1.86Zm-14.6,15.6h1.85V179.1h-1.85Zm-12.88-4.89a5.2,5.2,0,1,0,5.2-5.14A5.14,5.14,0,0,0,231.35,189.81Zm2,0a3.22,3.22,0,1,1,3.22,3.4A3.14,3.14,0,0,1,233.33,189.81Zm-19.86,4.89h2v-12h0l4.93,12h1.32l4.93-12h0v12h2V180.09h-2.95l-4.6,11.06h-.08l-4.64-11.06h-2.95Z"/></svg>
        </a>
        <div class="collapse navbar-collapse order-3 order-lg-1" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link<?= $this_page->title == $home->title ? " nav-link--active" : "" ?>" href="<?= $home->localPath($this_language); ?>"><?= $home->title ?></a>
                </li>
                <?php foreach($home->children() as $page): ?>
                    <?php if($page->template == 'certificates' && $user->name == 'guest') {?>
                    <?php continue; }?>
                    <li class="nav-item">
                        <a class="nav-link<?= $this_page->title == $page->title ? " nav-link--active" : "" ?> "href="<?= $page->localPath($this_language); ?>"><?= $page->title ?></a>
                    </li>
                <?php endforeach; ?>
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
        <!--@TODO-->
        <div class='flag-block' style='margin-left: 30px; display:flex; justify-content:space-around; order:4;'>
            <?php foreach($languages as $language): ?>
                <div class='flag-block-element' style='margin-right: 20px;'>
                    <a href="<?= $this_page->localPath($language); ?>"><img style='width:30px; height:22px;' src='/img/country_flags/<?= $language->name ?>.jpg'></a>
                </div>
            <?php endforeach; ?>
        </div>
        <!--*****-->
    </div>
</nav>