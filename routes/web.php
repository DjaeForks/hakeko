<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Mail\ContactMessageCreated;


Route::get('/', function () {
    return view('index');
});
Route::view('/nousconnaitre','nousconnaitre');
Route::view('/savoirplus','savoirplus');
Route::view('/demande_ecole','demande_ecole');
Route::view('/paywithpaypal','paywithpaypal');
Route::view('/Mettre_a_jour','Mettre_a_jour');
Route::view('/payWithpaypal','payWithpaypal');

Route::post('paypal','PaymentController@payWithpaypal');
Route::get('status','PaymentController@getPaymentStatus');

Route::get('/confirm/{id}/{token}','Auth\RegisterController@confirm');


Route::get('/Postuler','PostulerController@fichier')->name('Postuler');
Route::post('/Postuler','PostulerController@traitement')->name('Postuler');

Route::get('/contact','ContactController@create')->name('contact');
Route::post('/contact','ContactController@store')->name('contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
