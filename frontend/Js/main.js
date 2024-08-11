const swiper = new Swiper('.swiper', {
    autoplay: {
        dalay: 100,
        disableOnIntraction : false,
    },

    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

});


