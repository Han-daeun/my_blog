/* 모바일 사이드 바 */
function MobileSideBar__toggle() {
    var $btn = $('.top-bar > .side-toggle-btn > span');

    if ( $btn.hasClass('active') ) {
        $btn.removeClass('active');
    }
    else {
        $btn.addClass('active');
    }

}

function MobileSideBar__init() {
    $('.side-toggle-btn').click(MobileSideBar__toggle);
}

/* 서치 버튼 */
function searchBtn__toggle() {
    var $searchBtn = $('.search-box');
    var $body = $('body');

    if ( $searchBtn.hasClass('active') ) {
        $searchBtn.removeClass('active');
        $body.removeClass('active');
    }
    else {
        $searchBtn.addClass('active');
        $body.addClass('active');
    }

}

function searchBox__close() {
    var $searchBox = $('.search-box'); 
    $searchBox.removeClass('active');
}

function searchBox__init() {
    $('.container').click(searchBox__close);
}



function searchBtn__init() {
    $('.search-btn').click(searchBtn__toggle);
}




$(function() {
    MobileSideBar__init();
    searchBtn__init();
    searchBox__init();
});

/* 슬라이더 */
