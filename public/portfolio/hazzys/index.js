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