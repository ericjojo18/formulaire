<?php

use App\Http\Controllers\FormulaireController;
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
    return view('index');
});

Route::get('formulaire',[FormulaireController::class,'index'])->name('formulaire');
Route::post('formulaire',[FormulaireController::class,'create'])->name('formulaire');
route::get('info-formulaire',[FormulaireController::class,'info'])->name('formulaire.afficher');
Route::get('edit-formulaire/{id}',[FormulaireController::class,'editForm'])->name('edit');
Route::post('edit-formulaire/{id}',[FormulaireController::class,'update'])->name('edit-form');
Route::get('supprimer-formulaire/{id}',[FormulaireController::class,'destroy'])->name('delete-formation');
// 