<<<<<<< HEAD
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre extends Utilisateur
{
    //
    public $timestamps = 'false';
    protected $table = 'Membre';
    protected $primaryKey = array('id_Membre','id_Utilisateur');
 
}
=======
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre extends Utilisateur
{
    //
    public $timestamps = 'false';
    protected $table = 'Membre';
    protected $primaryKey = array('id_Membre','id_Utilisateur');
 
}
>>>>>>> 662090cc9ec9a219a251f197fa724948787af46f
