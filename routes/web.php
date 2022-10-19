<?php

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

Auth::routes(['register' => false]);
#authenticated routes
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#users routes
$user = App\Http\Controllers\User\UserController::class;
Route::get('/users', [$user, 'index'])->name('users.index');
Route::get('/users-create', [$user, 'create'])->name('users.create');
Route::post('/users-store', [$user, 'store'])->name('users.store');
Route::get('/users-show/{id}', [$user, 'show'])->name('users.show');
Route::put('/users-edit/{id}', [$user, 'edit'])->name('users.edit');
Route::get('/users-permissions/{id}', [$user, 'permissions'])->name('users.permissions');
Route::put('/users-permissions/{id}', [$user, 'updatePermissions'])->name('users.permissions.edit');
