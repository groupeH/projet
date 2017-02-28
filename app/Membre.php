<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre extends Utilisateur
{

    public $timestamps = 'false';
    protected $table = 'Membre';
    protected $primaryKey = 'id_Membre';
    protected $fillable = 'id_Utilisateur';
 
}