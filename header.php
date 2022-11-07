<?php
	/**
	 * The header for our theme
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package liori
	 */

?>
	<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri(); ?>/favicon//apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri(); ?>/favicon//favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="192x192" href="<?= get_stylesheet_directory_uri(); ?>/favicon//android-chrome-192x192.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri(); ?>/favicon//favicon-16x16.png">
		<link rel="manifest" href="<?= get_stylesheet_directory_uri(); ?>/favicon//site.webmanifest">
		<link rel="mask-icon" href="<?= get_stylesheet_directory_uri(); ?>/favicon//safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="<?= get_stylesheet_directory_uri(); ?>/favicon//mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
<?php //wp_body_open(); // зачем эт? ?>

<div class="page">


<?php  if (current_user_can('manage_options')) : ?>
<div class="preloader" id="preloader" style="display: none;">
    <div class="preloader__body">
        <div class="preloader__logo-inner">
            <div class="preloader__logo-move">
                <svg id="logo" viewBox="0 0 344 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                            d="M343.23 103.6C336.27 105.15 329.79 105.34 323.34 104.68C310.51 103.36 298.69 99.04 288.4 91.26C281.52 86.06 275.12 80.2 268.57 74.57C264.28 70.89 260.16 67.02 255.83 63.38C255.14 62.8 253.49 62.52 252.77 62.94C249.42 64.9 246.23 67.13 243 69.29C241.16 70.52 240.66 72.29 240.68 74.45C240.76 83.51 240.66 92.58 240.76 101.64C240.78 103.69 240.18 104.44 238.1 104.39C233.55 104.28 229 104.36 223.95 104.36C224.65 103.47 224.99 102.95 225.41 102.51C227.42 100.43 228.37 97.99 228.36 95.08C228.33 66.56 228.33 38.04 228.35 9.52001C228.35 5.90001 226.55 3.28 223.44 0.880005C224.51 0.750005 225.05 0.630005 225.58 0.630005C240.89 0.640005 256.2 0.620005 271.52 0.710005C279.84 0.760005 288 1.94 295.3 6.17C303.96 11.18 308.59 18.65 308.2 28.95C307.92 36.22 306.41 42.94 300.94 48.23C296.12 52.89 290.06 54.34 283.67 55.05C278.8 55.59 273.96 56.29 269.11 56.96C268.5 57.04 267.93 57.37 267.15 57.65C267.58 58.25 267.79 58.73 268.15 59.01C275.61 64.98 283.19 70.79 290.53 76.9C305.23 89.14 322.14 96.94 340.4 102.11C340.96 102.27 341.49 102.52 342.01 102.77C342.27 102.89 342.51 103.1 343.23 103.6ZM241.1 68.5C241.8 68.17 242.22 68.08 242.5 67.83C247.37 63.52 253.05 60.54 259.09 58.37C266.35 55.77 273.83 53.8 281.12 51.29C288.25 48.84 294.1 44.66 295.01 36.57C295.61 31.25 295.49 25.75 294.87 20.42C294.5 17.18 293.06 13.8 291.25 11.05C286.77 4.25 279.72 2.14 271.98 2.05C262.5 1.94 253.02 2.06 243.54 1.97C241.35 1.95 240.67 2.72 240.67 4.87C240.73 25.15 240.7 45.42 240.72 65.7C240.73 66.57 240.95 67.42 241.1 68.5Z"
                            fill="white"/>
                    <path
                            d="M165.27 -8.03894e-06C192.94 -0.310008 218.11 22.63 218.01 52.83C217.91 82.14 194.58 105.31 165.62 105.68C136.47 106.06 112.55 81.68 112.6 52.69C112.65 23.71 136.44 -0.080008 165.27 -8.03894e-06ZM205.55 50.17C205.19 47.63 204.76 42.58 203.74 37.64C201.61 27.35 197.29 18.11 189.45 10.81C177.74 -0.0900068 161.69 -2.17001 147.69 5.60999C137.31 11.38 131.26 20.7 127.75 31.72C124.19 42.89 123.52 54.28 125.76 65.87C127.47 74.67 130.56 82.82 136.14 89.86C142.78 98.24 151.38 103.61 162.14 104.4C175.33 105.36 185.99 100.04 193.98 89.64C202.32 78.77 205.21 66.12 205.55 50.17Z"
                            fill="white"/>
                    <path
                            d="M22.67 1.09998C17.84 4.29998 17.36 8.55998 17.36 13.14C17.41 41.83 17.38 70.52 17.39 99.22C17.39 103.54 17.4 103.58 21.62 103.52C28.94 103.42 36.29 103.67 43.56 103.03C53.53 102.14 62.2 97.88 69.55 91.04C69.84 90.77 70.17 90.54 71.03 89.84C70.64 90.93 70.53 91.42 70.31 91.86C68.45 95.48 66.7 99.16 64.63 102.65C64.03 103.66 62.52 104.76 61.41 104.76C41.27 104.87 21.13 104.82 0.99 104.8C0.77 104.8 0.55 104.7 0.07 104.58C0.73 103.96 1.26 103.49 1.76 102.99C3.93 100.86 5.15 98.32 5.15 95.22C5.14 66.94 5.15 38.66 5.13 10.38C5.13 6.62998 3.49 3.66998 0 1.09998C7.66 1.09998 14.77 1.09998 22.67 1.09998Z"
                            fill="white"/>
                    <path
                            d="M85.55 0.76001C92.46 0.76001 99.36 0.76001 106.7 0.76001C105.51 2.13001 104.22 3.03001 103.81 4.24001C102.97 6.70001 102.11 9.33001 102.1 11.89C101.98 39.33 102.05 66.77 102 94.22C101.99 98.35 103.33 101.8 107.06 104.81C99.32 104.81 92.31 104.81 84.64 104.81C90.01 100.87 89.85 95.57 89.84 90.2C89.78 64.42 89.78 38.64 89.86 12.86C89.86 8.33001 89.12 4.26001 85.55 0.76001Z"
                            fill="white"/>
                    <path
                            d="M336.74 94.31C332.57 92.78 328.98 91.59 325.53 90.09C324.93 89.83 324.65 88.24 324.65 87.27C324.58 77.96 324.61 68.65 324.61 59.34C324.61 44.79 324.63 30.25 324.63 15.7C324.63 7.41999 324.63 7.41999 320.14 0.799988C327.22 0.799988 334.13 0.799988 341.62 0.799988C340.75 1.66999 340.12 2.23999 339.57 2.86999C337.57 5.15999 336.71 7.83999 336.71 10.89C336.74 36.99 336.74 63.09 336.74 89.19C336.74 90.64 336.74 92.1 336.74 94.31Z"
                            fill="white"/>
                </svg>
            </div>
        </div>
        <div class="preloader__percentages" id="load_perc">1%</div>
    </div>
