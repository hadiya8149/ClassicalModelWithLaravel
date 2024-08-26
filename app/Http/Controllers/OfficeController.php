<?php

namespace App\Http\Controllers;
use App\Models\Offices;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offices = Offices::all();
        return response()->json([
            'data'=>$offices
        ]);

    }

    public function show($state)
    {
        $offices = Offices::where('state','=',$state)->get();
        return response()->json([
            'data'=>$offices
        ]);
    }

    
}
