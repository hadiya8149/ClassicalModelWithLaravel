<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ProductsLineController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/employee', [EmployeeController::class, 'show']);
Route::get('/offices', [OfficeController::class, 'index']);
Route::get('/offices/{state}', [OfficeController::class, 'show']);
Route::get('/productlines', [ProductsLineController::class, 'index']);