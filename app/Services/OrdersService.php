<?php

namespace App\Services;


use App\Models\Orders;
class OrdersService 
{

    public function showOrdersBySpecificCustomer($id)
    {
        $orders = Orders::where('customerNumber','=', $id)->paginate(10);
        return $orders;
    }

    public function showPendingOrders()
    {
        $pendingOrders = Orders::where('status','=','processing')->paginate(10);
        return $pendingOrders;
    }
    
    public function getNumberOfOrdersByEachCustomer()
    {
        $numOfOrders = Orders::with('customers')
        ->groupBy('customerNumber')
        ->selectRaw('customerNumber,  count(orders.customerNumber)')
        ->paginate(10);
        return $numOfOrders;
    }
}
