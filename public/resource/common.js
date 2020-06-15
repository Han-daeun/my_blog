console.clear();
function MobileSideBar__toggle() {
    var $btn = $('.btn-toggle-mobile-side-bar');
    var $leftSideMenu = $('.left-side-menu');
    var $mobileSideMenubg = $('.mobile-side-menu-bg');
    var $body = $('body');


    if ( $btn.hasClass('active') ) {
        $btn.removeClass('active');
        $leftSideMenu.removeClass('active');
        $mobileSideMenubg.removeClass('active');
        $body.removeClass('active');
    }
    else {
        $btn.addClass('active');
        $leftSideMenu.addClass('active');
        $body.addClass('active');

    }
}

function MobileSideBar__init() {
    $('.btn-toggle-mobile-side-bar, .mobile-side-menu-bg').click(MobileSideBar__toggle);
}

$(function() {
    MobileSideBar__init();
});

