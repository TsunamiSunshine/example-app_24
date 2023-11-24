<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard - @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href={{ asset('assets/admin/css/loader.css') }} rel="stylesheet" type="text/css" />
    <script src={{ asset('assets/admin/js/loader.js') }}></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href={{ asset('assets/admin/bootstrap/css/bootstrap.min.css') }} rel="stylesheet" type="text/css" />
    <link href={{ asset('assets/admin/css/plugins.css') }} rel="stylesheet" type="text/css" />
    <link href={{ asset('assets/admin/plugins/perfect-scrollbar/perfect-scrollbar.css') }} rel="stylesheet"
        type="text/css" />
    <link href={{ asset('assets/admin/plugins/highlight/styles/monokai-sublime.css') }} rel="stylesheet"
        type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href={{ asset('assets/admin/plugins/apex/apexcharts.css') }} rel="stylesheet" type="text/css">
    <link href={{ asset('assets/admin/css/dashboard/dash_1.css') }} rel="stylesheet" type="text/css" />
    <link href={{ asset('assets/admin/plugins/file-upload/file-upload-with-preview.min.css') }} rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('assets/admin/css/slider/slider.css')}}" rel='stylesheet' type="text/css" />
    <link href="{{asset('assets/admin/css/slider/plugins.css')}}" rel='stylesheet' type="text/css" />
    <link href="{{asset('assets/admin/css/slider/sliderplugs.css')}}" rel='stylesheet' type="text/css" />
    <link href={{ asset('assets/type/icons.css') }} rel="stylesheet">




</head>

<body>

    @yield('content')


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src={{ asset('assets/admin/js/libs/jquery-3.1.1.min.js') }}></script>
    <script src={{ asset('assets/admin/bootstrap/js/popper.min.js') }}></script>
    <script src={{ asset('assets/admin/bootstrap/js/bootstrap.min.js') }}></script>
    <script src={{ asset('assets/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}></script>
    <script src={{ asset('assets/admin/js/app.js') }}></script>

    <script src={{asset('assets/admin/js/script.js')}}></script>
    <script src={{asset('assets/admin/js/slider/plugins.js')}}></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src={{ asset('assets/admin/js/custom.js') }}></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src={{ asset('assets/admin/plugins/apex/apexcharts.min.js') }}></script>
    <script src={{ asset('assets/admin/js/dashboard/dash_1.js') }}></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <script src={{ asset('assets/js/jquery.min.js') }}></script>
    <script src={{ asset('assets/js/bootstrap.min.js') }}></script>
    <script src={{ asset('assets/js/plugins.js') }}></script>
    <script src={{ asset('assets/js/jquery.themepunch.tools.min.js') }}></script>
    <script src={{ asset('assets/js/scripts.js') }}></script>
    <script src={{ asset('assets/admin/plugins/file-upload/file-upload-with-preview.min.js') }}></script>



</body>

</html>
