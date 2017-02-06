<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    public $timestamps = 'false';
    protected $table = 'Adresse';
    protected $primaryKey = 'id_Adresse';
    protected $fillable = array('num', 'libelle', 'cp', 'ville', 'pays', 'infoSup');
}
