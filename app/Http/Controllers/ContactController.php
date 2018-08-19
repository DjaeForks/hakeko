<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use Flashy;

class ContactController extends Controller
{
  public function create()
  {
      return view('contact');
  }

  public function store(ContactRequest $request)
  {
     $message = Message::create($request->only('email','name','prenom','message'));

     Mail::to(config('akeko.admin_support_email'))
     ->send(new ContactMessageCreated($message));

     flashy('Nous vous répondrons dans les plus brefs délais');
     return redirect('/');

  }

}
