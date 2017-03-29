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
    <meta name="_token" content="{{ csrf_token() }}"/>
</head>


<body class="grey lighten-1">

@include('layouts.partials.nav')

<div class="row">
    <div class="col s3">
        @section('sidebar')
        <!-- sidebar goes here -->
        @if(Session::has('id_Responsable'))
            <ul class="side-nav fixed grey darken-2" id="sidenav">
                <li><img id="logo" src="logo_rouge.png"></li>
                <li id="home"><a href="{{route('accueil')}}"><i class="material-icons" id="liens">home</i>Accueil</a></li>
                <li id="mem"><a href="#"><i class="material-icons" id="liens">account_circle</i>Membres</a></li>
                <li id="res"><a href="#"><i class="material-icons" id="liens">account_circle</i>Responsables</a></li>
                <li id="event"><a href="#"><i class="material-icons" id="liens">event</i>Assemblées</a></li>
                <li id="cotti"><a href="{{route('cotiser')}}"><i class="material-icons" id="liens">credit_card</i>Cotisation</a></li>
            </ul>
        @elseif(Session::has('id_Membre'))
             <ul class="side-nav fixed grey darken-2" id="sidenav">
                <li><img id="logo" src="logo_rouge.png"></li>
                <li id="home"><a href="{{route('accueil')}}"><i class="material-icons" id="liens">home</i>Accueil</a></li>
                <li id="res"><a href="#"><i class="material-icons" id="liens">account_circle</i>Responsables</a></li>
                <li id="event"><a href="{{route('listeAssembleesMembre')}}"><i class="material-icons" id="liens">event</i>Assemblées</a></li>
                <li id="cotti"><a href="{{route('cotiser')}}"><i class="material-icons" id="liens">credit_card</i>Cotisation</a></li>
            </ul>
        @elseif(Session::has('id_Utilisateur'))
            <ul class="side-nav fixed grey darken-2" id="sidenav">
                <li><img id="logo" src="logo_rouge.png"></li>
                <li id="home"><a href="{{route('accueil')}}"><i class="material-icons" id="liens">home</i>Accueil</a></li>
                <li id="res"><a href="#"><i class="material-icons" id="liens">account_circle</i>Responsables</a></li>
                <li id="cotti"><a href="{{route('cotiser')}}"><i class="material-icons" id="liens">credit_card</i>Cotisation</a></li>
            </ul>
        @else
            <ul class="side-nav fixed grey darken-2" id="sidenav">
                <li><img id="logo" src="logo_rouge.png"></li>
                <p style="text-align: center">Veuillez vous connecter pour acceder aux fonctionnalitées : </p>
                <li id="connexion"><a href="{{ route('login') }}"><i class="material-icons" id="liens">home</i>Connexion</a></li>
                <li id="connexion"><a href="{{ route('register') }}"><i class="material-icons" id="liens">home</i>Creer un compte</a></li>
            </ul>
        @endif
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