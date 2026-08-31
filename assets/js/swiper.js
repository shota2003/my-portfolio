document.addEventListener("DOMContentLoaded", () => {
    new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        scrollbar: {
            el: '.swiper-scrollbar',
        },

        effect: 'coverflow',
        coverflowEffect: {
            rotate: 30,
            slideShadows: false,
        },
        depth: 100,
    });
});