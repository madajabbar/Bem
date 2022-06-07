<?php

use App\Http\Controllers\admin\AnggotaController;
use App\Http\Controllers\admin\BackgroundController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\BeritaController as BeritaController;
use App\Http\Controllers\admin\InformasiController;
use App\Http\Controllers\admin\KalenderController;
use App\Http\Controllers\admin\KegiatanController;
use App\Http\Controllers\Admin\LayananController as AdminLayananController;
use App\Http\Controllers\admin\PeriodeController;
use App\Http\Controllers\admin\SpandukController;
use App\Http\Controllers\admin\StrukturController;
use App\Http\Controllers\admin\TagController;
use App\Http\Controllers\admin\VisiMisiController;
use App\Http\Controllers\main\BerandaController;
use App\Http\Controllers\main\BeritaController as MainBeritaController;
use App\Http\Controllers\main\GaleriController;
use App\Http\Controllers\main\InformasiController as MainInformasiController;
use App\Http\Controllers\main\KalenderController as MainKalenderController;
use App\Http\Controllers\main\KegiatanController as MainKegiatanController;
use App\Http\Controllers\main\LayananController;
use App\Http\Controllers\main\StrukturController as MainStrukturController;

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

Route::resource('/home', BerandaController::class);
Route::resource('/news',MainBeritaController::class);
Route::resource('/structure',MainStrukturController::class);
Route::resource('/layanan',LayananController::class);
Route::resource('/activity',MainKegiatanController::class);
Route::resource('/calendar',MainKalenderController::class);
Route::resource('/galery',GaleriController::class);
Route::resource('/info',MainInformasiController::class);

Route::get('/', [BerandaController::class, 'index']);
Route::get('bg',[BerandaController::class, 'background']);
// Route::get('/kegiatan',[HomeController::class, 'kegiatan'])->name('kegiatan');
// // Route::get('/berita',[HomeController::class, 'berita'])->name('berita');
// Route::get('/galeri',[HomeController::class, 'galeri'])->name('galeri');
// // Route::get('/struktur',[HomeController::class, 'struktur'])->name('struktur');
Route::get('/hubungi-kami',[HomeController::class, 'hubungi'])->name('hubungi');
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('/dashboard', HomeController::class);
    Route::resource('/berita', BeritaController::class);
    Route::resource('/periode', PeriodeController::class);
    Route::resource('/tag', TagController::class);
    Route::resource('/struktur',StrukturController::class);
    Route::resource('/kegiatan',KegiatanController::class);
    Route::resource('/anggota',AnggotaController::class);
    Route::resource('/informasi', InformasiController::class);
    Route::resource('/spanduk', SpandukController::class);
    Route::resource('/kalender', KalenderController::class);
    Route::resource('/layananadmin', AdminLayananController::class);
    Route::resource('/background', BackgroundController::class);
    Route::resource('/visimisi', VisiMisiController::class);
    Route::post('/kalender/create',[KalenderController::class, 'create']);
    Route::post('/kalender/update',[KalenderController::class, 'update']);
    Route::post('/kalender/delete',[KalenderController::class, 'destroy']);
    Route::get('/berita/show/{id}', [BeritaController::class, 'show']);
    Route::get('/berita/gambar/delete/{id}', [BeritaController::class, 'deleteGambar']);
    Route::get('/kegiatan/show/{id}', [KegiatanController::class, 'show']);
});


require __DIR__.'/auth.php';
