<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetails;
class OrderDetailsController extends Controller
{
    public function showOrderDetailsByOrderNumber($orderNumber){
        $result  = OrderDetails::where('orderNumber','=',$orderNumber)->get();
        return response()->json(
            [
                'status'=>200,
                'data'=>$result
            ]
            );
    }
}
