<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;
use App\Helpers\Helpers;
use App\Services\EmployeeService;
use App\Http\Requests\OfficesRequest;
class EmployeeController extends Controller
{
    private $employeeService;
    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function index()
    {
        $data = Employee::all()->get()->paginate(15);
        return Helpers::sendJsonResponse(200, 'All employees', $data);   
    }
    
    public function showEmployeesByOffice(OfficesRequest $requst)
    {
        $officeCode = $request->officeCode;
        $data  = $this->employeeService->showEmployeesByOffice($officeCode);
        return Helpers::sendJsonResponse(200, 'Employees list', $data);
        
        
    }
}
