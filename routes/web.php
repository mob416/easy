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

//Указываем маршрут на главную страницу: делаем такую запись:
Route::get('/', [\App\Http\Controllers\NoteController::class, 'index']);

//Подключаем контроллер: делаем такую запись:
Route::resource('note', \App\Http\Controllers\NoteController::class);
