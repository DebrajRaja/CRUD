<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CrudController;

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
    return view('home');
});
Route::get('/show',function (){
    return view('show');
});
Route::get('/update',function (){
    return view('update');
});
Route::get('/read',function (){
    return view('read');
});

Route::get("show",[CrudController::class,'show']);
Route::get("delete/{id}",[CrudController::class,'delete']);
Route::get("edit/{id}",[CrudController::class,'edit']);
Route::get("edit",[CrudController::class,'update']);
Route::get("read/{id}",[CrudController::class,'read']);
