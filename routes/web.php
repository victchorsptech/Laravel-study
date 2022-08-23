<?php

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

Route::get('/Home', function () {
    $nome = "vitin";
    $idade = 21;
    $trabalho = "programação";
    return view('Home', ['nome' => $nome,
                         'idade' => $idade,
                         'trabalho' => $trabalho]);
});


