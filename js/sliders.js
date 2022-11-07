
// =======================
// Слайдер фото сотрудников
// =======================
const staff = new Swiper(".jsStaff", {
	slidesPerView: 3.2,
	spaceBetween: 24,
	pagination: {
		el: ".swiper-pagination",
		type: "fraction",
	},
	// navigation: {
	// 	nextEl: ".js-jsStaffNext",
	// 	prevEl: ".js-jsStaffrev",
	// },
	renderFraction: function (currentClass, totalClass) {
		return '<span class="' + currentClass + '"></span>' +
			'' +
			'<span class="' + totalClass + '"></span>';
	},
	breakpoints: {
		320: {
			slidesPerView: 1.1,
			slidesPerGroup: 1,
            spaceBetween: 4,
			scrollbar: {
				el: ".staff__scrollbar",
				hide: false,
			},

		},
		560: {
			slidesPerView: 2,
			slidesPerGroup: 2,
			scrollbar: {
				el: ".staff__scrollbar",
				hide: false,
			},
		},
		991: {
			slidesPerView: 3,
			slidesPerGroup: 3,
			scrollbar: false,
            spaceBetween: 24,
		},
	},
	
});
// =======================
// Слайдер на главном экран
// =======================
const hero = new Swiper(".heroJS", {
	slidesPerView: 1,
	effect: "fade",
	autoplay: {
		delay: 3000,
	},
	loop: true,
	speed: 800,
});

// =======================
// Слайдер выполненные проекты клиентов
// =======================
const clientsSwiper = new Swiper(".js-client", {
	slidesPerView: 1,
    navigation: {
        nextEl: ".js-clientPrev",
        prevEl: ".js-clientNext",
    },
});


// =======================
// Слайдер карточка товара одиночный слайд
// =======================
const cardSingle = new Swiper(".js-cardSingle", {
	slidesPerView: 1,
});

// =======================
// Слайдер карточка товара миниатюра
// =======================
const cardSinglethumb = new Swiper(".js-cardSingle-thumb", {
	slidesPerView: 3,
	navigation: {
		nextEl: ".js-cardSingle-thumbNext",
		prevEl: ".js-cardSingle-thumbprev",
	},
});


// =======================
// Слайдер на главном экран
// =======================
const approachJSslider = new Swiper(".approachJSslider", {
	slidesPerView: 1,
	speed: 800,
	effect: "fade",
	navigation: {
		nextEl: ".approachJSslider-prev",
		prevEl: ".approachJSslider-next",
	},
});


// =======================
// Слайдер на главном экран
// =======================
// const jsLogo = new Swiper(".jsLogo", {
// 	slidesPerView: 1,
// 	autoplay: {
// 		delay: 1000,
// 	},
// 	loop: true,
// 	spaceBetween: 40,
// 	speed: 3000,
// });






















