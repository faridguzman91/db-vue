<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/' , [IndexController::class, 'index']);
Route::get('/show' , [IndexController::class, 'show']);
Route::get('/bio' , [IndexController::class, 'bio']);
Route::get('/exhibitions' , [IndexController::class, 'exhibitions']);
Route::get('/gallery' , [IndexController::class, 'gallery']);
Route::get('/cv' , [IndexController::class, 'cv']);
Route::get('/blog' , [IndexController::class, 'blog']);


// Route::get('/', function () {
//     return view('app');
// });

