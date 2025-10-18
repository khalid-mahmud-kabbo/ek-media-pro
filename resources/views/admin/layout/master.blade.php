<!DOCTYPE html>
<html lang="en">
@include('admin.layout.includes.head')

<body>
    @include('admin.layout.includes.sidebar')
    <div class="main-content">
        @include('admin.layout.includes.header')
        <div class="page-content-wrap">
            <!-- Container Fluid-->
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('admin.layout.includes.footer')
        </div>

    </div>
    @include('admin.layout.includes.logout_modal')
    @include('admin.layout.includes.script')
    @include('sweetalert::alert')
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
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
        @if (Session::has('success'))
            toastr.success("{{ session('success') }}");
        @endif
        @if (Session::has('error'))
            toastr.error("{{ session('error') }}");
        @endif
        @if (Session::has('info'))
            toastr.info("{{ session('info') }}");
        @endif
        @if (Session::has('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
    @if (@$errors->any())
        <script>
            "use strict";
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        </script>
    @endif
</body>

</html>
