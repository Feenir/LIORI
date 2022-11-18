<?php
/**
 * Template part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liori
 */

?>

<?php if( have_rows('main_service_repeater') ): ?>
    <section class="job gsap_services_scroll gsap_services_panel services" id="services">
        <div class="job__swiper-inner gsap_services_wrap">
            <?php
            while( have_rows('main_service_repeater') ) : the_row();
            $title = get_sub_field('title');
                $image = get_sub_field('img');
            ?>
                <div class="job__slide gsap_services_panel js-formOpen job__slide_1">
                    <div class="job__holder gradient-back" style="background-image: none">
                        <?php if( !empty( $image ) ): ?>
                            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <h3 class="job__holder-title"><?=$title;?></h3>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>