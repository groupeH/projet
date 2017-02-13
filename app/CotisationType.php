<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CotisationType extends Model
{
    public $timestamps = 'false';
    protected $table = 'CotisationType';
    protected $primaryKey = 'id_Cotisation';
    protected $fillable = array('montant', 'nom');

}
