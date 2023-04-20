<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
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

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

// Route::get('admin',function(){
//     return view('dashboard.admin');
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/service/index', [ServicesController::class, 'index'])->name('service.index');
//     Route::get('/service/create', [ServicesController::class, 'create']);
//     Route::post('/service/store', [ServicesController::class, 'store']);
//     Route::get('/service/show/{id}', [ServicesController::class, 'show']);
//     Route::get('/service/edit/{id}', [ServicesController::class, 'edit']);
//     Route::post('/service/update/{id}', [ServicesController::class, 'update']);
//     Route::delete('/service/destroy{id}', [ServicesController::class, 'destroy']);
// });

// Route::prefix('admin')->group(function () {
    Route::resource('services', ServicesController::class);
// });