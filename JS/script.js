$(document).ready(function(){
    $(window).on("scroll", function() {
      if($(window).scrollTop() > 50) {
          $("#header").addClass("active-header");
          $(".menu-link").addClass("active-menu-links");
          $("#header-img").attr("src", "logo-1.png");
      } else {
          //remove the background property so it comes transparent again (defined in your css)
         $("#header").removeClass("active-header");
         $(".menu-link").removeClass("active-menu-links");
         $("#header-img").attr("src", "logo-1.png");
      }
  });

    // Responsive menu
    $("#responsive-nav-bar").hide();

    $("#image-button-black").click(function(){
      $("#responsive-nav-bar").slideToggle();
    });

    $("#responsive-home-item , #responsive-about-item , #responsive-Look-Book-item , #responsive-Contact-item , #responsive-shop, #responsive-cart").click(function(){
      $("#responsive-nav-bar").slideToggle(200);
    });
});
