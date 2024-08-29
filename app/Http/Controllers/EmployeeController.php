<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

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
        $result = Employee::with('offices')
        ->where('officeCode', $officeCode)
        ->get();
        return response()->json(
            [
                'data'=>$result
            ]
            );
    }
}
