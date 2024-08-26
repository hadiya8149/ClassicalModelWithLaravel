<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'order';


    public function customers(): BelongsTo
    {
        return $this->BelongsTo(Orders::class);
    }
    
    
    public function OrderDetails(): HasMany
    {
        return $this->HasMany(OrderDetails::class);
    }


}
