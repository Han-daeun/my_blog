console.clear();
function MobileSideBar__toggle() {
    var $btn = $('.btn-toggle-mobile-side-bar');
    var $leftSideMenu = $('.left-side-menu');
    var $mobileSideMenubg = $('.mobile-side-menu-bg');


    if ( $btn.hasClass('active') ) {
        $btn.removeClass('active');
        $leftSideMenu.removeClass('active');
        $mobileSideMenubg.removeClass('active');
    }
    else {
        $btn.addClass('active');
        $leftSideMenu.addClass('active');
        $mobileSideMenubg.addClass('active');

    }
}

function MobileSideBar__init() {
    $('.btn-toggle-mobile-side-bar, .mobile-side-menu-bg').click(MobileSideBar__toggle);
}

$(function() {
    MobileSideBar__init();
});

