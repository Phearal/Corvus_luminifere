/* MENU */
const burgerIcon = document.querySelector("#burger-container");
const nav = document.querySelector("#header-nav");
const closeIcon = document.querySelector("#close-menu");

burgerIcon.addEventListener("click", toggleMenu);
closeIcon.addEventListener("click", toggleMenu);

function toggleMenu() {
    if (nav.classList.contains("mobile")) {
        burgerIcon.classList.toggle("hide");
        nav.style.right = "-100%";
        setTimeout(() => {
            nav.classList.toggle("mobile");
            closeIcon.classList.toggle("hide");
        }, 500); // Attendez la fin de la transition pour changer la classe
    } else {
        closeIcon.classList.toggle("hide");
        burgerIcon.classList.toggle("hide");
        nav.classList.toggle("mobile");
        setTimeout(() => {
            nav.style.right = "0";
        }, 0);
    }
}

/* ANIMATIONS */
const elementsWithAnimation = document.querySelectorAll('.fade-in-top, .fade-in-right, .fade-in-bottom, .fade-in-left, .fade-in');

const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
};

// Création de l'instance de l'Intersection Observer
const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        // Si l'élément est visible
        if (entry.isIntersecting) {
            // entry.classList.add(animation);
            entry.target.style.animationPlayState = 'running';
            observer.unobserve(entry.target);
        }
    });
}, options);

observer.observe(activites);
elementsWithAnimation.forEach(element => {
    observer.observe(element);
});
