<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ImageController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add-employee',[EmployeeController::class,'addEmployee']);

Route::get('/export-excel',[EmployeeController::class,'exportInToExcel']);
Route::get('/export-csv',[EmployeeController::class,'exportInToCSV']);

Route::get('/resize-image',[ImageController::class,'resizeImage']);
Route::post('/resize-image',[ImageController::class,'resizeImageSumit'])->name('image.resize');

Route::get('/import-form',[EmployeeController::class,'importForm']);
Route::post('/import',[EmployeeController::class,'import'])->name('employee.import');

//crud laravel avec ajax
Route::get('/', 'App\Http\Controllers\LinkController@index');
Route::post('/links','App\Http\Controllers\LinkController@store');
Route::get('/links/{id?}','App\Http\Controllers\LinkController@edit');
Route::put('/links/{id?}','App\Http\Controllers\LinkController@update');
Route::delete('/links/{id?}', 'App\Http\Controllers\LinkController@destroy');
