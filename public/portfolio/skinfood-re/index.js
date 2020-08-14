/* 초이스아이템 슬라이드 */
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


/* 서브메뉴 버튼*/
function subMenuBtn__toggle() {
    var $btn = $('.header > .menu-bar > ul > .sub-menu-btn'); 
    var $subMenu = $('.header > .menu-bar > .sub-menu');

    if ( $btn.hasClass('active') ) {
        $btn.removeClass('active');
        $subMenu.removeClass('active');
    }
    else {
        $btn.addClass('active');
        $subMenu.addClass('active');
    }
}

function subMenuBtn__init() {
    $('.header > .menu-bar > ul > .sub-menu-btn').click(subMenuBtn__toggle);
}




$(function () {
    subMenuBtn__init();
    choceSlide__init();
});