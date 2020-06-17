$('.img-slide > .side-bars > div').click(function(){
  var $clickedBtn = $(this);
  var $slider = $clickedBtn.parent().parent(); //$clickedBtn.closet('.img-slide');
  
  var isLeft = $clickedBtn.index() == 0;
  
  var $current = $slider.find('.slides > .active');
  var $post = null;
  
  if ( isLeft ) {
    $post = $current.prev();
  }
  else {
    $post = $current.next();
  }
  
  if ( $post.length == 0 ) {
      if ( isLeft ) {
        $post = $slider.find('.slides > div:last-child');
      }
      else {
        $post = $slider.find('.slides > div:first-child'); 
      }
    }
  
  $current.removeClass('active');
  $post.addClass('active');
});
