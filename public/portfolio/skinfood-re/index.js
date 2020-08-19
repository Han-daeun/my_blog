/* 초이스아이템 슬라이드 */
function choceSlide__init() {
    $('.slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        //autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        prevArrow: $('#aro1_prev'),
		nextArrow: $('#aro1_next')
      });
}


/* 서브메뉴 버튼*/
function subMenuBtn__toggle() {
    var $btn = $('.header > .menu-bar > ul > .sub-menu-btn'); 
    var $subMenu = $('.header > .menu-bar > .sub-menu');

    if ( $btn.hasClass('active') ) {
        $btn.removeClass('active');
        $subMenu.removeClass('active');
    }
    else {
        $btn.addClass('active');
        $subMenu.addClass('active');
    }
}

function subMenuBtn__init() {
    $('.header > .menu-bar > ul > .sub-menu-btn').click(subMenuBtn__toggle);
}

/* 메인페이지 슬라이드 */
function mainpageSlide__init() {
var swiper = new Swiper('.main-swiper-container', {
    loop: true, 
    autoplay : { 
        delay : 5000,
    }, 
    speed : 1000,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
}

/* 서브페이지 슬라이드 */
function subpageSlide__init() {
    var swiper = new Swiper(".swiper-container", {
        direction: 'horizontal',
        slidesPerView: 4,
        slidesPerColumn: 2,
        slidesPerGroup : 8,
        slidesPerColumnFill: 'column',
        spaceBetween: 50,
        navigation : {
            nextEl : '.swiper-button-next',
            prevEl : '.swiper-button-prev',
        },
    });
}


/* 발견되면 액티브 실행 */
function NumAni__start(selector) {
    $(selector).each(function(index, node) {
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
        if ( current > end * slowPoint ) {
            interval += parseInt($el.attr('data-num-ani-slow-add-interval'));
            if ( interval > 100 ) {
                interval = 100;
            }
            $el.attr('data-num-ani-interval-current', interval);
        }

        if ( current + stride > end ) {
            $el.text(end);
        }
        else {
            $el.text(current + stride);
        }

        setTimeout(function () {
            NumAni__increaseNum($el);
        }, interval);
    }
    else {
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
    $('.active-on-visible').each(function(index, node) {
        var $node = $(node);

        var offsetTop = $node.offset().top;
        $node.attr('data-active-on-visible-offsetTop', offsetTop);

        if ( !$node.attr('data-active-on-visible-diff-y') ) {
            $node.attr('data-active-on-visible-diff-y', '0');
        }

        if ( !$node.attr('data-active-on-visible-delay') ) {
            $node.attr('data-active-on-visible-delay', '0');
        }
    });

    ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__checkAndActive() { 
    $('.active-on-visible:not(.actived)').each(function(index, node) {
        var $node = $(node);

        var offsetTop = $node.attr('data-active-on-visible-offsetTop') * 1;
        var diffY = parseInt($node.attr('data-active-on-visible-diff-y'));
        var delay = parseInt($node.attr('data-active-on-visible-delay'));

        var callbackFuncName = $node.attr('data-active-on-visible-callback-func-name');

        if ( $(window).scrollTop() + $(window).height() + diffY > offsetTop ) {
            $node.addClass('active');

            setTimeout(function() {
                $node.addClass('active');
                if ( window[callbackFuncName] ) {
                    window[callbackFuncName]($node);
                }
            }, delay);
        }
    });
}


$(function () {
    subMenuBtn__init();
    choceSlide__init();
    mainpageSlide__init();
    subpageSlide__init();
    ActiveOnVisible__init();
});