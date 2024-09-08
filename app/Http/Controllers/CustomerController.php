<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helpers;
use App\Services\CustomersService;
class CustomerController extends Controller
{

    private  $customerService;
    
    public function __construct(CustomersService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        $customers = $this->customerService->index();
        return Helpers::sendJsonResponse(200, 'List of all Customers', $customers);

    }


    public function showCustomersAlongWithAssignedSalesRep()
    {
        $result = $this->customerService->showCustomersAlongWithAssignedSalesRep();
        return Helpers::sendJsonResponse(200, 'Customers list along with their assigned sales representatives', $result);
    }

    public function highestCreditLimit()
    {
        $data = $this->customerService->highestCreditLimit();
        return Helpers::sendJsonResponse(200, 'Customer with the highest credit limit',$data);
    }    
}
