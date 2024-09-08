<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orders;
use App\Helpers;

class OrdersController extends Controller
{
    public function showOrdersBySpecificCustomer($id)
    {
        $orders = Orders::where('customerNumber','=', $id)->get()->paginate(10);
        return Helpers::sendJsonResponse(200, 'List of all orders made by the customer', $orders);
    }

    public function showPendingOrders()
    {
        $pendingOrders = Orders::where('status','=','processing')->get()->paginage(10);
        return Helpers::sendJsonResponse(200, 'List of all pending orders', $pendingOrders);
    }
    
    public function getNumberOfOrdersByEachCustomer()
    {
        $numOfOrders = Orders::with('customers')
        ->groupBy('customerNumber')
        ->selectRaw('customerNumber,  count(orders.customerNumber)')
        ->get()->paginate(10);
        return Helpers::sendJsonResponse(200, 'Number of orders by each customer', $numOfOrders);
    }
}
