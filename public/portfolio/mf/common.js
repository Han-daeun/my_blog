/* 사이드메뉴버튼 */
function MobileSideBar__toggle() {
    var $btn = $('.wrap > .top-bar > .side-menu-btn');
    var $sideMenuBox = $('.side-menu > .side-menu-box');
    var $sideMenuBg = $('.side-menu > .side-menu-bg');

    if ( $btn.hasClass('active') ) {
        $btn.removeClass('active');
        $sideMenuBox.removeClass('active');
        $sideMenuBg.removeClass('active');
    }
    else {
        $btn.addClass('active');
        $sideMenuBox.addClass('active');
        $sideMenuBg.addClass('active');
    }
}

function MobileSideBar__init() {
    $('.wrap > .top-bar > .side-menu-btn').click(MobileSideBar__toggle);
}

$(function () {
    MobileSideBar__init();
});