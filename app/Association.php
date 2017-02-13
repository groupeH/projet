<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
	public $timestamp = 'false';
    protected $privateKey = "id_Assos";
    protected $table = "Association";
    protected $fillable = array('nom', 'mail', 'telephone', 'description','id_Adresse');
}