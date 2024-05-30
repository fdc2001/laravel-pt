import './bootstrap';
import Swiper from "swiper";


var swiper = new Swiper(".multiple-slide-carousel", {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 20,
    navigation: {
        nextEl: ".multiple-slide-carousel .swiper-button-next",
        prevEl: ".multiple-slide-carousel .swiper-button-prev",
    },
    slideToClickedSlide: true,
    breakpoints: {
        1920: {
            slidesPerView: 4,
            spaceBetween: 30
        },
        1028: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        990: {
            slidesPerView: 2,
            spaceBetween: 0
        }
    }
});

console.log(swiper)
