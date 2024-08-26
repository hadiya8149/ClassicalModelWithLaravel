<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class customer extends Model
{
    use HasFactory;
    protected $table = 'customer';

    public function employees(): BelongsTo
    {
        return $this->BelongsTo(Employee::class);
    }

    public function payments(): HasMany
    {
        return $this->HasMany(Payments::class);
    }

    public function orders(): HasMany
    {
        return $this->HasMany(Orders::class);
    }


}
