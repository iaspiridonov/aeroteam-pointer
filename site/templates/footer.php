    <div class="modal" data-modal="1">
        <form action="/ajax.php" method="POST">
            <input type='hidden' name='prefix' value='+373'>
            <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
            
            <div class="modal__title">Заказ сертификата</div>
            <div class="mb-4">
                <div class="modal__context">Выберите услугу</div>
                <div class="modal__bot">
                    <div class="modal__wrapper modal__wrapper--w100 pe-md-4">
                        <select name="cert" class="js-enter-item">
                            <option data-link="/services#jump" value="Прыжок с парашютом">Прыжок с парашютом</option>
                            <option data-link="/flights" value="Полет на самолете">Полет на самолете</option>
                            <option data-link="/services#wedding" value="Предложение руки и сердца">Предложение руки и сердца</option>
                            <option data-link="/services#vine" value="Полет на винодельню">Полет на винодельню</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <a href="/services/#jump" class="modal__more js-modal-more">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <div class="modal__context">Контактные данные</div>
                <div class="modal__bot cta-form__container">
                    <div class="modal__wrapper pe-sm-4 pe-3">
                        <input class="input input--cta" name="name" type="text" placeholder="Имя, Фамилия" required>
                    </div>
                    <div class="modal__wrapper">
                        <input class="js-phone" type="text" name="phone" placeholder="Телефон" required>
                    </div>
                </div>
            </div>
            <div class="modal__price-wrapper">
                <button type="submit" class="button">Заказать</button>
            </div>

            <div class="modal__info">
                <svg class="me-3" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.8" d="M8.99935 17.3346C4.39698 17.3346 0.666016 13.6037 0.666016 9.0013C0.666016 4.39893 4.39698 0.667969 8.99935 0.667969C13.6017 0.667969 17.3327 4.39893 17.3327 9.0013C17.3276 13.6016 13.5996 17.3296 8.99935 17.3346ZM8.16602 11.5013V13.168H9.83268V11.5013H8.16602ZM8.16602 4.83464V9.83464H9.83268V4.83464H8.16602Z" fill="#B8BBC0"/>
                </svg>
                Ваш сертификат будет годен в течении 3-х месяцев</div>
        </form>
    </div>
    

