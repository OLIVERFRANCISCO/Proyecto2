<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\IngresoController;


Route::get('/', function () {
    return view('index');
});


