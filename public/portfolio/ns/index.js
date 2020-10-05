function mainSlide__init() {
    var swiper = new Swiper(".swiper-container", {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
          },
    });
}

$(function () {
    mainSlide__init();
});