<!DOCTYPE html>
<html dir="rtl" lang="fa">
<!--Head::start-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    @vite('resources/css/vendors/bootstrap/bootstrap.rtl.css')
    @vite('resources/css/vendors/fontawesome/fontawesome.css')
    @vite('resources/css/style.css')
    @vite('resources/css/app.scss')
</head>
<!--Head::end-->

<!--Body::start-->
<body class="tw-overflow-x-hidden">
@yield('content')
@vite('resources/js/app.js')
@yield('js')
</body>
<!--Body::end-->

</html>
