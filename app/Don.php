<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Don extends Model
{
    //

    public $timestamps = 'false';
    protected $table = 'Don';
    protected $primaryKey = 'id_Don';
    protected $fillable = array('date', 'montant','id_Utilisateur');
}
