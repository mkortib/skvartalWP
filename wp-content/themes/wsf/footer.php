<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wsf
 */

?>

<footer class="main_foot">

    <h2><?php echo __('[:ua]Залишились питання?[:ru]Остались вопросы?[:]'); ?></h2>

    <form class="form_call">

        <input type="text" name="name" placeholder="<?php echo __('[:ua]Ваше ім\'я[:ru]Ваше имя[:]'); ?>" required>
        <input type="tel" name="phone" placeholder="Телефон" required>
        <button type="submit" class="butt_sky sky_blue" data-subject="Консультация из футера"><i class="fas fa-mobile-alt"></i><?php echo __('[:ua]Зателефонувати мені[:ru]Позвонить мне[:]'); ?></button>

        <div class="succes_foot">
            <div class="cont">
                <h4><?php echo __('[:ua]Дякую за заявку![:ru]Спасибо за заявку![:]'); ?></h4>
                <p><?php echo __('[:ua]Наш менеджер зв`яжеться з Вами найближчим часом![:ru]Наш менеджер свяжеться с Вами в ближайшее время[:]'); ?></p>
            </div>
        </div>

    </form>

    <div class="foot_bot">

        <div class="container">

            <div class="row align-items-center justify-content-center">

                <div class="col-lg-4 col-12 order-3 order-lg-1">
                    <a href="/" class="logo"><img src="/wp-content/themes/wsf/assets/img/logo.svg" alt="logo"></a>
                    <div class="wsf_studio d-lg-none">
                        <p><?php echo __('[:ua]Сайт розроблено[:ru]Сайт разработан[:]'); ?></p>
                        <a href="https://wsf.com.ua/" target="_blank"><svg width="63" height="19" viewBox="0 0 63 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.159623 12.6162L20.637 0.163521C21.1799 -0.158824 21.8755 0.0108313 22.1979 0.536764C22.3166 0.723385 22.3675 0.926971 22.3675 1.13056V1.19842V11.8189C22.3675 12.5993 21.7398 13.227 20.9594 13.227C20.7388 13.227 20.5352 13.1761 20.3486 13.0913L20.2468 13.0404L15.1911 10.6313L17.4814 10.0035L12.799 18.0283C12.273 18.9105 11.1363 19.2158 10.2541 18.7069C9.99964 18.5542 9.79605 18.3676 9.64336 18.147L9.55854 18.0113L0.498934 4.52367C-0.40024 3.20036 -0.0439634 1.40201 1.27935 0.502833C2.61963 -0.396342 4.41798 -0.0400654 5.30018 1.28325C5.36805 1.38504 5.43591 1.48684 5.48681 1.58863L12.8159 16.1111L9.5755 16.0942L14.5294 8.23913L14.5973 8.13733C15.0723 7.37388 16.0733 7.15333 16.8368 7.6114L21.621 10.5295L19.5003 11.751L20.0602 1.14752L21.7907 2.18242L0.498934 13.1931C0.329279 13.2779 0.125692 13.21 0.0408644 13.0404C-0.0439633 12.8877 0.00693329 12.7011 0.159623 12.6162Z" fill="white"/>
                                <path d="M29.0526 3.99784L28.3571 0.536863H27.3561L26.6266 3.99784L26.0497 0.536863L24.6416 0.519897L25.8631 5.96584H27.2204L27.8481 2.69149L28.4419 5.96584L29.7991 5.98281L31.0715 0.553829L29.6634 0.536863L29.0526 3.99784Z" fill="white"/>
                                <path d="M31.4951 5.98281L34.7695 5.99978V4.84612H32.8184V3.81122H34.7186V2.65756H32.8354V1.70749H34.7864V0.553833H31.5121L31.4951 5.98281Z" fill="white"/>
                                <path d="M38.5698 3.20046C39.0788 3.0817 39.469 2.6406 39.469 1.96197C39.469 1.26639 39.0109 0.570799 37.993 0.570799L35.516 0.553833L35.499 5.98281L38.0608 5.99978C39.0788 5.99978 39.5538 5.32115 39.5538 4.52377C39.5538 3.86212 39.1297 3.30225 38.5698 3.20046ZM36.8223 1.70749H37.6536C37.959 1.70749 38.1117 1.91108 38.1117 2.19949C38.1117 2.50487 37.9421 2.69149 37.6536 2.69149H36.8223V1.70749ZM37.6876 4.88005H36.8223V3.82818H37.6876C38.0099 3.82818 38.1965 4.04874 38.1965 4.35412C38.1965 4.69343 38.0099 4.88005 37.6876 4.88005Z" fill="white"/>
                                <path d="M26.066 8.25602C26.066 8.01851 26.2526 7.84885 26.5749 7.84885C26.9821 7.84885 27.4232 7.98457 27.7625 8.30692L28.3733 7.33988C27.9322 6.93271 27.3214 6.71216 26.6258 6.71216C25.4043 6.71216 24.7087 7.50954 24.7087 8.37478C24.7087 10.258 27.1178 9.95258 27.1178 10.733C27.1178 11.0044 26.8803 11.1911 26.4901 11.1911C25.9642 11.1911 25.4891 10.9535 25.1668 10.6142L24.5391 11.6152C24.9971 12.0563 25.6249 12.3278 26.5071 12.3278C27.7286 12.3278 28.4581 11.6322 28.4581 10.5973C28.4751 8.74802 26.066 8.96858 26.066 8.25602Z" fill="white"/>
                                <path d="M31.2228 6.71228C29.7638 6.71228 28.8477 7.8829 28.8477 9.5116C28.8477 11.1573 29.7468 12.3279 31.2059 12.3279C32.6649 12.3279 33.581 11.1573 33.581 9.52856C33.598 7.8829 32.6988 6.71228 31.2228 6.71228ZM31.2059 11.1573C30.5442 11.1573 30.1879 10.4447 30.1879 9.5116C30.1879 8.56153 30.5612 7.86594 31.2228 7.86594C31.8845 7.86594 32.2577 8.56153 32.2577 9.5116C32.2408 10.4617 31.8845 11.1573 31.2059 11.1573Z" fill="white"/>
                                <path d="M35.5659 6.81409L34.2426 6.79712L34.2256 12.2431H37.2964V11.1064L35.5489 11.0894L35.5659 6.81409Z" fill="white"/>
                                <path d="M40.8595 10.3429C40.8595 10.8858 40.5711 11.2082 40.0621 11.2082C39.5362 11.2082 39.2647 10.8858 39.2647 10.3429L39.2817 6.83105H37.9584L37.9414 10.326C37.9414 11.6153 38.7727 12.3618 40.0621 12.3618C41.3515 12.3618 42.1828 11.6323 42.1998 10.3429L42.2167 6.84802H40.8934L40.8595 10.3429Z" fill="white"/>
                                <path d="M42.793 7.98471H43.9636L43.9466 12.277H45.2699L45.2869 7.98471L46.4406 8.00168V6.84802L42.793 6.83105V7.98471Z" fill="white"/>
                                <path d="M47.0288 6.8585L47.0098 12.2875L48.3331 12.2921L48.3521 6.86313L47.0288 6.8585Z" fill="white"/>
                                <path d="M51.3615 6.78003C49.9025 6.78003 48.9863 7.95065 48.9863 9.57934C48.9863 11.225 49.8855 12.3956 51.3445 12.3956C52.8036 12.3956 53.7197 11.225 53.7197 9.59631C53.7367 7.95065 52.8205 6.78003 51.3615 6.78003ZM51.3445 11.225C50.6829 11.225 50.3266 10.5125 50.3266 9.57934C50.3266 8.62927 50.6998 7.93369 51.3615 7.93369C52.0232 7.93369 52.3964 8.62927 52.3964 9.57934C52.3794 10.5294 52.0232 11.225 51.3445 11.225Z" fill="white"/>
                                <path d="M57.2654 9.61341L55.7215 6.88196H54.3812L54.3643 12.3109H55.6706L55.6876 9.46072L57.3163 12.3109L58.5717 12.3279L58.5887 6.88196H57.2823L57.2654 9.61341Z" fill="white"/>
                                <path d="M60.607 8.37492C60.607 8.1374 60.7936 7.96775 61.1159 7.96775C61.5231 7.96775 61.9642 8.10347 62.3035 8.42582L62.9143 7.45878C62.4732 7.05161 61.8624 6.83105 61.1668 6.83105C59.9453 6.83105 59.2497 7.62844 59.2497 8.49368C59.2497 10.3769 61.6588 10.0715 61.6588 10.8519C61.6588 11.1233 61.4213 11.31 61.0311 11.31C60.5052 11.31 60.0301 11.0724 59.7078 10.7331L59.0801 11.7341C59.5381 12.1752 60.1659 12.4467 61.0481 12.4467C62.2696 12.4467 62.9991 11.7511 62.9991 10.7162C63.0161 8.88389 60.607 9.08747 60.607 8.37492Z" fill="white"/>
                                <path d="M24.6064 18.4948H25.9298V16.3062L27.8299 16.3232V15.1695H25.9298L25.9467 14.2195H27.8978V13.0658H24.6234L24.6064 18.4948Z" fill="white"/>
                                <path d="M29.6961 13.0742L28.0674 18.5032H29.4925L29.6961 17.6719H31.2399L31.4435 18.5032H32.8686L31.2908 13.0573L29.6961 13.0742ZM29.9675 16.5182L30.4935 14.4315L30.9855 16.5182H29.9675Z" fill="white"/>
                                <path d="M35.4306 14.16C35.8378 14.16 36.1262 14.4654 36.2619 14.8895L37.3477 14.4315C37.0932 13.7698 36.5843 13.0063 35.4306 13.0063C33.9546 13.0063 33.0384 14.143 33.0215 15.8057C33.0215 17.4513 33.9376 18.6219 35.4136 18.6219C36.5673 18.6219 37.0932 17.8076 37.3477 17.1459L36.2619 16.6709C36.1431 17.112 35.8378 17.4513 35.4136 17.4513C34.752 17.4513 34.3618 16.7557 34.3618 15.8057C34.3618 14.8556 34.752 14.16 35.4306 14.16Z" fill="white"/>
                                <path d="M37.6357 14.2448H38.7894L38.7724 18.5371H40.0957L40.1127 14.2618H41.2664V13.1082L37.6357 13.0912V14.2448Z" fill="white"/>
                                <path d="M44.0148 13.0233C42.5558 13.0233 41.6396 14.1939 41.6396 15.8226C41.6396 17.4683 42.5388 18.6389 43.9979 18.6389C45.4569 18.6389 46.373 17.4683 46.373 15.8396C46.373 14.2109 45.4739 13.0403 44.0148 13.0233ZM43.9979 17.4853C43.3362 17.4853 42.9799 16.7727 42.9799 15.8396C42.9799 14.8895 43.3532 14.1939 44.0148 14.1939C44.6765 14.1939 45.0497 14.9065 45.0497 15.8396C45.0328 16.7727 44.6595 17.4853 43.9979 17.4853Z" fill="white"/>
                                <path d="M50.9709 14.9065C50.9709 13.9055 50.3093 13.1421 49.2404 13.1251H47.0179L47.001 18.5541H48.3243V16.6879H48.8163L49.5288 18.5541H50.9879L50.0717 16.4504C50.4959 16.2977 50.9709 15.8396 50.9709 14.9065ZM49.0368 15.5512H48.3413V14.2788H49.0368C49.3931 14.2788 49.6306 14.5163 49.6306 14.9235C49.6306 15.3137 49.3762 15.5512 49.0368 15.5512Z" fill="white"/>
                                <path d="M54.4149 13.1591L53.5327 15.178L52.6335 13.1421H51.1914L52.871 16.3825L52.854 18.588H54.1773V16.3825L55.8569 13.1591H54.4149Z" fill="white"/>
                            </svg></a>
                    </div>
                </div>

                <div class="col-lg-4 col-12 order-2">
                    <p class="copy">Copyright © 2018 Suchasny Kvartal</p>
                </div>

                <div class="col-lg-4 col-12 order-1 order-lg-3">
                    <div class="soc">
                        <a href="/"><i class="fab fa-facebook-square"></i> Facebook</a>
                        <a href="/"><i class="fab fa-instagram"></i> Instagram</a>
                    </div>
                </div>


            </div>

        </div>

    </div>

