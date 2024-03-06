<?php

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

Route::get('/EtapaInicio/AlineaciónEstratégica', function () {
    return view('EtapaInicio/AlineacionEstrategica');
});

Route::get('/EtapaInicio/Estrategias', function () {
    return view('EtapaInicio/Estrategias');
});

Route::get('/EtapaInicio/Servicios', function () {
    return view('EtapaInicio/Servicios');
});

Route::get('/EtapaInicio/Procesos', function () {
    return view('EtapaInicio/Procesos');
});
