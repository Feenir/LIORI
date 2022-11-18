<?php
/**
 * Template part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liori
 */

?>

<section class="done" id="project">
    <div class="container">
        <div class="done__wrapper">
            <div class="done__left">
                <div class="done__card done__left-card done__left-card--one gradient-back js-cardOpen">
                    <div class="card__inner">
                        <div class="card__info">
                            <span class="card__city">Москва</span> <span
                                class="card__square">/ Квартира в районе Сокольники</span>
                        </div>
                        <h4 class="card__title">Мебель, кухня, двери и предметы интерьера
                        </h4>
                    </div>
                    <div class="card__arrow">
                        <svg class="card__arrow-svg">
                            <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/img/svg/set.svg#slider-arrow"></use>
                        </svg>
                    </div>
                </div>

                <div class="done__card done__left-card done__left-card--two gradient-back js-cardOpen">
                    <div class="card__inner">
                        <div class="card__info">
                            <span class="card__city">Москва</span> <span class="card__square">/ Kislovsky Taste&Place</span>
                        </div>
                        <h4 class="card__title">Панно и интерьерные изделия в ресторан
                        </h4>
                    </div>
                    <div class="card__arrow">
                        <svg class="card__arrow-svg">
                            <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/img/svg/set.svg#slider-arrow"></use>
                        </svg>
                    </div>
                </div>

                <a class="done__more done__more--mob hover-opacity js-formOpen" href="#">Посмотреть еще</a>

            </div>

            <div class="done__right">
                <div class="done__title-inner">
                    <h3 class="done__title">1200</h3>
                    <p class="done__title-text">проектов <br class="done__br"> выполнено</p>
                </div>
                <div class="done__card done__right-card done__right-card--one gradient-back js-cardOpen">
                    <div class="card__inner">
                        <div class="card__info">
                            <span class="card__city">Москва</span>
                            <span class="card__square">/ МГУ</span>
                        </div>
                        <h4 class="card__title">Мебель, двери, Стеновые панели, перегородки
                        </h4>
                    </div>
                    <div class="card__arrow">
                        <svg class="card__arrow-svg">
                            <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/img/svg/set.svg#slider-arrow"></use>
                        </svg>
                    </div>
                </div>
                <a class="done__more done__more--desk js-formOpen hover-opacity" href="#">Посмотреть еще</a>
            </div>
        </div>

    </div>
</section>