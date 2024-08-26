<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payments;
class PaymentController extends Controller
{
    public function showTotalPaymentByCustomer($customerNumber){
        $totalPayment = Payments::join('customer', 'payment.customerNumber', '=', 'customer.customerNumber')
        ->where('customer.customerNumber', $customerNumber)
        ->sum('payment.amount');
        return response()->json(
            [
                'status'=>200,
                'total amount'=>$totalPayment
            ]
            );
    }
    public function showPaymentsByDateRange(){
        $startDate= request()->input('startDate');
        $endDate = request()->input('endDate');
        $payments = Payments::whereBetween('paymentDate', [$startDate, $endDate])->get();

        return response()->json(
            [
                'data'=>$payments
            ]
            );
    }    

}
