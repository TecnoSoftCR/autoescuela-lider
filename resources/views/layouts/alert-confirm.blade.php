@if(session()->has('msg'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire({
                // toast: true,
                // position: 'top-end',
                icon: "{{ session('icon') }}",
                title: "{{ session('msg') }}",
                showConfirmButton: true,
                // timer: 3000
            });
        });
    </script>
@endif