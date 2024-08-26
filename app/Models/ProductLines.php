<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;


class ProductLines extends Model
{
    use HasFactory;
    protected $table = 'product_line';
    public function products(): HasMany
    {
        return $this->HasMany(ProductLines::class);
    }
}
