<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstitutController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\UeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ReleveController;

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
    return view('institut.index');
});

Route::resource('/institut',InstitutController::class);
Route::resource('/etudiant',EtudiantController::class);
Route::get('etudiantliste',[EtudiantController::class,'liste'])->name('etudiant.liste');
Route::post('etudiantliste',[EtudiantController::class,'listepost'])->name('etudiant.listepost');
Route::resource('/enseignant',EnseignantController::class);
Route::get('/matiere/add/{id}',[UeController::class,'add'])->name('matiere.add');
Route::get('/ue/',[UeController::class,'index'])->name('ue.liste');
Route::get('/ue/categorie',[UeController::class,'categorie'])->name('ue.categorie');
Route::post('/ue/categorie',[UeController::class,'post'])->name('ue.categoriepost');
Route::post('/matiere/store',[UeController::class,'store'])->name('matiere.store');
Route::post('/matiere/destroy/{id}',[UeController::class,'destroy'])->name('matiere.destroy');

Route::get('note',[NoteController::class,'liste'])->name('note.liste');
Route::post('note',[NoteController::class,'listepost'])->name('note.listepost');
Route::post('note/create',[NoteController::class,'create'])->name('note.create');
Route::post('note/{id}',[NoteController::class,'store'])->name('note.store');
Route::get('note/edit/{id}',[NoteController::class,'edit'])->name('note.edit');
Route::put('note/edit/{id}',[NoteController::class,'update'])->name('note.update');
Route::resource('/releve',ReleveController::class);

