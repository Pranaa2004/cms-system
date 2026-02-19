{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script> --}}


<!-- Croppie CSS -->
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css" />

<!-- jQuery (only once, either via Vite or CDN) -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Other Vite bundled scripts -->
@vite([

    'resources/backend/assets/libs/jquery/dist/jquery.min.js',
    'resources/backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js',
    // <!-- apps -->// <!-- apps -->
    'resources/backend/dist/js/app-style-switcher.js',
    'resources/backend/dist/js/feather.min.js',
    'resources/backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js',
    'resources/backend/dist/js/sidebarmenu.js',
    // <!--Custom JavaScript -->
    'resources/backend/dist/js/custom.min.js',
    // <!--This page JavaScript -->
    // 'resources/backend/assets/extra-libs/c3/d3.min.js',
    // 'resources/backend/assets/extra-libs/c3/c3.min.js',
    // 'resources/backend/assets/libs/chartist/dist/chartist.min.js',
    // 'resources/backend/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js',
    'resources/backend/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js',
    'resources/backend/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js',
    // 'resources/backend/dist/js/pages/dashboards/dashboard1.min.js',
    // 'resources/',
    // 'resources/',
    // 'resources/',
    // 'resources/',
    // 'resources/',
    // 'resources/',
    ])

<!-- Croppie JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>

<script src="https://cdn.datatables.net/2.3.5/js/dataTables.js"></script> --}}


<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

<!-- jQuery (required by DataTables and Toastr) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Vite bundled scripts -->
@vite(['resources/backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js', 'resources/backend/dist/js/app-style-switcher.js', 'resources/backend/dist/js/feather.min.js', 'resources/backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js', 'resources/backend/dist/js/sidebarmenu.js', 'resources/backend/dist/js/custom.min.js', 'resources/backend/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js', 'resources/backend/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js'])

<!-- Croppie JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/2.3.5/js/dataTables.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    // Toastr Configuration
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    @if(session('success'))
        toastr.success("{{ session('success') }}");
    @endif

    @if(session('error'))
        toastr.error("{{ session('error') }}");
    @endif

    @if(session('info'))
        toastr.info("{{ session('info') }}");
    @endif

    @if(session('warning'))
        toastr.warning("{{ session('warning') }}");
    @endif

    // Dark/Light Mode Logic
    (function() {
        const theme = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-theme', theme);
        
        $(document).on('click', '#theme-toggle', function() {
            let currentTheme = document.documentElement.getAttribute('data-theme');
            let newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            
            // Update Icon
            if(newTheme === 'dark') {
                $(this).find('i').removeClass('bi-moon-stars').addClass('bi-sun');
            } else {
                $(this).find('i').removeClass('bi-sun').addClass('bi-moon-stars');
            }
        });

        // Initialize icon on page load
        $(document).ready(function() {
            if(localStorage.getItem('theme') === 'dark') {
                $('#theme-toggle').find('i').removeClass('bi-moon-stars').addClass('bi-sun');
            }
        });
    })();
</script>