</footer>


</div>
</div>

<!-- MAGNIFIC POPUP -->

<div class="zoom-anim-dialog mfp-hide" id="popup_form1">

    <form class="form_style form_pop_call">

        <h4><?php echo __('[:ua]Хочете ми вам передзвонимо?[:ru]Хотите мы вам перезвоним?[:]'); ?></h4>

        <input type="text" name="name" placeholder="<?php echo __('[:ua]Ваше ім\'я[:ru]Ваше имя[:]'); ?>" required>
        <input type="tel" name="phone" placeholder="*Телефон" required>

        <p><?php echo __('[:ua]Виберіть зручний для вас період, протягом якого ви б хотіли, щоб ми з вами зв\'язалися[:ru]Выберите удобный для вас период, за который вы бы хотели, чтобы мы с вами связались[:]'); ?></p>

        <button title="Close (Esc)" type="button" class="mfp-close call_bl">×</button>

        <div class="but_form">

            <div class="radio_wrap">
                <div class="radio">
                    <label>
                        <input type="radio" name="rooms" id="now" value="Сейчас"/>
                        <span></span>
                        <?php echo __('[:ua]Зараз[:ru]Сейчас[:]'); ?>
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="rooms" id="late" value="1-2 часа"/>
                        <span></span>
                        <?php echo __('[:ua]1-2 години[:ru]1-2 часа[:]'); ?>
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="rooms" id="evening" value="Вечером"/>
                        <span></span>
                        <?php echo __('[:ua]Увечері[:ru]Вечером[:]'); ?>
                    </label>
                </div>
            </div>

            <button class="butt_sky sky_blue" type="submit" data-subject="Задать вопрос футер"><?php echo __('[:ua]Замовити консультацію[:ru]Заказать консультацию[:]'); ?></button>

        </div>

        <div class="succes">
            <div class="cont">
                <h4><?php echo __('[:ua]Дякую за заявку![:ru]Спасибо за заявку![:]'); ?></h4>
                <p><?php echo __('[:ua]Наш менеджер зв`яжеться з Вами найближчим часом![:ru]Наш менеджер свяжеться с Вами в ближайшее время[:]'); ?></p>
            </div>
        </div>


    </form>

