console.log('etape2');

// Fonction pour obtenir le nom de fichier sans l'extension et le chemin
function getCurrentPage() {
    const path = window.location.pathname;
    const page = path.split("/").pop();
    return page.split(".")[0];
}

console.log('etape3');

// Fonction pour définir la classe active
function setActiveNav() {
    const currentPage = getCurrentPage();
    const navLinks = document.querySelectorAll('nav ul li a');

    navLinks.forEach(link => {
        const linkPage = link.getAttribute('href').split("/").pop().split(".")[0];
        if (linkPage === currentPage) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

console.log('etape4');

// Appelez la fonction pour définir la classe active lors du chargement du DOM
document.addEventListener('DOMContentLoaded', setActiveNav);

console.log('etape5');


const hamburger = document.getElementById('hamburger');
const menuNav = document.querySelector('.menu_nav');

hamburger.onclick = () => {
    console.log('Hamburger menu clicked');
    hamburger.classList.toggle("open");
    menuNav.classList.toggle("menu_nav_actived"); // Toggle entre les états ouvert/fermé
};

console.log('Menu initialization complete');