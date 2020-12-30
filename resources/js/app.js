/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
window.$ = window.jQuery = require('jquery');
//
require('bootstrap');
require('bootstrap/js/src');
require('jquery/dist/jquery.slim');
window.Swiper = require('swiper/swiper-bundle.min.js');
require("./_mix");
// import Swiper JS
// import Swiper from 'swiper';
var swiper = new Swiper('#main-slide', {
    cssMode: true,
    loop: true,
    autoplay: {
        delay: 20000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination'
    },
    mousewheel: true,
    keyboard: true,
});

var verticalSlide = new Swiper('.slider-vertical', {
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    direction: 'vertical',
    freeMode: true,
    autoHeight: true,
});