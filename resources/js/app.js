import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

/* Show sidebar */
const sidebarBackdrop = document.querySelector('#sidebarBackdrop');
const sidebar = document.querySelector('#sidebar');
const toggleSidebarMobile = document.querySelector('#toggleSidebarMobile');

if ( toggleSidebarMobile ) {
    toggleSidebarMobile.addEventListener('click', () => {
        sidebarBackdrop.classList.toggle('hidden');

        if ( sidebar.classList.contains('left-[-100%]') ) {
            sidebar.classList.replace('left-[-100%]', 'left-0');
        } else {
            sidebar.classList.replace('left-0', 'left-[-100%]');
        }
    });
}

if ( sidebarBackdrop ) {
    sidebarBackdrop.addEventListener('click', (event) => {
        sidebar.classList.replace('left-0', 'left-[-100%]');
        event.target.classList.add('hidden');
    });
}