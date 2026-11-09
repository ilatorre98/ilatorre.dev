import Alpine from 'alpinejs';
import AOS from 'aos';

window.Alpine = Alpine;

/**
 * Store de Alpine para gestionar el modo oscuro / claro.
 *
 * Soporta tres estados: 'light', 'dark' y 'system' (sigue la preferencia
 * del sistema operativo del usuario). La elección se persiste en
 * localStorage y se aplica añadiendo/quitando la clase `dark` en <html>.
 */
Alpine.store('theme', {
    value: localStorage.getItem('theme') ?? 'system',

    init() {
        this.apply();

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
            if (this.value === 'system') {
                this.apply();
            }
        });
    },

    isDark() {
        if (this.value === 'system') {
            return window.matchMedia('(prefers-color-scheme: dark)').matches;
        }

        return this.value === 'dark';
    },

    apply() {
        document.documentElement.classList.toggle('dark', this.isDark());
    },

    set(value) {
        this.value = value;

        if (value === 'system') {
            localStorage.removeItem('theme');
        } else {
            localStorage.setItem('theme', value);
        }

        this.apply();
    },

    toggle() {
        this.set(this.isDark() ? 'light' : 'dark');
    },
});

Alpine.start();

AOS.init({
    duration: 800,
    easing: 'ease-out-cubic',
    once: true,
    offset: 80,
});

