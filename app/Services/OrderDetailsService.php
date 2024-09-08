<?php 
namespace App\Services;

use App\Models\OrderDetails;


class OrderDetailsService {

    public function totalQuantityOrdered($productCode)
    {
        // check if product code exists
        $productExists = OrderDetails::where('productCode', $productCode)->exists();
        if (!$productExists)
        {
            return false;
        }
        $totalQuantity = OrderDetails::where('productCode', $productCode)->sum('quantityOrdered');
        $result = ['total quantity'=>$totalQuantity];
        return $result;
    }

    public function showOrderDetailsByOrderNumber($orderNumber)
    {
        //check if ordernumber exists;
        $orderDetails  = OrderDetails::where('orderNumber','=',$orderNumber)->get();
        if(!$orderDetails){
            return false;
        }
        return $orderDetails;
    }
}