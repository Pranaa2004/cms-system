import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // <---------- CSS -------------->
                'resources/frontend/css/app.css',
                'resources/assets/extra-libs/c3/c3.min.css',
                'resources/assets/libs/chartist/dist/chartist.min.css',
                'resources/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css',
                'resources/dist/css/style.min.css',

                //<---------- JS ---------------->
                'resources/frontend/js/app.js',
                'resources/assets/libs/jquery/dist/jquery.min.js',
                'resources/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js',
                //<!-- apps -->
                'resources/dist/js/app-style-switcher.js',
                'resources/dist/js/feather.min.js',
                'resources/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js',
                'resources/dist/js/sidebarmenu.js',
                // <!--Custom JavaScript -->
                'resources/dist/js/custom.min.js',
                // <!--This page JavaScript -->
                'resources/assets/extra-libs/c3/d3.min.js',
                'resources/assets/extra-libs/c3/c3.min.js',
                'resources/assets/libs/chartist/dist/chartist.min.js',
                'resources/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js',
                'resources/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js',
                'resources/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js',
                'resources/dist/js/pages/dashboards/dashboard1.min.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
