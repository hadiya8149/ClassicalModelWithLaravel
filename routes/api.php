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
    Route::get('/products', 'showAllProducts');
});

Route::controller(CustomerController::class)->group(function (){
    Route::get('/customers-assigned-sales-rep', 'showCustomersAlongWithAssignedSalesRep');
    Route::get('/highest-credit-limit', 'highestCreditLimit');
    Route::get('/all-customers', 'index');

});

Route::controller(OrdersController::class)->group(function (){
    Route::get('/orders/customer',  'showOrdersBySpecificCustomer');
    Route::get('/list-of-customers-with-orders', 'getNumberOfOrdersByEachCustomer');
    Route::get('/pending-orders','showPendingOrders');
    Route::get('/no-of-orders-placed', 'getNumberOfOrdersByEachCustomer');
});

Route::controller(OrderDetailsController::class)->group(function(){
    Route::get('/order-details','showOrderDetailsByOrderNumber');
    Route::get('/total-quantity-ordered',  'totalQuantityOrdered');

});

Route::controller(PaymentController::class)->group(function(){
    Route::get('/payment-by-customer', 'showTotalPaymentByCustomer')->name('totalpayments.byCustomer');
    Route::get('/payment-by-date', 'showPaymentsByDateRange')->name('allPayments.byDateRange');

});

Route::get('/employees-by-office', [EmployeeController::class, 'showEmployeesByOffice'])->name('employees.byOffice');
//{} used for path, use for identifying a resource
// query parameters used for filtering resources 

Route::get('/offices/state', [OfficeController::class, 'showOfficesByState'])->name('offices.byState');
Route::get('/offices', [OfficeController::class, 'index']);

Route::get('/products-in-productline/{productLine?}', [ProductsLineController::class, 'showProductsByProductsLine']);
