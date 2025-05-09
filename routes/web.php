<?php

use App\Http\Controllers\TodoListController;
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

Route::post('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');
Route::post('/markcompleteRoute/{id}', [TodoListController::class, 'markComplete'])->name('markComplete');
Route::get('/', [TodoListController::class, 'index'])->name('index');
