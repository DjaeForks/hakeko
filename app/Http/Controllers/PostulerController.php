<?php

namespace App\Http\Controllers;
use Illuminate\Validation;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\PostulerMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\PostulerRequest;
use Flashy;

class PostulerController extends Controller
{
  public function fichier()
  {
      return view('Postuler');
  }

  public function traitement(PostulerRequest $request)
  {
     $message = Message::create($request->only('name','f1','f2','f3'));

     Mail::to(config('akeko.admin_support_email'))
     ->send(new PostulerMessageCreated($message));

     flashy('Nous vous répondrons dans les plus brefs délais');
     return redirect('/');

  }

}
