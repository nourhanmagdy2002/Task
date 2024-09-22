<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminTicketController;
use App\Http\Controllers\DeleteController;
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

Route::get('/home', function () {
    return view('home');
});
Route::group(['prefix'=>'/auth'],function(){
    Route::get('/login',[LoginController::class ,'index']);
    Route::post('/login.save',[LoginController::class ,'login_fun'])->name('login.save');
    Route::get('/register',[RegisterController::class ,'index']);
    Route::post('/register.store',[RegisterController::class ,'save'])->name('register.store');
});
Route::group(['prefix'=>'/tickets'],function(){
    Route::get('/',[TicketsController::class ,'index']);
    Route::post('/tickets.save',[TicketsController::class ,'store'])->name('tickets.save');

});
Route::group(['prefix'=>'/admin'],function(){
    Route::get('/users',[AdminUsersController::class ,'showusers']);
    Route::get('/ticketsAdmin',[AdminTicketController::class ,'showtickets']);

});
Route::get('/delete',[DeleteController::class ,'delete']);

