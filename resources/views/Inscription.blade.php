@extends('layouts.layout2')
@section('title','Groupe H')
@section('nomPage','Inscription')
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

@section('content1')
    <div class="row">
        <form class="col s12">
            <div class="row">
                <div >
                    <p>Responsable du site</p>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="prenom" type="text" class="validate">
                    <label for="prenom">Prénom</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">perm_identity</i>
                    <input id="nom" type="text" class="validate">
                    <label for="nom">Nom</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">lock_outline</i>
                    <input id="password" type="password" class="validate">
                    <label for="password">Mot de passe</label>

                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input id="password" type="password" class="validate">
                    <label for="password">Confirmer le mot de passe</label>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('content2')
    <div class="row">
        <form class="col s12">
            <div class="row">
                <div >
                    <p>Le site internet </p>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">http</i>
                    <input id="adresse" type="text" class="validate">
                    <label for="adresse">Adresse du site souhaitée</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="nomAssoc" type="text" class="validate">
                    <label for="nomAssoc">Nom de l'association</label>
                </div>


                <div class="input-field col s12">
                    <select>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label>Materialize Select</label>
                </div>

                <div class="input-field col s6">
                    <a class="btn btn1">Valider</a>
                </div>
            </div>
        </form>
    </div>
@endsection