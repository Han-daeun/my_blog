/*
$(function () {
  $('.img-slide > .side-bars > div').click(function () {
    var $clickedBtn = $(this);
    var $slider = $clickedBtn.parent().parent(); //$clickedBtn.closet('.img-slide');

    var isLeft = $clickedBtn.index() == 0;

    var $current = $slider.find('.slides > .active');
    var $post = null;

    if (isLeft) {
      $post = $current.prev();
    } else {
      $post = $current.next();
    }

    if ($post.length == 0) {
      if (isLeft) {
        $post = $slider.find('.slides > div:last-child');
      } else {
        $post = $slider.find('.slides > div:first-child');
      }
    }

    $current.removeClass('active');
    $post.addClass('active');
  });

});

function slideBar__move() {
  function a() {
    $('.img-slide .side-bars > div:last-child').click();
  }
  
  setInterval(a,5000);
}

$(function() {
  slideBar__move();
});
*/

/* 인덱스 */
function indexPage__pic() {
  var $act = $('.main-index > .index-pic');

  $act.addClass('active');
}

function indexPage__pic2() {
  var $act2 = $('.main-index > .index-pic > div');

  $act2.addClass('active');
}

function indexPage__text1() {
  var $textAct1 = $('.main-index > .index-pic > .index-text > li > .welcome');

  $textAct1.addClass('active');
}

function indexPage__text2() {
  var $textAct2 = $('.main-index > .index-pic > .index-text > li > .to');

  $textAct2.addClass('active');
}

function indexPage__text3() {
  var $textAct3 = $('.main-index > .index-pic > .index-text > li > .myblog');

  $textAct3.addClass('active');
}

function indexPage__moreBtn() {
  var $moreBtn = $('.main-index > .more-btn');

  $moreBtn.addClass('active');
}


$(function () {
  setTimeout(indexPage__pic, 500);

  setTimeout(indexPage__pic2, 1500);

  setTimeout(indexPage__text1, 2500);

  setTimeout(indexPage__text2, 2600);

  setTimeout(indexPage__text3, 2700);

  setTimeout(indexPage__moteBtn, 4000);
});

