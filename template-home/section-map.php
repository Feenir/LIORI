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
  .ymaps-layers-pane {
    filter: grayscale(1);
    -ms-filter: grayscale(1);
    -webkit-filter: grayscale(1);
    -moz-filter: grayscale(1);
    -o-filter: grayscale(1);
  }
</style>
<section class="map">
    <div class="map__wrapper">
			<div class="map__inner">
					<div class="map__card js-map-trigger js-mapMobile" data-tab="1">
						<div class="map__visible">
							<h3 class="map__title">Москва Офис </h3>
							<div class="map__hidden map__left-hidden js-map-content" data-tab="1">
								<p>Скаковая улица, 36, 4 этаж, оф.423</p>
								<!--                        <p>Коломенское</p>-->
								<a target="_blank" href="https://yandex.ru/maps/213/moscow/?indoorLevel=1&ll=37.573852%2C55.776573&mode=routes&rtext=~55.776573%2C37.573851&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NjczNTc1MhI70KDQvtGB0YHQuNGPLCDQnNC%2B0YHQutCy0LAsINCh0LrQsNC60L7QstCw0Y8g0YPQu9C40YbQsCwgMzYiCg2gSxZCFTYbX0I%3D&z=17">Построить маршрут</a>

							</div>
						</div>
						<div class="map__hidden map__right-hidden js-map-content" data-tab="1">
							<ul class="map__list">
								<li class="map__items"><a class="map__link" href="tel:+79108778521">+7 910 877 85 21</a></li>
								<li class="map__items"><a class="map__link" href="mailto:contact@wood.butik">contact@wood.butik</a></li>
							</ul>


						</div>
					</div>
					<div class="map__card js-map-trigger js-mapMobile active-map" data-tab="2">
						<div class="map__visible">
							<h3 class="map__title">Москва Шоурум</h3>
							<div class="map__hidden map__left-hidden js-map-content active" data-tab="2">
								<p>Кутузовский проспект, 88, 2 этаж </p>
								<!--                        <p>Коломенское</p>-->
								<a target="_blank" href="https://yandex.ru/maps/213/moscow/?ll=37.449678%2C55.725595&mode=routes&rtext=~55.725595%2C37.449677&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NjY5MzMwNhJH0KDQvtGB0YHQuNGPLCDQnNC%2B0YHQutCy0LAsINCa0YPRgtGD0LfQvtCy0YHQutC40Lkg0L%2FRgNC%2B0YHQv9C10LrRgiwgODgiCg15zBVCFQPnXkI%3D&z=17">Построить маршрут</a>

							</div>
						</div>
						<div class="map__hidden map__right-hidden js-map-content active" data-tab="2">
							<ul class="map__list">
								<li class="map__items"><a class="map__link" href="tel:+79108778521">+7 910 877 85 21</a></li>
								<li class="map__items"><a class="map__link" href="mailto:contact@wood.butik">contact@wood.butik</a></li>
							</ul>


						</div>
					</div>
					<div class="map__card js-map-trigger js-mapMobile" data-tab="3">
						<div class="map__visible">
							<h3 class="map__title">Дубна</h3>
							<div class="map__hidden map__left-hidden js-map-content" data-tab="3">
								<p>Дачная улица, 1с10 Дубна, Московская область </p>
								<!--                        <p>Коломенское</p>-->
								<a target="_blank" href="https://yandex.ru/maps/215/dubna/?from=navi&lang=ru&ll=37.183803%2C56.741830&mode=routes&rtext=~56.741830%2C37.183803&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoxNjcyMjk0MDM3El3QoNC%2B0YHRgdC40Y8sINCc0L7RgdC60L7QstGB0LrQsNGPINC%2B0LHQu9Cw0YHRgtGMLCDQlNGD0LHQvdCwLCDQlNCw0YfQvdCw0Y8g0YPQu9C40YbQsCwgMdGBMTAiCg02vBRCFaP3YkI%3D&z=17">Построить маршрут</a>

							</div>
						</div>
						<div class="map__hidden map__right-hidden js-map-content" data-tab="3">
							<ul class="map__list">
								<li class="map__items"><a class="map__link" href="tel:+79108778521">+7 910 877 85 21</a></li>
								<li class="map__items"><a class="map__link" href="mailto:contact@wood.butik">contact@wood.butik</a></li>
							</ul>


						</div>
					</div>
                <div class="map__card js-map-trigger js-mapMobile" data-tab="4">
                    <div class="map__visible">
                        <h3 class="map__title">Люберцы</h3>
                        <div class="map__hidden map__left-hidden js-map-content" data-tab="4">
                            <p>Дальняя улица, 6
															Люберцы, Московская область </p>
                            <!--                        <p>Коломенское</p>-->
                            <a target="_blank" href="https://yandex.ru/maps/10738/lubercy/?from=navi&lang=ru&ll=37.913091%2C55.675951&mode=routes&rtext=~55.675951%2C37.913091&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgozMzE2NDk1ODg1El%2FQoNC%2B0YHRgdC40Y8sINCc0L7RgdC60L7QstGB0LrQsNGPINC%2B0LHQu9Cw0YHRgtGMLCDQm9GO0LHQtdGA0YbRiywg0JTQsNC70YzQvdGP0Y8g0YPQu9C40YbQsCwgNiIKDQKnF0IVLbReQg%3D%3D&z=17">Построить маршрут</a>

                        </div>
                    </div>
                    <div class="map__hidden map__right-hidden js-map-content" data-tab="4">
                        <ul class="map__list">
                            <li class="map__items"><a class="map__link" href="tel:+79108778521">+7 910 877 85 21</a></li>
                            <li class="map__items"><a class="map__link" href="mailto:contact@wood.butik">contact@wood.butik</a></li>
                        </ul>


                    </div>
                </div>
			</div>
        <div class="map__yandex">
                <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=dd597676-6673-4817-bd32-ffe8b570ac4f" type="text/javascript"></script>
                <style>
                  .map__inner {
                    z-index: 2;
                  }
                  #map {
                    width: 100%; height: 100%; padding: 0; margin: 0;
                    min-height: 580px

                  }
                  .ymaps-2-1-79-ground-pane {
                    filter: grayscale(1);
                    -ms-filter: grayscale(1);
                    -webkit-filter: grayscale(1);
                    -moz-filter: grayscale(1);
                    -o-filter: grayscale(1);
                  }

                </style>

            <div id="map"></div>

            <script>
                ymaps.ready(function () {
                    var myMap = new ymaps.Map('map', {
                            center: [55.751574, 37.573856],
                            zoom: 9
                        }, {
                            searchControlProvider: 'yandex#search'
                        }),

                        // Создаём макет содержимого.
                        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                        ),

                        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                            hintContent: 'Собственный значок метки',
                            balloonContent: 'Это красивая метка'
                        }, {
                            // Опции.
                            // Необходимо указать данный тип макета.
                            iconLayout: 'default#image',
                            // Своё изображение иконки метки.
                            // iconImageHref: 'images/myIcon.gif',
                            iconImageHref: 'https://liori.ru/wp-content/themes/theme-liori/img/pin.svg',
                            // Размеры метки.
                            iconImageSize: [108, 108],
                            // Смещение левого верхнего угла иконки относительно
                            // её "ножки" (точки привязки).
                            iconImageOffset: [-5, -38]
                        }),

                        myPlacemarkWithContent = new ymaps.Placemark([55.661574, 37.573856], {
                            hintContent: 'Собственный значок метки с контентом',
                            balloonContent: 'А эта — новогодняя',
                            // iconContent: 'текст на метке'
                        }, {
                            // Опции.
                            // Необходимо указать данный тип макета.
                            iconLayout: 'default#imageWithContent',
                            // Своё изображение иконки метки.
                            iconImageHref: 'https://liori.ru/wp-content/themes/theme-liori/img/pin.svg',
                            // Размеры метки.
                            iconImageSize: [108, 108],
                            // Смещение левого верхнего угла иконки относительно
                            // её "ножки" (точки привязки).
                            iconImageOffset: [-24, -24],
                            // Смещение слоя с содержимым относительно слоя с картинкой.
                            iconContentOffset: [15, 15],
                            // Макет содержимого.
                            iconContentLayout: MyIconContentLayout
                        }),

                      myPlacemarkLubecshi= new ymaps.Placemark([55.675951, 37.913091], {
                        hintContent: 'Собственный значок метки с контентом',
                        balloonContent: 'А эта — новогодняя',
                        // iconContent: 'текст на метке'
                      }, {
                        // Опции.
                        // Необходимо указать данный тип макета.
                        iconLayout: 'default#imageWithContent',
                        // Своё изображение иконки метки.
                        iconImageHref: 'https://liori.ru/wp-content/themes/theme-liori/img/pin.svg',
                        // Размеры метки.
                        iconImageSize: [108, 108],
                        // Смещение левого верхнего угла иконки относительно
                        // её "ножки" (точки привязки).
                        iconImageOffset: [-24, -24],
                        // Смещение слоя с содержимым относительно слоя с картинкой.
                        iconContentOffset: [15, 15],
                        // Макет содержимого.
                        iconContentLayout: MyIconContentLayout
                      }),

												myPlacemarkDybna = new ymaps.Placemark([56.741830, 37.183803], {
													hintContent: 'Собственный значок метки с контентом',
													balloonContent: 'А эта — новогодняя',
													// iconContent: 'текст на метке'
												}, {
													// Опции.
													// Необходимо указать данный тип макета.
													iconLayout: 'default#imageWithContent',
													// Своё изображение иконки метки.
													iconImageHref: 'https://liori.ru/wp-content/themes/theme-liori/img/pin.svg',
													// Размеры метки.
													iconImageSize: [108, 108],
													// Смещение левого верхнего угла иконки относительно
													// её "ножки" (точки привязки).
													iconImageOffset: [-24, -24],
													// Смещение слоя с содержимым относительно слоя с картинкой.
													iconContentOffset: [15, 15],
													// Макет содержимого.
													iconContentLayout: MyIconContentLayout
												});

                    myMap.geoObjects
                        .add(myPlacemark)
                        .add(myPlacemarkWithContent)
                        .add(myPlacemarkDybna)
                        .add(myPlacemarkLubecshi);

                });
            </script>


<!--            <script type="text/javascript" charset="utf-8" async-->
<!--                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1ec1675d7d10967af3bd392a8b1bcc2d8f011c5e662a492737319baab8dfd920&amp;width=100%25&amp;height=580&amp;lang=ru_RU&amp;scroll=false"></script>-->
        </div>
    </div>
</section>

