<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MahasiswaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resources([
    'mahasiswa' => MahasiswaController::class,
    'matakuliah' => MatakuliahController::class,
    'absen' => AbsenController::class,
    'jadwal' => JadwalController::class,
    'kontrakmatakuliah' => kontrak_matakuliahController::class,
    'semester' => SemesterController::class,
]);