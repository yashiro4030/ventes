<?php

use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Admin\LoginController;
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
// middleware=> auth cad un user vient d authentifier, ce dernier doit etre mentionner ds fichier auth.php et 
// a, un model expl 'admin'
// namespace=>'admin' est le nom de dossier admin de controller 

Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'middleware' => 'auth:admin'], function () {

    Route::get('accueil', [DashController::class, 'Dash'])->name('admin.Dash');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
});

Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'middleware' => 'guest:admin'], function () {

    Route::get('login', [LoginController::class, 'showLogin'])->name('admin.showlogin');
    Route::POST('login', [LoginController::class, 'Login'])->name('admin.login');
});
