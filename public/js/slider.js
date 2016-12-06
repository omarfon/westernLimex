  $(document).ready(function(){
  $('.uno').slick({
   centerMode: true,
   centerPadding: '60px',
   slidesToShow: 3,
   adaptiveHeight:true,
   autoplay: true,
   responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        autoplaySpeed:1000,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
});