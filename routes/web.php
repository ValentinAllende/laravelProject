<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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

//llamadas a los Productos
Route::get('/products', [ProductsController::class,'index']); //muestra todos los registros
Route::post('/products', [ProductsController::class,'store']); // crea un registro
Route::put('/products/{id}', [ProductsController::class,'update']); // actualiza un registro
Route::delete('/products/{id}', [ProductsController::class,'destroy']); //elimina un registros