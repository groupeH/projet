<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;



    public function redirectTo(){

        $id = Auth::user()->id_Utilisateur;
        $this->createMember($id);
        return '/home';
    }


    public function createMember($id){

        $resp = DB::table('Responsable')->select('id_Membre', 'id_Resp', 'titreResp')->where('id_Utilisateur', $id)->get()->first();

        if(count($resp)){
            session(['id_Membre' => $resp->id_Membre]);
            session(['id_Resp' => $resp->id_Resp]);
            session(['titreResp' => $resp->titreResp]);

        }else{
            $resp1 = DB::table('Membre')->select('id_Membre')->where('id_Utilisateur', $id)->get()->first();
            if(count($resp1))
                session(['id_Membre' => $resp->id_Membre]);
        }

    }




    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);



    }

    public function username()
    {
        return 'mailUtilisateur';
    }


    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/home');
    }



}
