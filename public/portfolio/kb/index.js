function MySlider1__init() {
    var swiper = new Swiper(".swiper-container", {
        slidesPerView: "auto",
        centeredSlides: true,
        loop: true,
        cssWidthAndHeight: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        }
    });
}


/* 발견되면 액티브 실행 */
function NumAni__start(selector) {
    $(selector).each(function (index, node) {
        var $el = $(node);

        var start = parseInt($el.attr('data-num-ani-start'));
        var interval = parseInt($el.attr('data-num-ani-interval'));

        $el.attr('data-num-ani-interval-current', interval);

        $el.text(start);

        NumAni__increaseNum($el);
    });
}

function NumAni__increaseNum($el) {
    var current = parseInt($el.text());
    var end = parseInt($el.attr('data-num-ani-end'));
    var stride = parseInt($el.attr('data-num-ani-stride'));
    var interval = parseInt($el.attr('data-num-ani-interval-current'));
    var slowPoint = parseFloat($el.attr('data-num-ani-slow-point'))

    if (current < end) {
        if (current > end * slowPoint) {
            interval += parseInt($el.attr('data-num-ani-slow-add-interval'));
            if (interval > 100) {
                interval = 100;
            }
            $el.attr('data-num-ani-interval-current', interval);
        }

        if (current + stride > end) {
            $el.text(end);
        } else {
            $el.text(current + stride);
        }

        setTimeout(function () {
            NumAni__increaseNum($el);
        }, interval);
    } else {
        $el.addClass('num-action-done');
    }
}

function ActiveOnVisible__init() {
    $(window).resize(ActiveOnVisible__initOffset);
    ActiveOnVisible__initOffset();

    $(window).scroll(ActiveOnVisible__checkAndActive);
    ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__initOffset() {
    $('.active-on-visible').each(function (index, node) {
        var $node = $(node);

        var offsetTop = $node.offset().top;
        $node.attr('data-active-on-visible-offsetTop', offsetTop);

        if (!$node.attr('data-active-on-visible-diff-y')) {
            $node.attr('data-active-on-visible-diff-y', '0');
        }

        if (!$node.attr('data-active-on-visible-delay')) {
            $node.attr('data-active-on-visible-delay', '0');
        }
    });

    ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__checkAndActive() {
    $('.active-on-visible:not(.actived)').each(function (index, node) {
        var $node = $(node);

        var offsetTop = $node.attr('data-active-on-visible-offsetTop') * 1;
        var diffY = parseInt($node.attr('data-active-on-visible-diff-y'));
        var delay = parseInt($node.attr('data-active-on-visible-delay'));

        var callbackFuncName = $node.attr('data-active-on-visible-callback-func-name');

        if ($(window).scrollTop() + $(window).height() + diffY > offsetTop) {
            $node.addClass('active');

            setTimeout(function () {
                $node.addClass('active');
                if (window[callbackFuncName]) {
                    window[callbackFuncName]($node);
                }
            }, delay);
        }
    });
}

$(function () {
    ActiveOnVisible__init();
    MySlider1__init();
});