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
    $vetor = [1,2,3,4,5];
    return view('Home', [
                        'name' => $nome,
                        'idade' => $idade,
                        'trabalho' => $trabalho,
                        'arr' => $vetor
                        ]);
});


