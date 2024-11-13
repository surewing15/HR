<!DOCTYPE html>
<html lang="zxx" class="js">
@include('theme.header')

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="nk-app-root">
        <div class="nk-main ">
            @include('theme.sidemenu')
            <div class="nk-wrap ">
                @include('theme.header-top')
                <div class="nk-content ">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                @extends('theme.footer')
            </div>
        </div>
    </div>
    <script src="/assets/js/bundle.js?ver=3.0.3"></script>
    <script src="/assets/js/scripts.js?ver=3.0.3"></script>
    <script src="/assets/js/charts/chart-ecommerce.js?ver=3.0.3"></script>
    <script src="/assets/js/charts/chart-lms.js?ver=3.0.3"></script>
    <script src="/assets/js/libs/datatable-btns.js?ver=3.0.3"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="/vendor/assets/js/example-sweetalert.js?ver=3.0.3"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Saved Successfully',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            });
        </script>
    @endif



</body>

</html>
