import Swiper from 'swiper';
import { Autoplay, EffectCreative, Pagination, Controller } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/effect-creative';
import 'swiper/css/pagination';

import './scss/style.scss'; // Move to end to override Swiper defaults

console.log('Vite + WordPress = ❤️');

// Page Loader - Hide after page fully loads with minimum duration
const loadStartTime = Date.now();
const minLoadDuration = 2000; // Minimum 2 seconds

window.addEventListener('load', () => {
    const loader = document.getElementById('pageLoader');
    const wrapper = document.querySelector('.wrapper');

    if (loader) {
        const elapsedTime = Date.now() - loadStartTime;
        const remainingTime = Math.max(0, minLoadDuration - elapsedTime);

        setTimeout(() => {
            loader.classList.add('is-hidden');

            // Show wrapper content after loader fades
            if (wrapper) {
                wrapper.style.opacity = '1';
            }

            // Trigger Hero entrance animations
            setTimeout(() => {
                const heroElements = document.querySelectorAll('.hero-entrance');
                heroElements.forEach(el => {
                    el.classList.add('is-visible');
                });
            }, 100); // Small delay after wrapper appears

            // Remove from DOM after transition
            setTimeout(() => {
                loader.remove();
            }, 500);
        }, remainingTime);
    }
});

document.addEventListener('DOMContentLoaded', () => {
    // Initialize Hero Sliders
    // Initialize Hero Sliders
    const heroSliderRight = new Swiper('.hero__slider--right', {
        modules: [EffectCreative, Controller],
        loop: true,
        speed: 800,
        effect: 'creative',
        creativeEffect: {
            prev: {
                translate: [0, 0, -1],
                shadow: false, // Removed shadow
                zIndex: 0,
                opacity: 0, // Fade out previous
            },
            next: {
                translate: ['120vw', 0, 0],
                shadow: false, // Removed shadow
                zIndex: 10,
            },
        },
        allowTouchMove: false,
    });

    const heroSliderLeft = new Swiper('.hero__slider--left', {
        modules: [Autoplay, EffectCreative, Pagination, Controller],
        loop: true,
        speed: 800,
        effect: 'creative',
        creativeEffect: {
            prev: {
                translate: [0, 0, -1],
                shadow: false, // Removed shadow
                zIndex: 0,
                opacity: 0, // Fade out previous
            },
            next: {
                translate: ['-120vw', 0, 0],
                shadow: false, // Removed shadow
                zIndex: 10,
            },
        },
        pagination: {
            el: '.hero__pagination',
            clickable: true,
        },
        autoplay: {
            delay: 5000, // Increased from 3000 to 5000
            disableOnInteraction: false,
        },
        allowTouchMove: false,
        controller: {
            control: heroSliderRight, // Left controls Right
        },
    });

    // Delay autoplay start until after entrance animations
    heroSliderLeft.autoplay.stop();
    setTimeout(() => {
        heroSliderLeft.autoplay.start();
    }, 2500); // Start 2.5 seconds after page load (after entrance animations)

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

    // Scroll Animation Observer section
    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -20% 0px', // Trigger when element is 20% from bottom
        threshold: 0
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target); // Animate only once
            }
        });
    }, observerOptions);

    const animatedElements = document.querySelectorAll('.js-animate');
    animatedElements.forEach(el => observer.observe(el));
});
