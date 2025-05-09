import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/admin/app.css',
                'resources/js/admin/app.js',

                // Admin CSS
                // 'resources/css/admin/bootstrap/bootstrap.min.css',
                // 'resources/css/admin/flag-icons-master/flag-icon.css',
                // 'resources/css/admin/fontawesome/all.css',
                // 'resources/css/admin/tabler-icons/tabler-icons.css',
                // 'resources/css/admin/style.css',
                // 'resources/css/admin/responsive.css',

                // Admin JS
                // 'resources/js/admin/package/jquery-3.6.3.min.js',
                // 'resources/js/admin/bootstrap/bootstrap.bundle.min.js',
                // 'resources/js/admin/simplebar/simplebar.js',
                // 'resources/js/admin/package/script.js',
                // 'resources/js/admin/package/customizer.js',


            ],
            refresh: true,
        }),
    ],
    // resolve: {
    //     alias: {
    //         '@': '/resources',
    //     },
    // },
});
