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
    <link rel="icon" type="image/png" href="./assets/favicon.ico" sizes="16x16" />

    <link rel="stylesheet" href="./css/slider.css" />
    <!-- google fonts link goes here . Get it from Google Fonts after selecting the various weights -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,400&display=swap" rel="stylesheet" />
    <!-- link to responsive JAVASCRIPT used for the burger bar menu . YOu need this to have a menu icon when responsive -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <link rel="stylesheet" href="./css/style.css" />
    <title>Reverse | HOME</title>


</head>

<body>
    <!-- header and navigation section -->
    <section class="header">

        <nav class="fixed-nav">
            <a href="index.php"><img src="./assets/Images/reverse-white.png" alt="Logo" /></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="./index.php">HOME</a></li>
                    <li><a href="./about.html">ABOUT</a></li>
                    <li><a href="./lookbook.html">LOOKBOOK</a></li>
                    <li><a href="./shop.html">SHOP</a></li>
                    <li><a href="./contact.html">CONTACT</a></li>
                    <li>
                        <a href="./cart.html"><i class="bi bi-bag" id="cart-icon"></i></a>
                    </li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h2>Something for everyone</h2>
            <br />
            <a href="./shop.html" class="hero-btn">SHOP NOW</a>
        </div>
    </section>