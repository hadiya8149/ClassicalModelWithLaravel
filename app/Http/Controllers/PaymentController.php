<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payments;
use App\Helpers\Helpers;
use App\Http\Requests\PaymentsRequest;
use App\Services\PaymentsService;
class PaymentController extends Controller
{
    private  $paymentsService;
    
    public function __construct(PaymentsService $paymentsService)
    {

        $this->paymentsService = $paymentsService;
    }
    public function showTotalPaymentByCustomer(PaymentsRequest $request)
    {
        $customerNumber = $request->customerNumber;
        $data = $this->paymentsService->showTotalPaymentByCustomer($customerNumber);
        return Helpers::sendJsonResponse(200, 'Total payments made by the customer', $data);
    }
    public function showPaymentsByDateRange(PaymentsRequest $request)
    {
        $startDate= $request->startDate;
        $endDate = $request->endDate;
        $data = $this->paymentsService->showPaymentsByDateRange($startDate, $endDate);
        return Helpers::sendJsonResponse(200,$message, $data);
    }    

}
