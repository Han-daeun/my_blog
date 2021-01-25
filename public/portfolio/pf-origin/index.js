$(document).ready(function () {
  $("#wrap > .main-visual").addClass("active");
});

//creator1022.tistory.com/156 [우물안에만 살지말자]
// 탑바 액션
출처: https: function topBar__init() {
  var $topBar = $("#wrap > .top-bar");

  $(window).scroll(function () {
    var scrollTop = $(window).scrollTop();

    if (scrollTop > 900) {
      $topBar.addClass("off");
    } else {
      $topBar.removeClass("off");
    }
  });
}

// 셔플
function pfList__init() {
  var Shuffle = window.Shuffle;
  var element = document.querySelector(".shuffle-container");

  var shuffleInstance = new Shuffle(element, {
    itemSelector: "li"
  });

  $(".shuffle-filter li").on("click", function (e) {
    e.preventDefault();
    $(".shuffle-filter li").removeClass("selected");
    $(this).addClass("selected");
    var keyword = $(this).attr("data-target");
    shuffleInstance.filter(keyword);
  });
}

// 슬라이드
function artSlide__init() {
  var swiper = new Swiper(".swiper-container", {
    slidesPerView: 4,
    spaceBetween: 70,
    scrollbar: {
      el: ".swiper-scrollbar",
      hide: false
    }
  });
}

// 팝업창관련
function popUpOpen__init() {
  $("#wrap > .info-box > .graph-list > .graph-sub > div.more").click(
    function () {
      $(".more-box").addClass("active");
      $("body").addClass("active");
    }
  );
}

function popUpClose__init() {
  $(".more-box > .inner > .close-btn").click(function () {
    $(".more-box").removeClass("active");
    $("body").removeClass("active");
  });
}

// 액티브 실행
// function ActiveOnVisible__init() {
//   $(window).resize(ActiveOnVisible__initOffset);
//   ActiveOnVisible__initOffset();

//   $(window).scroll(ActiveOnVisible__checkAndActive);
//   ActiveOnVisible__checkAndActive();
// }

// function ActiveOnVisible__initOffset() {
//   $(".active-on-visible").each(function (index, node) {
//     var $node = $(node);

//     var offsetTop = $node.offset().top;
//     var offsetBottom = offsetTop + $node.outerHeight();
//     $node.attr("data-active-on-visible-offsetTop", offsetTop);
//     $node.attr("data-active-on-visible-offsetBottom", offsetBottom);

//     if (!$node.attr("data-active-on-visible-diff-y")) {
//       $node.attr("data-active-on-visible-diff-y", "0");
//     }

//     if (!$node.attr("data-active-on-visible-delay")) {
//       $node.attr("data-active-on-visible-delay", "0");
//     }
//   });

//   ActiveOnVisible__checkAndActive();
// }

// function ActiveOnVisible__checkAndActive() {
//   $(".active-on-visible").each(function (index, node) {
//     var $node = $(node);

//     var offsetTop = parseInt($node.attr("data-active-on-visible-offsetTop"));
//     var offsetBottom = parseInt(
//       $node.attr("data-active-on-visible-offsetBottom")
//     );
//     var diffY = parseInt($node.attr("data-active-on-visible-diff-y"));
//     var delay = parseInt($node.attr("data-active-on-visible-delay"));

//     if ($(window).scrollTop() + diffY > offsetBottom == false) {
//       if ($(window).scrollTop() + $(window).height() - diffY > offsetTop) {
//         setTimeout(function () {
//           $node.addClass("active");
//         }, delay);
//       }
//     }
//   });

//   $(".active-on-visible.active").each(function (index, node) {
//     var $node = $(node);

//     var offsetTop = $node.attr("data-active-on-visible-offsetTop");
//     var offsetBottom = $node.attr("data-active-on-visible-offsetBottom");
//     var diffY = parseInt($node.attr("data-active-on-visible-diff-y"));
//     var delay = parseInt($node.attr("data-active-on-visible-delay"));

//     if (
//       $(window).scrollTop() + $(window).height() < offsetTop ||
//       $(window).scrollTop() > offsetBottom
//     ) {
//       setTimeout(function () {
//         $node.removeClass("active");
//       }, delay);
//     }
//   });
// }



//액티브 실행
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
      $node.addClass('actived');

      setTimeout(function () {
        $node.addClass('active');
        if (window[callbackFuncName]) {
          window[callbackFuncName]($node);
        }
      }, delay);
    }
  });
}

// 스크롤탑 액션
function scrollTopAction() {
  var scrollLink = $(".scroll");

  // Smooth scrolling
  scrollLink.click(function (e) {
    e.preventDefault();
    $("body,html").animate({
        scrollTop: $(this.hash).offset().top
      },
      1000
    );
  });

  // Active link switching
  $(window).scroll(function () {
    var scrollbarLocation = $(this).scrollTop();

    scrollLink.each(function () {
      var sectionOffset = $(this.hash).offset().top - 20;

      if (sectionOffset <= scrollbarLocation) {
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
      }
    });
  });
}

$(function () {
  topBar__init();
  pfList__init();
  artSlide__init();
  popUpOpen__init();
  popUpClose__init();
  ActiveOnVisible__init();
  scrollTopAction();
});