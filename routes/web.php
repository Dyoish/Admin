<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardController;

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
// Route::get('/dashboard',[DashboardController::class, 'dashboard']);

// Route::get('/login',[LoginController::class, 'login']);

// Route::get('/signup',[SignupController::class, 'signup']);

Route::get('/', function(){
    return  view('Dashboards');
});

Route::get('/dashboards', function(){
    return  view('Dashboards');
});

Route::get('/customers', function(){
    return  view('Customers');
});

Route::get('/agegroups', function(){
    return  view('Agegroups');
});

Route::get('/productmanagements', function(){
    return  view('Productmanagement');
});

Route::get('crud',[App\Http\Controllers\crudController::class,'index']);
Route::get('crud/create',[App\Http\Controllers\crudController::class,'create']);
Route::post('crud/create',[App\Http\Controllers\crudController::class,'store']);
Route::get('crud/{id}/edit',[App\Http\Controllers\crudController::class,'edit']);
Route::put('crud/{id}/edit',[App\Http\Controllers\crudController::class,'update']);
Route::get('crud/{id}/delete',[App\Http\Controllers\crudController::class,'destroy']);









