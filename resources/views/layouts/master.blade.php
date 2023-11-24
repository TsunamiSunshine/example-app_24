<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="style/images/favicon.png">
    <title>Hygge - @yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link href={{ asset('assets/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/css/plugins.css') }} rel="stylesheet">
    <link href={{ asset('assets/css/style.css') }} rel="stylesheet">
    <link href={{ asset('assets/css/color/green.css') }} rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic'
        rel='stylesheet' type='text/css'>
    <link href={{ asset('assets/type/icons.css') }} rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <div class="body-wrapper">
        @include('layouts.header')

        @yield('content')
        @yield('formSendRegister')

        @include('layouts.footer')
        <div id="share-bar"></div>
    </div>

        <script src={{ asset('assets/js/jquery.min.js') }}></script>
        <script src={{ asset('assets/js/bootstrap.min.js') }}></script>
        <script src={{ asset('assets/js/plugins.js') }}></script>
        <script src={{ asset('assets/js/jquery.themepunch.tools.min.js') }}></script>
        <script src={{ asset('assets/js/scripts.js') }}></script>
</body>

</html>
