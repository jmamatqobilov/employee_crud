<?php

use App\Http\Controllers\ApplicationController;
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



Route::get('/', [ApplicationController::class, 'all'])->name('all-index');
Route::get('/application/{id}',[ApplicationController::class,'show'])->name('application-show');

Route::get('/application-create', [ApplicationController::class, 'create'])->name('application-create');
Route::post('/application-store', [ApplicationController::class, 'store'])->name('application-store');
Route::get('/application-edit/{id}',[ApplicationController::class,'edit'])->name('application-edit');
Route::put('/application/{id}',[ApplicationController::class,'update'])->name('application-update');
Route::delete('/application-delete/{id}',[ApplicationController::class,'delete'])->name('application-delete');

Route::get('/exel',[ApplicationController::class,'excel'])->name('get-excel');
Route::get('filedownload/{name}',[ApplicationController::class,'fileDownload'])->name('file-download');

Route::get('getFile/{id}',[ApplicationController::class,'fileUpload'])->name('get-file');

Route::get('show-excel/{name}',[ApplicationController::class,'showExcel'])->name('show-excel');
Route::get('show-word/{name}',[ApplicationController::class,'showWord'])->name('show-word');






