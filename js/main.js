$(function() {

  // timeline plugin

  $('.timeline').timelify({

    // animation types
    animLeft: "bounceInLeft",
    animRight: "bounceInRight",
    animCenter: "bounceInUp",

    // animation speed
    animSpeed: 300,

    // trigger position in pixels
    offset: 150
  });

  // accordion collapse

  $(".accordion").click(function(){
       $(".collapse").removeClass(".display.none");
       $(".collapse").slideToggle();
   });

   // carousel

   $('.carousel').carousel({
     interval: 2000
   });

   // add animate elements

   // diapo 18

   // hide our element on page load
    $('.fadeIn-effect').css('opacity', 0);

    $('.fadeIn-effect').waypoint(function() {
      $('.fadeIn-effect').css('opacity', 100);
      $('.fadeIn-effect').addClass('animated fadeInUpBig');
    }, { offset: '30%' });


    // article 6
    $('.a6-l').css('opacity', 0);

    $('.a6-l').waypoint(function() {
      $('.a6-l').css('opacity', 100);
      $('.a6-l').addClass('animated fadeInLeftBig	');
    }, { offset: '30%' });

    // article 6
    $('.a6-r').css('opacity', 0);

    $('.a6-r').waypoint(function() {
      $('.a6-r').css('opacity', 100);
      $('.a6-r').addClass('animated fadeInRightBig	');
    }, { offset: '30%' });



  // scroll spy
  $('#back-to-top').on('click', function (e) {
      e.preventDefault();
      $('html,body').animate({
          scrollTop: 0
      }, 1000);
  });







}); // ENDs
