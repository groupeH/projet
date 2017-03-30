@extends('layouts.layout')
@section('title','Groupe H')
@section('nomPage','Paiement')

@section('content')

    @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    <!-- Ici on place le contenu de la page -->
    <div id="row1" class="row">
        <h4>Paiement de l'abonnement :</h4>
    <!--<h2>@yield('nomPage')</h2> -->

        <div class="card blue-grey darken-1">
            <div id="crd" class="card-content white-text red accent-4">
                <span class="card-title card1 card2">Information de la carte</span>
            </div>

            <div class="card-content white-text grey darken-2">
                <!-- ouverture du formulaire -->
                {{ Form::open(array('route' => 'cotisation.store','method'=>'post')) }}



                <table>
                    <tbody>
                    <tr>
                        <td>
                            type d'abonnement
                        </td>
                        <td>
                            <p>
                            <form name="form" id="typeF">


                                <select name="typeA" style="display:inline" id="typeA" onChange="addInput(this)">
                                    <option value="1" >-12 ans</option>
                                    <option value="2" >12-25</option>
                                    <option value="3">25 et +</option>
                                    <option value="4">retraité</option>
                                </select>
                            </form>
                            </p>

                        </td>
                    </tr>
                    <tr>

                        <td>
                            prix

                        </td>
                        <td>
                            <div id="typeB"></div>


                        </td>
                    </tr>
                    <tr>
                        <td>
                            carte
                        </td>
                        <td>
                            <select name="assembleePrivee" style="display: inline">
                                <option value="MasterCard">MasterCard</option>
                                <option value="Visa">Visa</option>
                                <option value="Bleue">Bleue</option>

                            </select>


                        </td>
                    </tr>
                    <tr>
                        <!-- code Label et champ pour la partie nom du titulaire -->
                        <td>
                            Nom du Titulaire
                        </td>
                        <td>
                            <div class="form-group{{ $errors->has('nomTitulaire') ? 'has-error' : '' }}">
                                <input type="text" name="nomTitulaire" class="form-control" placeholder="ex : Dupont">
                                {!! $errors->first('nomTitulaire','<p class="help-block">:message</p>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <!-- code Label et champ pour la partie numéro de la Carte bleue -->
                        <td>
                            Numéro de Carte
                        </td>
                        <td>
                            <div class="form-group{{ ($errors->has('numCarte')) ? $errors->first('numCarte') : '' }}">
                                <input type="text" name="numCarte" class="form-control" placeholder="ex : 4959000...">
                                {!! $errors->first('numCarte','<p class="help-block">:message</p>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <!-- code Label et champ pour la partie date d'expiration -->
                        <td>
                            Date d'expiration de la carte
                        </td>
                        <td>
                            <div class="form-group{{ ($errors->has('dateCarte')) ? $errors->first('dateCarte') : '' }}">
                                <input type="date" name="dateCarte" class="form-control" placeholder="ex : 01/01/2000">
                                {!! $errors->first('dateCarte','<p class="help-block">:message</p>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <!-- code Label et champ pour la partie cryptogramme visuel -->
                        <td>
                            Cryptogramme visuel
                        </td>
                        <td>
                            <div class="form-group{{ ($errors->has('crypto')) ? $errors->first('crypto') : '' }}">

                                <input type="text" name="crypto" class="form-control" placeholder="ex : 001">
                                {!! $errors->first('crypto','<p class="help-block">:message</p>') !!}
                            </div>
                        </td>

                    </tbody>
                </table>
                <div class="card-action grey darken-2">
                    {{ Form::submit('Valider le paiement', array('class'=>'btn btn1 waves-effect waves-light')) }}
                </div>
            </div>

            <script>
                function addInput(element){

                    var prix;

                    if(element.value=="1"){
                        prix = "7";
                    }
                    else if (element.value=="2"){
                        prix = "10";
                    } else if (element.value=="3"){
                        prix = "14";                }
                    else {
                        prix = "10";
                    }
                    //alert(prix);
                    var test = document.getElementById('typeB');
                    test.textContent=prix;
                }



            </script>
            <!-- fermeture du formulaire -->

            {{ Form::close() }}



        </div>
@endsection