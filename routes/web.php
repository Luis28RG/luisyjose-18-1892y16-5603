<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contantsController;


Route::get('/', function () {
    return view('welcome');
})->name( 'Bienvenido');


Route::get('/contacto/index', [contantsController::class,'index'])->name('contacto.index');

Route::get('/contacto/crear', [contantsController::class,'create'])->name('contacto.create');
Route::post('/contacto', [contantsController::class,'store'])->name('contacto.store');
Route::get('/contacto/mostrar',function () {return view('contacto.mostrar');})->name('contacto/mostrar');
Route::get('/contacto/registro',function () {return view('contacto.formulario');})->name('contacto/formulario');
