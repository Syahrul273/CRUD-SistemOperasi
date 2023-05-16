<?php
use App\Http\Controllers\SistemOperasiController;
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

Route::get('/', [SistemOperasiController::class, 'index' ] );
Route::get('/tambah', [SistemOperasiController::class, 'tambah' ] );
Route::post('/tambah', [SistemOperasiController::class, 'store' ] );
Route::get('/hapus/{id}', [SistemOperasiController::class, 'hapus' ] );
Route::get('/edit/{id}', [SistemOperasiController::class, 'edit' ] );
Route::post('/edit/{id}', [SistemOperasiController::class, 'update' ] );
Route::get('/lihat/{id}', [SistemOperasiController::class, 'lihat' ] );
