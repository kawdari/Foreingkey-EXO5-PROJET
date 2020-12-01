<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\JoueurController;
use App\Models\Joueur;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/equipe', [EquipeController::class, 'index']);
Route::get('/create-equipe', [EquipeController::class, 'create']);
Route::post('/store-equipe', [EquipeController::class, 'store']);
Route::get('/equipes', [EquipeController::class, 'showEquipe']);
Route::get('/equipe/{id}', [EquipeController::class, 'show']);
Route::get('/edit-equipe/{id}', [EquipeController::class, 'edit']);
Route::post('/edit-equipe/{id}', [EquipeController::class, 'update']);
Route::post('/delete-equipes/{id}', [EquipeController::class, 'destroy']);


Route::get('/jou', [JoueurController::class, 'index']);
Route::get('/create-joueur', [JoueurController::class, 'create']);
Route::post('/store-joueur', [JoueurController::class, 'store']);
Route::get('/joueurs', [JoueurController::class, 'showJoueurs']);
Route::get('/joueurs/{id}', [JoueurController::class, 'show']);
Route::get('/edit-joueur/{id}', [JoueurController::class, 'edit']);
Route::post('/edit-joueur/{id}', [JoueurController::class, 'update']);


Route::get('/pays', [CountryController::class, 'index']);