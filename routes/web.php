<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\Calculador;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('usuario/teste', function () {
//     return 'teste';
// });

// Route::get('usuario/{id}', function ($id) {
//     return "O seu ID é: {$id}";
// });

Route::get('/usuario/{id}', [UsuarioController::class, 'chamar']);

Route::get('/operacao/calcular/', [Calculador::class, 'calcular'])->middleware('VerificarNumero');

Route::get('/calcular', function () {
    return view('calcular');
});