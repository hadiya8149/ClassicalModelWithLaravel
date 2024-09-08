<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetails;
use App\Services\OrderDetailsService;
use App\Http\Requests\showOrderDetailsRequest;
use App\Http\Requests\RequireProductCode;
use App\Helpers\Helpers;

class OrderDetailsController extends Controller
{
    private OrderDetailsService $orderDetailsService;
    
    public function __construct(OrderDetailsService $orderDetailsService)
    {

        $this->orderDetailsService = $orderDetailsService;
    }

    public function showOrderDetailsByOrderNumber(showOrderDetailsRequest $request)
    {
        $orderNumber = $request->orderNumber;
        $data =  $this->orderDetailsService->showOrderDetailsByOrderNumber($orderNumber);
        if(!$data){
            return Helpers::sendFailureResponse(200, 'Order number not found', ["order number"=>$orderNumber]);
        }
        else
        {
            return Helpers::sendJsonResponse(200, 'Order Details', $data);
        }
        
    }
    
    public function totalQuantityOrdered(RequireProductCode $request)
    {
        $productCode  = $request->productCode;
        $data =  $this->orderDetailsService->totalQuantityOrdered($productCode);
        if(!$data)
        {
            return Helpers::sendFailureResponse(200, 'Product code not found', ["Product code"=>$productCode]);
        }
        else{
            return Helpers::sendJsonResponse(200, 'Total quantity ordered', $data);

        }
    }
}
