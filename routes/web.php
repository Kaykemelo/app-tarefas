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
    Route::get('/taskcreate', [TaskController::class, 'create']);
    Route::post('/task-insert',[TaskController::class, 'store']);
    Route::get('/task-edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
    Route::post('/task-update/{task}', [TaskController::class, 'update'])->name('task-update');
    Route::post('/task-delete/{task}', [TaskController::class, 'destroy'])->name('task-delete');
    
});