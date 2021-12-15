<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrabajosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\AptitudController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

//Rutas tipo GET
Route::get('/', [HomeController::class , 'Home'])->name('HOME');
Route::get('/Aptitudes', [AptitudController::class , 'Home'])->name('Aptitudes');
Route::get('/Contacto' , [ContactoController::class , 'index'])->name('Contacto');

//Rutas tipo POST
Route::post('/Contacto' , [ContactoController::class , 'store'])->name('Contacto.store');
