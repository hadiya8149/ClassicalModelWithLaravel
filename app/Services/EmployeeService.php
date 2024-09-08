<?php 


namespace App\Services;
use App\Models\employee;

class EmployeeService{
    public function showEmployeesByOffice($officeCode)
    {
        $result = Employee::with('offices')
        ->where('officeCode', $officeCode)
        ->get();
        return $result;
    }
}