<!DOCTYPE html>
<html>
<head >
    <title>Projet - @yield('title')</title>

    <!--Including Materialize FrameWork from Google-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>


    <!-- Icon Materialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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

</body>
</html>