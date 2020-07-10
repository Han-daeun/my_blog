/* 탑바 */
function topBar__change() {
    var $topbar = $('.top-box-01');
    var $logoBorder = $('.top-box-01 > .top-bar > .logo > .logo-box > .logo-border > img');
    var $logoImg = $('.top-box-01 > .top-bar > .logo > .logo-box');
    var $logoText = $('.top-box-01 > .top-bar > .logo > .logo-text');
    var $menubarMargin = $('.top-box-01 > .top-bar > .menu-bar > ul > li');
    var $menubarSize = $('.top-box-01 > .top-bar > .menu-bar > ul > li > a');
    var $btnSize = $('.top-box-01 > .top-bar > .contact-btn > a > span');

    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        if ( scrollTop > 50 ) {
            $topbar.addClass('top');
            $logoBorder.addClass('top');
            $logoImg.addClass('top');
            $logoText.addClass('top');
            $menubarMargin.addClass('top');
            $menubarSize.addClass('top');
            $btnSize.addClass('top');
        } else {
            $topbar.removeClass('top');
            $logoBorder.removeClass('top');
            $logoImg.removeClass('top');
            $logoText.removeClass('top');
            $menubarMargin.removeClass('top');
            $menubarSize.removeClass('top');
            $btnSize.removeClass('top');
        }
    });
}

$(function() {
    topBar__change();
}); 



/* 리스트 */
function articleImg__01() {
    var $bgAct = $('.article-box > .article-list > ul > li > a > .article-img > .article-img-bg');

    $bgAct.addClass('active');
}

function articleImg__02() {
    var $imgAct = $('.article-box > .article-list > ul > li > a > .article-img > .article-img-01');

    $imgAct.removeClass('active');
}

function filterBtn__move() {
    var $filterBtn = $('.article-box > .filter');

    $filterBtn.removeClass('active');
}

function articleText__move() {
    var $articleText = $('.article-box > .article-list > ul > li > a > .article-text');

    $articleText.removeClass('active');
}



$(function() {

    filterBtn__move();

    articleText__move();

    articleImg__01();

    setTimeout(articleImg__02, 500);
});
