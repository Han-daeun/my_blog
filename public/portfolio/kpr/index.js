/* 풀페이지 */
function FullPage() {

    $(document).ready(function () {
        $('#fullpage').fullpage({
            autoScrolling: false,
            navigation: true,
            scrollBar: true,
            navigationPosition: 'right',
            anchors: ['anchor1', 'anchor2', 'anchor3', 'anchor4', 'anchor5']
        });
    });

}

/* 상단바 스크롤 */
function topBar__init() {
    var $header = $('.header');

    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop();

        if (scrollTop > 850) {
            $header.addClass('active');
        } else {
            $header.removeClass('active');
        }
    });
}

/* 사이드메뉴 토글버튼 */
function sideMenu__btn() {
    var $sideMenuBtn = $('.header > .header-right > .toggle-btn');

    if ( $sideMenuBtn.hasClass('active') ) {
        $sideMenuBtn.removeClass('active');
    }
    else {
        $sideMenuBtn.addClass('active');
    }
}

function menuBtn__toggle() {
    $('.header > .header-right > .toggle-btn').click(sideMenu__btn);
}

/* 4페이지 슬라이드 */
function pageFourSlide__init() {
    var swiper = new Swiper(".swiper-container", {
        slidesPerView: "auto",
        centeredSlides: false,
        loop: true,
        cssWidthAndHeight: true,
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

$(function () {
    FullPage();
    topBar__init();
    menuBtn__toggle();
    pageFourSlide__init();
});