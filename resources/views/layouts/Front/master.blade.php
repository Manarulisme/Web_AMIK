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

    @vite([])
</head>
<body>
    @include('layouts.Front.Part.header')

    @yield('konten')

    @include('layouts.Front.Part.footer')
</body>
</html>
