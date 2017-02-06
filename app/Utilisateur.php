<?php

/**
 * Created by PhpStorm.
 * User: Julie
 * Date: 31/01/2017
 * Time: 16:23
 */

//Ceci est le modèle

namespace App;

class Utilisateur {

	public $timestamps = 'false';
    protected $primaryKey = 'idUtilisateur';
    protected $table = 'Utilisateur';
    protected $filliable= array('login','mdp','nomUt','mailUt','portable','civilite','photo','moyenCom','ddn','idAdresse','idAssos');



}