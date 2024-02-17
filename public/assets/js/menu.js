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