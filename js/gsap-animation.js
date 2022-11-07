// =======================
// Горизонтальный скролл
// =======================
/*
TweenLite.defaultEase = Linear.easeNone;
var titles = document.querySelectorAll(".sectionTitle");
var controller = new ScrollMagic.Controller();
var tl = new TimelineMax();

// create timeline
// this could also be created in a loop
tl.to("#js-slideContainer", 1, {xPercent: -100}, "label1");
tl.from(titles[1], 0.5, {opacity:0}, "label1+=0.5");
tl.to("#js-slideContainer", 1, {xPercent: -200}, "label2");
tl.from(titles[2], 0.5, {opacity:0}, "label2+=0.5");
tl.to("#js-slideContainer", 1, {xPercent: -300}, "label3");
tl.from(titles[3], 0.5, {opacity:0}, "label3+=0.5");
tl.to("#js-slideContainer", 1, {xPercent: -400}, "label4");
tl.from(titles[4], 0.5, {opacity:0}, "label4+=0.5");


new ScrollMagic.Scene({
	triggerElement: "#js-wrapper",
	triggerHook: "onLeave",
	duration: "300%"
})
	.setPin("#js-wrapper")
	.setTween(tl)
	// .addIndicators({
	// 	colorTrigger: "white",
	// 	colorStart: "white",
	// 	colorEnd: "white",
	// })
	.addTo(controller);
//

*/
// // =======================
// // Вертикальный скролл
// // =======================
// //
/*
var controller = new ScrollMagic.Controller();
var tl = new TimelineMax();
tl.fromTo(
	"section.panel.turqoise",
	1,
	{ yPercent: 100 },
	{ yPercent: 0, ease: Linear.easeNone },
	"+=1"
);
tl.fromTo(
	"section.panel.bordeaux",
	1,
	{ yPercent: 100 },
	{ yPercent: 0, ease: Linear.easeNone },
	"+=1"
);

new ScrollMagic.Scene({
	triggerElement: "#pinMaster",
	triggerHook: "onLeave",
	duration: "100%"
})
	.setPin("#pinMaster")
	.setTween(tl)
	.addIndicators({
		colorTrigger: "white",
		colorStart: "white",
		colorEnd: "white",
		indent: 40
	})
	.addTo(controller);
*/


// ==============================================
// Этапы работ - слайды появления
// ==============================================



// ==============================================
// Подход к работе - карточки
// ==============================================