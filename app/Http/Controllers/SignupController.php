<?php

namespace App\Http\Controllers;

use App\User;

class SignupController extends Controller
{
    public function formulaire(){
      return view('signup');
    }

    public function traitement(){
      request() -> validate([
        'name' => ['required'],
        'email' => ['required','email'],
        'password' => ['required','confirmed','min:8'],
        'password_confirmation' => ['required'],
      ]);
      $utilisateur = User::create([
          'name' => request('name'),
          'email' => request('email'),
          'password' => bcrypt(request('password')),
          'password_confirmation' => bcrypt(request('password_confirmation')),
        ]);
        // return "Merci " .request('name') ." Formulaire bien reçu.";
            flash("Merci " .request('name') ." Formulaire bien reçu.")->success();

            return redirect('/login');
        }
    }
