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
    slide: 'div',
    arrows: false,
    responsive: [
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
});