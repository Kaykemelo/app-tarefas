<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('Tasks')->group( function () {

    Route::get('/task', [TaskController::class , 'index']);
    Route::get('/taskbyid/{id}', [TaskController::class, 'show']);
    Route::get('/taskcreate', [TaskController::class, 'create']);
    Route::post('/taskinsert',[TaskController::class, 'store']);
});