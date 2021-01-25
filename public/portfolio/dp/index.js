function mainSlide__init() {
    var swiper = new Swiper(".swiper-container", {
      loop: true,
      effect: "fade",
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      }
    });
  }
  
  function talkBtn__init() {
    var $talkBtn = $(".talk-btn");
  
    $(window).scroll(function () {
      var scrollTop = $(window).scrollTop();
  
      if (scrollTop > 900) {
        $talkBtn.addClass("active");
      } else {
        $talkBtn.removeClass("active");
      }
    });
  }
  
  function topBar__init() {
    var $topBar = $(".top-bar");
  
    $(window).scroll(function () {
      var scrollTop = $(window).scrollTop();
  
      if (scrollTop > 300) {
        $topBar.addClass("active");
      } else {
        $topBar.removeClass("active");
      }
    });
  }
  
  function NumAni__start(selector) {
    $(selector).each(function (index, node) {
      var $el = $(node);
  
      var start = parseInt($el.attr("data-num-ani-start"));
      var interval = parseInt($el.attr("data-num-ani-interval"));
  
      $el.attr("data-num-ani-interval-current", interval);
  
      $el.text(start);
  
      NumAni__increaseNum($el);
    });
  }
  
  function NumAni__increaseNum($el) {
    var current = parseInt($el.text());
    var end = parseInt($el.attr("data-num-ani-end"));
    var stride = parseInt($el.attr("data-num-ani-stride"));
    var interval = parseInt($el.attr("data-num-ani-interval-current"));
    var slowPoint = parseFloat($el.attr("data-num-ani-slow-point"));
  
    if (current < end) {
      if (current > end * slowPoint) {
        interval += parseInt($el.attr("data-num-ani-slow-add-interval"));
        if (interval > 100) {
          interval = 100;
        }
        $el.attr("data-num-ani-interval-current", interval);
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
      $el.addClass("num-action-done");
    }
  }
  
  function ActiveOnVisible__init() {
    $(window).resize(ActiveOnVisible__initOffset);
    ActiveOnVisible__initOffset();
  
    $(window).scroll(ActiveOnVisible__checkAndActive);
    ActiveOnVisible__checkAndActive();
  }
  
  function ActiveOnVisible__initOffset() {
    $(".active-on-visible").each(function (index, node) {
      var $node = $(node);
  
      var offsetTop = $node.offset().top;
      $node.attr("data-active-on-visible-offsetTop", offsetTop);
  
      if (!$node.attr("data-active-on-visible-diff-y")) {
        $node.attr("data-active-on-visible-diff-y", "0");
      }
  
      if (!$node.attr("data-active-on-visible-delay")) {
        $node.attr("data-active-on-visible-delay", "0");
      }
    });
  
    ActiveOnVisible__checkAndActive();
  }
  
  function ActiveOnVisible__checkAndActive() {
    $(".active-on-visible:not(.actived)").each(function (index, node) {
      var $node = $(node);
  
      var offsetTop = $node.attr("data-active-on-visible-offsetTop") * 1;
      var diffY = parseInt($node.attr("data-active-on-visible-diff-y"));
      var delay = parseInt($node.attr("data-active-on-visible-delay"));
  
      var callbackFuncName = $node.attr(
        "data-active-on-visible-callback-func-name"
      );
  
      if ($(window).scrollTop() + $(window).height() + diffY > offsetTop) {
        $node.addClass("active");
  
        setTimeout(function () {
          $node.addClass("active");
          if (window[callbackFuncName]) {
            window[callbackFuncName]($node);
          }
        }, delay);
      }
    });
  }
  
  function sideMenu__toggle() {
    $sideMenu_btn = $(".top-bar > .top-bar-wrapper > div > .side-menu-btn");
    $sideMenu = $(".side-menu");
    $sideMenu_bg = $(".side-menu-bg");
  
    if ($sideMenu_btn.hasClass("active")) {
      $sideMenu_btn.removeClass("active");
      $sideMenu.removeClass("active");
      $sideMenu_bg.removeClass("active");
    } else {
      $sideMenu_btn.addClass("active");
      $sideMenu.addClass("active");
      $sideMenu_bg.addClass("active");
    }
  }
  
  function sideMenu__init() {
    $sideMenu_btn = $(".top-bar > .top-bar-wrapper > div > .side-menu-btn");
  
    $sideMenu_btn.click(sideMenu__toggle);
  }
  
  function srcBox__open() {
    $srcBox = $(".serch-box");
  
    $srcBox.addClass("active");
  }
  
  function srcBox__close() {
    $srcBox = $(".serch-box");
  
    $srcBox.removeClass("active");
  }
  
  function srcBox__init() {
    $srcBtn = $(".top-bar > .top-bar-wrapper > div > .serch-btn");
    $closeBtn = $(".serch-box > div > .close-btn");
  
    $srcBtn.click(srcBox__open);
    $closeBtn.click(srcBox__close);
  }
  
  $(function () {
    mainSlide__init();
    talkBtn__init();
    topBar__init();
    ActiveOnVisible__init();
    sideMenu__init();
    srcBox__init();
  });
  