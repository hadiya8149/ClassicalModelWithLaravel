<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orders;

class OrdersController extends Controller
{
    public function showOrdersBySpecificCustomer($id)
    {
        $orders = Orders::where('customerNumber','=', $id)->get();
        return response()->json(
            [
                'orders'=>$orders
            ]
            );
    }

    public function showPendingOrders()
    {
        $pendingOrders = Orders::where('status','=','processing')->get();
        return response()->json(
            [
                'pending orders'=>$pendingOrders
            ]
        );
    }
    
    public function getNumberOfOrdersByEachCustomer()
    {
        $numOfOrders = Orders::with('customers')
        ->groupBy('customerNumber')
        ->selectRaw('customerNumber,  count(orders.customerNumber)')
        ->get();
        return response()->json(
            [
                'data'=>$numOfOrders
            ]
            );
    }
}
