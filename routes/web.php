<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PractiserController;
use App\Http\Controllers\DemoController;

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
    return view('welcome');
});

Route::get('/index/{name}', [PractiserController::class, 'index']);

 Route::get('/call/{name}/{address}', [DemoController:: class, 'index']);


 Route::resource('user', PractiserController::class)->only(['index', 'create', 'delete']);

 Route::controller(PractiserController::class)->group(function () {
    Route::get('/add', 'create');
     Route::get('/edit', 'edit');
     Route::get('/update','update');
     
});
