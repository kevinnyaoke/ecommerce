<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <!-- <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" /> -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>Home Page - Shopper</title>

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome/4.7.0/css/font-awesome.min.css') }}"/> -->

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/images/favicon.ico')}}">
    <link href="{{asset('frontend/css/bootstrap.css?v=1.0')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/fonts/fontawesome/css/fontawesome-all.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('frontend/plugins/fancybox/fancybox.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('frontend/plugins/owlcarousel/assets/owl.theme.default.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/plugins/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/ui.css?v=1.0')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet"
        media="only screen and (max-width: 1200px)" />



</head>

<body>
    @include('user.partials.header')
    <!-- @include('admin.partials.sidebar') -->
    <main class="app-content">
        @yield('content')



        <!-- jQuery -->
        <script src="{{asset('frontend/js/jquery-2.0.0.min.js')}}"></script>

        <!-- Bootstrap4 files-->
        <script src="{{asset ('frontend/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Font awesome 5 -->

        <!-- plugin: fancybox  -->
        <script src="{{asset ('frontend/plugins/fancybox/fancybox.min.js')}}"></script>

        <!-- plugin: owl carousel  -->
        <script src="{{asset ('frontend/plugins/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- custom style -->

        <!-- custom javascript -->
        <script src="{{asset ('frontend/js/script.js')}}"></script>

        <script>
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        });
        // jquery end
        </script>
</body>

</html>