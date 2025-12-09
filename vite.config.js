import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // <===================================== CSS ===============================>

                // <---------- FrontEnd  CSS -------------->

                //<!-- Libraries Stylesheet -->
                'resources/frontend/lib/animate/animate.min.css',
                'resources/frontend/lib/owlcarousel/assets/owl.carousel.min.css',

                //<!-- Customized Bootstrap Stylesheet -->
                'resources/frontend/css/bootstrap.min.css',

                //<!-- Template Stylesheet -->
                'resources/frontend/css/style.css',


                //  <---------- BackEnd  CSS -------------->
                'resources/backend/assets/extra-libs/c3/c3.min.css',
                'resources/backend/assets/libs/chartist/dist/chartist.min.css',
                'resources/backend/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css',
                'resources/backend/dist/css/style.min.css',

                //<------------------------------------------------------------------------- JS ---------------------------------------------------------->

                // <---------- FrontEnd  JS -------------->
                'resources/frontend/lib/easing/easing.min.js',
                'resources/frontend/lib/waypoints/waypoints.min.js',
                'resources/frontend/lib/owlcarousel/owl.carousel.min.js',
                'resources/frontend/js/main.js',

                //  <---------- BackEnd  JS ------------>
                'resources/backend/js/app.js',
                // "resources/backend/assets/libs/jquery/dist/jquery.min.js",
                "resources/backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js",

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

                //<---SCSS File ---->
                'resources/scss/app.scss',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});



