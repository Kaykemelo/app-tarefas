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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog/{id}', function ($id) {

    echo 'Estou vendo a noticia do id:'.$id;
});

Route::get('/usuario/{id}', function ($id) {
    
    echo 'Acessando Usuario:'.$id;
});

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {

        echo 'Admin Dashboard';
    });

    Route::get('/produtos', function () {

        echo 'Admin Produtos';
    });
});

Route::prefix('web')->group(function () {

    Route::get('/dashboard', function () {

        echo 'Web Dashboard';
    });

    Route::get('/produtos', function () {

        echo 'web produtos';
    });
});

Route::get('/ola', function () {
    
    echo 'Hello World';
});

Route::get('/produtos/{id?}',function ($id = null) {
    
    return $id ? 'Produtos do Id:'.$id : 'Lista de Produtos';
});

Route::get('/pedidos/{id}', function ($id) {

    return 'Pedido Numero:'.$id;

})->where('id','[0-9]+');


Route::get('/teste-produtos/{id}/{name}', [TesteController::class, 'listproduct']);


Route::prefix('teste')->group(function () {

    Route::get('/hello-world', [TesteController::class, 'getHelloWorld']);
    Route::get('/teste-metodo', [TesteController::class, 'testeFunction']);
    Route::get('/mensagem', [TesteController::class, 'msgExibition']);
   
});



Route::prefix('usuarios')->group( function () {

    Route::get('/list/{id}/{name}/{year}', [TesteController::class, 'list']); 
    Route::get('/mensagem/{msg}', [TesteController::class, 'msgUser']);
});


Route::prefix('Tasks')->group( function () {

    Route::get('/task', [TaskController::class , 'index']);
    Route::get('/taskbyid/{id}', [TaskController::class, 'show']);
});