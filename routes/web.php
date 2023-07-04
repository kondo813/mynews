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
});

Route::controller(NewsController::class)->prefix('admin')->name('news.')->group(function(){
    Route::get('news/create', 'add')->name('add');
});

Route::get('admin/profile/create', [SelfProfileController::class, 'add'])->name('selfprofile');
Route::get('admin/profile/edit', [SelfProfileController::class, 'edit'])->name('selfprofile');