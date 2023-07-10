<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SelfProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(NewsController::class)->prefix('admin')->name('news.')->group(function(){
    Route::get('news/create', 'add')->name('add');
});

Route::controller(SelfProfileController::class)->prefix('admin')->name('selfprofile.')->group(function(){
    Route::get('profile/create', 'add')->name('add');
    Route::get('profile/edit', 'edit')->name('edit');
});