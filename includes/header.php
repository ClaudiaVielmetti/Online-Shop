<?php

session_start();
define("APPURL", "http://localhost/online-shop/");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--This is my favicon icon in my tab-->
    <link rel="icon" type="image/png" href="<?php echo APPURL; ?>/assets/favicon.ico" sizes="16x16" />

    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/slider.css" />
    <!-- google fonts link goes here . Get it from Google Fonts after selecting the various weights -->
    <link rel="preconnect" href="<?php echo APPURL; ?>/https://fonts.googleapis.com" />
    <link rel="preconnect" href="<?php echo APPURL; ?>/https://fonts.gstatic.com" crossorigin />
    <link href="<?php echo APPURL; ?>/https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,400&display=swap" rel="stylesheet" />
    <!-- link to responsive JAVASCRIPT used for the burger bar menu . YOu need this to have a menu icon when responsive -->
    <link rel="stylesheet" href="<?php echo APPURL; ?>/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo APPURL; ?>/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- Bootstrap -->
    <link href="<?php echo APPURL; ?>/https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <script src="<?php echo APPURL; ?>/https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo APPURL; ?>/https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="<?php echo APPURL; ?>/https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&display=swap" rel="stylesheet" />
    <script src="<?php echo APPURL; ?>/https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <link rel="stylesheet" href="<?php echo APPURL; ?>./css/style.css" />
    <title>Reverse | HOME</title>


</head>

<body>
   
        <header id="header">

            <div id="normal-header">
                <a href="#" id="image-link"><img src="./assets/Images/reverse-white.png" alt="Reverse Logo" id="header-img" /></a>

                <nav id="nav-bar">
                    <ul>
                        <li class="nav-link" id="menu-item"><a href="#hero-header" class="menu-link"> Home </a></li>
                        <li class="nav-link" id="menu-item"><a href="#features-container" class="menu-link"> Features </a></li>
                        <li class="nav-link" id="menu-item"><a href="#presentation-container" class="menu-link"> Products </a></li>
                        <li class="nav-link" id="menu-item"><a href="#main-media-container" class="menu-link"> Media </a></li>
                        <li class="nav-link" id="menu-item"><a href="#prices-section-container" class="menu-link"> Pricing </a>
                        <li>
                    </ul>
                </nav>
            </div>


            <div id="responsive-header">
                <div id="responsive-logo-button">
                    <a href="#" id="image-link"><img src="./assets/Images/reverse-black.png" alt="Reverse Logo" id="header-img-black" /></a>
                    <button id="image-button-black"><img src="https://i.ibb.co/yfM3fdZ/dropdown-menu-black.png" alt="Dropdown Menu" id="dropdown-button-black" /></button>
                </div>

                <div id="responsive-nav-bar">
                    <ul>
                        <li class="nav-link" id="responsive-home-item"><a href="#hero-header" class="responsive-menu-link"> Home </a></li>
                        <li class="nav-link" id="responsive-features-item"><a href="#features-container" class="responsive-menu-link"> Features </a></li>
                        <li class="nav-link" id="responsive-products-item"><a href="#presentation-container" class="responsive-menu-link"> Products </a></li>
                        <li class="nav-link" id="responsive-media-item"><a href="#main-media-container" class="responsive-menu-link"> Media </a></li>
                        <li class="nav-link" id="responsive-pricing-item"><a href="#prices-section-container" class="responsive-menu-link"> Pricing </a>
                        <li>
                    </ul>
                </div>
            </div>

        </header>

</body>