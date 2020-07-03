console.clear();
/* 모바일 사이드바 */
function MobileSideBar__toggle() {
    var $btn = $('.btn-toggle-mobile-side-bar');
    var $leftSideMenu = $('.left-side-menu');
    var $mobileSideMenubg = $('.mobile-side-menu-bg');
    var $html = $('html');


    if ( $btn.hasClass('active') ) {
        $btn.removeClass('active');
        $leftSideMenu.removeClass('active');
        $mobileSideMenubg.removeClass('active');
        $html.removeClass('mobile-side-bar-actived');
    }
    else {
        $btn.addClass('active');
        $leftSideMenu.addClass('active');
        $mobileSideMenubg.addClass('active');
        $html.addClass('mobile-side-bar-actived');
    }
}


/* 슬라이드박스 */
function MobileSideBar__init() {
    $('.btn-toggle-mobile-side-bar, .mobile-side-menu-bg').click(MobileSideBar__toggle);

    $('.left-side-menu > .mobile-side-menu-01 ul > li').click( function(e) {
        if ( $(this).hasClass('active') ) {
            $(this).removeClass('active');
        }
        else {
            $(this).addClass('active');
        }

        e.stopPropagation()
    });
}

$(function() {
    MobileSideBar__init();
});

/* 인덱스 */
function indexPage__pic() {
    var $act = $('.main-index > .index-pic');

    $act.addClass('active');
}

function indexPage__pic2() {
    var $act2 = $('.main-index > .index-pic > div');

    $act2.addClass('active');
}

$(function() {
    setTimeout(indexPage__pic, 500);

    setTimeout(indexPage__pic2, 1500);
});