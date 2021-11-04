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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/cliente/novo', [App\Http\Controllers\ClienteController::class, 'create']);
//Rota do formulario
Route::get('/cv/new', [App\Http\Controllers\CVController::class, 'create']);

Route::get('/upload-file', [FileUpload::class, 'createForm']);
// Rota para adicionar o arquivo do curriculo, redirecionar atraves da pag
Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');
