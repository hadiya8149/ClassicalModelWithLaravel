<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

class ProductsController extends Controller
{


/**
 * Display all products along with their product lines
 */
    public function productsWithDescription(){
        $result = Products::with('productLines')->get();
        // dd($result);
        return response()->json(
            ['data'=>$result]   
        );
    }
    public function productsInStock(){
        $products = Products::where('quantityInStock','>','1')->get();
        return response()->json([
            'data'=>$products
        ]);
    }

    
}
