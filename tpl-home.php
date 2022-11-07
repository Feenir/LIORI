<?php
/**
 * Главная страница (tpl-home.php)
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liori
 *
 * Template Name: Главная страница
 */
get_header();

get_template_part('template-home/section', 'hero'); 		// главный экран

get_template_part('template-home/section', 'services'); 	// !!! услуги

//    get_template_part('template-home/section', 'job'); 			// !!! услуги

get_template_part('template-home/section', 'done'); 		// выполненные работы
get_template_part('template-home/section', 'approach'); 	// этапы
get_template_part('template-home/section', 'quote'); 		// цитата

get_template_part('template-home/section', 'spacer_gsap'); 	// продукт


get_template_part('template-home/section', 'info'); 		// преимущества в цифрах
get_template_part('template-home/section', 'materials'); 	// материалы
get_template_part('template-home/section', 'privilege'); 	// краткая инфа
get_template_part('template-home/section', 'certificates'); 	// сертификаты
get_template_part('template-home/section', 'partners'); 	// наши партнеры
get_template_part('template-home/section', 'why_we'); 	// почему мы прозводим мебель - нет контента убрать надо

if (current_user_can('manage_options')) :
    get_template_part('template-home/section', 'staff');      // руководители
    get_template_part('template-home/section', 'client');      // наши клиенты
    get_template_part('template-home/section', 'faq');        // чаво
    get_template_part('template-home/section', 'map');        // карта сайта
endif;

get_footer();
