import './bootstrap';
import Alpine from 'alpinejs'
 
window.Alpine = Alpine

Alpine.data('menu', () => ({
    open: false,
    handleResize() {
        // Open menu automatically if screen is large (Tailwind md breakpoint)
        this.open = window.innerWidth >= 768;
    },
    init() {
        // Run on initialization
        this.handleResize();
        // Listen to window resize
        window.addEventListener('resize', () => this.handleResize());
    }
}));
 
Alpine.start()