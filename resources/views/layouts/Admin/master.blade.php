<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AMIK YPAT - @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="Assets/Images/favicon/logoamik.ico">
    <link href="Assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="Assets/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/be49d4b94e.js" crossorigin="anonymous"></script>

        <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="Assets/Admin_lte/Plugin/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="Assets/Admin_lte/dist/css/adminlte.min.css">

    @vite([])
</head>
<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        @include('layouts.Admin.Part.header')

        @include('layouts.Admin.Part.sidebar')

        <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
        @include('layouts.Admin.Part.content_header')
      <!-- /.content-header -->

            <!-- Main content -->
        <div class="content">
        <div class="container-fluid">
        @yield('isi')
         </div>
        </div>



        <!-- jQuery -->
        <script src="Assets/Admin_lte/Plugin/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="Assets/Admin_lte/Plugin/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="Assets/Admin_lte/dist/js/adminlte.min.js"></script>

        <script src="https://kit.fontawesome.com/be49d4b94e.js" crossorigin="anonymous"></script>
    </div>
    @include('layouts.Admin.Part.control_sidebar')
    @include('layouts.Admin.Part.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>
</html>
