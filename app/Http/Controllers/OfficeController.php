<?php

namespace App\Http\Controllers;
use App\Models\Offices;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function index()
    {
        $offices = Offices::all();
        return response()->json([
            'data'=>$offices
        ]);

    }
/**
 * show offices that are in particular state
 */
    public function show($state)
    {
        $offices = Offices::where('state','=',$state)->get();
        return response()->json([
            'data'=>$offices
        ]);
    }

    
}
