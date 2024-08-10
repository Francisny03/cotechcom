<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- wow animate_animated -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- swiper, slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="CSS/style.css?<?= rand() ?>">
    <link rel="stylesheet" href="CSS/phone.css?<?= rand() ?>">
    <script src="js/script.js?<?= rand() ?>" defer></script>
    <title>Cotechcom</title>
</head>

<body>

    <header id="navBar">
        <nav class="nav_bar flex space_header">
            <div class="logo_container">
                <a href="index.php">
                    <img src="image/logo_blue.svg" alt="logo Cotehcom">
                </a>
            </div>

            <div class="menu_nav flex">
                <ul>
                    <li class="btn_nav link_color_white"><a href="index.php">Accueil</a></li>
                    <li class="btn_nav link_color_white"><a href="service.php">Services</a></li>
                    <li class="btn_nav link_color_white"><a href="about.php">à Propos</a></li>
                    <li class="btn_nav link_color_white"><a href="contact.php">Contact</a></li>
                    <li class="btn_nav link_color_white">
                        <div class="circle">
                            <a class="flex"
                                href="https://api.whatsapp.com/send?phone=%2B242069321352&context=ARD89EEUoSuYa4Ep1E6d3gR7OP0VIaWKMnGLahXn03sqJqUi1m7ifAZrP6Gw7Rrmo3O1PTG21mWr5_QhDtOSUGUWPwV8oAASo_2HLcM-OUHFx2Q2IeTWYH4h5Uy-vKJ7EhHqAAOQH0q9MR4ZlEmunLAA8A&source=FB_Page&app=facebook&entry_point=page_cta&fbclid=IwZXh0bgNhZW0CMTAAAR3CBzjaOVj945WrjvqW4WqZojPNCgxKAIed4Ts_AyRcxvxYs9UsFi77gVk_aem_AWaR-McLahJtN6JqKqC48CcTh2r7rY6K6ZZdiS-8CykcwfM1DxYADU9PxavMoUcGPywa-LmXY_ncxDkGaZrwpv5J">
                                <div class="circle_phone flex">
                                    <div class="circle_phone_logo">
                                        <img src="image/phone.svg" alt="">
                                    </div>
                                </div>
                                +242 06 600 00 00
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="menu_hamburger" id="hamburger">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </nav>
    </header>