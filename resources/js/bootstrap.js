import axios from 'axios';

// import './admin/bootstrap/bootstrap.bundle.min.js';
// import './admin/simplebar/simplebar.js';
// import './admin/script.js';
// import './admin/customizer.js';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
