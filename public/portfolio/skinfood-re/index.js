function choceSlide__init() {
    $('.slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        //autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        prevArrow: $('#aro1_prev'),
		nextArrow: $('#aro1_next')
      });
}

$(function () {
    choceSlide__init();
});