<section class="section section--secondary">
    <div class="container">
        <div class="row text-center text-sm-start call-form align-items-sm-center">
            <div class="col-md-8 col-sm-7 col-12 pb-4 pb-sm-0 mb-4 mb-sm-0 u-border-right-sm-white u-border-bottom-m-white pe-sm-4">
                <div class="call-form__title">
                    Получить консультацию
                </div>
                <div class="call-form__desc mb-4">
                    Мы всегда готовы связавться с Вами
                </div>
                <form class="call-form__form" action="/ajax.php" method="POST">
                    <input type="text" name='name' class="input input--call" placeholder="Имя" required>
                    <input type="text" name='phone' class="input input--call" placeholder="Телефон" required>
                    <input type="submit" class="input input__submit-transparent mt-xl-0 mt-4" value="Оставить заявку">
                </form>
            </div>
            <div class="col-md-4 col-sm-5 col-12 ps-sm-4">
                <div class="call-form__title">
                    <?= $name ?>
                </div>
                <div class="call-form__desc mb-4"><?= $position ?></div>
                <a href="tel:+37379472172" class="call-form__title text-white">
                    <?= $phone ?>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section section--map">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5 col-md-6 offset-md-6 col-12 map-rel">
            <div style="max-height: 500px;height: 100%;" class="col-12 d-md-none d-block mt-4 map-wrapper">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab626dee902067cadc40688307eb44996d1e6de8cd81937a17dfdb058f6f7b450&amp;max-width=566&amp;max-height=505&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
                <div class="u-h1 mb-4">
                    Как добраться?
                </div>
                <div class="u-text mb-4">
                    Аэродром находится возле городка Вадул-луй-Воды, это приблизительно в 20-ти км от Кишинева. К нашему сожалению, прямой маршрутки из Кишинева до аэродрома нет. Вы можете добраться на общественном транспорте.
                </div>
                <div class="u-text">
                    Автобусы №130 и №131, едущие в Вадул-луй-Воды, или любой другой автобус или маршрутка, проезжающие через Вадул-луй-Воды. По приезду в Ваду-луй-Воды необходимо будет вызвать такси, которое довезёт Вас непосредственно до аэродрома.
                </div>
                <a target="_blank" style="max-width: 150px;display: flex !important;margin-top: 30px;" href="https://www.google.com/maps/place/Aerodrom+Hore%C5%9Fti/@46.839325,28.9106361,13.74z/data=!4m5!3m4!1s0x40c99c630c4477b3:0x132d925b499e739e!8m2!3d46.8333119!4d28.9013493" class="button d-none d-lg-flex">Как добраться</a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="u-h1">
                    Отвечаем на вопросы
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <?php foreach($home->answering_questions as $h) : ?>
                <div class="accordion">
                    <div class="accordion__title">
                        <?= $h->question ?>
                    </div>
                    <div class="accordion__desc">
                        <?= $h->answer ?>
                    </div>
                    <div class="accordion__btn">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 6.99975H9V0.999756C9 0.734539 8.89464 0.480186 8.70711 0.292649C8.51957 0.105113 8.26522 -0.000244141 8 -0.000244141C7.73478 -0.000244141 7.48043 0.105113 7.29289 0.292649C7.10536 0.480186 7 0.734539 7 0.999756V6.99975H1C0.734783 6.99975 0.48043 7.10511 0.292893 7.29265C0.105357 7.48018 0 7.73454 0 7.99975C0 8.26497 0.105357 8.51932 0.292893 8.70686C0.48043 8.8944 0.734783 8.99975 1 8.99975H7V14.9998C7 15.265 7.10536 15.5193 7.29289 15.7069C7.48043 15.8944 7.73478 15.9998 8 15.9998C8.26522 15.9998 8.51957 15.8944 8.70711 15.7069C8.89464 15.5193 9 15.265 9 14.9998V8.99975H15C15.2652 8.99975 15.5196 8.8944 15.7071 8.70686C15.8946 8.51932 16 8.26497 16 7.99975C16 7.73454 15.8946 7.48018 15.7071 7.29265C15.5196 7.10511 15.2652 6.99975 15 6.99975Z" fill="#292323"/>
                        </svg>                                
                    </div>
                </div>
                <?php endforeach; ?>
                <!--div class="accordion">
                    <div class="accordion__title">
                        Маленькие самолеты не безопасны, думаю, на таком велика вероятность разбиться.
                    </div>
                    <div class="accordion__desc">
                        Если погода будет не летная, для вашей безопасности перенесем мероприятие на другой день.
                    </div>
                    <div class="accordion__btn">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 6.99975H9V0.999756C9 0.734539 8.89464 0.480186 8.70711 0.292649C8.51957 0.105113 8.26522 -0.000244141 8 -0.000244141C7.73478 -0.000244141 7.48043 0.105113 7.29289 0.292649C7.10536 0.480186 7 0.734539 7 0.999756V6.99975H1C0.734783 6.99975 0.48043 7.10511 0.292893 7.29265C0.105357 7.48018 0 7.73454 0 7.99975C0 8.26497 0.105357 8.51932 0.292893 8.70686C0.48043 8.8944 0.734783 8.99975 1 8.99975H7V14.9998C7 15.265 7.10536 15.5193 7.29289 15.7069C7.48043 15.8944 7.73478 15.9998 8 15.9998C8.26522 15.9998 8.51957 15.8944 8.70711 15.7069C8.89464 15.5193 9 15.265 9 14.9998V8.99975H15C15.2652 8.99975 15.5196 8.8944 15.7071 8.70686C15.8946 8.51932 16 8.26497 16 7.99975C16 7.73454 15.8946 7.48018 15.7071 7.29265C15.5196 7.10511 15.2652 6.99975 15 6.99975Z" fill="#292323"/>
                        </svg>                                
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion__title">
                        Вдруг мой подарок ― воздушная прогулка ― не понравится?
                    </div>
                    <div class="accordion__desc">
                        Если погода будет не летная, для вашей безопасности перенесем мероприятие на другой день.
                    </div>
                    <div class="accordion__btn">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 6.99975H9V0.999756C9 0.734539 8.89464 0.480186 8.70711 0.292649C8.51957 0.105113 8.26522 -0.000244141 8 -0.000244141C7.73478 -0.000244141 7.48043 0.105113 7.29289 0.292649C7.10536 0.480186 7 0.734539 7 0.999756V6.99975H1C0.734783 6.99975 0.48043 7.10511 0.292893 7.29265C0.105357 7.48018 0 7.73454 0 7.99975C0 8.26497 0.105357 8.51932 0.292893 8.70686C0.48043 8.8944 0.734783 8.99975 1 8.99975H7V14.9998C7 15.265 7.10536 15.5193 7.29289 15.7069C7.48043 15.8944 7.73478 15.9998 8 15.9998C8.26522 15.9998 8.51957 15.8944 8.70711 15.7069C8.89464 15.5193 9 15.265 9 14.9998V8.99975H15C15.2652 8.99975 15.5196 8.8944 15.7071 8.70686C15.8946 8.51932 16 8.26497 16 7.99975C16 7.73454 15.8946 7.48018 15.7071 7.29265C15.5196 7.10511 15.2652 6.99975 15 6.99975Z" fill="#292323"/>
                        </svg>                                
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion__title">
                        Есть варианты прогулок всего на 10 минут. Что можно увидеть за 10 минут?
                    </div>
                    <div class="accordion__desc">
                        Если погода будет не летная, для вашей безопасности перенесем мероприятие на другой день.
                    </div>
                    <div class="accordion__btn">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 6.99975H9V0.999756C9 0.734539 8.89464 0.480186 8.70711 0.292649C8.51957 0.105113 8.26522 -0.000244141 8 -0.000244141C7.73478 -0.000244141 7.48043 0.105113 7.29289 0.292649C7.10536 0.480186 7 0.734539 7 0.999756V6.99975H1C0.734783 6.99975 0.48043 7.10511 0.292893 7.29265C0.105357 7.48018 0 7.73454 0 7.99975C0 8.26497 0.105357 8.51932 0.292893 8.70686C0.48043 8.8944 0.734783 8.99975 1 8.99975H7V14.9998C7 15.265 7.10536 15.5193 7.29289 15.7069C7.48043 15.8944 7.73478 15.9998 8 15.9998C8.26522 15.9998 8.51957 15.8944 8.70711 15.7069C8.89464 15.5193 9 15.265 9 14.9998V8.99975H15C15.2652 8.99975 15.5196 8.8944 15.7071 8.70686C15.8946 8.51932 16 8.26497 16 7.99975C16 7.73454 15.8946 7.48018 15.7071 7.29265C15.5196 7.10511 15.2652 6.99975 15 6.99975Z" fill="#292323"/>
                        </svg>                                
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion__title">
                        Хочу подарить другу сертификат, где можно забрать его?
                    </div>
                    <div class="accordion__desc">
                        Если погода будет не летная, для вашей безопасности перенесем мероприятие на другой день.
                    </div>
                    <div class="accordion__btn">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 6.99975H9V0.999756C9 0.734539 8.89464 0.480186 8.70711 0.292649C8.51957 0.105113 8.26522 -0.000244141 8 -0.000244141C7.73478 -0.000244141 7.48043 0.105113 7.29289 0.292649C7.10536 0.480186 7 0.734539 7 0.999756V6.99975H1C0.734783 6.99975 0.48043 7.10511 0.292893 7.29265C0.105357 7.48018 0 7.73454 0 7.99975C0 8.26497 0.105357 8.51932 0.292893 8.70686C0.48043 8.8944 0.734783 8.99975 1 8.99975H7V14.9998C7 15.265 7.10536 15.5193 7.29289 15.7069C7.48043 15.8944 7.73478 15.9998 8 15.9998C8.26522 15.9998 8.51957 15.8944 8.70711 15.7069C8.89464 15.5193 9 15.265 9 14.9998V8.99975H15C15.2652 8.99975 15.5196 8.8944 15.7071 8.70686C15.8946 8.51932 16 8.26497 16 7.99975C16 7.73454 15.8946 7.48018 15.7071 7.29265C15.5196 7.10511 15.2652 6.99975 15 6.99975Z" fill="#292323"/>
                        </svg>                                
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion__title">
                        Чтобы оставить заявку на полет, нужно звонить?
                    </div>
                    <div class="accordion__desc">
                        Если погода будет не летная, для вашей безопасности перенесем мероприятие на другой день.
                    </div>
                    <div class="accordion__btn">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 6.99975H9V0.999756C9 0.734539 8.89464 0.480186 8.70711 0.292649C8.51957 0.105113 8.26522 -0.000244141 8 -0.000244141C7.73478 -0.000244141 7.48043 0.105113 7.29289 0.292649C7.10536 0.480186 7 0.734539 7 0.999756V6.99975H1C0.734783 6.99975 0.48043 7.10511 0.292893 7.29265C0.105357 7.48018 0 7.73454 0 7.99975C0 8.26497 0.105357 8.51932 0.292893 8.70686C0.48043 8.8944 0.734783 8.99975 1 8.99975H7V14.9998C7 15.265 7.10536 15.5193 7.29289 15.7069C7.48043 15.8944 7.73478 15.9998 8 15.9998C8.26522 15.9998 8.51957 15.8944 8.70711 15.7069C8.89464 15.5193 9 15.265 9 14.9998V8.99975H15C15.2652 8.99975 15.5196 8.8944 15.7071 8.70686C15.8946 8.51932 16 8.26497 16 7.99975C16 7.73454 15.8946 7.48018 15.7071 7.29265C15.5196 7.10511 15.2652 6.99975 15 6.99975Z" fill="#292323"/>
                        </svg>                                
                    </div>
                </div-->
            </div>
        </div>
    </div>
