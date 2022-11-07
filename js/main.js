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
	$('.popup').slideToggle(400,"linear");
	$('.header__menu').toggleClass('header__menu--close')
});



// =======================
// Карточка получить консультацию
// =======================
$('.js-formOpen').click(function(event) {
	event.preventDefault();
	$('.popup-card--form').fadeIn().css('display','flex');
	$('.header').css({
		'paddingRight': window.scroll_bar_width // делаем отступ у body
	});
	$('.popup-card').css({
		'paddingRight': window.scroll_bar_width // делаем отступ у body
	});
	$('.popup').css({
		'paddingRight': window.scroll_bar_width // делаем отступ у body
	});
	$('body').addClass('hidden').css({
		'paddingRight': window.scroll_bar_width // делаем отступ у body
	});
	return false
});

// =======================
// Карточка товара открытие
// =======================
$('.js-cardOpen').click(function() {
	$('.popup-card--single').fadeIn().css('display','flex');
	$('.header').css({
		'paddingRight': window.scroll_bar_width // делаем отступ у body
	});
	$('.popup-card').css({
		'paddingRight': window.scroll_bar_width // делаем отступ у body
	});
	$('body').addClass('hidden').css({
		'paddingRight': window.scroll_bar_width // делаем отступ у body
	});
	return false
});

$('.js-popupcardClose').click(function() {
	$('.popup-card').fadeOut().css({
		'paddingRight': 0 // делаем отступ у body
	});
	$('body').removeClass('hidden').css({
		'paddingRight': 0 // делаем отступ у body
	});
	$('.header').css({
		'paddingRight': 0 // делаем отступ у body
	});
	$('.popup').css({
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
		$('body').removeClass('hidden').css({
			'paddingRight': 0 // делаем отступ у body
		});
		$('.header').css({
			'paddingRight': 0 // делаем отступ у body
		});
		$('.popup').css({
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
			$('body').css('overflow-y','hidden')
			$('.js-mapPopup').fadeIn();
		});

		$('.js-mapClose').click(function() {
			$('body').css('overflow-y','visible')
			$('.js-mapPopup').fadeOut()
		});

		$(document).mouseup(function (e) {
			var popup = $('.map-popup__inner');
			if (e.target!=popup[0]&&popup.has(e.target).length === 0){
				$('body').css('overflow-y','visible')
				$('.js-mapPopup').fadeOut()
			}
		});
	}
});
// ==============================================
// Плавный скролл к якорю c закрытием меню
// ==============================================
$('.scrollto a').on('click', function () {

	let href = $(this).attr('href');

	$('.popup').slideToggle(500);

	function explode(){
		$('html, body').animate({
			scrollTop: $(href).offset().top
		}, {
			duration: 1000,
			easing: "linear"
		});
	}
	setTimeout(explode, 600);


	$('.header__menu').removeClass('header__menu--close')




	return false;
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
$(".mat__item").hover(
	function () {
		$(this).addClass("mat__item--active") },   //при наведении курсора на элемент

		function () {
		$('.mat__item').removeClass("mat__item--active")
	} //при уводе курсора с элемента
);


// ==============================================
// Горизонтальный скролл при наведении
// ==============================================
const scrollContainer = document.querySelector(".js-scrol");

scrollContainer.addEventListener("wheel", (evt) => {
	evt.preventDefault();
	scrollContainer.scrollLeft += evt.deltaY;
});

const scrollContainerMat = document.querySelector(".js-scrolMat");

scrollContainerMat.addEventListener("wheel", (evt) => {
	evt.preventDefault();
	scrollContainerMat.scrollLeft += evt.deltaY;
});

// ==============================================
// Маска на телефон
// ==============================================
// $('.js-maskPhone').mask("+9(999) 999-9999");





































