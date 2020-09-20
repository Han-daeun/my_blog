/* 실행되자마자 액션 실행 */
function bgBar__init() {
    var $act = $('.main-page > .main-bg-box');
      
    $act.addClass('active');
}

/* 메인슬라이드 */
function mainSlide__init() {
    new Swiper( '.main-bg-slide > .swiper-container', {

        effect : 'fade', // 페이드 효과 사용
        speed: 4000,
        loop : true, // 무한 반복
        pagination : { // 페이징 설정
            el : '.swiper-pagination',
            clickable : true, // 페이징을 클릭하면 해당 영역으로 이동, 필요시 지정해 줘야 기능 작동
        },
        autoplay: {
            delay: 6000, 
        },
    });
}

/* 사이드메뉴버튼 */
function MobileSideBar__toggle() {
    var $btn = $('.main-page > .main-menu > .menu-box > .side-menu-btn');
    var $sideMenu = $('.main-page > .main-menu > .menu-box > .side-menu-tab');

    if ( $btn.hasClass('active') ) {
        $btn.removeClass('active');
        $sideMenu.removeClass('active');
    }
    else {
        $btn.addClass('active');
        $sideMenu.addClass('active');
    }
}

function MobileSideBar__init() {
    $('.main-page > .main-menu > .menu-box > .side-menu-btn').click(MobileSideBar__toggle);
}

/* MD슬라이드 */
function mdSlide__init() {
    new Swiper( '.md-slide > .swiper-container', {
        slidesPerView: "auto",
        spaceBetween: 35,
        cssWidthAndHeight: true,
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: false,
          },
    });
}

/* weekly슬라이드 탭박스 */
function TabBox__init() {
    $('[data-tab-head-item-name]').click(function() {
      var $this = $(this);
      var tabName = $this.attr('data-tab-name');
      var itemName = $this.attr('data-tab-head-item-name');
      $('[data-tab-name="' + tabName + '"]').removeClass('active');
      
      $('[data-tab-name="' + tabName + '"][data-tab-head-item-name="' + itemName + '"]').addClass('active');
      $('[data-tab-name="' + tabName + '"][data-tab-body-item-name="' + itemName + '"]').addClass('active');
    });
  }

/* weekly슬라이드 */
function weeklySlide__init() {
    new Swiper( '.weekly-slide-01 > .swiper-container', {
        slidesPerView: "auto",
        spaceBetween: 35,
        cssWidthAndHeight: true,
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: false,
          },
    });
}

function weeklySlide02__init() {
    new Swiper( '.weekly-slide-02 > .swiper-container', {
        slidesPerView: "auto",
        spaceBetween: 35,
        cssWidthAndHeight: true,
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: false,
          },
    });
}


/* shop슬라이드 */
function shopSlide__init() {
    new Swiper( '.shop-slide > .swiper-container', {
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 25,
        loop: true,
        cssWidthAndHeight: true,
        autoplay: {
            delay: 3000, 
        },
    });
}

/* sns슬라이드 */
function snsSlide__init() {
    new Swiper( '.sns-slide > .swiper-container', {
        slidesPerView: "auto",
        spaceBetween: 38,
        cssWidthAndHeight: true,
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: false,
          },
    });
}

$(function () {
    bgBar__init();
    mainSlide__init();
    MobileSideBar__init();
    mdSlide__init();
    TabBox__init();
    weeklySlide__init();
    weeklySlide02__init();
    shopSlide__init();
    snsSlide__init();
});