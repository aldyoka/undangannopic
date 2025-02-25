<?php

use App\Models\Main;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $main = Main::all();
    $nama = '';
    return view('welcome', compact('main'));
});
Route::get('/welcome', function () {
    $main = Main::all();
    return view('welcome2', compact('main'));
});

Route::post('/store', [\App\Http\Controllers\MainController::class, 'store']);
Route::get('/mepandes', [\App\Http\Controllers\MainController::class, 'index']);
