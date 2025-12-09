<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@vite([
    'resources/frontend/lib/easing/easing.min.js',
    'resources/frontend/lib/waypoints/waypoints.min.js',
    'resources/frontend/lib/owlcarousel/owl.carousel.min.js',
    'resources/frontend/js/main.js',

]);


<script>
    $(document).ready(function() {
        $('#loginPouup').on('shown.bs.modal', function () {
            $('#email').focus();
        });
    });
</script>





