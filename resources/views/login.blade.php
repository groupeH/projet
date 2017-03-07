@extends('layouts.layout')
@section('title','Groupe H')
@section('nomPage','Login')

@section('sidebar')


@endsection

@section('content')


        <div class="col s6 offset-s1" style="margin-top:100px;">
            <div class="card blue-grey darken-1">
                <div id="crd" class="card-content white-text red accent-4">
                    <i id="iconlarge" class="material-icons">person</i>
                </div>
                <div class="card-content white-text grey darken-2">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                </div>
                <div class="card-action grey darken-2">
                    <a class="waves-effect waves-light btn btn1">Connexion</a>
                </div>
            </div>
        </div>



@endsection
