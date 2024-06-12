<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lazward1462200062Controller;


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

 //tampilan
Route::get('/adminIndex', [Lazward1462200062Controller::class, 'adminIndex']);
Route::get('/adminAdd', [Lazward1462200062Controller::class, 'adminAdd']);
Route::get('/adminEdit/{id}', [Lazward1462200062Controller::class, 'adminEdit']);

//fungsi
Route::get('/add', [Lazward1462200062Controller::class, 'AddAdmin']);
Route::get('/edit', [Lazward1462200062Controller::class, 'EditAdmin']);
Route::get('/delete/{id}', [Lazward1462200062Controller::class, 'DeleteAdmin']);
