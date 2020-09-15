/* 실행되자마자 액션 실행 */
function bgBar__init() {
    var $act = $('.main-page > .main-bg-box');
      
    $act.addClass('active');
}

/* 메인슬라이드 */
function mainSlide__init() {
    new Swiper( '.swiper-container', {

        effect : 'fade', // 페이드 효과 사용
        speed: 5000,
        loop : true, // 무한 반복
        pagination : { // 페이징 설정
            el : '.swiper-pagination',
            clickable : true, // 페이징을 클릭하면 해당 영역으로 이동, 필요시 지정해 줘야 기능 작동
        },
        autoplay: {
            delay: 5000, 
        },
    });
}

$(function () {
    bgBar__init();
    mainSlide__init();
});
