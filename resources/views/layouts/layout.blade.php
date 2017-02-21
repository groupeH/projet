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
    <div class="col s3">
        @section('sidebar')
        <!-- sidebar goes here -->
            <ul class="side-nav fixed grey darken-2" id="sidenav">
                <li><img id="logo" src="logo_rouge.png"></li>
                <li><a href="#"><i class="material-icons" id="liens">home</i>Accueil</a></li>
                <li><a href="#"><i class="material-icons" id="liens">account_circle</i>Membres</a></li>
                <li><a href="#"><i class="material-icons" id="liens">account_circle</i>Responsable</a></li>
                <li><a href="#"><i class="material-icons" id="liens">event</i>Evenements</a></li>
                <li><a href="#"><i class="material-icons" id="liens">message</i>Messages</a></li>
                <li><a href="#"><i class="material-icons" id="liens">credit_card</i>Cottisation</a></li>
            </ul>

        @show
    </div>
    <div class="col s9">

        @yield('content')

    </div>
</div>

</body>
</html>