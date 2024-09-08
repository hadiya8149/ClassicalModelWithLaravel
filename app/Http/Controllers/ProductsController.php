<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

use App\Helpers\Helpers;

use App\Services\ProductsService;
class ProductsController extends Controller
{
/**
 * Display all products along with their product lines
 */
    private ProductsService $productService;
    public function __construct(ProductsService $productService)
    {
        $this->productService = $productService;
    }

    public function productsWithDescription()
    {
        $data = $this->productService->productsWithDescription();
        return Helpers::sendJsonResponse(200, 'Product with product lines description', $data);
    }


    public function productsInStock()
    {
        $data = $this->productService->productsInStock();
        return Helpers::sendJsonResponse(200, 'Product in stock', $data);
    }

    public function showAllProducts(){
        $data = $this->productService->showAllProducts();
        return Helpers::sendJsonResponse(200, 'Products', $data);
    }

}
