<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
        });
        setTimeout(function() {
            $('.swal2-container').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 2000);
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: '{{ session('error') }}',
        });
        setTimeout(function() {
            $('.swal2-container').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 2000);
    </script>
@endif

