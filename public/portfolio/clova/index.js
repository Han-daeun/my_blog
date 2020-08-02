/* 풀페이지 */
function FullPage() {

$(document).ready(function () {
    $('#fullpage').fullpage({
        navigation: true,
        navigationPosition: 'left',
        anchors: ['anchor1', 'anchor2', 'anchor3', 'anchor4', 'anchor5']
    });
});

}

/* 스와이프 슬라이드 */

function swipeSlide__init() {
    new Swiper( '.swiper-container', {

        effect : 'fade', // 페이드 효과 사용
        speed: 3000,
        loop : true, // 무한 반복
        pagination : { // 페이징 설정
            el : '.swiper-pagination',
            clickable : true, // 페이징을 클릭하면 해당 영역으로 이동, 필요시 지정해 줘야 기능 작동
        },
        autoplay: {
            delay: 4000, 
        },
    });
}

/* 서브페이지 연결 */



$(function () {
    FullPage();
    swipeSlide__init();
});