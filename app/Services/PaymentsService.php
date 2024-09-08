<?php 
namespace App\Services;
use App\Models\Payments;
class PaymentsService
{
    public function showTotalPaymentByCustomer($customerNumber)
    {
        $totalPayment = Payments::with('customers')
        ->where('customerNumber', $customerNumber)
        ->sum('amount');
        $result = ['Total Payment'=>$totalPayment];
        return $result;
    }
    public function showPaymentsByDateRange($startDate, $endDate)
    {
        $payments = Payments::whereBetween('paymentDate', [$startDate, $endDate])->get()->paginate(10);
        $message = "Payments from " . $startDate ." to " . $endDate;
        return $payments;
    }  
}