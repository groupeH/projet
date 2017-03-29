@extends('layouts.layout')
@section('title','Groupe H')
@section('nomPage','Paiement')

@section('content')



    <!-- Ici on place le contenu de la page -->
    <div id="row1" class="row">
        <h4>Paiement du don :</h4>
    <!--<h2>@yield('nomPage')</h2> -->

        <div class="card blue-grey darken-1">
            <div id="crd" class="card-content white-text red accent-4">
                <span class="card-title card1 card2">Informations de la carte</span>
            </div>

            <div class="card-content white-text grey darken-2">
                {{ Form::open(array('url' => 'membre.donnerDons','method'=>'POST')) }}
                <table>
                    <tbody>
                    <tr>
                        <td>
                            Montant du dons (À partir de 5€)
                        </td>
                        <td>
                            <div class="form-group{{ ($errors->has('dons')) ? $errors->first('montantDon') : '' }}">
                                <input type="text" name="montantDon" class="form-control" placeholder="ex : 10">
                                {!! $errors->first('montantDon','<p class="help-block">:message</p>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td>
                            Nom du Titulaire
                        </td>
                        <td>
                            <div class="form-group{{ ($errors->has('nomTitulaire')) ? $errors->first('nomTitulaire') : '' }}">
                                <input type="text" name="nomTitulaire" class="form-control" placeholder="ex : Dupont">
                                {!! $errors->first('nomTitulaire','<p class="help-block">:message</p>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Numéro Carte
                        </td>
                        <td>
                            <div class="form-group{{ ($errors->has('numCarte')) ? $errors->first('numCarte') : '' }}">
                                <input type="text" name="numCarte" class="form-control" placeholder="ex : 4959000...">
                                {!! $errors->first('numCarte','<p class="help-block">:message</p>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Date d'expiration de la carte
                        </td>
                        <td>
                            <div class="form-group{{ ($errors->has('dateCarte')) ? $errors->first('dateCarte') : '' }}">
                                <input type="date" name="dateCarte" class="form-control" placeholder="ex : 01/01/2000">
                                {!! $errors->first('dateCarte','<p class="help-block">:message</p>') !!}
                            </div>
                        </td>
                    </tr>  <tr>
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



            {{ Form::close() }}



        </div>
@endsection