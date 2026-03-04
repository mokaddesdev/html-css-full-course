$(document).ready(function() {
   $(".banner-sliders").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
      infinite: true,
      fade: true,
      autoplay: true,
      autoplaySpeed: 1500,
   });

   $(".banner-sliders").mouseover( function() {
      $(this).slick('play')
   });
});