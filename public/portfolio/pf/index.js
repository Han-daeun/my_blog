/* 스크롤액션 */
function pfSlide__init() {
    var swiper = new Swiper(".swiper-container", {
        slidesPerView: 4,
        spaceBetween: 70,
        /*
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
        */
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

/* 그래프 실행 */

function graph__init() {

    var marksCanvas = document.getElementById("radar-chart");

    Chart.defaults.global.defaultFontFamily = "NanumSquare";
    Chart.defaults.global.defaultFontSize = 15;
    Chart.defaults.global.defaultFontStyle = '200';

    var marksData = {
        labels: ["작업속도", "집중력", "성실", "열정", "응용력"],
        datasets: [{
            label: "none",
            backgroundColor: "rgba(190,193,225,0.8)",
            borderColor: "transparent",
            fill: true,
            radius: 6,
            pointRadius: 6,
            pointBorderWidth: 3,
            pointBackgroundColor: "transparent",
            pointBorderColor: "transparent",
            data: [75, 65, 85, 80, 65]
        }]
    };

    var chartOptions = {
        scale: {
            ticks: {
                display:false,
                beginAtZero: true,
                min: 0,
                max: 100,
                stepSize: 20
            },
            pointLabels: {
                fontSize: 18
            }
        },
        legend: {
            display: false
        },
    };

    var radarChart = new Chart(marksCanvas, {
        type: 'radar',
        data: marksData,
        options: chartOptions
    });

}


$(function () {
    ActiveOnVisible__init();
    pfSlide__init();
    graph__init();
    gsap.to(".parallax-bg", {
        scrollTrigger: {
            scrub: true
        },
        y: (i, target) => -ScrollTrigger.maxScroll(window) * target.dataset.speed,
        ease: "none"
    });
    lightbox.option({
        resizeDuration: 200,
        wrapAround: true,
        disableScrolling: false,
        fitImagesInViewport:false
    });
});