<?php 


namespace App\Services;
use App\Models\Employee;
use App\Models\Offices;

class EmployeeService{
    public function showEmployeesByOffice($officeCode)
    {
        $result = Employee::with('offices')
        ->where('officeCode', $officeCode)
        ->get()->paginate(10);
        return $result;
    }
}