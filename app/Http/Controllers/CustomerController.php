<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\employee;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = customer::all();
        return $customers;
    }
    public function showCustomersAlongWithAssignedSalesRep(){
        // $result = customer::with('employees')->get();
        $result = Customer::join('employee', 'customer.salesRepEmployeeNumber','=', 'employee.employeeNumber')->get();
        return response()->json(
            [
                'data'=>$result
            ]
            );
    }
    public function highestCreditLimit(){
        $result = Customer::max('creditLimit');
        return response()->json(
            [
                'highest credit limit'=>$result
            ]
            );

    }
    
}
