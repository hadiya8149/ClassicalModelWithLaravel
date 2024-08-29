<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetails;
class OrderDetailsController extends Controller
{
    public function showOrderDetailsByOrderNumber($orderNumber)
    {
        $orderDetails  = OrderDetails::where('orderNumber','=',$orderNumber)->get();
        return response()->json(
            [
                'status'=>200,
                'data'=>$orderDetails
            ]
            );
    }
    
    public function totalQuantityOrdered()
    {
        $productCode = request()->input('product-code');
        $totalQuantity = OrderDetails::where('productCode', $productCode)->sum('quantityOrdered');
        return response()->json(['totalQuantityOrdered' => $totalQuantity]);
        }
}
