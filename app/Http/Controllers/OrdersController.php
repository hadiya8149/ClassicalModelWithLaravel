<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrdersRequest;
use App\Helpers\Helpers;
use App\Models\Orders;
use App\Services\OrdersService;

class OrdersController extends Controller
{
    private  $ordersService;
    
    public function __construct(OrdersService $ordersService)
    {

        $this->ordersService = $ordersService;
    }

    public function showOrdersBySpecificCustomer(OrdersRequest $request)
    {
        $id = $request->customerNumber;
        $data = $this->ordersService->showOrdersBySpecificCustomer($id);
        return Helpers::sendJsonResponse(200, 'List of all orders made by the customer', $data);
    }

    public function showPendingOrders()
    {
        $data = $this->ordersService->showPendingOrders();
        return Helpers::sendJsonResponse(200, 'List of all pending orders', $data);
    }
    
    public function getNumberOfOrdersByEachCustomer()
    {
        $numOfOrders = $this->ordersService->getNumberOfOrdersByEachCustomer();
        return Helpers::sendJsonResponse(200, 'Number of orders by each customer', $numOfOrders);
    }
}
