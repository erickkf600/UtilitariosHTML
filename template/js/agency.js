$(document).ready(function(){
  // NAVBAR ANIMADA COM SCROLL
  $('body').scrollspy({
    target: '#mainNav',
    offset: 56
  });
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  navbarCollapse();
  $(window).scroll(navbarCollapse);
});