<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lazward1462200062Controller;
use App\Http\Controllers\HistoryPenyakitController;

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

// Tampilan pasien
Route::get('/adminIndex', [Lazward1462200062Controller::class, 'adminIndex']);
Route::get('/adminAdd', [Lazward1462200062Controller::class, 'adminAdd']);
Route::get('/adminEdit/{id}', [Lazward1462200062Controller::class, 'adminEdit']);

// Fungsi pasien
Route::post('/add', [Lazward1462200062Controller::class, 'AddAdmin']);
Route::post('/edit', [Lazward1462200062Controller::class, 'EditAdmin']);
Route::get('/delete/{id}', [Lazward1462200062Controller::class, 'DeleteAdmin']);

// Tampilan history
Route::get('/historyIndex', [HistoryPenyakitController::class, 'historyIndex']);
Route::get('/historyAdd', [HistoryPenyakitController::class, 'historyAdd']);
Route::get('/historyEdit/{id}', [HistoryPenyakitController::class, 'historyEdit']);

// Fungsi history
Route::post('/addHistory', [HistoryPenyakitController::class, 'AddHistory']); 
Route::post('/editHistory', [HistoryPenyakitController::class, 'EditHistory']);
Route::get('/deleteHistory/{id}', [HistoryPenyakitController::class, 'DeleteHistory']);
