<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orders;

class OrdersController extends Controller
{
    public function showOrdersBySpecificCustomer($id){
        $orders = Orders::where('customerNumber','=', $id)->get();
        return response()->json(
            [
                'orders'=>$orders
            ]
            );
    }
    public function showPendingOrders(){
        $pendingOrders = Orders::where('status','=','processing')->get();
        return response()->json(
            [
                'pending orders'=>$pendingOrders
            ]
        );
    }
    // dd row count select statement
    public function getNumberOfOrdersByEachCustomer(){
        $result = Orders::join('customer', 'order.customerNumber', '=', 'customer.customerNumber')
        ->groupBy('customer.customerNumber')
        ->selectRaw('customer.customerNumber,  count(order.customerNumber)')
        ->get();
        return response()->json(
            [
                'data'=>$result
            ]
            );
    }
}
