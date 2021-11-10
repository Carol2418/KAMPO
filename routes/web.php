<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('user', [UsersController::class, 'index'])->name('Users.index');
Route::get('user/{id}', [UsersController::class, 'show'])->name('Users.show');
Route::get('user/{id}/edit', [UsersController::class, 'edit'])->name('Users.edit');
Route::put('user/{id}',[UsersController::class,'update'])->name('Users.update');
Route::post('user',[UsersController::class,'store'])->name('Users.store');
Route::delete('user/{id}', [UsersController::class, 'destroy'])->name('Users.destroy');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
