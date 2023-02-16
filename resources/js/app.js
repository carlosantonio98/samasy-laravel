import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

/* Show sidebar */
const sidebarBackdrop = document.querySelector('#sidebarBackdrop');
const sidebar = document.querySelector('#sidebar');
const toggleSidebarMobile = document.querySelector('#toggleSidebarMobile');

toggleSidebarMobile.addEventListener('click', () => {
    sidebarBackdrop.classList.toggle('hidden');
    sidebar.classList.toggle('hidden');
});

sidebarBackdrop.addEventListener('click', (event) => {
    event.target.classList.add('hidden');
    sidebar.classList.add('hidden');
});