<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public $timestamps = 'false';
    protected $table = 'Document';
    protected $primaryKey = 'id_Doc';
    protected $fillable = array('url', 'taille', 'dateParution', 'id_Responsable', 'id_Membre', 'id_Utilisateur');
}
