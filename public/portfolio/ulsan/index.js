function mainSlide__init() {
    var swiper = new Swiper(".main-slide > .swiper-container", {
      loop: true,
      effect: "fade",
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      pagination: {
        el: ".swiper-pagination"
        // clickable: true
      }
    });
  }
  
  function notice__init() {
    var swiper = new Swiper(".notice-slide > .swiper-container", {
      loop: true,
      effect: "fade",
      speed: 0,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      pagination: {
        el: ".notice-swiper-pagination"
      }
    });
  }
  
  function socialMb__init() {
    var swiper = new Swiper(".cont-box-mb > .swiper-container", {
      slidesPerView: "auto",
      loop: true,
      cssWidthAndHeight: true,
      slidesPerGroup: 2,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      }
    });
  }
  
  function popupMenu__init() {
    var $popupMenu = $(".popup-menu");
    var $popupMenuMb = $(".popup-menu-mb");
    var $body = $("body");
  
    if ($popupMenu.hasClass("active")) {
      $popupMenu.removeClass("active");
      $popupMenuMb.removeClass("active");
      // $body.removeClass("active");
    } else {
      $popupMenu.addClass("active");
      $popupMenuMb.addClass("active");
      // $body.addClass("active");
    }
  }
  
  function popupMenu__open() {
    var $popupOpenBtn = $(".top-box > .top-bar > .side-menu-btn");
  
    $popupOpenBtn.click(popupMenu__init);
  }
  
  function popupMenu__close() {
    var $popupCloseBtn = $(".popup-menu > .popup-menu-box > .menu-head > button");
    var $mbPopupCloseBtn = $(
      ".popup-menu-mb > .mb-header > .mb-close-btn > button"
    );
  
    $popupCloseBtn.click(popupMenu__init);
    $mbPopupCloseBtn.click(popupMenu__init);
  }
  
  $(function () {
    mainSlide__init();
    notice__init();
    socialMb__init();
    popupMenu__open();
    popupMenu__close();
  });
  