</section>

<section class="section section--gray-gradient pb-0">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="u-h1">
                    Наши пилоты
                </div>
            </div>
        </div>
        <?php foreach($home->pilots as $h): ?>
        <div class="row align-items-lg-center mb-5">
            <div class="col-md-4 col-sm-5 col-12 mb-3 mb-sm-0">
                <img class="w-100" src="<?= $h->picture->url ?>" alt="Sergey">
            </div>
            <div class="col-sm-7 col-12 offset-md-1 offset-0">
                <div class="pilot">
                    <div class="pilot__position">
                        <?= $h->pilot_position; ?>
                    </div>
                    <div class="pilot__name">
                        <?= $h->pilot_name; ?>
                    </div>
                    <ul class="pilot__desc">
                        <?php foreach($h->pilot_description as $achievement): ?>
                            <li><?= $achievement->pilot_achievement ?></li>
                        <?php endforeach; ?>                       
                        <!--li>Более 5 200 лётных часов</li>
                        <li>Тренер сборной России по планерному спорту</li>
                        <li>15-ти кратный чемпион России</li>
                        <li>5-ти кратный чемпион Европы</li-->
                    </ul>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <!--div class="row align-items-lg-center mb-5">
            <div class="col-md-4 col-sm-5 mb-3 mb-sm-0">
                <img class="w-100" src="img/pilot2.jpg" alt="Sergey">
            </div>
            <div class="col-sm-7 col-12 offset-md-1 offset-0">
                <div class="pilot">
                    <div class="pilot__position">
                        Пилот
                    </div>
                    <div class="pilot__name">
                        Мокану Сергей Иванович
                    </div>
                    <ul class="pilot__desc">
                        <li>В авиации с 2004 года</li>
                        <li>Более 1 500 лётных часов</li>
                        <li>Имеет свидетельство коммерческого пилота</li>
                    </ul>
                </div>
            </div>
        </div-->
    </div>

    <div class="container pt-5">
        <div class="row mb-5 pb-lg-5 pb-3">
            <div class="u-h1 mb-2">
                Отзывы наших клиентов
            </div>
            <div class="u-text">
                Мы будем вам благодарны, если вы оставите свой отзыв.
            </div>
        </div>
        <div class="row">
        <?php foreach($home->reviews as $review): ?>
            <div class="col-md-4 col-12 mb-md-0 mb-5">
                <div class="review">
                    <div class="review__img">
                        <img src="<?= $review->picture->url ?>" alt="review">
                    </div>
                    <div class="review__desc">
                        <?= $review->text ?>
                    </div>
                    <div class="review__name">
                        <?= $review->pilot_name ?>
                    </div>
                    <div class="review__date">
                        <?php 
                            //$date = new DateTime();
                            $date = date($review->date);
                            $monthes = array(
                                1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
                                5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
                                9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
                            );
                            echo date('d', strtotime($date)) . ' ' . $monthes[(date('n', strtotime($date)))] . ' ' .date('Y', strtotime($date)) . 'г.';
                        ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>       
            <!--div class="col-md-4 col-12 mb-md-0 mb-5">
                <div class="review">
                    <div class="review__img">
                        <img src="img/review2.png" alt="review">
                    </div>
                    <div class="review__desc">
                        Спасибо большое! Я в восторге от полета. Все на высшем уровне. Какой добрый и приветливый пилот и весь персонал!
                    </div>
                    <div class="review__name">
                        Марина Урсу
                    </div>
                    <div class="review__date">
                        12 сентября 2021г.
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-md-0 mb-5">
                <div class="review">
                    <div class="review__img">
                        <img src="img/review3.png" alt="review">
                    </div>
                    <div class="review__desc">
                        Спасибо большое! Я в восторге от полета. Все на высшем уровне. Какой добрый и приветливый пилот и весь персонал!
                    </div>
                    <div class="review__name">
                        Марина Урсу
                    </div>
                    <div class="review__date">
                        12 сентября 2021г.
                    </div>
                </div>
            </div-->
        </div>
    </div>
    <div class="container text-center">
        <img class="w-100" src="/img/spencer.png" alt="spenc">
    </div>
