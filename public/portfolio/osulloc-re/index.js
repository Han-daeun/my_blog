/* 실행되자마자 액션 실행 */
function bgBar__init() {
    var $act = $('.main-page > .main-bg-box');
      
    $act.addClass('active');
}

/* 메인슬라이드 */
function mainSlide__init() {
    new Swiper( '.main-bg-slide > .swiper-container', {

        effect : 'fade', // 페이드 효과 사용
        speed: 4000,
        loop : true, // 무한 반복
        pagination : { // 페이징 설정
            el : '.swiper-pagination',
            clickable : true, // 페이징을 클릭하면 해당 영역으로 이동, 필요시 지정해 줘야 기능 작동
        },
        autoplay: {
            delay: 6000, 
        },
    });
}

/* MD슬라이드 */
function mdSlide__init() {
    new Swiper( '.md-slide > .swiper-container', {
        slidesPerView: "auto",
        spaceBetween: 35,
        cssWidthAndHeight: true,
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: false,
          },
    });
}

/* weekly슬라이드 */
function weeklySlide__init() {
    new Swiper( '.weekly-slide > .swiper-container', {
        slidesPerView: "auto",
        spaceBetween: 35,
        cssWidthAndHeight: true,
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: false,
          },
    });
}

/* shop슬라이드 */
function shopSlide__init() {
    new Swiper( '.shop-slide > .swiper-container', {

    });
}

/* sns슬라이드 */
function snsSlide__init() {
    new Swiper( '.main-bg-slide > .swiper-container', {

    });
}

$(function () {
    bgBar__init();
    mainSlide__init();
    mdSlide__init();
    weeklySlide__init();
    shopSlide__init();
    snsSlide__init();
});