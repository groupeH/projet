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

/*
    protected $filliable= array('login','mdp','nomUt','mailUt','portable','civilite','photo','moyenCom','ddn','id_Adresse','id_Assos');

    public static function create(array $data)
    {
        return Utilisateur::create([

            'login' => $data['login'],
            'mdp' => bcrypt($data['mdp']),
            'nomUt' => $data['nomUt'],
            'mailUt' => $data['mailUt'],
            'portable' => $data['portable'],
            'civilite' => $data['civilite'],
            'photo' => $data['photo'],
            'moyenCom' => $data['moyenCom'],
            'ddn'=> $data['ddn'],
            'id_adresse' => $data['id_adresse'],
            'id_assoc' => $data['id_assoc'],
        ]);


    }
>>>>>>> Stashed changes*/

}