</section>

<!-- Подложка под модальным окном -->
<div class="overlay js-overlay-modal"></div>
<footer class="section section--footer footer">
        <div class="container">
            <div class="row pb-4">
                <div class="col-xl-4 col-sm-8 col-12 order-lg-1 order-xl-1 order-2 mb-sm-0 mb-5">
                    <div class="footer__info">
                        <div class="me-sm-5 me-3">
                            <img class="footer__info-logo" style="width: 76px;height: 74px;object-fit: cover;" src="/site/assets/files/1039/logofooter.svg" alt="logo">
                        </div>
                        <div>
                            <div class="footer__info-text mb-4">
                                Дарите подарочные сертификаты на новые потрясающие эмоции Вашим родным и близким!
                            </div>
                            <div class="footer__info-socials">
                                <?php if($facebook): ?>
                                    <a href="<?= $facebook ?>"><img src="/img/ico/facebook.svg" alt="facebook"></a>
                                <?php endif; ?>
                                <?php if($instagram): ?>
                                    <a href="<?= $instagram ?>"><img src="/img/ico/inst.svg" alt="inst"></a>
                                <?php endif; ?>
                                <?php if($youtube): ?>
                                    <a href="<?= $youtube ?>"><img src="/img/ico/youtube.svg" alt="youtube"></a>
                                <?php endif; ?>
                                <?php if($telegram): ?>
                                    <a href="<?= $telegram ?>"><img src="/img/ico/telegram.svg" alt="telegram"></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-sm-4 col-12 text-xl-start text-lg-center text-sm-start text-center order-xl-2 order-3">
                    <ul class="footer__menu">
                        <li><a href="/"><?= $home->title ?></a></li>
                        <?php foreach($home->children() as $page): ?>
                            <li><a href="<?= $page->name ?>"><?= $page->title ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-xl-4 offset-xl-1 col-lg-5 col-12 order-lg-3 order-1 mb-xl-0 mb-5">
                    <div class="footer__info-text mb-2">
                        Наш телефон
                    </div>
                    <div class="footer__contacts mb-4">
                        <a href="tel:<?= $phone ?>" class="footer__phone"><?= $phone ?></a>
                        <a href="mailto:<?= $email ?>" class="footer__mail"><?= $email ?></a>
                    </div>
                    <div class="footer__info-text mb-sm-4 mb-3">Также вы можете писать в любой из мессенджеров</div>
                    <div class="footer__messengers">
                        <a href="<?= $telegram ? $telegram : '#' ?>" class="footer__messengers-item">
                            <img src="/img/ico/telegram-color.svg" alt="telegram">
                            <span>Telegram</span>
                        </a>
                        <a href="<?= $whatsapp ? $whatsapp : '#' ?>" class="footer__messengers-item">
                            <img src="/img/ico/whatsap-color.svg" alt="whatsapp">
                            <span>Whatsapp</span>
                        </a>
                        <a href="<?= $viber ? $viber : '#' ?>" class="footer__messengers-item">
                            <img src="/img/ico/viber-color.svg" alt="viber">
                            <span>Viber</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer__copyright">
                        Все права защищены. Copyright © <?= date('Y') ?>
                    </div>
                </div>
            </div>
            <a style="display: flex;justify-content: center;align-items: center;text-align: center;font-size: 12px;color: #fff;opacity: 0.5;" href="https://pointer.global/digital?utm_source=works&utm_medium=link&utm_campaign=aeroteam">Сделано в Pointer</a>
        </div>
    </footer>

    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="/node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="/node_modules/bootstrap5/src/js/bootstrap.bundle.min.js"></script>
    <script src="/node_modules/select2/dist/js/select2.min.js"></script>
    <script src="/node_modules/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <script src="/node_modules/intl-tel-input/build/js/intlTelInput.min.js"></script>
    <script src="/site/templates/scripts/main.js"></script>
  </body>
</html>