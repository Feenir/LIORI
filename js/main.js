// ===============================================
// 			Получить ширину скролбара
// ===============================================

sbWidth = {
	d: '<div>',
	c: 'b-s-b-m',
	$b: $('body'),
	init: function () {
		window.scroll_bar_width = 0;
		var
			_t = this;
		_t.$d1 = $(_t.d).addClass(_t.c).appendTo(_t.$b);
		_t.$d2 = $(_t.d).addClass(_t.c + '-i').appendTo(_t.$d1);
		setTimeout(function () {
			_t.getW();
		}, 0);
	},
	getW: function () {
		window.scroll_bar_width = this.$d1.width() - this.$d2.width();
		this.$d1.remove();
		console.log(window.scroll_bar_width);
	}
};
sbWidth.init();

// =======================
// Хэдер липкий
// =======================

$(window).scroll(function(){
	if($(this).scrollTop()>1){
		$('.js-scroll').addClass('header__scroll');

	}
	else if ($(this).scrollTop()<1){
		$('.js-scroll').removeClass('header__scroll');

	}
});

// =======================
// Хэдер бургер открытие
// =======================
$('.js-burgerOpen').click(function() {

	const elPadding = $('.popup, .header, body');
	const menuHeader = $('.header__menu');

	$('.popup').slideToggle(400,"linear");
	menuHeader.toggleClass('header__menu--close');

	$('html').toggleClass('hidden');

	if (menuHeader.hasClass('header__menu--close')) {
		elPadding.css({
			'paddingRight': window.scroll_bar_width
		});
		$('.header').css('background','#101118')
	}

	else	{
		elPadding.css({
			'paddingRight': 0
		});
		$('.header').css('background',' inherit')

	}



	return false

});

// =======================
// Карточка получить консультацию
// =======================
$('.js-popupForm').click(function(event) {
	event.preventDefault();
	$('.popup-card--form').fadeIn().css('display','flex');
	return false
});

// =======================
// Карточка получить консультацию
// =======================
$('.js-formOpen').click(function(event) {
	event.preventDefault();
	$('.popup-card--form').fadeIn().css('display','flex');
	$('.header, .popup-card').css({
		'paddingRight': window.scroll_bar_width // делаем отступ у body
	});
	$('html').css({
		'paddingRight': window.scroll_bar_width,
		'overflow-y': 'hidden'
	});
	return false
});

// =======================
// Карточка товара открытие
// =======================
$('.js-cardOpen').click(function() {
	$('.popup-card--single').fadeIn().css('display','flex');
	$('.header, .popup-card').css({
		'paddingRight': window.scroll_bar_width // делаем отступ у body
	});

	$('html').css({
		'paddingRight': window.scroll_bar_width,
		'overflow-y': 'hidden'
	});
	return false
});

$('.js-popupcardClose').click(function() {
	$('.popup-card').fadeOut().css({
		'paddingRight': 0 // делаем отступ у body
	});
	$('html').css({
		'paddingRight': 0, // делаем отступ у body
		'overflow-y': 'visible'
	});
	$('.header, .popup-card').css({
		'paddingRight': 0 // делаем отступ у body
	});


	return false
});

$(document).mouseup(function (e) {
	var popup = $('.popup-card__body');
	if (e.target!=popup[0]&&popup.has(e.target).length === 0){
		$('.popup-card').fadeOut().css({
			'paddingRight': 0 // делаем отступ у body
		});
		$('html').css({
			'paddingRight': 0, // делаем отступ у body
			'overflow-y': 'visible'
		});
		$('.header, .popup-card').css({
			'paddingRight': 0 // делаем отступ у body
		});

		return false
	}
});

// =======================
// Попап меню hover
// =======================

	$('.popup__items').hover(
		function () {
			$(this).siblings().addClass('popup__items--hover');  // Добавляем класс
		},
		function () {
			$(this).siblings().removeClass('popup__items--hover');  // Убираем класс
		}
	);


// =======================
// Сертификаты табы
// =======================

$('.js-tab-trigger').click(function() {
	var id = $(this).attr('data-tab'),
		content = $('.js-tab-content[data-tab="'+ id +'"]');

	$('.js-tab-trigger.active').removeClass('active');
	$(this).addClass('active');

	$('.js-tab-content.active').removeClass('active');
	content.addClass('active');
});




$('.questions__often').click(function() {
	$(this).children('.jsAnswer').slideToggle();
	$(this).children('.jsProblem').toggleClass('jsProblem--close')
});


// =======================
// Карта переключение
// =======================

jQuery(($) => {
	if ($(window).width() >= 561) {
		$('.js-map-trigger').click(function () {
			var id = $(this).attr('data-tab'),
				content = $('.js-map-content[data-tab="' + id + '"]');

			$('.js-map-trigger.active-map').removeClass('active-map'); // 1
			$(this).addClass('active-map'); // 2

			$('.js-map-content.active').removeClass('active'); // 3
			content.addClass('active'); // 4
		});
	}

	if ($(window).width() <= 560) {
		$('.js-map-trigger.active-map').removeClass('active-map');
		$('.js-map-content.active').removeClass('active');

		$('.js-mapMobile').click(function() {
			$('body').addClass('hidden')
			$('.js-mapPopup').fadeIn();
		});

		$('.js-mapClose').click(function() {
			$('body').removeClass('hidden')
			$('.js-mapPopup').fadeOut()
		});

		$(document).mouseup(function (e) {
			var popup = $('.map-popup__inner');
			if (e.target!=popup[0]&&popup.has(e.target).length === 0){
				$('body').removeClass('hidden')
				$('.js-mapPopup').fadeOut()
			}
		});
	}
});
// ==============================================
// Плавный скролл к якорю c закрытием меню
// ==============================================
$('.scrollto a').on('click', function () {

	const headerHeight = $('.header').outerHeight(true)
	let href = $(this).attr('href');

	$('.popup').slideToggle(500);

	function explode(){
		$('html, body').animate({
			scrollTop: $(href).offset().top - headerHeight -50 + 'px'
		}, {
			duration: 1000,
			easing: "linear"
		});
	}
	setTimeout(explode, 600);


	$('.header__menu').removeClass('header__menu--close')
	$('html').removeClass('hidden');
	$('.header').css('background',' inherit')

	return false;
});


$(".scrolltoFooter a").on("click", function(e){
	const headerHeight = $('.header').outerHeight(true)
	e.preventDefault();
	var anchor = $(this).attr('href');
	$('html, body').stop().animate({
		scrollTop: $(anchor).offset().top - headerHeight -50 + 'px'
	}, 500);
});

// ==============================================
// Fancybox
// ==============================================
	$("a.fancybox").fancybox({
		'scrolling' : 'auto'
	});

// ==============================================
// Наведение на материалы
// ==============================================

/*
$(".mat__item").hover(
	function () {
		$(this).addClass("mat__item--active") },   //при наведении курсора на элемент

		function () {
		$('.mat__item').removeClass("mat__item--active")
	} //при уводе курсора с элемента
); */


// ==============================================
// Горизонтальный скролл при наведении
// ==============================================
const scrollContainer = document.querySelector(".js-scrol");

scrollContainer.addEventListener("wheel", (evt) => {
	evt.preventDefault();
	scrollContainer.scrollLeft += evt.deltaY;
});

const scroll = document.querySelector(".js-mat");

scroll.addEventListener("wheel", (evt) => {
	evt.preventDefault();
	scroll.scrollLeft += evt.deltaY;
});



// ==============================================
// Маска на телефон
// ==============================================
$('.js-maskPhone').mask("+9(999) 999-9999");





































