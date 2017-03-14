<?php


namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Utilisateur extends Authenticatable{

    use Notifiable;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = array(
        'password',
    );

	public $timestamps = 'false';
    protected $primaryKey = 'id_Utilisateur';
    protected $table = 'Utilisateur';
    protected $fillable= array('login','password','nomUtilisateur','mailUtilisateur','portable','civilite','photo','moyenCommunication','ddn','id_Adresse','id_Assos');


}
