<?php
namespace App\Services;
use App\Models\Products;
use Illuminate\Pipeline\Pipeline;
use App\Filters;
class ProductsService
{
    public function productsWithDescription()
    {
        $result = Products::with('productLines')->paginate(10);
        return $result;
    }


    public function productsInStock()
    {
        $products = Products::where('quantityInStock','>','1')->paginate(10);
        return $products;
    }
    public function showAllProducts()
    {
        $products = app(Pipeline::class)
                    ->send(Products::query())
                    ->through([
                        \App\Filters\Name::class,
                        \App\Filters\Description::class,
                        \App\Filters\Price::class,
                        \App\Filters\ProductLine::class,

                    ])
                    ->thenReturn()
                    ->get();
        return compact('products');                
    }
}