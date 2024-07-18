<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DataController;
use App\Http\Controllers\frontend\MapController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\KategoriController;
use App\Http\Controllers\backend\KabupatenController;
use App\Http\Controllers\backend\KecamatanController;
use App\Http\Controllers\backend\ManageAkunController;

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
//     return view('layouts.frontend');
// });
Route::get('/peta',[\App\Http\Controllers\HomeController::class,'spots']);
Route::get('/',[\App\Http\Controllers\frontend\HomeController::class,'index']);

Route::get('/',[\App\Http\Controllers\frontend\HomeController::class,'index'])->name('frontend');
//route maps
Route::get('/maps',[MapController::class,'index'])->name('index');

Route::get('/detail-spot/{slug}',[\App\Http\Controllers\HomeController::class,'detailSpot'])->name('detail-spot'); 

Auth::routes();


Route::middleware(['auth'])->group(function () {
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

// Route Data table
Route::get('/center-point/data', [App\Http\Controllers\backend\DataController::class, 'centerpoint'])->name('center-point.data');
Route::resource('/center-point', App\Http\Controllers\backend\CenterPointController::class);
// route edit
Route::get('/center-point/edit/{id}', [App\Http\Controllers\backend\CenterPointController::class, 'edit'])->name('center-point.edit');
//route update
Route::put('/center-point/update/{id}', [App\Http\Controllers\backend\CenterPointController::class, 'update'])->name('center-point.update');

// route spot
Route::get('/spot/data', [App\Http\Controllers\backend\DataController::class, 'spot'])->name('spot.data');
Route::resource('/spot', App\Http\Controllers\backend\SpotController::class); 
//route kabupaten


Route::get('/kabupaten', [KabupatenController::class, 'index'])->name('kabupaten.index');
Route::get('/kabupaten/create', [KabupatenController::class, 'create'])->name('kabupaten.create');
Route::post('/kabupaten', [KabupatenController::class, 'store'])->name('kabupaten.store');
Route::get('/kabupaten/edit/{id}', [KabupatenController::class, 'edit'])->name('kabupaten.edit');
Route::get('/kabupaten/data', [DataController::class, 'kabupaten'])->name('kabupaten.data');
Route::put('/kabupaten/{kabupaten}', [KabupatenController::class, 'update'])->name('kabupaten.update');
Route::delete('/kabupaten/{id}', [KabupatenController::class, 'destroy'])->name('kabupaten.destroy');

//route kecamatan
Route::get('/kecamatan/data', [DataController::class, 'kecamatan'])->name('kecamatan.data');
Route::get('/kecamatan', [KecamatanController::class, 'index'])->name('kecamatan.index');
Route::get('/kecamatan/create', [KecamatanController::class, 'create'])->name('kecamatan.create');
Route::post('/kecamatan', [KecamatanController::class, 'store'])->name('kecamatan.store');
Route::get('/kecamatan/edit/{id}', [KecamatanController::class, 'edit'])->name('kecamatan.edit');
Route::put('/kecamatan/{kecamatan}', [KecamatanController::class, 'update'])->name('kecamatan.update');
Route::delete('/kecamatan/{id}', [KecamatanController::class, 'destroy'])->name('kecamatan.destroy');


//route kategori
Route::get('/kategori/data', [DataController::class, 'kategori'])->name('kategori.data');
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');


//route seting
Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
Route::put('/setting', [SettingController::class, 'update'])->name('setting.update');


});
Route::middleware(['auth', 'isAdmin'])->group(function () {
//manage akun
Route::get('/manage-akun', [ManageAkunController::class, 'index'])->name('manageakun.index');
Route::get('/manage-akun/data', [DataController::class, 'manageakun'])->name('manageakun.data');
Route::get('/manage-akun/show/{id}', [ManageAkunController::class, 'show'])->name('manageakun.show');
Route::delete('/manage-akun/{id}', [ManageAkunController::class, 'destroy'])->name('manageakun.destroy');
});

