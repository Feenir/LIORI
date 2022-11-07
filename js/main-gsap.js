


// =======================
// gsap карточки
// =======================



// const cards = gsap.utils.toArray(".card_gsap");

// cards.forEach((card, index) => {
//   const tween = gsap.to(card, {
//     scrollTrigger: {
//       trigger: card,
//       // start: () => `top bottom-=500`,
//       start: () => `top center`,
//       end: () => `top bottom`,
//       scrub: true,
//       markers: true,
//       invalidateOnRefresh: true
//     },
//     ease: "none",
//     // scale: () => 1 - (cards.length - index) * 0.025 // может при скроле еще уменьшить их?
//    // yPercent: () => 10 - (cards.length - index) * 2 // может при скроле еще уменьшить их?
//   });

//   ScrollTrigger.create({
//     trigger: card,
//     // start: "top top",
//     start: () => `top top+=180`,
//     // end: 'max',     // end: "+=" + document.querySelector('.cards_gsap').offsetHeight,
//     end: "+=" + document.querySelector('.cards_gsap').offsetHeight,

//     pin: true,
//     pinSpacing: true,
//    // markers: true,
//     id: 'pin',
//     invalidateOnRefresh: true,
//   });
// });





// =======================
// gsap
// =======================


// const t1 = gsap.timeline();
//
// t1.fromTo('.job__slide_4', {x: '-100%', y: '+100%'}, {y: 0})
// t1.fromTo('.job__slide_5', {x: '-100%', y: '-200%'})
// t1.fromTo('.job__slide_6', {x: '-400%', y: '-300%'})
//
// ScrollTrigger.create({
//     amimation: t1,
//     trigger: ".page",
//     start: 'top top',
//     end: 'bottom',
// })
//
//



let t1_main = gsap.timeline({repeat: 0, repeatDelay: 1});

t1_main.to(".hero__title", { opacity: 1, duration: 2 });
t1_main.to(".hero__text", { opacity: 1, duration: 1 });



// =======================
// gsap экран услуг
// =======================

gsap.registerPlugin(ScrollTrigger);

let sections = gsap.utils.toArray(".gsap_services_scroll .gsap_services_panel");
let container = document.querySelector('.gsap_services_wrap')

let scrollTween = gsap.to(sections, {
    // xPercent: -90 * (sections.length - 1),
    xPercent: -300 * (sections.length - 400),
    ease: "none",
    duration: 6,
    scrollTrigger: {
        trigger: ".gsap_services_scroll",
        pin: true,
        scrub: true,
        markers: false, // only during development!
        end: `+=${container.offsetWidth / 10 }`
    }
});


// =====================================================================
// gsap 2 экрана ( почему мы, перечисление ценностей)
// =====================================================================

var controller = new ScrollMagic.Controller();

$(".gs_wrapper").each(function() {
    var tl = new TimelineMax();
    var child = $(this).find(".gs_child");
    tl.to(child, 1, { y: -180, ease: Linear.easeNone });

    var scene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.4,
        duration: "100%"
    })
        .setTween(tl)
        // .addIndicators({ // only during development!
        //     colorTrigger: "black",
        //     colorStart: "black",
        //     colorEnd: "black",
        //     indent: 10
        // })
        .addTo(controller);
});





// =====================================================================
// gsap как устроен продукт
// =====================================================================

ScrollTrigger.create({
    trigger: ".card1",
    // start: "top center-=180",
    start: "top top+=120",
    endTrigger: ".cards",
    end: "bottom bottom-=60%",
    pin: true,
    // markers: false,
    pinSpacing: false
});
ScrollTrigger.create({
    trigger: ".card2",
    // start: "top center-=160",
    start: "top top+=140",
    endTrigger: ".cards",
    end: "bottom bottom-=60%",
    pin: true,
    // markers: true,
    pinSpacing: false
});
ScrollTrigger.create({
    trigger: ".card3",
    // start: "top center-=140",
    start: "top top+=160",
    endTrigger: ".cards",
    end: "bottom bottom-=60%",
    pin: true,
    // markers: true,
    pinSpacing: false
});
ScrollTrigger.create({
    trigger: ".card4",
    // start: "top center-=140",
    start: "top top+=160",
    endTrigger: ".cards",
    end: "bottom bottom-=60%",
    pin: true,
    // markers: true,
    pinSpacing: false
});
ScrollTrigger.create({
    trigger: ".card5",
    // start: "top center-=120",
    start: "top top+=200",
    endTrigger: ".cards",
    end: "bottom bottom-=60%",
    pin: true,
    // markers: true,
    pinSpacing: true
});