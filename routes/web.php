<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

// Route::get('/', function () {
//     return view('index');
// });


Route::resource("/pegawai", PegawaiController::class);

Route::resource("/", PegawaiController::class);