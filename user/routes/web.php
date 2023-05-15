<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsersController;
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
    return view('role_create');
});

Route::get('/userCreate', function () {
    return view('user_create');
})->name("user.create");

Route::post('/storeUser',  [UsersController::class,"store"])->name("user.store");
Route::post('/storeRole',[RoleController::class,"store"])->name("role.store");

Route::get('/roleCreate', function () {
    return view('role_create');
})->name("role.create");

Route::get('/login',function (){return view ("authorisation");});
Route::get('/auth',[LoginController::class,'login'])->name('user.login');

Route::post('/register',[RegisterController::class,"register"])->name("user.register");
Route::get('/registration',function (){return view('registration');});