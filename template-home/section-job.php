<?php
/**
 * Template part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liori
 */

?>

<section class="job" id="catalog">
    <div class="job__wrapper">
        <div class="jobSwiper">
            <div class="job__swiper-inner">

                <div class="job__slide js-formOpen">
                    <div class="job__holder gradient-back">
											<img src="" alt="<?= get_stylesheet_directory_uri(); ?>/img/job/job-1.jpg">
                        <h3 class="job__holder-title">Индивидуальные столярные изделия</h3>
                    </div>
                </div>

                <div class="job__slide js-formOpen">
                    <div class="job__holder gradient-back" style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/img/job/job-2.jpg')">
                        <h3 class="job__holder-title">Лестницы</h3>
                    </div>
                </div>

                <div class="job__slide js-formOpen">
                    <div class="job__holder gradient-back" style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/img/job/job-3.jpg')">
                        <h3 class="job__holder-title">Шкафы и гардеробные</h3>
                    </div>
                </div>

                <div class="job__slide js-formOpen">
                    <div class="job__holder gradient-back" style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/img/job/job-4.jpg')">
                        <h3 class="job__holder-title">Стеновые потолочные панели и двери</h3>
                    </div>
                </div>

                <div class="job__slide js-formOpen">
                    <div class="job__holder gradient-back" style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/img/job/job-5.jpg')">
                        <h3 class="job__holder-title">Реечные потолки, стены, перегородки и фальш балки</h3>
                    </div>
                </div>

                <div class="job__slide js-formOpen">
                    <div class="job__holder gradient-back" style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/img/job/job-6.jpg')">
                        <h3 class="job__holder-title">Подоконники и откосы</h3>
                    </div>
                </div>

                <div class="job__slide js-formOpen">
                    <div class="job__holder gradient-back" style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/img/job/job-7.jpg')">
                        <h3 class="job__holder-title">Барные стойки, ресепшн</h3>
                    </div>
                </div>
                <div class="job__slide js-formOpen">
                    <div class="job__holder gradient-back" style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/img/job/job-8.jpg')">
                        <h3 class="job__holder-title">Столы, консоли, тумбы</h3>
                    </div>
                </div>
                <div class="job__slide js-formOpen">
                    <div class="job__holder gradient-back" style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/img/job/job-9.jpg')">
                        <h3 class="job__holder-title">Торговое оборудование</h3>
                    </div>
                </div>
                <div class="job__slide js-formOpen">
                    <div class="job__holder gradient-back" style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/img/job/job-10.jpg')">
                        <h3 class="job__holder-title">Ресторанная мебель</h3>
                    </div>
                </div>
            </div>
	
	        <?php /*
   <!-- If we need navigation buttons -->
            <div class="job__navigation-inner">
                <div class="job__button swiper-button-prev js-jobPrev">
                    <svg class="job__swiper-arrow">
                        <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/img/svg/set.svg#slider-arrow"></use>
                    </svg>
                </div>
                <div class="job__button swiper-button-next js-jobNext">
                    <svg class="job__swiper-arrow job__swiper-arrow--right">
                        <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/img/svg/set.svg#slider-arrow"></use>
                    </svg>
                </div>
            </div>
 */ ?>
        
        </div>
    </div>

    <!-- If we need pagination -->

    <div class="container">
        <div class="job__pagination">
            <div class="job__pagination--swiper swiper-pagination js-paginationJob"></div>

        </div>
    </div>
</section>