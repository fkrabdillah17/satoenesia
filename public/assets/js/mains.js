// Swiper Home
const swiper = new Swiper(".swiper", {
    // Optional parameters
    direction: "horizontal",
    loop: true,
    effect: "flip",
    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-btn-next",
        prevEl: ".swiper-btn-prev",
    },
});

// Swiper Product
const swiper_product = new Swiper(".swiper-product", {
    // Optional parameters
    direction: "horizontal",
    loop: true,
    effect: "cards",
    grabCursor: true,
    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-btn-next",
        prevEl: ".swiper-btn-prev",
    },
});

// Navigation
var pathname = window.location.pathname;
if (pathname == "/") {
    $(function () {
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 10) {
                $(".navbar").addClass("bg-navbar");
                $(".navbar").removeClass("bg-transparent");
            } else {
                $(".navbar").addClass("bg-transparent");
                $(".navbar").removeClass("bg-navbar");
            }
        });
    });
}
