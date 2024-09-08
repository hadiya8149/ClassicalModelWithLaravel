<?php
namespace App\Services;
use App\Models\Products;
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

}