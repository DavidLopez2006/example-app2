<?php

use Illuminate\Support\Facades\Route;
use app\http\controllers\login\logitnCtrl;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario-registro'{frmregistroCtrl::class,'mostrarDatos'});