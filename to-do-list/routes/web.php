<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;
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

//string syntax declaration
//Route::get('/', 'App\Http\Controllers\ToDoListController@index');

//Php callable syntax declaration
Route::get('/', [ToDoListController::class, 'index']);
    
Route::get('/create/lists', [ToDoListController::class, 'create'])->name('create_list');
Route::get('/store/lists', [ToDoListController::class, 'store'])->name('store_list');
