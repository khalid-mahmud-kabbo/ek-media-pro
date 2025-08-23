const header = document.querySelector("header");
const navList = document.querySelector(".nav_list");
const menu = document.querySelector(".menu");

window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
        header.classList.add("bg");
    } else {
        header.classList.remove("bg");
    }
});

menu.addEventListener("click", () => {
    navList.classList.toggle("show");
});

// Animation by scrollReveal

ScrollReveal({
    // this setup of defaults in scrollReveal
    reset: true,
    duration: 500,
    opacity: false,
});

ScrollReveal().reveal("header", {
    origin: "top",
    distance: "200%",
    duration: 1500,
});

ScrollReveal().reveal(".maintitle", {
    origin: "right",
    distance: "-200%",
    duration: 500,
});

ScrollReveal().reveal(".main_btn", {
    origin: "right",
    distance: "-200%",
    duration: 1500,
});

ScrollReveal().reveal(".subtitle", {
    origin: "right",
    distance: "-100%",
    delay: 150,
    duration: 600,
});

ScrollReveal().reveal(".home_img", {
    origin: "right",
    distance: "100%",
    duration: 1500,
});

ScrollReveal().reveal(".about_title, .steps_title", {
    origin: "top",
    distance: "100px",
    duration: 500,
});

ScrollReveal().reveal(".about_subtitle, .steps_subtitle", {
    origin: "left",
    distance: "100px",
    delay: 200,
    duration: 700,
});

ScrollReveal().reveal(".user_props, .app_props", {
    origin: "right",
    distance: "100px",
    duration: 1000,
});

ScrollReveal().reveal(".user_image", {
    origin: "right",
    distance: "100%",
    duration: 1500,
});

ScrollReveal().reveal(".app_image", {
    origin: "left",
    distance: "100%",
    duration: 1500,
});

ScrollReveal().reveal(".card_img.one, .card_img.three", {
    origin: "right",
    distance: "100%",
    duration: 1500,
});

ScrollReveal().reveal(".card_img.two", {
    origin: "left",
    distance: "100%",
    duration: 1500,
});

ScrollReveal().reveal(".card_txt.one, .card_txt.three", {
    origin: "left",
    distance: "100%",
    duration: 1500,
});

ScrollReveal().reveal(".card_txt.two", {
    origin: "right",
    distance: "100%",
    duration: 1500,
});

ScrollReveal().reveal(".card.one", {
    origin: "left",
    distance: "150px",
    delay: 1,
    duration: 1500,
});

ScrollReveal().reveal(".card.two", {
    origin: "right",
    distance: "150px",
    delay: 1,
    duration: 1500,
});
