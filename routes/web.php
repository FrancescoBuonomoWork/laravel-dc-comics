<?php

use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/heroes',[HeroController::class,'index'])
->name('heroes.index');

Route::get('/heroes/create',[HeroController::class,'create'])
->name('heroes.create');

Route::get('/heroes/{hero}',[HeroController::class,'show'])
->name('heroes.show');

Route::get('/heroes/{hero}/edit',[HeroController::class,'edit'])
->name('heroes.edit');

Route::put('/heroes/{hero}',[HeroController::class,'update'])
->name('heroes.update');

Route::post('/heroes',[HeroController::class,'store'])
->name('heroes.store');

Route::delete('/heroes/{hero}',[HeroController::class,'destroy'])
->name('heroes.destroy');



