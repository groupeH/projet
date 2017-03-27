<!DOCTYPE html>
<html>
<head >
    <title>Projet - @yield('title')</title>


    <!--Including Materialize FrameWork from Google-->
    <!-- Compiled and minified CSS -->

    <!-- Icon Materialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" type="text/css">


    <!-- Feuille de style .css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

</head>


<body class="grey lighten-1">

@include('layouts.partials.nav')

<div class="row">
    <div class="col s6">

        @yield('content1')

    </div>

    <div class="col s6">

        @yield('content2')

    </div>
</div>
<script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>

<script src="{{ asset('js/materialize.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/toasts.js') }}"></script>
</body>
</html>