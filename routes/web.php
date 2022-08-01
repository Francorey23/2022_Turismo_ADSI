<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CommentaryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::get('/',[IndexController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/panel', function () {
    return view('layouts.layout');
})->middleware(['auth'])->name('panel');

//inicio de rutas services 
//url de ingreso al dashboard url_localhost/service/create
Route::resource('service', ServiceController::class);

//inicio de rutas sites
//mirar dentro del controlador para implementacion de middleware
Route::resource('site', SiteController::class);

//Ruta de registro
Route::resource('reservation', ReservationController::class);

//Ruta para ver el detalle de sitio en el Index 
Route::get('getSite/{site}',[ReservationController::class, 'getSite'])->name('getSite')->middleware('auth');


Route::get('showSite/{site}',[CommentaryController::class, 'showSite'])->name('showSite');
//Llamamos las rutas para commentary
Route::resource('commentary', CommentaryController::class);

//routes PermissionController
Route::resource('permission', PermissionController::class)->middleware('role:admin');

//routes RoleController
Route::resource('role', RoleController::class)->middleware('role:admin');

//routes UserController
Route::resource('user', UserController::class)->middleware('role:admin');
Route::put('async_role/{user}', [UserController::class, 'asyncRole'])->name('asyncRole');
