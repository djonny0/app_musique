<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('accueil', function () {
    return view('accueil');
})->name('accueil');

//REGISTER
Route::get('register', [AuthController::class, 'register'])->name('register');
//Traitement register
Route::post('register_traitement', [AuthController::class, 'register_traitement'])->name('register_traitement');

//Login
Route::get('login', [AuthController::class, 'login'])->name('login');
//Traitement login
Route::post('login_traitement', [AuthController::class, 'login_traitement'])->name('login_traitement');

//LESSON
Route::get('lesson', [AuthController::class, 'lesson'])->name('lesson');
//CONTACT
Route::get('contact', [AuthController::class, 'contact'])->name('contact');
//PROFIL
Route::get('profil', [AuthController::class, 'profil'])->name('profil');


//devoir
Route::get('devoir', [AuthController::class, 'devoir'])->name('devoir');








