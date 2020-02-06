<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    public function create(){
      return view('contacts.create');
    }
    public function store(ContactRequest $request){

      $mailable = new ContactMessageCreated($request->name, $request->email, $request->message);
      Mail::to('f2f826af5d-91a334@inbox.mailtrap.io')->send($mailable);

      // return 'Envoyé!';
      flash("Merci pour votre message.")->success();
      return redirect('contact');
    }
}
