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

Route::get('/', function () {

    $services = json_decode(json_encode([
        [
            "name" => "Dry Cleaning",
            "icon" => "clean.svg"
        ],
        [
            "name" => "Carpet Cleaning",
            "icon" => "carpet.svg"
        ],
        [
            "name" => "House Cleaning",
            "icon" => "house.svg"
        ],
        [
            "name" => "Car Interior Cleaning",
            "icon" => "car.svg"
        ],
        [
            "name" => "Upholstery Cleaning",
            "icon" => "sofa_with_buttons.svg"
        ]
        ]));

    return view('welcome', compact('services'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');