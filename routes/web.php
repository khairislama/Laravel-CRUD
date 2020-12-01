<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\premierController;
use App\Http\Controllers\PersonneController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/premier', [premierController::class, 'index']);
Route::redirect('/xxx', '/premier', 301);

//Route::post('/ajouter','formController@ajout');
Route::post('/ajouter', [formController::class, 'ajout']);
Route::get('/personne', [PersonneController::class, 'index']);
Route::get('/create', [PersonneController::class, 'create']);
Route::post('/store', [PersonneController::class, 'store']);
Route::get('/index', [PersonneController::class, 'index']);
Route::get('/show/{personne}', [PersonneController::class, 'show']);
Route::get('/edit/{personne}', [PersonneController::class, 'edit']);
Route::put('/update/{personne}', [PersonneController::class, 'update']);
Route::get('/destroy/{personne}', [PersonneController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
