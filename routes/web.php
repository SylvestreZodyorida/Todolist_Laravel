<?php

use App\Http\Controllers\acceuilController;
use App\Http\Controllers\actualiteController;
use App\Http\Controllers\anniversaireController;
use App\Http\Controllers\compte_a_rebourController;
use App\Http\Controllers\feteController;
use App\Http\Controllers\liste_contactController;
use App\Http\Controllers\messagerieController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\editController;
use App\Http\Controllers\programmeController;
use App\Http\Controllers\TodolistController;
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
Route::get('/acceuil',[acceuilController::class ,'index' ])->name('acceuil');
Route::get('/todolist',[TodolistController::class ,'index' ])->name('todolist');
Route::post('/',[TodolistController::class ,'store' ])->name('store');
Route::delete('/{todolist:id}',[TodolistController::class ,'destroy' ])->name('destroy');
Route::get('/programme',[programmeController::class ,'index' ])->name('programme');
Route::get('/rebours',[compte_a_rebourController::class ,'index' ])->name('compte_a_rebours');
Route::get('/actualite',[actualiteController::class ,'index' ])->name('actualite');
Route::get('/fetes',[feteController::class ,'index' ])->name('fete');

Route::get('/anniversaire',[contactController::class ,'indexAnnif' ])->name('anniversaire');
Route::post('/contact/create',[contactController::class ,'store' ])->name('contact.add');
Route::get("/contact/{contact}", [contactController::class, "edit"])->name("contact.edit");
Route::delete("/contact/{contact}", [contactController::class, "delete"])->name("contact.delete");
Route::post("/contact/{contact}", [contactController::class, "update"])->name("contact.update");
Route::get('/contact',[contactController::class ,'index' ])->name('contact');
Route::get('/liste_contacts',[contactController::class ,'liste' ])->name('liste_contacts');


Route::get('/messagerie',[messagerieController::class ,'index' ])->name('messagerie');

/*Route::group(['namespace'=>'App\Http\Controllers\Admin','prefix'=>'admin'],function(){
    Route::resource('posts','postController');
});*/








Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
