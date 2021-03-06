<?php

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

// Route::get('/', 'EmployeeController@showEmployees');
// Route::get('/employee/pdf', 'EmployeeController@createPDF');

Route::get('/', 'ReporteController@crearReportePrimero')->name('users');
Route::get('reporte/pdf', 'ReporteController@createPDF')->name('pdf');
