<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ProductsLineController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\PaymentController;
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
Route::get('/productDetails', [ProductsController::class, 'productsWithDescription']);

Route::get('/customers-assigned-sales-rep', [CustomerController::class, 'showCustomersAlongWithAssignedSalesRep']);

Route::get('/orders/{customerId}', [OrdersController::class, 'showOrdersBySpecificCustomer']);


Route::get('/order-details/{orderid}',[OrderDetailsController::class, 'showOrderDetailsByOrderNumber']);


Route::get('/payment-by-customer/{customerNumber}', [PaymentController::class, 'showTotalPaymentByCustomer']);

Route::get('/employees-by-office/{officeCode}', [EmployeeController::class, 'showEmployeesByOffice']);

Route::get('/products-in-stock', [ProductsController::class, 'productsInStock']);

Route::get('/highest-credit-limit', [CustomerController::class, 'highestCreditLimit']);

Route::get('/pending-orders', [OrdersController::class, 'showPendingOrders']);

Route::get('/payment-by-date', [PaymentController::class, 'showPaymentsByDateRange']);
Route::get('/products-in-productline', [ProductsLineController::class, 'showProductsByProductsLine']);
Route::get('/no-of-orders-placed', [OrdersController::class, 'getNumberOfOrdersByEachCustomer']);
Route::get('/offices/{state}', [OfficeController::class, 'show']);
Route::get('/total-quantity-ordered', [OrderDetailsController::class, 'totalQuantityOrdered']);
Route::get('/list-of-customers-with-orders', [OrdersController::class, 'getNumberOfOrdersByEachCustomer']);
