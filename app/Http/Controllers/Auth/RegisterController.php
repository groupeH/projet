<?php

namespace App\Http\Controllers\Auth;

<<<<<<< Updated upstream
=======
use App\Utilisateur;
>>>>>>> Stashed changes
use App\Http\Controllers\Controller;
use App\Utilisateur;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nomUt' => 'required|max:255',
            'mailUt' => 'required|email|max:255|unique:users',
            'mdp' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return Utilisateur

     *
     */
    public function create()
    {
<<<<<<< Updated upstream
        return Utilisateur::create([
            'login' => $data['name'],
            'mailUtilisateur' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
=======
        //$utilisateur = DB::insert('insert into utilisateurs(id, name) values (?,?)');
        return view('inscription');
    }


    public function insert()
    {
        $utilisateurs = New Utilisateur;
        $utilisateurs->('nom');
        $utilisateurs->('prenom');
        $utilisateurs->('mail');
        $utilisateurs->('mdp');

        $utilisateurs->save();
>>>>>>> Stashed changes
    }

    /*

     public function store(Request $request)
    {

        $utilisateur->nomUt = $request->nomUt;
        $utilisateur->login = $request->login;

       /* $this->validate($request,[
            'nomUt' => 'required',
            'login' => 'required',
            'mailUt' => 'required',
            'portable' => 'required',
            'civilite' => 'required',
            'ddn' => 'required',
            'mdp' => 'required',]);

    }*/
}
