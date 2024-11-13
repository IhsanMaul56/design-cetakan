<?php

use App\Http\Controllers\DesignPdfController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/design-cetakan', [DesignPdfController::class, 'printPdf']);
