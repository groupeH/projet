<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    public $timestamps = 'false';
    protected $table = 'Historique';
    protected $primaryKey = 'id_Historique';
    protected $fillable = array('dateDebut', 'dateFin', 'id_Membre', 'id_Utilisateur', 'id_Cotisation');
}
