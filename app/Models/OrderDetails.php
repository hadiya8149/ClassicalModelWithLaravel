<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetails extends Model
{
    use HasFactory;
    protected $table = 'order_details';

    public function orders(): BelongsTo
    {
        return $this->BelongsTo(Orders::class);
    }

    public function products(): BelongsTo
    {
        return $this->BelongsTo(Products::class);
    }
}
