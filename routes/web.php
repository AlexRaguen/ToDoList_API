<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('api/todo', [TodosController::class,'list']);
Route::post('api/todo', [TodosController::class,'saveTodo']);
Route::post('api/todo/done/{id}', [TodosController::class,'markAsDone']);
Route::delete('api/todo/delete/{id}', [TodosController::class,'deleteTodo']);
