<?php

namespace App\Http\Controllers;

use App\User;

class LoginController extends Controller
{
    public function formulaire(){
      return view('login');
    }
    public function traitement(){
      request()->validate([
        'email'=>['required','email'],
        'password'=>['required','min:8'],
      ]);

      $resultat = auth()->attempt([
        'email' => request('email'),
        'password' => request('password'),
      ]);

      if ($resultat){
        flash("Vous êtes maintenant connecté.")->success();
        return redirect('/mon-compte');
      }

      return back()->withInput()->withErrors([
        'email' => 'Vos identifiants sont incorrects.',
      ]);
    }
}
