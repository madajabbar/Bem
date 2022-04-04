<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\BeritaController as BeritaController;

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
Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::get('/kegiatan',[HomeController::class, 'kegiatan'])->name('kegiatan');
Route::get('/berita',[HomeController::class, 'berita'])->name('berita');
Route::get('/galeri',[HomeController::class, 'galeri'])->name('galeri');
Route::get('/struktur',[HomeController::class, 'struktur'])->name('struktur');
Route::get('/hubungi-kami',[HomeController::class, 'hubungi'])->name('hubungi');
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('example.dashboard');
    })->name('dashboard');
    Route::get('/form', [ExampleController::class, 'index'])->name('form');
    Route::get('/formjquery', [ExampleController::class, 'viewFormJquery'])->name('form.jquery');
    Route::post('/form/store', [ExampleController::class, 'store'])->name('form.store');
    Route::post('/form/store/jquery', [ExampleController::class, 'storejquery'])->name('form.jquery.store');
    Route::get('/quill', function () {
        return view('example.quill');
    })->name('quill');
    Route::get('/datatables',[ExampleController::class, 'view'])->name('datatables');
    Route::get('/chartapexjs', function () {
        return view('example.chart');
    })->name('chartapexjs');


    Route::resource('/berita', BeritaController::class);
});

Route::get('/dashboard', function () {
    return view('example.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
