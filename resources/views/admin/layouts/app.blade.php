<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="@yield('description')">
    <meta name="keywords"
        content="@yield('keywords')">
    <meta name="author" content="pixelstrap">

    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <link rel="icon" href="{{asset('backend/assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.png')}}" type="image/x-icon">
    <title>@yield('title')</title>
    @yield('css')

</head>

<body class="dark-only">


    <!-- pre-loader start -->
    <div class="loader-wrapper">
        <img src="{{asset('backend/assets/images/loader/loader.gif')}}" alt="loader gif">
    </div>
    <!-- pre-loader End -->

    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper modern-type" id="pageWrapper">
        <!-- Page Header Start-->
            @include('admin.layouts.header')
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
                @include('admin.layouts.sidebar')
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- Container-fluid Ends-->

                <div class="container-fluid">
                    <!-- footer start-->
                        @include('admin.layouts.footer')
                </div>
            </div>
        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="content">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="customizer-links"></div> -->
      <!-- latest jquery-->
        <script src="{{ asset('admin/js/jquery-3.5.1.min.js') }}" defer></script>
        <!-- Bootstrap js-->
        <script src="{{ asset('admin/js/bootstrap/bootstrap.bundle.min.js') }}" defer></script>
        <!-- feather icon js-->
        <script src="{{ asset('admin/js/icons/feather-icon/feather.min.js') }}" defer></script>
        <script src="{{ asset('admin/js/icons/feather-icon/feather-icon.js') }}" defer></script>


        <!-- customizer js start  -->
        <script src="{{ asset('admin/js/customizer.js') }}" defer></script>
        <!-- customizer js start  -->
        <!-- scrollbar js-->
        <script src="{{ asset('admin/js/scrollbar/simplebar.js') }}" defer></script>
        <script src="{{ asset('admin/js/scrollbar/custom.js') }}" defer></script>

        <!-- Sidebar jquery-->
        <script src="{{ asset('admin/js/config.js') }}" defer></script>

        <!-- Plugins JS start-->
        <script src="{{ asset('admin/js/sidebar-menu.js') }}" defer></script>
        <script src="{{ asset('admin/js/notify/bootstrap-notify.min.js') }}" defer></script>

        <script src="{{ asset('admin/js/notify/index.js') }}" defer></script>
        <script src="{{ asset('admin/js/typeahead/handlebars.js') }}" defer></script>
        <script src="{{ asset('admin/js/typeahead/typeahead.bundle.js') }}" defer></script>
        <script src="{{ asset('admin/js/typeahead/typeahead.custom.js') }}" defer></script>
        <script src="{{ asset('admin/js/typeahead-search/handlebars.js') }}" defer></script>
        <script src="{{ asset('admin/js/typeahead-search/typeahead-custom.js') }}" defer></script>


        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="../assets/js/script.js"></script>
    @yield('js')
</body>

</html>
