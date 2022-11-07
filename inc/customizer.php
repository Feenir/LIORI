<?php
/**
 * liori Theme Customizer
 *
 * @package liori
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function liori_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'liori_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'liori_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'liori_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function liori_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function liori_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function liori_customize_preview_js() {
	wp_enqueue_script( 'liori-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'liori_customize_preview_js' );

add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
if (!function_exists('add_scripts')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
    function add_scripts()
    { // добавление скриптов
        if (is_admin()) return false; // если мы в админке - ничего не делаем
        wp_deregister_script('jquery'); // выключаем стандартный jquery
        wp_register_script('jquery_new', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', '', '', true);
        wp_enqueue_script('preloader', get_template_directory_uri() . '/js/preloader.js', array('jquery_new'), '', true);    // preloader
//        wp_enqueue_script('jquery_new', get_template_directory_uri() . '/js/js-libs/jquery-lib.js', '', '', true);    // swiper


        wp_enqueue_script('gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js', '', '', true); // gsap
        wp_enqueue_script('gsap_ScrollTrigger', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js', '', '', true); // gsap ScrollTrigger

//        wp_enqueue_script('gsap_jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', '', '', true); // gsap jquery
        wp_enqueue_script('gsap_ScrollMagic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', '', '', true); // gsap ScrollMagic
        wp_enqueue_script('gsap_animation', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.js', '', '', true); // gsap animation
        wp_enqueue_script('gsap_addIndicators', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', '', '', true); // gsap addIndicators
        wp_enqueue_script('gsap_main', get_template_directory_uri() . '/js/main-gsap.js', '', '', true); // скрипты gsap

        wp_enqueue_script('swiper', get_template_directory_uri() . '/js/js-libs/swiper-lib.js', array('jquery_new'), '', true);    // swiper
        wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/js-libs/fancybox.js', array('jquery_new'), '', true);    // fancybox
        wp_enqueue_script('sliders', get_template_directory_uri() . '/js/sliders.js', array('jquery_new'), '', true); // и скрипты шаблона
        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery_new'), '', true); // и скрипты шаблона

    }
}

//
//add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
//if (!function_exists('add_scripts')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
//    function add_scripts()
//    { // добавление скриптов
//        if (is_admin()) return false; // если мы в админке - ничего не делаем
//        wp_deregister_script('jquery'); // выключаем стандартный jquery
//        wp_enqueue_script('gsap_TweenMax', '//cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js', '', '', true); // gsap
//        wp_enqueue_script('gsap_ScrollMagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', '', '', true); // gsap
//        wp_enqueue_script('gsap_animation', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js', '', '', true); // gsap
//        wp_enqueue_script('gsap_addIndicators', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', '', '', true); // gsap
//                wp_register_script('jquery_new', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', '', '', true);
////        wp_register_script('jquery_new', get_template_directory_uri() . '/js/js-libs/jquery-lib.js', '', '', true);
//        wp_enqueue_script('swiper', get_template_directory_uri() . '/js/js-libs/swiper-lib.js', array('jquery_new'), '', true);    // swiper
//
//
//        wp_enqueue_script('maskedinput', get_template_directory_uri() . '/js/js-libs/jquery.maskedinput.min.js', array('jquery_new'), '', true);    // swiper
//        wp_enqueue_script('fancybox', get_template_2directory_uri() . '/js/js-libs/fancybox.js', array('jquery_new'), '', true);    // swiper
//        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery_new'), '', true); // и скрипты шаблона
//    }
//}

add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
if (!function_exists('add_styles')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
    function add_styles()
    { // добавление стилей
        if (is_admin()) return false; // если мы в админке - ничего не делаем
//        wp_enqueue_style('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css'); // слайдер swiper
//        wp_enqueue_style('slickcss', '//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css'); // слайдер слик
//        wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/css/owl.carousel.min.css'); // owl.carousel
//        wp_enqueue_style('owlcarouseltheme', get_template_directory_uri() . '/css/owl.theme.default.min.css'); // owl.theme.default
//        wp_enqueue_style('swiper', get_template_directory_uri() . '/css/sw.css'); // слайдер swiper
        wp_enqueue_style('liori_style', get_template_directory_uri() . '/css/main.css'); // основные стили шаблона
        wp_enqueue_style('main', get_template_directory_uri() . '/style.css'); // стили темы
    }
}