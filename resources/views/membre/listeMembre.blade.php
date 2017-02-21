@extends('layouts.layout')
@section('title','Groupe H')
@section('nomPage','Cotisation')

@section('content')
    <!-- Ici on place le contenu de la page -->
    <div id="row1" class="row">
    <!--<h2>@yield('nomPage')</h2> -->
        <div class="col s12 m4">
            <div class="card blue-grey darken-1">
                <div id="crd" class="card-content white-text red accent-4">
                    <span class="card-title card1 card2">Cotisation Membre</span>
                    <span class="card-title card1">5$/an</span>

                </div>
                <div class="card-content white-text grey darken-2">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias atque autem cupiditate deleniti deserunt enim explicabo ipsum maxime nobis nostrum odio, officia perspiciatis quae, quisquam reiciendis rem, saepe voluptates.</p>
                </div>
                <div class="card-action grey darken-2">
                    <a class="waves-effect waves-light btn btn1">Cotiser</a>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text red accent-4">
                    <span class="card-title card1">Dons</span>
                    <span class="card-title card1">10$</span>

                </div>
                <div class="card-content white-text grey darken-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias atque autem cupiditate deleniti deserunt enim explicabo ipsum maxime nobis nostrum odio, officia perspiciatis quae, quisquam reiciendis rem, saepe voluptates.</p>
                </div>
                <div class="card-action grey darken-2">
                    <a class="waves-effect waves-light btn btn1 ">Donation</a>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text red accent-4">
                    <span class="card-title card1">Dons</span>
                    <span class="card-title card1">25$</span>

                </div>
                <div class="card-content white-text grey darken-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias atque autem cupiditate deleniti deserunt enim explicabo ipsum maxime nobis nostrum odio, officia perspiciatis quae, quisquam reiciendis rem, saepe voluptates.</p>
                </div>
                <div class="card-action grey darken-2">
                    <a class="waves-effect waves-light btn btn1">Donation</a>
                </div>
            </div>
        </div>

    </div>
@endsection