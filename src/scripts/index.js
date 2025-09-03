import Alpine from 'alpinejs';
import persist from '@alpinejs/persist' 
import './componentLoader'

Alpine.plugin(persist);

document.addEventListener('alpine:init', () => {
    Alpine.store('sidebar', {
        showSidebar: false,
    })
});

window.Alpine = Alpine;

Alpine.start();