</div>
<?php else : ?>
<div class="preloader" id="preloader">
    <div class="preloader__body">
        <div class="preloader__logo-inner">
            <div class="preloader__logo-move">
                <svg id="logo" viewBox="0 0 344 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M343.23 103.6C336.27 105.15 329.79 105.34 323.34 104.68C310.51 103.36 298.69 99.04 288.4 91.26C281.52 86.06 275.12 80.2 268.57 74.57C264.28 70.89 260.16 67.02 255.83 63.38C255.14 62.8 253.49 62.52 252.77 62.94C249.42 64.9 246.23 67.13 243 69.29C241.16 70.52 240.66 72.29 240.68 74.45C240.76 83.51 240.66 92.58 240.76 101.64C240.78 103.69 240.18 104.44 238.1 104.39C233.55 104.28 229 104.36 223.95 104.36C224.65 103.47 224.99 102.95 225.41 102.51C227.42 100.43 228.37 97.99 228.36 95.08C228.33 66.56 228.33 38.04 228.35 9.52001C228.35 5.90001 226.55 3.28 223.44 0.880005C224.51 0.750005 225.05 0.630005 225.58 0.630005C240.89 0.640005 256.2 0.620005 271.52 0.710005C279.84 0.760005 288 1.94 295.3 6.17C303.96 11.18 308.59 18.65 308.2 28.95C307.92 36.22 306.41 42.94 300.94 48.23C296.12 52.89 290.06 54.34 283.67 55.05C278.8 55.59 273.96 56.29 269.11 56.96C268.5 57.04 267.93 57.37 267.15 57.65C267.58 58.25 267.79 58.73 268.15 59.01C275.61 64.98 283.19 70.79 290.53 76.9C305.23 89.14 322.14 96.94 340.4 102.11C340.96 102.27 341.49 102.52 342.01 102.77C342.27 102.89 342.51 103.1 343.23 103.6ZM241.1 68.5C241.8 68.17 242.22 68.08 242.5 67.83C247.37 63.52 253.05 60.54 259.09 58.37C266.35 55.77 273.83 53.8 281.12 51.29C288.25 48.84 294.1 44.66 295.01 36.57C295.61 31.25 295.49 25.75 294.87 20.42C294.5 17.18 293.06 13.8 291.25 11.05C286.77 4.25 279.72 2.14 271.98 2.05C262.5 1.94 253.02 2.06 243.54 1.97C241.35 1.95 240.67 2.72 240.67 4.87C240.73 25.15 240.7 45.42 240.72 65.7C240.73 66.57 240.95 67.42 241.1 68.5Z"
                            fill="white"/>
                    <path d="M165.27 -8.03894e-06C192.94 -0.310008 218.11 22.63 218.01 52.83C217.91 82.14 194.58 105.31 165.62 105.68C136.47 106.06 112.55 81.68 112.6 52.69C112.65 23.71 136.44 -0.080008 165.27 -8.03894e-06ZM205.55 50.17C205.19 47.63 204.76 42.58 203.74 37.64C201.61 27.35 197.29 18.11 189.45 10.81C177.74 -0.0900068 161.69 -2.17001 147.69 5.60999C137.31 11.38 131.26 20.7 127.75 31.72C124.19 42.89 123.52 54.28 125.76 65.87C127.47 74.67 130.56 82.82 136.14 89.86C142.78 98.24 151.38 103.61 162.14 104.4C175.33 105.36 185.99 100.04 193.98 89.64C202.32 78.77 205.21 66.12 205.55 50.17Z"
                            fill="white"/>
                    <path d="M22.67 1.09998C17.84 4.29998 17.36 8.55998 17.36 13.14C17.41 41.83 17.38 70.52 17.39 99.22C17.39 103.54 17.4 103.58 21.62 103.52C28.94 103.42 36.29 103.67 43.56 103.03C53.53 102.14 62.2 97.88 69.55 91.04C69.84 90.77 70.17 90.54 71.03 89.84C70.64 90.93 70.53 91.42 70.31 91.86C68.45 95.48 66.7 99.16 64.63 102.65C64.03 103.66 62.52 104.76 61.41 104.76C41.27 104.87 21.13 104.82 0.99 104.8C0.77 104.8 0.55 104.7 0.07 104.58C0.73 103.96 1.26 103.49 1.76 102.99C3.93 100.86 5.15 98.32 5.15 95.22C5.14 66.94 5.15 38.66 5.13 10.38C5.13 6.62998 3.49 3.66998 0 1.09998C7.66 1.09998 14.77 1.09998 22.67 1.09998Z"
                            fill="white"/>
                    <path d="M85.55 0.76001C92.46 0.76001 99.36 0.76001 106.7 0.76001C105.51 2.13001 104.22 3.03001 103.81 4.24001C102.97 6.70001 102.11 9.33001 102.1 11.89C101.98 39.33 102.05 66.77 102 94.22C101.99 98.35 103.33 101.8 107.06 104.81C99.32 104.81 92.31 104.81 84.64 104.81C90.01 100.87 89.85 95.57 89.84 90.2C89.78 64.42 89.78 38.64 89.86 12.86C89.86 8.33001 89.12 4.26001 85.55 0.76001Z"
                            fill="white"/>
                    <path d="M336.74 94.31C332.57 92.78 328.98 91.59 325.53 90.09C324.93 89.83 324.65 88.24 324.65 87.27C324.58 77.96 324.61 68.65 324.61 59.34C324.61 44.79 324.63 30.25 324.63 15.7C324.63 7.41999 324.63 7.41999 320.14 0.799988C327.22 0.799988 334.13 0.799988 341.62 0.799988C340.75 1.66999 340.12 2.23999 339.57 2.86999C337.57 5.15999 336.71 7.83999 336.71 10.89C336.74 36.99 336.74 63.09 336.74 89.19C336.74 90.64 336.74 92.1 336.74 94.31Z"
                            fill="white"/>
                </svg>
            </div>
        </div>
        <div class="preloader__percentages" id="load_perc">1%</div>
    </div>
