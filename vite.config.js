import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // <===================================== CSS ===============================>

                // <---------- FrontEnd  CSS -------------->
                'resources/frontend/css/app.css',
                'resources/frontend/assets/css/bootstrap.min.css',
                'resources/frontend/assets/css/animate.min.css',
                'resources/frontend/assets/css/magnific-popup.css',
                'resources/frontend/assets/css/fontawesome-all.min.css',
                'resources/frontend/assets/css/odometer.min.css',
                'resources/frontend/assets/css/nice-select.css',
                'resources/frontend/assets/css/meanmenu.css',
                'resources/frontend/assets/css/swiper-bundle.min.css',
                'resources/frontend/assets/css/main.css',


                //  <---------- BackEnd  CSS -------------->
                'resources/backend/assets/extra-libs/c3/c3.min.css',
                'resources/backend/assets/libs/chartist/dist/chartist.min.css',
                'resources/backend/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css',
                'resources/backend/dist/css/style.min.css',

                //<------------------------------------------------------------------------- JS ---------------------------------------------------------->

                // <---------- FrontEnd  JS -------------->
                'resources/frontend/js/app.js',
                'resources/frontend/assets/js/jquery.min.js',
                'resources/frontend/assets/js/bootstrap.bundle.min.js',
                'resources/frontend/assets/js/swiper-bundle.min.js',
                'resources/frontend/assets/js/jquery.meanmenu.min.js',
                'resources/frontend/assets/js/wow.min.js',
                'resources/frontend/assets/js/jquery.nice-select.min.js',
                'resources/frontend/assets/js/jquery.scrollUp.min.js',
                'resources/frontend/assets/js/jquery.magnific-popup.min.js',
                'resources/frontend/assets/js/odometer.min.js',
                'resources/frontend/assets/js/appear.min.js',
                'resources/frontend/assets/js/jquery.bxslider.min.js',
                'resources/frontend/assets/js/main.js',

                //  <---------- BackEnd  JS ------------>
                "resources/backend/assets/libs/jquery/dist/jquery.min.js",
                "resources/backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js",
                // <!-- apps -->
                // <!-- apps -->
                "resources/backend/dist/js/app-style-switcher.js",
                "resources/backend/dist/js/feather.min.js",
                "resources/backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js",
                "resources/backend/dist/js/sidebarmenu.js",
                // <!--Custom JavaScript -->
                "resources/backend/dist/js/custom.min.js",
                // <!--This page JavaScript -->
                "resources/backend/assets/extra-libs/c3/d3.min.js",
                "resources/backend/assets/extra-libs/c3/c3.min.js",
                "resources/backend/assets/libs/chartist/dist/chartist.min.js",
                "resources/backend/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js",
                "resources/backend/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js",
                "resources/backend/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js",
                "resources/backend/dist/js/pages/dashboards/dashboard1.min.js",

                //<-- Login -->
                'resources/backend/assets/libs/jquery/dist/jquery.min.js',
                'resources/backend/assets/libs/popper.js/dist/umd/popper.min.js',
                'resources/backend/assets/libs/bootstrap/dist/js/bootstrap.min.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
