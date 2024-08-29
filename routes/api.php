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


Route::controller(ProductsController::class)->group(function (){
    Route::get('/productDetails',  'productsWithDescription');
    Route::get('/products-in-stock',  'productsInStock');
    Route::get('/products-in-productline', 'showProductsByProductsLine');
});

Route::controller(CustomerController::class)->group(function (){
    Route::get('/customers-assigned-sales-rep', 'showCustomersAlongWithAssignedSalesRep');
    Route::get('/highest-credit-limit', 'highestCreditLimit');

});

Route::controller(OrdersController::class)->group(function (){
    Route::get('/orders/{customerId}',  'showOrdersBySpecificCustomer');
    Route::get('/list-of-customers-with-orders', 'getNumberOfOrdersByEachCustomer');
    Route::get('/pending-orders','showPendingOrders');
    Route::get('/no-of-orders-placed', 'getNumberOfOrdersByEachCustomer');

});

Route::controller(OrderDetailsController::class)->group(function(){
    Route::get('/order-details/{orderid}','showOrderDetailsByOrderNumber');
    Route::get('/total-quantity-ordered',  'totalQuantityOrdered');

});

Route::controller(PaymentController::class)->group(function(){
    Route::get('/payment-by-customer/{customerNumber}', 'showTotalPaymentByCustomer');
    Route::get('/payment-by-date', 'showPaymentsByDateRange');

});

Route::get('/employees-by-office/{officeCode}', [EmployeeController::class, 'showEmployeesByOffice']);
Route::get('/offices/{state}', [OfficeController::class, 'show']);