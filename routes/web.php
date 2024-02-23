<?php

use App\Http\Controllers\{AdminController, AssocierControlleurs, HomeController};
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
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/associer', [AssocierControlleurs::class, 'index'])->name('user');
Route::get('/associer/creer', [AssocierControlleurs::class, 'create'])->name('user.create');
Route::post('/associer/store', [AssocierControlleurs::class, 'store'])->name('user.store');
Route::get('/associer/show/{id}', [AssocierControlleurs::class, 'show'])->name('user.show');
Route::get('/associer/delete/{id}', [AssocierControlleurs::class, 'delete'])->name('user.delete')->middleware('isUser');
