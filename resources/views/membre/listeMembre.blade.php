@extends('layouts.layout')
@section('title','Groupe H')
@section('nomPage','Cotisation')



@if(Session::has('id_Membre'))
    {{ Session::get('id_Membre') }}
@endif


@section('content')
    <!-- Ici on place le contenu de la page -->
    <div id="row1" class="row">
    <!--<h2>@yield('nomPage')</h2> -->
        <div class="col s12 m4">
            <div class="card blue-grey darken-1">
                <div id="crd" class="card-content white-text red accent-4">
                    <span class="card-title card1 card2">Cotisation</span>
                    <span class="card-title card1">7€/an</span>

                </div>
                <div class="card-content white-text grey darken-2">
                    <p> Adhérez à notre association cela ne coûte que 7€ par an. Vous deviendrez un membre de notre association et vous auriez des avantages tels que des prix sur nos évènements. </p>
                </div>
                <div class="card-action grey darken-2">
                    <a href="{{route('createCotisation')}}" class="waves-effect waves-light btn btn1">Cotiser</a>
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text red accent-4">
                    <span class="card-title card1">Dons</span>
                    <span class="card-title card1"></span>

                </div>
                <div class="card-content white-text grey darken-2">
                    <p>Faite un don pour soutenir notre association ! Un don nous permettra d'améliorer nos performances</p>
                </div>
                <div class="card-action grey darken-2">

                    <a href="{{route('createDon')}}"class="waves-effect waves-light btn btn1 ">Donation</a>
                </div>
            </div>
        </div>


    </div>

    <script>

        var active = document.getElementById("cotti");
        active.className += "active";

    </script>
@endsection