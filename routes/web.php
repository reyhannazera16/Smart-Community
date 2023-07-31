<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DesaController;

use App\Http\Controllers\laravel_example\UserManagement;


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

$controller_path = 'App\Http\Controllers';

// Main Page Route
Route::get('/Metode', $controller_path . '\BayesianController@index')->name('Metode');

Route::get('/dash', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
Route::get('/dashboard/crm', $controller_path . '\dashboard\Crm@index')->name('dashboard-crm');
Route::get('/dashboard/ecommerce', $controller_path . '\dashboard\Ecommerce@index')->name('dashboard-ecommerce');
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Tambahkan rute logout dengan metode POST
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/dokumentasi', function () {
  return view('content.isi.dokumentasi');
})->name('dokumentasi');
Route::resource('/', DesaController::class);
Route::resource('data', DataController::class);


Route::get('/detail', function () {
  return view('content.isi.detail');
})->name('detail');
