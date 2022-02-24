<?php

use App\Models\Page;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index', ['content' => new Page()]);
});


Route::get('/logs', [\App\Http\Controllers\LogsController::class, 'index']);

Route::get('/recursion', [\App\Http\Controllers\LogsController::class, 'recursion']);
