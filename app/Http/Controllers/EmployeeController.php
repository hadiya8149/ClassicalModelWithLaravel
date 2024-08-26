<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all()->get();
        return $employees;
    }
    
    public function showEmployeesByOffice($officeCode){
        $result = Employee::join('office', 'employee.officeCode','=', 'office.officeCode')
        ->where('office.officeCode', $officeCode)
        ->get();
        return response()->json(
            [
                'data'=>$result
            ]
            );
    }
}
