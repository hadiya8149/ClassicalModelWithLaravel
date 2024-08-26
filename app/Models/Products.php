<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;
    protected $table='products';
    protected $primaryKey = 'productCode';
    protected $fillable  = ['productCode', 'productName', 'productLine', 'productVendor', 'productDescription', 'quanityinStocks', 'buyPrice', 'MSRP'];
    protected $foreignKey='productLine';
    protected $keyType = 'string';
    public $incrementing = false;
    public function orderDetails(): HasMany
    {
        return $this->HasMany(OrderDetails::class, 'productCode');
    }
    public function productLines()
    {
        return $this->belongsTo(ProductLines::class, 'productLine');
    }
}
