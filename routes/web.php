<?php

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
    return view('welcome');
})->name('index');

Auth::routes();

Route::get('/logout', function() {
    \Auth::logout();
    return redirect('login');
})->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/thank-you', [App\Http\Controllers\HomeController::class, 'thankYou'])->name('thank-you');

Route::resources([
    'contact' => App\Http\Controllers\ContactController::class,
],['middleware' => 'auth']);
