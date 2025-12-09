<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@vite([

    'resources/frontend/assets/js/jquery.min.js',
    'resources/frontend/assets/js/bootstrap.bundle.min.js',
    'resources/frontend/assets/js/swiper-bundle.min.js',
    'resources/frontend/assets/js/jquery.meanmenu.min.js',
    // 'resources/frontend/assets/js/wow.min.js',

    'resources/frontend/assets/js/jquery.nice-select.min.js',
    'resources/frontend/assets/js/jquery.scrollUp.min.js',
    'resources/frontend/assets/js/jquery.magnific-popup.min.js',
    'resources/frontend/assets/js/odometer.min.js',
    'resources/frontend/assets/js/appear.min.js',
    // 'resources/frontend/assets/js/main.js',
    'resources/frontend/js/app.js',

]);


<script>
    $(document).ready(function() {
        $('#loginPouup').on('shown.bs.modal', function () {
            $('#email').focus();
        });
    });
</script>
