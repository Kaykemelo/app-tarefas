<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CostumersController;
use App\Http\Controllers\DetailsTaskController;
use App\Http\Controllers\StoresController;
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

Route::prefix('task-details')->group( function () {

    Route::get('/details/{id}', [DetailsTaskController::class, 'show'])->name('details');
    Route::get('/details-create/{taskid}', [DetailsTaskController::class, 'create'])->name('details-create');
    Route::post('/details-insert', [DetailsTaskController::class, 'store'])->name('detail-insert');
    Route::get('/details-edit/{id}', [DetailsTaskController::class, 'edit'])->name('detail-edit');
    Route::post('details-update/{details}', [DetailsTaskController::class, 'update'])->name('detail-update');
});

Route::get('/categorys', [CategoryController::class, 'index']);

Route::get('/category-detail', [CategoryController::class, 'categoryDetail']);

Route::get('/categorys-details', [CategoryController::class, 'detailsCategory']);

Route::get('/costumer', [CostumersController::class, 'index']);

Route::get('/stores', [StoresController::class, 'index']);

Route::get('costumers-notes/{id}', [CostumersController::class, 'showNotes']);

Route::get('stores-notes/{id}',[StoresController::class, 'showNotes']);

Route::get('costumer-tools/{id}', [CostumersController::class , 'getShowTools']);

Route::get('stores-tools/{id}',[StoresController::class , 'getShowTools']);