import './bootstrap';

import Alpine from 'alpinejs';
import Glide, { Autoplay, Controls, Breakpoints } from '@glidejs/glide/dist/glide.modular.esm'
import WOW from 'wow.js/dist/wow.min.js'

document.addEventListener('DOMContentLoaded', (event) => {
    if (document.querySelector('.glide')) {
        const carousel = new Glide('.glide', {
            type: 'slider',
            autoplay: 10000,
            hoverpause: true,
            perView: 1,
            gap: 0,
            animationDuration: 2000,
            animationTimingFunc: 'ease-in-out'
        });
        carousel.mount({Autoplay, Controls});
    }
});

new WOW().init();

window.Alpine = Alpine;

Alpine.start();
