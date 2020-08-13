function choceSlide__init() {
    $('.slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        //autoplay: true,
        autoplaySpeed: 3000
      });
}

$(function () {
    choceSlide__init();
});