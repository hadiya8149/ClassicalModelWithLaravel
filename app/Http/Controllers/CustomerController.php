<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\employee;
use Illuminate\Http\Request;
use App\Helpers\Helpers;
class CustomerController extends Controller
{

    public function index()
    {
        $customers = customer::query()->paginate(10);
        return Helpers::sendJsonResponse(200, 'List of all Customers', $customers);

    }


    public function showCustomersAlongWithAssignedSalesRep()
    {
        $result = customer::with('employees')->get()->paginate(10);
        return Helpers::sendJsonResponse(200, 'Customers list along with their assigned sales representatives', $result);
    }

    public function highestCreditLimit()
    {
        $creditLimit = Customer::max('creditLimit');
        $result = ['highest credit limit'=>$creditLimit];
        return Helpers::sendJsonResponse(200, 'Customer with the highest credit limit',$result);
    }    
}
