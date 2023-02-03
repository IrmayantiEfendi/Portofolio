<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BioController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [BioController::class, 'index']);

Route::get('/project', [ProjectController::class, 'index']);

Route::get('/resume', [ResumeController::class, 'index']);
Route::get('/downloadFile', [ResumeController::class, 'getFile']);