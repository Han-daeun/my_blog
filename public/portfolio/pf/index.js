
function pfSlide__init() {
    var swiper = new Swiper(".swiper-container", {
        slidesPerView: 4,
        spaceBetween: 70,
        loop: true,
        /*
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
        */
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        }
    });
}  

$(function() {
    pfSlide__init();
    gsap.to(".parallax-bg", {
        scrollTrigger: {
            scrub: true
        }, 
        y: (i, target) => -ScrollTrigger.maxScroll(window) * target.dataset.speed,
        ease: "none"
        });
});

/*

  */