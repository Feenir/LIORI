<?php
/**
 * Template part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liori
 */


$main_header_clients = get_field('main_header_clients');

if( have_rows('main_repeater_clients') ): ?>
    <style>
      .client:before {
        background: linear-gradient(180deg, rgba(17, 17, 17, 0.54) 0%, rgba(17, 17, 17, 0) 51.56%, rgba(17, 17, 17, 0.43) 99.48%);
      }
    </style>

    <div class="client-swiper swiper js-client">
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php
            while( have_rows('main_repeater_clients') ): the_row();
            $clients_bg = get_sub_field('clients_bg');
            $clients_logo = get_sub_field('clients_logo');
            $clients_city = get_sub_field('clients_city');
            $clients_place = get_sub_field('clients_place');
            $clients_title = get_sub_field('clients_title');
            ?>
            <div class="swiper-slide">
                <section class="client" style=" background-image: url('<?= esc_url($clients_bg['url']); ?>'); ">
                    <div class="container">
                        <div class="client__wrap">
                            <div class="client__top">
                                <h3 class="client__top-title title-second"><?=$main_header_clients;?></h3>
                                <div class="client__top-logo">
                                    <img src="<?= esc_url($clients_logo['url']); ?>" alt="<?= esc_attr($clients_logo['alt']); ?>" />
                                </div>
                            </div>
                            <div class="client__bottom">
                                <div class="card">
                                    <div class="card__info">
                                        <span class="card__city"><?= $clients_city ;?></span> <span class="card__square"><?= $clients_place ; // / 36 м<sup>2</sup> ?></span>
                                    </div>
                                    <h4 class="card__title"><?= $clients_title ;?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php endwhile; ?>
        </div>

    <div class="client__navigation">
        <div class="client__nav-arrow client__prev js-clientNext"></div>
        <div class="client__nav-arrow client__next js-clientPrev"></div>
    </div>

    </div>
<?php endif; ?>