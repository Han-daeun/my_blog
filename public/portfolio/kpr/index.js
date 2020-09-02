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



$(function () {
    FullPage();
    topBar__init();
});