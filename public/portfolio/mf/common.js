/* 사이드메뉴버튼 */
function MobileSideBar__toggle() {
    var $btn = $('.wrap > .top-bar > .side-menu-btn');
    // var $sideMenu = $('.main-page > .main-menu > .menu-box > .side-menu-tab');

    if ( $btn.hasClass('active') ) {
        $btn.removeClass('active');
        // $sideMenu.removeClass('active');
    }
    else {
        $btn.addClass('active');
        // $sideMenu.addClass('active');
    }
}

function MobileSideBar__init() {
    $('.wrap > .top-bar > .side-menu-btn').click(MobileSideBar__toggle);
}

$(function () {
    MobileSideBar__init();
});