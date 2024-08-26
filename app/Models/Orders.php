<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'orderNumber';
    protected $foreignKey='customerNumber';
    protected $keyType = 'string';
    public $incrementing = false;

    public function customers(): BelongsTo
    {
        return $this->BelongsTo(Orders::class, 'customerNumber');
    }
    
    
    public function OrderDetails(): HasMany
    {
        return $this->HasMany(OrderDetails::class, 'orderNumber');
    }


}
