<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KIBAController;
use App\Http\Controllers\KIBBController;
use App\Http\Controllers\KIBCController;
use App\Http\Controllers\KIBDController;
use App\Http\Controllers\KIBEController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangKeluarSementaraController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangMasukSementaraController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KondisiController;
use App\Http\Controllers\MusnahController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\UserController;
use App\Models\BarangKeluar;
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

Route::get('/', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'store']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware(['user'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/tbhUser', [UserController::class, 'create']);
    Route::post('/thbUser', [UserController::class, 'store'])->name('tbhUser');
    Route::get('/edtUser/{id}', [UserController::class, 'edit']);
    Route::put('/edtUser/{id}', [UserController::class, 'update']);
    Route::get('/hpsUser/{id}', [UserController::class, 'destroy']);
    Route::get('/profil/{id}', [UserController::class, 'profil']);
    Route::put('/edtProfil/{id}', [UserController::class, 'post_profil'] );
    Route::put('/edtPassword/{id}', [UserController::class, 'password']);

    Route::get('/pegawai', [PegawaiController::class, 'index']);
    Route::get('/tbhPegawai', [PegawaiController::class, 'create']);
    Route::post('/tbhPegawai', [PegawaiController::class, 'store'])->name('tbhPegawai');
    Route::put('/keyPegawai/{id}', [PegawaiController::class, 'konfir'])->name('konfir');
    Route::get('/edtPegawai/{id}', [PegawaiController::class, 'edit']);
    Route::put('/edtPegawai/{id}', [PegawaiController::class, 'update'])->name('uptPegawai');
    Route::get('/hpsPegawai/{id}', [PegawaiController::class, 'destroy']);

    Route::get('/pemasok', [PemasokController::class, 'index']);
    Route::get('/tbhPemasok', [PemasokController::class, 'create']);
    Route::post('/tbhPemasok', [PemasokController::class, 'store'])->name('tbhPemasok');
    Route::get('/edtPemasok/{id}', [PemasokController::class, 'edit']);
    Route::put('/edtPemasok/{id}', [PemasokController::class, 'update']);
    Route::get('/hpsPemasok/{id}', [PemasokController::class, 'destroy']);

    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::post('/tbhKategori', [KategoriController::class, 'store']);
    Route::put('/edtKategori/{id}', [KategoriController::class, 'update']);
    Route::get('/hpsKategori/{id}', [KategoriController::class, 'destroy']);

    Route::get('/kondisi', [KondisiController::class, 'index']);
    Route::post('/tbhKondisi', [KondisiController::class, 'store']);
    Route::put('/edtKondisi/{id}', [KondisiController::class, 'update']);
    Route::get('/hpsKondisi/{id}', [KondisiController::class, 'destroy']);

    Route::get('/jabatan', [JabatanController::class, 'index']);
    Route::post('/tbhJabatan', [JabatanController::class, 'store']);
    Route::put('/edtJabatan/{id}', [JabatanController::class, 'update']);
    Route::get('/hpsJabatan/{id}', [JabatanController::class, 'destroy']);

    Route::get('/barang', [BarangController::class, 'index']);
    Route::get('/hpsBarang/{id}', [BarangController::class, 'destroy']);
    Route::get('/tbhBarang', [BarangController::class, 'create']);
    Route::post('/tbhBarang', [BarangController::class, 'store'])->name('tbhBarang');
    Route::get('/edtBarang/{id}', [BarangController::class, 'edit']);
    Route::post('/edtBarang/{id}', [BarangController::class, 'update']);

    Route::get('/kiba', [KIBAController::class, 'index']);
    Route::get('/hpsKIBA/{id}', [KIBAController::class, 'destroy']);
    Route::get('/rbKIBA/{jumlah_RB}', [KIBAController::class, 'RB']);
    Route::get('/tbhKIBA', [KIBAController::class, 'create']);
    Route::post('/tbhKIBA', [KIBAController::class, 'store'])->name('tbhKIBA');
    Route::get('/edtKIBA/{id}', [KIBAController::class, 'edit']);
    Route::post('/edtKIBA/{id}', [KIBAController::class, 'update']);
    Route::get('/ctkKIBA', [KIBAController::class, 'cetak']);


    Route::get('/kibb', [KIBBController::class, 'index']);
    Route::get('/hpsKIBB/{id}', [KIBBController::class, 'destroy']);
    Route::get('/tbhKIBB', [KIBBController::class, 'create']);
    Route::post('/tbhKIBB', [KIBBController::class, 'store'])->name('tbhKIBB');
    Route::get('/edtKIBB/{id}', [KIBBController::class, 'edit']);
    Route::post('/edtKIBB/{id}', [KIBBController::class, 'update']);
    Route::get('/ctkKIBB', [KIBBController::class, 'cetak']);


    Route::get('/kibc', [KIBCController::class, 'index']);
    Route::get('/hpsKIBC/{id}', [KIBCController::class, 'destroy']);
    Route::get('/tbhKIBC', [KIBCController::class, 'create']);
    Route::post('/tbhKIBC', [KIBCController::class, 'store'])->name('tbhKIBC');
    Route::get('/edtKIBC/{id}', [KIBCController::class, 'edit']);
    Route::post('/edtKIBC/{id}', [KIBCController::class, 'update']);
    Route::get('/ctkKIBC', [KIBCController::class, 'cetak']);


    Route::get('/kibd', [KIBDController::class, 'index']);
    Route::get('/hpsKIBD/{id}', [KIBDController::class, 'destroy']);
    Route::get('/tbhKIBD', [KIBDController::class, 'create']);
    Route::post('/tbhKIBD', [KIBDController::class, 'store'])->name('tbhKIBD');
    Route::get('/edtKIBD/{id}', [KIBDController::class, 'edit']);
    Route::post('/edtKIBD/{id}', [KIBDController::class, 'update']);
    Route::get('/ctkKIBD', [KIBDController::class, 'cetak']);


    Route::get('/kibe', [KIBEController::class, 'index']);
    Route::get('/hpsKIBE/{id}', [KIBEController::class, 'destroy']);
    Route::get('/tbhKIBE', [KIBEController::class, 'create']);
    Route::post('/tbhKIBE', [KIBEController::class, 'store'])->name('tbhKIBE');
    Route::get('/edtKIBE/{id}', [KIBEController::class, 'edit']);
    Route::post('/edtKIBE/{id}', [KIBEController::class, 'update']);
    Route::get('/ctkKIBE', [KIBEController::class, 'cetak']);


    Route::get('/barang_masuk', [BarangMasukController::class, 'index']);
    Route::get('/tbhBarang_masuk', [BarangMasukController::class, 'create']);
    Route::get('/list/{id}', [BarangMasukController::class, 'get_barang']);
    Route::post('/tbhBarang_masuk', [BarangMasukController::class, 'store']);
    Route::get('/edtBarang_masuk', [BarangMasukController::class, 'edit']);

    Route::get('/barang_keluar', [BarangKeluarController::class, 'index']);
    Route::get('/tbhBarang_keluar', [BarangKeluarController::class, 'create']);
    Route::get('/tampil_bk/{id}', [BarangKeluarController::class, 'get_barang']);
    Route::post('/tbhBarang_keluar', [BarangKeluarController::class, 'store'])->name('tbhBarang_keluar');

    Route::get('/laporan', [DashboardController::class, 'laporan']);
    Route::post('/laporan', [DashboardController::class, 'cetak_laporan'])->name('cetak_laporan');
});
