import './bootstrap';

// import './package/jquery-3.6.3.min.js';
import jQuery from 'jquery';
window.$ = jQuery;

import './bootstrap/bootstrap.bundle.min.js';
import './simplebar/simplebar.js';
import './package/script.js';
import './package/customizer.js';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