</div>

<div class="zoom-anim-dialog mfp-hide" id="popup_form2">

    <form class="form_style form_pop_soc">

        <h4><?php echo __('[:ua]Введіть ваш номер телефону та виберіть куди ви хочете отримати розрахунок[:ru]Введите ваш номер телефона и выберите куда вы хотите получить рассчёт[:]'); ?></h4>

        <input type="text" name="name" placeholder=" <?php echo __('[:ua]Ім\'я[:ru]Имя[:]'); ?>" required>
        <input type="tel" name="phone" placeholder="*Телефон" required>

        <button title="Close (Esc)" type="button" class="mfp-close call_soc">×</button>

        <div class="but_form">
            <button class="butt_blue" type="submit" data-soc="viber"><?php echo __('[:ua]Відправити[:ru]Отправить[:]'); ?> <i class="fab fa-viber"></i></button>
            <p><?php echo __('[:ua]чи[:ru]или[:]'); ?></p>
            <button class="butt_blue" type="submit" data-soc="telegram"><?php echo __('[:ua]Відправити[:ru]Отправить[:]'); ?> <i class="fab fa-telegram-plane"></i></button>
        </div>

        <div class="succes_white">
            <div class="cont">
                <h4><?php echo __('[:ua]Дякую за заявку![:ru]Спасибо за заявку![:]'); ?></h4>
                <p><?php echo __('[:ua]Наш менеджер зв`яжеться з Вами найближчим часом![:ru]Наш менеджер свяжеться с Вами в ближайшее время[:]'); ?></p>
            </div>
        </div>

    </form>

