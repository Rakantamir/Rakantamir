<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RumahsakitController;
use App\Http\Controllers\SistemPakarController;

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

// Halaman utama
Route::get('/index', function() {
    return view('index');
});

// Sistem Pakar
Route::get('/sistem-pakar', [SistemPakarController::class, 'sistempakar']);
Route::get('/sistem-pakar/{penyakit}', [SistemPakarController::class, 'formpenyakit']);
Route::post('/sistem-pakar/{penyakit}', [SistemPakarController::class, 'postgejala']);

// Rumah Sakit
Route::get('/provinsi', [RumahsakitController::class, 'index']);
Route::get('/provinsi/{id}', [RumahsakitController::class, 'kabkot']);
Route::get('/provinsi/{idprop}/rumahsakit/{idrumahsakit}', [RumahsakitController::class, 'rumahsakit']);

// Tentang
Route::get('/tentang', function() {
    return view('tentang');
});

// Blog Kesehatan
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'baca']);
Route::get('/hapus/{id}', [BlogController::class, 'hapus']);
Route::get('/tambah', function() {
    return view('blog.tambah');
});

// Login & Logout
Route::get('/', [AdminController::class, 'index'])->name('/');
Route::post('/login', [AdminController::class, 'login'])->name('login');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

// Grouping Routes with Middleware for Admin Role
Route::group(['middleware' => 'role:admin'], function () {
    // Dashboard Admin (Blog Management)
    Route::get('/blog', [BlogController::class, 'index'])->name('dashboard_admin');
    Route::get('/blog/{id}', [BlogController::class, 'baca']);
    Route::get('/hapus/{id}', [BlogController::class, 'hapus']);
    Route::get('/tambah', function() {
        return view('blog.tambah');
    });
});
