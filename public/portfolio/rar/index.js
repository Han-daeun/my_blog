/* 로딩페이지 */
function loadingPage__init() {
    $(window).load(function(){
        $('.loading').fadeOut();
    });
}

$(function(){
    loadingPage__init();
});

/* 모바일 사이드 바 */
function MobileSideBar__toggle() {
    var $btn = $('.top-bar > .side-toggle-btn > span');
    var $innerBtn = $('.side-bar > .inner-toggle-btn > span');
    var $sideMenu = $('.side-bar');
    var $sideMenuBg = $('.side-menu-bg');
    var $body = $('body');

    if ( $btn.hasClass('active') ) {
        $btn.removeClass('active');
        $innerBtn.removeClass('active');
        $sideMenu.removeClass('active');
        $sideMenuBg.removeClass('active');
        $body.removeClass('active');
    }
    else {
        $btn.addClass('active');
        $innerBtn.addClass('active');
        $sideMenu.addClass('active');
        $sideMenuBg.addClass('active');
        $body.addClass('active');
    }
}

function MobileSideBar__init() {
    $('.side-toggle-btn, .inner-toggle-btn, .side-menu-bg').click(MobileSideBar__toggle);
}

/* 서치 버튼 */
function searchBtn__toggle() {
    var $searchBtn = $('.search-box');
    var $body = $('body');

    if ( $searchBtn.hasClass('active') ) {
        $searchBtn.removeClass('active');
        $body.removeClass('active');
    }
    else {
        $searchBtn.addClass('active');
        $body.addClass('active');
    }

}

function searchBox__close() {
    var $searchBox = $('.search-box');
    var $body = $('body');

    $searchBox.removeClass('active');
    $body.removeClass('active');
}

function searchBox__init() {
    $('.container').click(searchBox__close);
}

function searchBox__init2() {
    $('.top-bar').click(searchBox__close);
}



function searchBtn__init() {
    $('.search-btn').click(searchBtn__toggle);
}




$(function() {
    MobileSideBar__init();
    searchBtn__init();
    searchBox__init();
});

/* 슬라이더 */

function slideBar__carousel() {
    $('.my-slider-1 > .owl-carousel').owlCarousel({
        margin:24,
        nav:true,
        items:4,
        navContainer: '.my-slider-1 > .custom-nav',
        dots:false
    });
}

$(function(){
    slideBar__carousel();
});

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

$(function() {
    ActiveOnVisible__init();
});

/* 사이드바 */
function SideBar__init() {
    $('.side-bar ul > li').mouseenter(function() {
      // 선택된 li
      var $li = $(this);
      
      // 선택된 li의 부모
      var $ul = $li.parent();
  
      // 선택된 녀석에게 selected 부여, 이것과 상관없이 모든 형제들의 자식은 ul은 활성화된다. 다만 z-index에 의해서 이 녀석의 자식만 보인다.
      $li.addClass('selected');
      
      // 선택된 녀석들의 후손들 중에서, 기존에 활성화 된것들 정리
      $li.find('.hover, .selected').removeClass('hover').removeClass('selected');
      // 형제들의 후손들 중에서, 기존에 활성화 된것들 정리
      $li.siblings('.selected').find('.hover, .selected').removeClass('hover').removeClass('selected');
      // 형제들 중에서, 기존에 활성화 된것들 정리
      $li.siblings('.selected').removeClass('selected');
  
      // 내가 선택한 녀석이 자식인 ul이 있다면
      // 나를 포함한 모든 형제가 자식인 ul을 활성화 하도록, 부모에게 hover 클래스 삽입
      if ( $li.find(' > ul').length > 0 ) {
        $ul.addClass('hover');
      }
      else {
        $ul.removeClass('hover');
      }
  
      return false;
    });
  }
  
  $(function() {
    SideBar__init();
  })