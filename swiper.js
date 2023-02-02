console.log('testtesttest');

const swiper = new Swiper('.swiper', {

    // Optional parameters
    direction: 'horizontal', //画像が横向きに並ぶ
    loop: true, //最後の画像(右端)まで行ったときにページネーション右矢印を押すと一番最初の画像(左端)に進む
    speed: 1000, //画像が移り変わるのにかかる時間(移り変わりの滑らかさ)
    effect: 'fade',

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // 自動的に画像が遷移する
    autoplay: {
      delay: 5000,
    },

});