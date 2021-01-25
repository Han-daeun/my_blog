function mainSlide__init() {
    var swiper = new Swiper(".swiper-container", {
      loop: true,
      autoplay: {
        delay: 3000
      },
      pagination: {
        el: ".swiper-pagination"
      }
    });
  }
  
  function subMenu__view() {
    $menuList = $(".top-bar-wrap > .top-bar > .menu-box > nav > ul > li");
    $subMenu = $(".top-bar-wrap > .top-bar > .menu-box > nav > ul ul");
    $menuBg = $(".top-bar-wrap > .nav-bg");
  
    $menuList.mouseover(function () {
      $subMenu.addClass("active");
      $menuBg.addClass("active");
    });
  
    $menuList.mouseleave(function () {
      $subMenu.removeClass("active");
      $menuBg.removeClass("active");
    });
  }
  
  function subMenu__active() {
    var $menu = $("#wrap > .top-bar-wrap > .top-bar > .side-menu");
    var $menuBtn = $("#wrap > .top-bar-wrap > .top-bar > .side-menu-btn");
    var $menuBg = $("#wrap > .side-menu-bg");
    var $body = $("body");
  
    if ($menuBtn.hasClass("active")) {
      $menuBtn.removeClass("active");
      $menu.removeClass("active");
      $menuBg.removeClass("active");
      $body.removeClass("active");
    } else {
      $menuBtn.addClass("active");
      $menu.addClass("active");
      $menuBg.addClass("active");
      $body.addClass("active");
    }
  }
  
  function subMenu__init() {
    $menuBtn = $("#wrap > .top-bar-wrap > .top-bar > .side-menu-btn");
  
    $menuBtn.click(subMenu__active);
  }
  
  $(function () {
    mainSlide__init();
    subMenu__view();
    subMenu__init();
  });
  