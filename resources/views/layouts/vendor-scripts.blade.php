<!-- JAVASCRIPT -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if (isset($getUser) && $getUser->active == 0)
            Swal.fire({
                title: 'Your Account is Unactivated by Superadmin',
                text: 'Sorry, you cannot access this app because your permission is denied.',
                type: 'warning',
                confirmButtonColor: '#3b5de7',
                showCloseButton: false,
                allowOutsideClick: false,
                allowEscapeKey: false
            }).then(() => {
                window.location.href = '/';
            });
        @endif
    });
</script>
<script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
<script src="{{ URL::asset('build/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
@stack('script')
