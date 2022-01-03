<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KecamatanController;
use App\Http\Controllers\Api\KelurahanController;
use App\Http\Controllers\Api\BengkelController;




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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('kecamatan', [KecamatanController::class, 'TampilKecamatan']);

Route::get('kelurahan/{id}', [KelurahanController::class, 'TampilKelurahan']);

Route::get('tampilsemuabengkel', [BengkelController::class, 'TampilSemuaBengkel']);
Route::get('bengkel/{id}', [BengkelController::class, 'TampilBengkel']);


