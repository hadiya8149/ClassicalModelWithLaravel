<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Payments extends Model
{
    use HasFactory;
    protected $table = 'payment';
    
    public function customers(): BelongsTo
    {
        return $this->BelongsTo(customer::class);
    }
}
