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

// Route::get('/', function () {
//     return view('welcome');
// }); en raccourci laravel cela donne: Route::view('/', 'welcome');
Route::view('/', 'welcome');

Route::view('/welcome', 'welcome');

Route::view('/comite', 'comite');

Route::view('/lives2017', 'lives2017')->middleware('App\Http\Middleware\Auth');

Route::view('/lives2018', 'lives2018')->middleware('App\Http\Middleware\Auth');

Route::view('/lives2019', 'lives2019')->middleware('App\Http\Middleware\Auth');

Route::view('/partenaires', 'partenaires');

Route::view('/plan', 'plan');

Route::view('/programme', 'programme');

use App\Http\Controllers\ContactRequest;
Route::get('/contact', 'ContactsController@create');
Route::post('/contact', 'ContactsController@store');


use App\Mail\ContactMessageCreated;
Route::get('/test-email',function() {
  return new ContactMessageCreated('hugues', 'depasse@gmail.com','mon message test');
});

Auth::routes(['verify'=>true]);
// Auth::logout();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

// api
Route::get('/hotel', 'ApiController@index');

// Route::get('protege', function () {
//     return 'affichage de la route protégé';
// })->middleware('verified');
