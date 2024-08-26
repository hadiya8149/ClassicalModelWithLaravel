<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;
    protected $table='product';
    protected $fillable  = ['productCode', 'productName', 'productLine', 'productVendor', 'productDescription', 'quanityinStocks', 'buyPrice', 'MSRP'];
    
    public function orderDetails(): HasMany
    {
        return $this->HasMany(OrderDetails::class);
    }
    public function productlines(): BelongsTo
    {
        return $this->BelongsTo(ProductLines::class);
    }
}
