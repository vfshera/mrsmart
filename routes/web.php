<?php

use App\Http\Controllers\PagesController;
use App\Http\Livewire\Settings;
use Illuminate\Support\Facades\Route;



Route::get('/', [PagesController::class,'index'])->name('welcome');
Route::post('contact', [PagesController::class,'contact'])->name('contact');



Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    
    Route::get('/dashboard', [PagesController::class,'dashboard'])->name('dashboard');

    Route::get('/dashboard/site-settings',Settings::class)->name('site-settings');
    // Route::get('/dashboard/site-settings',[PagesController::class,'settings'])->name('site-settings');

});


/**
 * Last Route To Handle 404
 */

 Route::any('{any}', [PagesController::class, 'notFound']);