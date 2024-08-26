<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;


class ProductLines extends Model
{
    use HasFactory;
    protected $table = 'product_lines';
    protected $primaryKey='productLine';
    protected $fillable = ['productLine', 'textDescription', 'htmlDescription', 'photo'];
    public function products()
    {
        return $this->hasMany(Products::class, 'productLine');
    }
}
