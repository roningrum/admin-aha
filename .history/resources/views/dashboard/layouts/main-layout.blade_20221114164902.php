<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="csrf" content="{{ csrf_token() }}">
    <title>Beranda Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href=" https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/adminlte.css">
    <link rel="stylesheet" href="/css/custom.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
    {{-- trix --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    {{-- toast --}}
    <link href="/css/toastr.css" rel="stylesheet">

    <style type="text/css" href="/css/custom.css"></style>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        {{-- @include('sweetalert::alert') --}}

        <!-- Navbar -->
        @include('dashboard.partials.navbar-main')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('dashboard.partials.sidebar-menu')

        <!-- Content Wrapper. Contains page content -->
        @yield('content')

        <!-- /.content-wrapper -->
        @include('dashboard.partials.footer-main')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src='/plugins/jquery/jquery.min.js'></script>
    <!-- jQuery UI 1.11.4 -->
    <script src='/plugins/jquery-ui/jquery-ui.min.js'></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src='/plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
    <!-- Sparkline -->
    <script src='/plugins/sparklines/sparkline.js'></script>
    <!-- jQuery Knob Chart -->
    <script src='/plugins/jquery-knob/jquery.knob.min.js'></script>
    <!-- daterangepicker -->
    <script src='/plugins/moment/moment.min.js'></script>
    <script src='/plugins/daterangepicker/daterangepicker.js'></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src='/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
    <!-- Summernote -->
    <script src='/plugins/summernote/summernote-bs4.min.js'></script>
    <!-- overlayScrollbars -->
    <script src='/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
    <!-- AdminLTE App -->
    <script src='/js/adminlte.js'></script>
    <script type="text/javascript" src='/js/trix.js'></script>
    <script src='/js/toastr.js'></script>
    {{-- Page specific script --}}
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()
        })
    </script>
</body>

</html>