</div>



<!-- PRELOADER -->

<div id="loaderSvgWrapper">
    <svg xmlns:svg="http://www.w3.org/2000/svg" viewbox="0 0 100 100" id="preLoader" width="100px" height="100px">
        <path style="stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter" d="m 58.26475,43.628481 15.7247,-27.287018 -31.4936,0.02553 z" id="T1"/>
        <path style="stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter" d="m 58.26475,43.628481 31.4936,-0.02553 -15.7689,-27.261492 z" id="T2"/>
        <path style="stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter" d="M 58.26475,43.628481 74.03365,70.88997 89.75835,43.602954 Z" id="T3"/>
        <path style="stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter" d="M 58.26475,43.628481 42.54006,70.915503 74.03365,70.889973 Z" id="T4"/>
        <path style="stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter" d="m 58.26475,43.628481 -31.49359,0.02553 15.7689,27.261491 z" id="T5"/>
        <path style="stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter" d="M 58.26475,43.628481 42.49585,16.366995 26.77116,43.654011 Z" id="T6"/>
    </svg>
</div>

<!-- END PRELOADER -->

<script src="/wp-content/themes/wsf/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="/wp-content/themes/wsf/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="/wp-content/themes/wsf/assets/libs/slick-carousel/slick/slick.min.js"></script>
<script src="/wp-content/themes/wsf/assets/libs/mixitup/mixitup.min.js"></script>
<script src="/wp-content/themes/wsf/assets/libs/jquery-nice-select-master/js/jquery.nice-select.min.js"></script>
<script src="/wp-content/themes/wsf/assets/libs/jQuery.equalHeights/jquery.equalheights.min.js"></script>
<script src="/wp-content/themes/wsf/assets/libs/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
<script src="/wp-content/themes/wsf/assets/libs/plugins-scroll/plugins-scroll.js"></script>
<script src="/wp-content/themes/wsf/assets/libs/fancybox/jquery.fancybox.min.js"></script>
<script src="/wp-content/themes/wsf/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="/wp-content/themes/wsf/assets/js/common.js"></script>

</body>
</html>