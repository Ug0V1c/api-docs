import Alpine from 'alpinejs';
import persist from '@alpinejs/persist' 
import './componentLoader'

Alpine.plugin(persist);

window.Alpine = Alpine;

Alpine.start();