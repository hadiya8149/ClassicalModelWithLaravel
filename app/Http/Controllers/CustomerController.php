<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\employee;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = customer::all();
        return $customers;
    }


    public function showCustomersAlongWithAssignedSalesRep()
    {
        $result = customer::with('employees')->get();
        return response()->json(
            [
                'data'=>$result
            ]
            );
    }

    public function highestCreditLimit()
    {
        $creditLimit = Customer::max('creditLimit');
        return response()->json(
            [
                'highest credit limit'=>$creditLimit
            ]
            );

    }    
}
