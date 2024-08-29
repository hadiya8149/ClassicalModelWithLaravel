<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductLines;
class ProductsLineController extends Controller
{
    public function index()
    {
        $productLines = ProductLines::inRandomOrder()->first()->productLine;
        return response()->json(
            ["product lines"=>$productLines]

        );
    }

    public function showProductsByProductsLine()
    {
        $productLine = request()->input('productLine');
        $products = ProductLines::with('products')
        ->where('productLine','=',$productLine)->get();
        return response()->json(
            [
                'data'=>$products
            ]
        );

    }    
}
