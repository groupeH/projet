<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
	public $timestamp = 'false';
    protected $privateKey = "id_Association";
    protected $table = "Association";
    protected $fillable = array('nomAssos', 'mailAssos', 'telephoneAssos', 'description', 'pays', 'info_suplementaire', 'id_Adresse');
}