<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
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
        return view('companies');
    });
    Route::resource('companies', CompaniesController::class);


// Route::get('/home',[HomeController::class,'index']);
// Route::get('/members',[HomeController::class,'members']);
// Route::get('/about',[HomeController::class,'about']);

