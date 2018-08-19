<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Notifications\InvoicePaid;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Flashy;

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

    public function confirm($id, $token){

      $user = user::where('id',$id)->where('confirmation_token', $token)->first();

      if ($user) {

        $user->update(['confirmation_token'=> null]);
        $this->guard()->login($user);

        Flashy::success('Votre compte a bien été confirmé');
        return redirect($this->redirectPath());

      } else {

        Flashy::error('Ce lien ne semble plus valide');
        return ('/login');

      }


    }




    public function register(Request $request)
   {
       $this->validator($request->all())->validate();

       event(new Registered($user = $this->create($request->all())));

       $user->notify(new InvoicePaid());
       Flashy::message('un message de confirmation a était envoyer par mail veuillez d\'abord le confimer');
       return redirect('/login');

   }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
          'nomf' => 'required|string|max:255',
          'prenomf' => 'required|string|max:255',
          'nationalitef' => 'required|string|max:255',
          'serie_bac' => '',
          'domaine_etude' => '',
          'etudedesirerf' => '',
          'telf' => '',
          'niveauetudef' => 'required',
          'datenaissancef' => '',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
          'password_confirmation' => 'required',
          'yes' => 'required|accepted',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
          'nom' => $data['nomf'],
          'prenom' => $data['prenomf'],
          'date_naissance' => $data['datenaissancef'],
          'nationalite' => $data['nationalitef'],
          'niveau_etude' => $data['niveauetudef'],
          'seriebac' => $data['serie_bac'],
          'domaineetude' => $data['domaine_etude'],
          'etude_desirer' => $data['etudedesirerf'],
          'tel' => $data['telf'],
          'connu_hakeko' => $data['connuhakekof'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
          'confirmation_token'=>str_replace('/', '', bcrypt(str_random(16)))
        ]);
    }
}
