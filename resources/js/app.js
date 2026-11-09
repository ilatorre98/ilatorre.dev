import Alpine from 'alpinejs';
import AOS from 'aos';

window.Alpine = Alpine;
Alpine.start();

AOS.init({
    duration: 800,
    easing: 'ease-out-cubic',
    once: true,
    offset: 80,
});

