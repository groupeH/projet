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
    <div class="col s3">
        @section('sidebar')
        <!-- sidebar goes here -->
            <ul class="side-nav fixed grey darken-2" id="sidenav">
                <li><img id="logo" src="logo_rouge.png"></li>
                <li><a href="#"><i class="material-icons" id="liens">home</i>Accueil</a></li>
                <li><a href="#"><i class="material-icons" id="liens">account_circle</i>Membres</a></li>
                <li><a href="{{route('liste_responsables')}}"><i class="material-icons" id="liens">account_circle</i>Responsable</a></li>
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

<script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>

<script src="{{ asset('js/materialize.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/toasts.js') }}"></script>

<script>
    $(document).ready(function(){
        $('.slider').slider();

    });
</script>
</body>
</html>