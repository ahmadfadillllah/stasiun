<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DependantDropdownController;
use App\Http\Controllers\PosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login/post', [AuthController::class, 'loginpost'])->name('login.post');

Route::get('/provinces', [DependantDropdownController::class, 'provinces'])->name('provinces');
Route::get('/cities', [DependantDropdownController::class, 'cities'])->name('cities');
Route::get('/districts', [DependantDropdownController::class, 'districts'])->name('districts');
Route::get('/villages', [DependantDropdownController::class, 'villages'])->name('villages');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){

    Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/data/index', [DataController::class, 'index'])->name('data.index');
    Route::post('/data/index/insert', [DataController::class, 'insert'])->name('data.insert');
    Route::get('/data/index/destroy/{id}', [DataController::class, 'destroy'])->name('data.destroy');
    Route::post('/data/index/update/{id}', [DataController::class, 'update'])->name('data.update');

    Route::get('/pos/index', [PosController::class, 'index'])->name('pos.index');
    Route::post('/pos/index/insert', [PosController::class, 'insert'])->name('pos.insert');
    Route::get('/pos/index/destroy/{id}', [PosController::class, 'destroy'])->name('pos.destroy');
    Route::post('/pos/index/update/{id}', [PosController::class, 'update'])->name('pos.update');

});
