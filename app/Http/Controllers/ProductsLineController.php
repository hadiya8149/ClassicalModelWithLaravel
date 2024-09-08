<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductLines;
use App\Helpers\Helpers;
use App\Http\Requests\ProductLineRequest;
class ProductsLineController extends Controller
{
    public function index()
    {
        $productLines = ProductLines::inRandomOrder()->first()->productLine;
        return response()->json(
            ["product lines"=>$productLines]

        );
    }

  public function showProductsByProductsLine(ProductLineRequest $request)
    {
        $productLine = $request->productLine;
        $products = ProductLines::with('products')
        ->where('productLine','=',$productLine)->paginate(10);
        $message = 'List of product in product line '. $productLine;
        return Helpers::sendJsonResponse(200, $message, $products);
    }    
}
