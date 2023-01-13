$(document).ready(function () {
    $(window).on("scroll", function () {

        if ($(window).scrollTop() > 50) {
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

    $("#hamburger-menu-button").click(function () {
        $("#responsive-nav-bar").slideToggle();
    });
});
