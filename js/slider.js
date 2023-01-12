$(document).ready(function(){
  $('.slider-for').slick({
    asNavFor: '.slider-nav',
    arrows: false,
  });
  $('.slider-nav').slick({
    asNavFor: '.slider-for',
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    focusOnSelect: true,
    slide: 'img',
    arrows: false,
  });
});