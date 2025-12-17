import Swiper from 'swiper';
import { Autoplay, EffectCreative, Pagination, Controller } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/effect-creative';
import 'swiper/css/pagination';

import './scss/style.scss'; // Move to end to override Swiper defaults

console.log('Vite + WordPress = ❤️');

document.addEventListener('DOMContentLoaded', () => {
    // Initialize Hero Sliders
    const heroSliderRight = new Swiper('.hero__slider--right', {
        modules: [EffectCreative, Controller], // Autoplay削除
        loop: true,
        speed: 800,
        effect: 'creative',
        creativeEffect: {
            prev: {
                translate: [0, '100%', 0],
                shadow: true,
            },
            next: {
                translate: [0, '-100%', 0],
                shadow: true,
            },
        },
        // autoplay removed (Controlled by Left)
        allowTouchMove: false,
    });

    const heroSliderLeft = new Swiper('.hero__slider--left', {
        modules: [Autoplay, EffectCreative, Pagination, Controller],
        loop: true,
        speed: 800,
        effect: 'creative',
        creativeEffect: {
            prev: {
                translate: [0, '100%', 0],
                shadow: true,
            },
            next: {
                translate: [0, '-100%', 0],
                shadow: true,
            },
        },
        pagination: {
            el: '.hero__pagination',
            clickable: true,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        allowTouchMove: false,
        controller: {
            control: heroSliderRight, // 左が右を制御
        },
    });

    // 双方向制御や手動割り当ては削除 (controllerオプションで指定)

    // Hamburger Menu Toggle
    const hamburger = document.querySelector('.header__menu-trigger');
    const globalMenu = document.querySelector('.global-menu');

    if (hamburger && globalMenu) {
        hamburger.addEventListener('click', function () {
            this.classList.toggle('is-active');
            globalMenu.classList.toggle('is-active');
        });
    }
});
