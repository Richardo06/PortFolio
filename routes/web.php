<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/apropos', [HomeController::class, 'apropos'])->name('apropos');
Route::get('/resume', [HomeController::class, 'resume'])->name('resume');
Route::get('/projet', [HomeController::class, 'projet'])->name('projet');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

