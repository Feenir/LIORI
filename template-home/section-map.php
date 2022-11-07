<?php
/**
 * Template part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liori
 */

?>

<section class="map">
    <div class="map__wrapper">
			<div class="map__inner">
					<div class="map__card js-map-trigger js-mapMobile" data-tab="1">
						<div class="map__visible">
							<h3 class="map__title">Москва</h3>
							<div class="map__hidden map__left-hidden js-map-content" data-tab="1">
								<p>Скаковая улица, 36, 4 этаж, оф.423</p>
								<!--                        <p>Коломенское</p>-->
								<a target="_blank" href="https://yandex.ru/maps/?text=55.776573%2C37.573851">Построить маршрут</a>

							</div>
						</div>
						<div class="map__hidden map__right-hidden js-map-content" data-tab="1">
							<ul class="map__list">
								<li class="map__items"><a class="map__link" href="#">+7 910 877 85 21</a></li>
								<li class="map__items"><a class="map__link" href="#">contact@wood.butik</a></li>
							</ul>


						</div>
					</div>
					<div class="map__card js-map-trigger js-mapMobile active-map" data-tab="2">
						<div class="map__visible">
							<h3 class="map__title">Люберцы</h3>
							<div class="map__hidden map__left-hidden js-map-content active" data-tab="2">
								<p>Московская область, дальняя улица, 6</p>
								<!--                        <p>Коломенское</p>-->
								<a target="_blank" href="https://yandex.ru/navi/?whatshere%5Bzoom%5D=18&whatshere%5Bpoint%5D=37.913091%2C55.675951&lang=ru&from=navi">Построить маршрут</a>

							</div>
						</div>
						<div class="map__hidden map__right-hidden js-map-content active" data-tab="2">
							<ul class="map__list">
								<li class="map__items"><a class="map__link" href="#">+7 910 877 85 21</a></li>
								<li class="map__items"><a class="map__link" href="#">contact@wood.butik</a></li>
							</ul>


						</div>
					</div>
					<div class="map__card js-map-trigger js-mapMobile" data-tab="3">
						<div class="map__visible">
							<h3 class="map__title">Москва</h3>
							<div class="map__hidden map__left-hidden js-map-content" data-tab="3">
								<p>Кутузовский проспект, 88, 2 этаж </p>
								<!--                        <p>Коломенское</p>-->
								<a target="_blank" href="https://yandex.ru/maps/?text=55.725595%2C37.449677">Построить маршрут</a>

							</div>
						</div>
						<div class="map__hidden map__right-hidden js-map-content" data-tab="3">
							<ul class="map__list">
								<li class="map__items"><a class="map__link" href="#">+7 910 877 85 21</a></li>
								<li class="map__items"><a class="map__link" href="#">contact@wood.butik</a></li>
							</ul>


						</div>
					</div>
			</div>
        <div class="map__yandex">
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1ec1675d7d10967af3bd392a8b1bcc2d8f011c5e662a492737319baab8dfd920&amp;width=100%25&amp;height=580&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>
    </div>
</section>