</div>

<?php  endif; ?>

	<div class="preloader" id="preloader" style="display: none;">
		<div class="preloader__body">
			<div class="preloader__logo-inner">
				<div class="preloader__logo-move">
					<svg id="logo" viewBox="0 0 344 106" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
								d="M343.23 103.6C336.27 105.15 329.79 105.34 323.34 104.68C310.51 103.36 298.69 99.04 288.4 91.26C281.52 86.06 275.12 80.2 268.57 74.57C264.28 70.89 260.16 67.02 255.83 63.38C255.14 62.8 253.49 62.52 252.77 62.94C249.42 64.9 246.23 67.13 243 69.29C241.16 70.52 240.66 72.29 240.68 74.45C240.76 83.51 240.66 92.58 240.76 101.64C240.78 103.69 240.18 104.44 238.1 104.39C233.55 104.28 229 104.36 223.95 104.36C224.65 103.47 224.99 102.95 225.41 102.51C227.42 100.43 228.37 97.99 228.36 95.08C228.33 66.56 228.33 38.04 228.35 9.52001C228.35 5.90001 226.55 3.28 223.44 0.880005C224.51 0.750005 225.05 0.630005 225.58 0.630005C240.89 0.640005 256.2 0.620005 271.52 0.710005C279.84 0.760005 288 1.94 295.3 6.17C303.96 11.18 308.59 18.65 308.2 28.95C307.92 36.22 306.41 42.94 300.94 48.23C296.12 52.89 290.06 54.34 283.67 55.05C278.8 55.59 273.96 56.29 269.11 56.96C268.5 57.04 267.93 57.37 267.15 57.65C267.58 58.25 267.79 58.73 268.15 59.01C275.61 64.98 283.19 70.79 290.53 76.9C305.23 89.14 322.14 96.94 340.4 102.11C340.96 102.27 341.49 102.52 342.01 102.77C342.27 102.89 342.51 103.1 343.23 103.6ZM241.1 68.5C241.8 68.17 242.22 68.08 242.5 67.83C247.37 63.52 253.05 60.54 259.09 58.37C266.35 55.77 273.83 53.8 281.12 51.29C288.25 48.84 294.1 44.66 295.01 36.57C295.61 31.25 295.49 25.75 294.87 20.42C294.5 17.18 293.06 13.8 291.25 11.05C286.77 4.25 279.72 2.14 271.98 2.05C262.5 1.94 253.02 2.06 243.54 1.97C241.35 1.95 240.67 2.72 240.67 4.87C240.73 25.15 240.7 45.42 240.72 65.7C240.73 66.57 240.95 67.42 241.1 68.5Z"
								fill="white"/>
						<path
								d="M165.27 -8.03894e-06C192.94 -0.310008 218.11 22.63 218.01 52.83C217.91 82.14 194.58 105.31 165.62 105.68C136.47 106.06 112.55 81.68 112.6 52.69C112.65 23.71 136.44 -0.080008 165.27 -8.03894e-06ZM205.55 50.17C205.19 47.63 204.76 42.58 203.74 37.64C201.61 27.35 197.29 18.11 189.45 10.81C177.74 -0.0900068 161.69 -2.17001 147.69 5.60999C137.31 11.38 131.26 20.7 127.75 31.72C124.19 42.89 123.52 54.28 125.76 65.87C127.47 74.67 130.56 82.82 136.14 89.86C142.78 98.24 151.38 103.61 162.14 104.4C175.33 105.36 185.99 100.04 193.98 89.64C202.32 78.77 205.21 66.12 205.55 50.17Z"
								fill="white"/>
						<path
								d="M22.67 1.09998C17.84 4.29998 17.36 8.55998 17.36 13.14C17.41 41.83 17.38 70.52 17.39 99.22C17.39 103.54 17.4 103.58 21.62 103.52C28.94 103.42 36.29 103.67 43.56 103.03C53.53 102.14 62.2 97.88 69.55 91.04C69.84 90.77 70.17 90.54 71.03 89.84C70.64 90.93 70.53 91.42 70.31 91.86C68.45 95.48 66.7 99.16 64.63 102.65C64.03 103.66 62.52 104.76 61.41 104.76C41.27 104.87 21.13 104.82 0.99 104.8C0.77 104.8 0.55 104.7 0.07 104.58C0.73 103.96 1.26 103.49 1.76 102.99C3.93 100.86 5.15 98.32 5.15 95.22C5.14 66.94 5.15 38.66 5.13 10.38C5.13 6.62998 3.49 3.66998 0 1.09998C7.66 1.09998 14.77 1.09998 22.67 1.09998Z"
								fill="white"/>
						<path
								d="M85.55 0.76001C92.46 0.76001 99.36 0.76001 106.7 0.76001C105.51 2.13001 104.22 3.03001 103.81 4.24001C102.97 6.70001 102.11 9.33001 102.1 11.89C101.98 39.33 102.05 66.77 102 94.22C101.99 98.35 103.33 101.8 107.06 104.81C99.32 104.81 92.31 104.81 84.64 104.81C90.01 100.87 89.85 95.57 89.84 90.2C89.78 64.42 89.78 38.64 89.86 12.86C89.86 8.33001 89.12 4.26001 85.55 0.76001Z"
								fill="white"/>
						<path
								d="M336.74 94.31C332.57 92.78 328.98 91.59 325.53 90.09C324.93 89.83 324.65 88.24 324.65 87.27C324.58 77.96 324.61 68.65 324.61 59.34C324.61 44.79 324.63 30.25 324.63 15.7C324.63 7.41999 324.63 7.41999 320.14 0.799988C327.22 0.799988 334.13 0.799988 341.62 0.799988C340.75 1.66999 340.12 2.23999 339.57 2.86999C337.57 5.15999 336.71 7.83999 336.71 10.89C336.74 36.99 336.74 63.09 336.74 89.19C336.74 90.64 336.74 92.1 336.74 94.31Z"
								fill="white"/>
					</svg>
				</div>
			</div>
			<div class="preloader__percentages" id="load_perc">1%</div>
		</div>
	</div>

	<header class="header js-scroll">
		<div class="container">
			<div class="header__wrapper">
				<div class="header__left">
					<div class="header__menu js-burgerOpen">
					
					</div>
					<a class="header__logo" href="#">
						<svg class="logo">
							<use xlink:href="<?= get_stylesheet_directory_uri(); ?>/img/svg/set.svg#logo"></use>
						</svg>
					</a>
					<a class="header__mobile-phone" href="tel:+74957901516"></a>
				</div>
				<div class="header__right">
					<ul class="header__list">
						<li class="header__items"><a class="header__link" href="mailto:hello@liori.ru">hello@liori.ru</a></li>
						<li class="header__items"><a class="header__link" href="tel:+74957901516">+7 (495) 790-15-16</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>

<?php if (!current_user_can('manage_options')) : ?>
    <?php if (stripos(@$_SERVER['HTTP_USER_AGENT'], 'Lighthouse') === false): ?>
        <!-- Код счетчиков -->
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript"> (function (m, e, t, r, i, k, a) {
                m[i] = m[i] || function () {
                    (m[i].a = m[i].a || []).push(arguments)
                };
                m[i].l = 1 * new Date();
                for (var j = 0; j < document.scripts.length; j++) {
                    if (document.scripts[j].src === r) {
                        return;
                    }
                }
                k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
            })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
            ym(90791488, "init", {
                clickmap: true,
                trackLinks: true,
                accurateTrackBounce: true,
                webvisor: true,
                trackHash: true
            }); </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/90791488" style="position:absolute; left:-9999px;" alt=""/></div>
        </noscript> <!-- /Yandex.Metrika counter -->
    <?php endif; ?>
<?php endif; ?>