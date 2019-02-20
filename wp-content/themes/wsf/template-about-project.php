
<?php

/**
 * Template Name: About Project page
 */

get_header();?>


<div class="page page_about">

    <div class="page_all">

        <h1><?php the_title(); ?></h1>

        <ul class="path">
            <li><a href="/"><?php echo __('[:ua]Головна[:ru]Главная[:]'); ?></a></li>
            <li><a href="/pro-proekt/"><?php echo __('[:ua]Про комплекс[:ru]О комплексе[:]'); ?></a></li>
        </ul>

        <section class="concept">

            <div class="conc_wr">

                <div class="container">

                    <div class="row conc_fl">

                        <div class="col-xl-6 col-lg-12">
                            <div class="conc_descr head_style">
                                <h2><?php echo __('[:ua]Концепція[:ru]Концепция[:]'); ?></h2>
                                <p><?php echo __('[:ua]При створенні "Сучасного Кварталу" були використані кращі традиційні та провідні інноваційні технології, успішно зарекомендували себе в будівництві та експлуатації сучасних житлових комплексів в європейських країнах. Це найбільш оригінальна і концептуальна новобудова Києва.[:ru]При создании “Современного Квартала” были использованы лучшие традиционные и ведущие инновационные технологии, успешно зарекомендовавшие себя в строительстве и эксплуатации современных жилых комплексов в европейских странах. Это наиболее оригинальная и концептуальная новостройка Киева.[:]'); ?></p>
                                <p><?php echo __('[:ua]Житловий комплекс «Сучасний квартал» розташований в Солом\'янському районі. Це давно заселений і один з найспокійніших і озеленених районів Києва. Тут розташовано безліч парків, зелених зон, скверів, в яких можна прогулятися і насолодитися природою в ритмі мегаполісу.[:ru]Жилой комплекс «Современный квартал» расположен в Соломенском районе.  Это давно заселенный и один из самых спокойных и озелененных районов Киева.  Здесь расположено множество парков, зеленых зон, скверов, в которых можно прогуляться и насладиться природой в ритме мегаполиса.[:]'); ?></p>
                                <p><?php echo __('[:ua]На внутрішній території комплексу ви зможете прогулятися по власному саду, без страху відпустити дітей бігати по дворах, в які не допускається в\'їзд транспорту. Прекрасно обладнані і яскраво розписані спортивні та дитячі майданчики доповнюють картину і надають безліч можливостей не тільки насолоджуватися красою, а й з користю проводити час.[:ru]На внутренней территории комплекса вы сможете прогуляться по собственному  саду, без страха отпустить детей бегать по дворам, в которые не допускается въезд транспорта. Прекрасно оборудованные и ярко расписанные спортивные и детские площадки дополняют картину и предоставляют множество возможностей не только наслаждаться красотой, но и с пользой проводить время.[:]'); ?></p>
                                <a href="/layouts/" class="butt_blue"><?php echo __('[:ua]Переглянути планування[:ru]Посмотреть планировки[:]'); ?></a>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-12">
                            <div class="conc_sl_wr">
                                <div class="conc_slider">
                                    <div class="slide">
                                        <img src="/wp-content/themes/wsf/assets/img/main/slide1.png" alt="">
                                    </div>
                                    <div class="slide">
                                        <img src="/wp-content/themes/wsf/assets/img/main/slide2.png" alt="">
                                    </div>
                                    <div class="slide">
                                        <img src="/wp-content/themes/wsf/assets/img/main/slide3.png" alt="">
                                    </div>
                                </div>
                                <div class="slide_nav conc_nav">
                                    <i class="fas fa-caret-left"></i>
                                    <i class="fas fa-caret-right"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="advant_items">
                                <div class="f_col">
                                    <div class="item">
                                        <span class="num">214</span>
                                        <p class="adv_descr"><?php echo __('[:ua]Комфортних[:ru]Комфортных[:]'); ?><br> квартир</p>
                                    </div>
                                    <div class="item">
                                        <span class="num">16</span>
                                        <p class="adv_descr"><?php echo __('[:ua]Поверхність[:ru]Этажность[:]'); ?><br><?php echo __('[:ua]Будинків[:ru]домов[:]'); ?></p>
                                    </div>
                                </div>
                                <div class="s_col">
                                    <div class="item">
                                        <span class="num">45</span>
                                        <p class="adv_descr"><?php echo __('[:ua]Зручних[:ru]Удобных[:]'); ?><br> <?php echo __('[:ua]Паркомісць[:ru]Паркомест[:]'); ?></p>
                                    </div>
                                    <div class="item">
                                        <span class="num">14 795</span>
                                        <p class="adv_descr">м<sup>2</sup> <?php echo __('[:ua]Сучасного[:ru]Современного[:]'); ?><br> <?php echo __('[:ua]кварталу[:ru]квартала[:]'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

<!--        <section class="s_doc cus_pad">-->
<!---->
<!--            <div class="head_style">-->
<!--                <h2>--><?php //echo __('[:ru]ЖК який має все[:ua]ЖК який має все[:]'); ?><!--</h2>-->
<!--            </div>-->
<!---->
<!--            <div class="doc_cond">-->
<!---->
<!--                <div class="container">-->
<!---->
<!--                    <div class="row">-->
<!---->
<!--                        <div class="col-xl-6 col-lg-12 col-12">-->
<!--                            <div class="conc_sl_wr">-->
<!--                                <div class="conc_slider">-->
<!--                                    <div class="slide">-->
<!--                                        <img src="/wp-content/themes/wsf/assets/img/gallery/gal5.png" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="slide">-->
<!--                                        <img src="/wp-content/themes/wsf/assets/img/gallery/gal6.png" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="slide">-->
<!--                                        <img src="/wp-content/themes/wsf/assets/img/gallery/gal12.png" alt="">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="slide_nav conc_nav">-->
<!--                                    <i class="fas fa-caret-left"></i>-->
<!--                                    <i class="fas fa-caret-right"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="col-xl-6 col-lg-12">-->
<!--                            <div class="conc_descr">-->
<!--                                <h2>--><?php //echo __('[:ru]Ландшафтний дизайн[:ua]Ландшафтний дизайн[:]'); ?><!--</h2>-->
<!--                                <p>--><?php //echo __('[:ua]На внутренней территории комплекса вы сможете прогуляться по собственному  саду, без страха отпустить детей бегать по дворам, в которые не допускается въезд транспорта[:ru]На внутренней территории комплекса вы сможете прогуляться по собственному  саду, без страха отпустить детей бегать по дворам, в которые не допускается въезд транспорта[:]'); ?><!--</p>-->
<!--                                <p>--><?php //echo __('[:ua]Прекрасно оборудованные и ярко расписанные спортивные и детские площадки дополняют картину и предоставляют множество возможностей не только наслаждаться красотой, но и с пользой проводить время.[:ru]Прекрасно оборудованные и ярко расписанные спортивные и детские площадки дополняют картину и предоставляют множество возможностей не только наслаждаться красотой, но и с пользой проводить время.[:]'); ?><!--</p>-->
<!--                                <a href="/galereya/" class="butt_blue">--><?php //echo __('[:ua]Переглянути візуалізації[:ru]Посмотреть визуализации[:]'); ?><!--</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="col-xl-6 col-lg-12 col-12">-->
<!--                                <div class="conc_descr">-->
<!--                                    <h2>--><?php //echo __('[:ru]Розташування для тих, хто цінує свій час[:ua]Розташування для тих, хто цінує свій час[:]'); ?><!--</h2>-->
<!--                                    <p>--><?php //echo __('[:ua]Житловий комплекс «Сучасний квартал» розташований в Солом\'янському районі. Це давно заселений і один з найспокійніших і озеленених районів Києва.[:ru]Жилой комплекс «Современный квартал» расположен в Соломенском районе. Это давно заселенный и один из самых спокойных и озелененных районов Киева.[:]'); ?><!--</p>-->
<!--                                    <p>--><?php //echo __('[:ua]Тут розташовано безліч парків, зелених зон, скверів, в яких можна прогулятися і насолодитися природою в ритмі мегаполісу.[:ru]Здесь расположено множество парков, зеленых зон, скверов, в которых можно прогуляться и насладиться природой в ритме мегаполиса.[:]'); ?><!--</p>-->
<!--                                </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="col-xl-6 col-lg-12 col-12">-->
<!--                            <div class="conc_sl_wr">-->
<!--                                <div class="conc_slider">-->
<!--                                    <div class="slide">-->
<!--                                        <img src="/wp-content/themes/wsf/assets/img/gallery/gal5.png" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="slide">-->
<!--                                        <img src="/wp-content/themes/wsf/assets/img/gallery/gal6.png" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="slide">-->
<!--                                        <img src="/wp-content/themes/wsf/assets/img/gallery/gal12.png" alt="">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="slide_nav conc_nav">-->
<!--                                    <i class="fas fa-caret-left"></i>-->
<!--                                    <i class="fas fa-caret-right"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!---->
<!---->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--        </section>-->




        <section class="infra">

            <div class="head_style">
                <h2><?php echo __('[:ua]Інфраструктура[:ru]Инфраструктура[:]'); ?></h2>
            </div>

            <div class="infra_items">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="ifr_img">
                                <img src="<?php echo __('[:ru]/wp-content/themes/wsf/assets/img/about/ru/transport.png[:ua]/wp-content/themes/wsf/assets/img/about/ua/transportua.png[:]') ?>" alt="">
                                <ul class="descr blue">
                                    <li><?php echo __('[:ua]Ст. метро «Берестейська» знаходиться в 20 хв. пішки[:ru]Ст. метро «Берестейская» находится в 20 мин. пешком[:]'); ?></li>
                                    <li>- <?php echo __('[:ua]Центр міста в 10 хв. на автомобилі чи трамваї[:ru]Центр города в 10 мин. на автомобиле или трамваи[:]'); ?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="ifr_img">
                                <img src="<?php echo __('[:ru]/wp-content/themes/wsf/assets/img/about/ru/kid.png[:ua]/wp-content/themes/wsf/assets/img/about/ua/kidua.png[:]') ?>" alt="">
                                <ul class="descr lemon">
                                    <li>- <?php echo __('[:ua]Власний дитячий садочок у дворі[:ru]Собственный детский сад во дворе[:]'); ?></li>
                                    <li>- <?php echo __('[:ua]10 дитячих садочків в кроковій доступності[:ru]10 детских садов в шаговой доступности[:]'); ?></li>
                                    <li>- <?php echo __('[:ua]Майданчики для футболу[:ru]Площадки для футбола[:]'); ?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="ifr_img">
                                <img src="<?php echo __('[:ru]/wp-content/themes/wsf/assets/img/about/ru/study.png[:ua]/wp-content/themes/wsf/assets/img/about/ua/studyua.png[:]') ?>" alt="">
                                <ul class="descr red">
                                    <li>- <?php echo __('[:ua]4 школи[:ru]4 школы[:]'); ?></li>
                                    <li>- НАУ</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="ifr_img">
                                <img src="<?php echo __('[:ru]/wp-content/themes/wsf/assets/img/about/ru/mall.png[:ua]/wp-content/themes/wsf/assets/img/about/ua/tcua.png[:]') ?>" alt="">
                                <ul class="descr pink">
                                    <li><?php echo __('[:ua]на перших поверхах:[:ru]на первых этажах:[:]'); ?></li>
                                    <li>- <?php echo __('[:ua]Магазини[:ru]Магазины[:]'); ?></li>
                                    <li>- <?php echo __('[:ua]пекарні[:ru]пекарни[:]'); ?></li>
                                    <li>- <?php echo __('[:ua]салони краси[:ru]салоны красоты[:]'); ?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="ifr_img">
                                <img src="<?php echo __('[:ru]/wp-content/themes/wsf/assets/img/about/ru/midicine.png[:ua]/wp-content/themes/wsf/assets/img/about/ua/medicineua.png[:]') ?>" alt="">
                                <ul class="descr sky">
                                    <li><?php echo __('[:ua]Дитяча поліклініка в 8 хв. пішки[:ru]Детская поликлиника в 8 минутах пешком[:]'); ?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="ifr_img">
                                <img src="<?php echo __('[:ru]/wp-content/themes/wsf/assets/img/about/ru/park.png[:ua]/wp-content/themes/wsf/assets/img/about/ua/parkua.png[:]') ?>" alt="">
                                <ul class="descr green">
                                    <li><?php echo __('[:ua]Парк «Відрадний» в кроковій доступності[:ru]Парк «Отрадный» в пешей доступности[:]'); ?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="ifr_img">
                                <img src="<?php echo __('[:ru]/wp-content/themes/wsf/assets/img/about/ru/parkovka.png[:ua]/wp-content/themes/wsf/assets/img/about/ua/oarkovkaua.png[:]') ?>" alt="">
                                <ul class="descr grey">
                                    <li><?php echo __('[:ua]Система охрони і відеонагляду[:ru]Система охраны и видеонаблюдения[:]'); ?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="ifr_img">
                                <img src="<?php echo __('[:ru]/wp-content/themes/wsf/assets/img/about/ru/urban.png[:ua]/wp-content/themes/wsf/assets/img/about/ua/urbanua.png[:]') ?>" alt="">
                                <ul class="descr viol">
                                    <li><?php echo __('[:ua]Квартал нового покоління[:ru]Квартал нового поколения[:]'); ?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="ifr_img">
                                <img src="<?php echo __('[:ru]/wp-content/themes/wsf/assets/img/about/ru/shop.png[:ua]/wp-content/themes/wsf/assets/img/about/ua/comua.png[:]') ?>" alt="">
                                <ul class="descr yel">
                                    <li><?php echo __('[:ua]Офіси[:ru]Офисы[:]'); ?></li>
                                </ul>
                            </div>
                        </div>


                    </div>

                </div>

            </div>

        </section>

        <section class="consult">

            <h2><?php echo __('[:ua]Подобається оточення?[:ru]Нравится окружение?[:]'); ?></h2>
            <p><?php echo __('[:ua]Підберіть планування, яке вам подобається і проконсультуйтеся з нами[:ru]Подберите планировку, которая вам нравится и проконсультируйтесь с нами[:]'); ?></p>
            <a class="popup-with-zoom-anim butt_sky sky_blue" href="#popup_form1"><?php echo __('[:ua]Замовити консультацію[:ru]Заказать консультацию[:]'); ?></a>
            <a href="/kak-kupyt/" class="buy_link"><?php echo __('[:ua]Як придбати?[:ru]Как купить?[:]'); ?></a>

        </section>

        <section class="s_gallery">

            <div class="head_style">
                <h2>Галерея</h2>
            </div>

            <div class="slides_gal">

                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-xl-8 col-lg-12 slider_wr">

                            <div class="slider">
                                <div class="slide">
                                    <img src="/wp-content/themes/wsf/assets/img/about/gal1.png" alt="">
                                </div>
                                <div class="slide">
                                    <img src="/wp-content/themes/wsf/assets/img/about/gal2.png" alt="">
                                </div>
                                <div class="slide">
                                    <img src="/wp-content/themes/wsf/assets/img/about/gal1.png" alt="">
                                </div>
                            </div>

                            <div class="slide_nav gal_nav">
                                <i class="fas fa-caret-left"></i>
                                <i class="fas fa-caret-right"></i>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>




<?php get_footer(); ?>