<?php
/**
 * Template part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liori
 */

?>
<style>



  #services .job__swiper-inner {
    padding-left: max(15px, calc((100% - 1305px)/2));
    /*padding: 0;*/
  }
  .gsap_services_wrap {
    width: 300%;
  }
  #services .job__slide {position: relative;}

  #services  {
    padding-top: 104px
  }


</style>


<section class="job gsap_services_scroll gsap_services_panel services" id="services">
    <div class="job__swiper-inner gsap_services_wrap">
        <div class="job__slide gsap_services_panel js-formOpen job__slide_1">
            <div class="job__holder gradient-back">
							<img src="<?= get_stylesheet_directory_uri(); ?>/img/job/job-1.jpg" alt="">
						</div>
                <h3 class="job__holder-title">Индивидуальные столярные изделия</h3>
        </div>
        <div class="job__slide gsap_services_panel js-formOpen job__slide_2">
            <div class="job__holder gradient-back">
							<img src="<?= get_stylesheet_directory_uri(); ?>/img/job/job-2.jpg" alt=""></div>
                <h3 class="job__holder-title">Лестницы</h3>

        </div>
        <div class="job__slide gsap_services_panel js-formOpen job__slide_3">
            <div class="job__holder gradient-back">
							<img src="<?= get_stylesheet_directory_uri(); ?>/img/job/job-3.jpg" alt=""></div>
                <h3 class="job__holder-title">Шкафы и гардеробные</h3>

        </div>
        <div class="job__slide gsap_services_panel js-formOpen job__slide_4">
            <div class="job__holder gradient-back">
							<img src="<?= get_stylesheet_directory_uri(); ?>/img/job/job-4.jpg" alt=""></div>
                <h3 class="job__holder-title">Стеновые потолочные панели и двери</h3>

        </div>
        <div class="job__slide gsap_services_panel js-formOpen job__slide_5">
            <div class="job__holder gradient-back">
							<img src="<?= get_stylesheet_directory_uri(); ?>/img/job/job-5.jpg" alt=""></div>
                <h3 class="job__holder-title">Реечные потолки, стены, перегородки и фальш балки</h3>

        </div>
<!--        <div class="job__slide gsap_services_panel js-formOpen job__slide_6">-->
<!--            <div class="job__holder gradient-back">-->
<!--							<img src="--><?//= get_stylesheet_directory_uri(); ?><!--/img/job/job-6.jpg" alt=""></div>-->
<!--                <h3 class="job__holder-title">Подоконники и откосы</h3>-->
<!---->
<!--        </div>-->
<!--        <div class="job__slide gsap_services_panel js-formOpen job__slide_7">-->
<!--            <div class="job__holder gradient-back">-->
<!--							<img src="--><?//= get_stylesheet_directory_uri(); ?><!--/img/job/job-7.jpg" alt=""></div>-->
<!--                <h3 class="job__holder-title">Барные стойки, ресепшн</h3>-->
<!---->
<!--        </div>-->
    </div>
</section>