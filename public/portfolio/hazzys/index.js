/* 슬라이드박스 플러그인 */
function slideBar__carousel() {
  $('.my-slider-1 > .owl-carousel').owlCarousel({
    items:1,
    dots:false,
    loop:true,
    navText: ['PREV' , 'NEXT'],
    navContainer: '.my-slider-1 > .custom-nav',
    autoplay:true
  });
}



$(function (){
  slideBar__carousel();
});

/* 상단바 스크롤 */
function topBar__init() {
  var $topBar_logo = $('.top-bar > .top-header-bar > a');
  var $top_loginBar = $('.top-bar > .top-header-bar > .login-bar');

  $(window).scroll(function(){
    var scrollTop = $(window).scrollTop();

    if ( scrollTop > 200) {
      $topBar_logo.addClass('active');
      $top_loginBar.addClass('active');
    }
    else {
      $topBar_logo.removeClass('active');
      $top_loginBar.removeClass('active');
    }
  });
}

$(function (){
  topBar__init();
});