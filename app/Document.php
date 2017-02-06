<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public $timestamps = 'false';
    protected $table = 'Document';
    protected $primaryKey = 'id_Document';
    protected $fillable = array('url', 'taille', 'dateParution', 'id_Resposanble', 'id_Membre', 'id_Utilisateur');
}
