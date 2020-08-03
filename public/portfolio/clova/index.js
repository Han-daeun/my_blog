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
function subPage__toggle() {
    var $subPage = $('.container > .page-02 > .fp-tableCell > .section-01 >  .select-friends > .cover-select-page');

    if (  $subPage.hasClass('active') ) {
        $subPage.removeClass('active');
    }
    else {
        $subPage.addClass('active');
    }
}

function subPage__init() {
    var $subPageBtn = $('.container > .page-02 > .section-01 > .select-friends > .speaker-img > .speaker-item:first-child > .choice-btn > a');

    $subPageBtn.click(subPage__toggle);
}

function subPage2__toggle() {
    var $subPage2 = $('.container > .page-02 > .fp-tableCell > .section-01 >  .select-friends > .sticker-select-page');

    if (  $subPage2.hasClass('active') ) {
        $subPage2.removeClass('active');
    }
    else {
        $subPage2.addClass('active');
    }
}

function subPage2__init() {
    var $subPageBtn = $('.container > .page-02 > .section-01 > .select-friends > .speaker-img > .speaker-item:nth-child(3) > .choice-btn > a:nth-child(2)');

    $subPageBtn.click(subPage2__toggle);
}

/* 서브페이지 닫기 */
function subPageClose() {
    var $closeBtn = $('.container > .page-02 > .section-01 > .select-friends > .cover-select-page > .cover-select-btn > a:first-child');

    $closeBtn.click(subPage__toggle);
}

function subPage2Close() {
    var $closeBtn = $('.container > .page-02 > .section-01 > .select-friends > .sticker-select-page > .cover-select-btn > a:first-child');

    $closeBtn.click(subPage2__toggle);
}

$(function () {
    FullPage();
    swipeSlide__init();
    subPage__init();
    subPage2__init();
    subPageClose();
    subPage2Close();
});

