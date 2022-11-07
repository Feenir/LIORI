<?php
/**
 * Template part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liori
 */

?>

<div class="swiper js-client">
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><section class="client">
                <div class="container">
                    <div class="client__wrap">
                        <div class="client__top">
                            <h3 class="client__top-title title-second">Наши клиенты</h3>
                            <div class="client__top-logo">
                                <img src="<?= get_stylesheet_directory_uri(); ?>/img/clients/sber.png" alt="">
                            </div>
                        </div>
                        <div class="client__bottom">
                            <div class="card">
                                <div class="card__info">
                                    <span class="card__city">Москва</span> <span class="card__square">/ 36 м<sup>2</sup></span>
                                </div>
                                <h4 class="card__title">Дизайн квартиры на Московской 320</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section></div>
        <div class="swiper-slide"><section class="client">
                <div class="container">
                    <div class="client__wrap">
                        <div class="client__top">
                            <h3 class="client__top-title title-second">Наши клиенты2</h3>
                            <div class="client__top-logo">
                                <img src="<?= get_stylesheet_directory_uri(); ?>/img/clients/sber.png" alt="">
                            </div>
                        </div>
                        <div class="client__bottom">
                            <div class="card">
                                <div class="card__info">
                                    <span class="card__city">Москва</span> <span class="card__square">/ 36 м<sup>2</sup></span>
                                </div>
                                <h4 class="card__title">Дизайн квартиры на Московской 320</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section></div>
        <div class="swiper-slide"><section class="client">
                <div class="container">
                    <div class="client__wrap">
                        <div class="client__top">
                            <h3 class="client__top-title title-second">Наши клиенты3</h3>
                            <div class="client__top-logo">
                                <img src="<?= get_stylesheet_directory_uri(); ?>/img/clients/sber.png" alt="">
                            </div>
                        </div>
                        <div class="client__bottom">
                            <div class="card">
                                <div class="card__info">
                                    <span class="card__city">Москва</span> <span class="card__square">/ 36 м<sup>2</sup></span>
                                </div>
                                <h4 class="card__title">Дизайн квартиры на Московской 320</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section></div>
        ...
    </div>
    <!-- If we need pagination -->
<!--    <div class="swiper-pagination"></div>-->

    <!-- If we need navigation buttons -->
<div class="client__navigation">
	<div class="client__nav-arrow client__prev js-clientNext"></div>
	<div class="client__nav-arrow client__next js-clientPrev"></div>
</div>

    <!-- If we need scrollbar -->
<!--    <div class="swiper-scrollbar"></div>-->
</div>