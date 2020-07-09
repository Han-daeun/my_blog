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



$(function() {
    filterBtn__move();

    articleImg__01();

    setTimeout(articleImg__02, 500);
});