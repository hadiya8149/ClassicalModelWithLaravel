<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payments;
use App\Helpers;
class PaymentController extends Controller
{
    public function showTotalPaymentByCustomer($customerNumber)
    {
        $totalPayment = Payments::with('customers')
        ->where('customerNumber', $customerNumber)
        ->sum('amount');
        $result = ['Total Payment'=>$totalPayment];
        return Helpers::sendJsonResponse(200, 'Total payments made by the customer', $result);
    }
    public function showPaymentsByDateRange()
    {
        $startDate= request()->input('startDate');
        $endDate = request()->input('endDate');
        $payments = Payments::whereBetween('paymentDate', [$startDate, $endDate])->get()->paginate(10);
        $message = "Payments from " . $startDate ." to " . $endDate;
        return Helpers::sendJsonResponse(200,$message, $payments);
    }    

}
