<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoftController;

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
});
Route::get('/restore',[SoftController::class, 'soft_restore'])->name('soft_restore');
Route::get('/soft',[SoftController::class, 'soft_delete'])->name('soft_delete');
