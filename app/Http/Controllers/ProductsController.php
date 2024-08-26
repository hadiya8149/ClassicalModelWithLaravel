<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


/**
 * Display all products along with their product lines
 */
    public function productsWithDescription(){
        $result = Products::with('productLines')->get();
        return response()->json(
            ['data'=>$result]   
        );
    }
    
}
