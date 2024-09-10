<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- wow animate_animated -->
    <link rel="apple-touch-icon" sizes="180x180" href="image/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/favicon/favicon-16x16.png">
    <link rel="manifest" href="image/favicon/site.webmanifest">
    <link rel="mask-icon" href="image/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- swiper, slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css?<?= rand() ?>">
    <link rel="stylesheet" href="css/phone.css?<?= rand() ?>">
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

            <div class="menu_nav flex" id="menuNav">
                <ul>
                    <li class="btn_nav link_color_white"><a href="index.php">Accueil</a></li>
                    <li class="btn_nav link_color_white"><a href="service.php">Services</a></li>
                    <li class="btn_nav link_color_white"><a href="about.php">à Propos</a></li>
                    <li class="btn_nav link_color_white"><a href="contact.php">Contact</a></li>
                    <li class="btn_nav link_color_white contact_number social_media">
                        <div class="circle flex">
                            <a class="flex"
                                href="https://api.whatsapp.com/send?phone=%2B242069321352&context=ARD89EEUoSuYa4Ep1E6d3gR7OP0VIaWKMnGLahXn03sqJqUi1m7ifAZrP6Gw7Rrmo3O1PTG21mWr5_QhDtOSUGUWPwV8oAASo_2HLcM-OUHFx2Q2IeTWYH4h5Uy-vKJ7EhHqAAOQH0q9MR4ZlEmunLAA8A&source=FB_Page&app=facebook&entry_point=page_cta&fbclid=IwZXh0bgNhZW0CMTAAAR3CBzjaOVj945WrjvqW4WqZojPNCgxKAIed4Ts_AyRcxvxYs9UsFi77gVk_aem_AWaR-McLahJtN6JqKqC48CcTh2r7rY6K6ZZdiS-8CykcwfM1DxYADU9PxavMoUcGPywa-LmXY_ncxDkGaZrwpv5J">
                                <div class="circle_phone flex">
                                    <i class="fa-brands fa-whatsapp"></i>
                                    <!-- <div class="circle_phone_logo">
                                    </div> -->
                                </div>
                                +242 06 692 86 86
                            </a>
                        </div>
                    </li>
                    <div class="social_media_all flex">
                        <div class="social_media_items flex facebok">
                            <a href="https://www.facebook.com/Cotechcom"><img src="image/facebook.svg" alt=""></a>
                        </div>
                        <div class="social_media_items flex insta">
                            <a href="https://www.instagram.com/cotechcom/"><img src="image/insta.svg" alt=""></a>
                        </div>
                        <div class="social_media_items flex linkedin">
                            <a href="https://www.linkedin.com/company/103672188/admin/page-posts/published/"><img
                                    src="image/link.svg" alt=""></a>
                        </div>
                        <div class="social_media_items flex twitter">
                            <a href="https://x.com/cotechcom"><img src="image/x.svg" alt=""></a>
                        </div>
                    </div>
                </ul>
            </div>

            <div class="menu_hamburger" id="hamburger">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </nav>
    </header>