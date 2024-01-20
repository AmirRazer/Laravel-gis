<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/simple-map', [App\Http\Controllers\HomeController::class, 'simple_map'])->name('simple-map');
Route::get('/markers', [App\Http\Controllers\HomeController::class, 'marker'])->name('markers');
Route::get('/circle', [App\Http\Controllers\HomeController::class, 'circle'])->name('circle');
Route::get('/polygon', [App\Http\Controllers\HomeController::class, 'polygon'])->name('polygon');
Route::get('/polyline', [App\Http\Controllers\HomeController::class, 'polyline'])->name('polyline');
Route::get('/rectangle', [App\Http\Controllers\HomeController::class, 'rectangle'])->name('rectangle');
Route::get('/layer', [App\Http\Controllers\HomeController::class, 'layer'])->name('layer');
Route::get('/layer_group', [App\Http\Controllers\HomeController::class, 'layer_group'])->name('layer_group');
Route::get('/geojson', [App\Http\Controllers\HomeController::class, 'geojson'])->name('geojson');
Route::get('/get_coordinate', [App\Http\Controllers\HomeController::class, 'get_coordinate'])->name('get_coordinate');
