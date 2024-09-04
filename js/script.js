console.log('etape2');

document.addEventListener('DOMContentLoaded', function () {
    console.log('etape3');

    // Fonction pour obtenir la page actuelle
    function getCurrentPage() {
        const path = window.location.pathname;
        const page = path.split("/").pop().split(".")[0];
        return page;
    }

    // Fonction pour définir la classe active
    function setActiveNav() {
        const currentPage = getCurrentPage();
        const navLinks = document.querySelectorAll('nav ul li a');

        navLinks.forEach(link => {
            const linkPage = link.getAttribute('href').split("/").pop().split(".")[0];
            if (linkPage === currentPage) {
                link.classList.add('activer');
            } else {
                link.classList.remove('activer');
            }
        });
    }

    setActiveNav();
    console.log('etape4');
});



document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.getElementById('hamburger');
    const menuNav = document.getElementById('menuNav');

    hamburger.onclick = function () {
        console.log('Hamburger clicked');
        hamburger.classList.toggle("open");
        menuNav.classList.toggle("menu_nav_actived");
    };
});


// shadow on navbar
var navBar = document.getElementById("navBar");
window.onscroll = function () {
    if (window.scrollY > 22) {
        navBar.classList.add("scrolled");
    } else {
        navBar.classList.remove("scrolled");
    }
};



// image viewer gallery
document.querySelectorAll(".read_pic_items img").forEach(function (img) {
    img.addEventListener("click", function () {
        document.getElementById("full-image").src = this.src;
        document.getElementById("image-viewer").style.display = "block";
    });
});

document.querySelector("#image-viewer .close").addEventListener("click", function () {
    document.getElementById("image-viewer").style.display = "none";
});