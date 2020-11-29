<?php

use App\Http\Controllers\EquipeController;
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

Route::get('/', [EquipeController::class, 'index']);
Route::get('/create-equipe', [EquipeController::class, 'create']);
Route::post('/store-equipe', [EquipeController::class, 'store']);

Route::get('/equipes', [EquipeController::class, 'showEquipe']);
Route::get('/equipe/{id}', [EquipeController::class, 'show']);
Route::get('/edit-equipe/{id}', [EquipeController::class, 'edit']);
Route::post('/edit-equipe/{id}', [EquipeController::class, 'update']);
Route::post('/delete-equipe/{id}', [EquipeController::class, 'destroy']);
