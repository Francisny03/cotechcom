</body>

<footer>
    <div class="footer_items">
        <div class="footer_items_left">
            <h2><span class="text_color">Contactez-</span>Nous</h2>
            <div class="contacter flex">
                <div class="circle_icone flex">
                    <img src="image/phones.svg" alt="">
                </div>
                <div class="contacter_number">
                    <p>+242 06 692 86 86</p>
                    <p>+242 04 072 96 96</p>
                </div>
            </div>
            <div class="contacter flex">
                <div class="circle_icone flex">
                    <img src="image/mail.svg" alt="">
                </div>
                <div class="contacter_number">
                    <p>contact@cotechcom.com</p>
                </div>
            </div>
            <div class="contacter flex">
                <div class="circle_icone flex">
                    <img src="image/placeholder.svg" alt="">
                </div>
                <div class="contacter_number">
                    <p>54, Avenue Félix Eboué,
                        Centre-Ville</p>
                </div>
            </div>


            <br>
            <br>

            <h2><span class="text_color">suivez-</span>nous</h2>
            <div class="follow_icons flex">
                <a href="https://www.facebook.com/Cotechcom">
                    <div class="circle_icone facebook">
                        <img src="image/facebook.svg" alt="">
                    </div>
                </a>
                <a href="https://www.instagram.com/cotechcom/">
                    <div class="circle_icone insta">
                        <img src="image/insta.svg" alt="">
                    </div>
                </a>
                <a href="https://x.com/cotechcom">
                    <div class="circle_icone x">
                        <img src="image/X.svg" alt="">
                    </div>
                </a>
                <a href="https://www.linkedin.com/company/103672188/admin/page-posts/published/">
                    <div class="circle_icone linkedin">
                        <img src="image/link.svg" alt="">
                    </div>
                </a>
            </div>
        </div>

        <div class="footer_items_center">
            <h2>A <span class="text_color">Propos</span></h2>
            <div class="page_link">
                <p><a href="about.php">
                        Qui sommes-nous ?
                    </a>
                </p>
                <p><a href="best_show.php">
                        Nos réalisations
                    </a>
                </p>
            </div>
            <br>
            <br>
            <h2>Nos <span class="text_color">Valeurs</span></h2>
            <div class="values">
                <p><span class="circle_value flex"></span>Innovation</p>
                <p><span class="circle_value"></span>Engagement</p>
                <p><span class="circle_value"></span>Qualité</p>
                <p><span class="circle_value"></span>Responsabilité</p>
            </div>
        </div>
        <div class="footer_items_right flex">
            <img src="image/logo_big.svg" alt="">
        </div>
    </div>

    <div class="border_line"></div>

    <div class="copyright_powered">
        <div class=" copyright">
            <p>COPYRIGHT © 2024 COTEHCOM</p>
        </div>
        <div class="powered">
            <p>Développé par Rêveurs professionnels</p>
        </div>
    </div>

</footer>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".slider_real_bottom .mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".slider_real_bottom .swiper-pagination",
    },

    // Autoplay
    autoplay: {
        delay: 2500, // délai entre chaque diapositive (en millisecondes)
        disableOnInteraction: false, // le défilement automatique ne s'arrête pas lors de l'interaction utilisateur
    },

    // Navigation
    navigation: {
        nextEl: '.slider_real_bottom .swiper-button-next',
        prevEl: '.slider_real_bottom .swiper-button-prev',
    },

});
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".slider_top .swiper", {
    cssMode: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },

    direction: 'horizontal', // horizontal pour les boutons next/prev

    // Activer le mode boucle pour que le défilement soit continu
    loop: true,

    // Autoplay
    autoplay: {
        delay: 5000, // délai entre chaque diapositive (en millisecondes)
        disableOnInteraction: false, // le défilement automatique ne s'arrête pas lors de l'interaction utilisateur
    },
    mousewheel: true,
    keyboard: true,
});
</script>

</html>