</body>

<br>
<br>
<br>

footer test

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
        delay: 250000, // délai entre chaque diapositive (en millisecondes)
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