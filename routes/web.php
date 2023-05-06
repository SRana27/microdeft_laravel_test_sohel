<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

Route::get('/',[BlogController::class,'index'])->name('home');
Route::post('/save-blog',[BlogController::class,'add'])->name('save.blog');
Route::get('/manage-blog',[BlogController::class,'namageBlog'])->name('manage.blog');


