<?php
namespace App\Services;
use App\Models\customer;
use App\Models\employee;
class CustomersService{


    public function index()
    {
        $customers = customer::query()->paginate(10);
        return $customers;

    }


    public function showCustomersAlongWithAssignedSalesRep()
    {
        $result = customer::with('employees')->paginate(10);
        return $result;
    }

    public function highestCreditLimit()
    {
        $creditLimit = Customer::max('creditLimit');
        $result = ['highest credit limit'=>$creditLimit];
        return $result;
    }    
}