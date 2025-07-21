<?php

use App\Http\Controllers\BirthCertificateController;
use App\Http\Controllers\MarriageCertificateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
// Route::middleware('auth:sanctum')->group(function () {});

Route::post('/certificates', [BirthCertificateController::class, 'store']);
Route::post('/marriageCert', [MarriageCertificateController::class, 'storeMarriage']);
