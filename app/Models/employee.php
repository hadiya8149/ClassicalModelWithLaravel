<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Relations\BelongsTo;



class employee extends Model
{
    use HasFactory;
    // set table name @string
    protected $table = 'employee';
    protected $nullable = ['reportsTo'];
    /*
        get customers related to the employee
    */
    public function customers(): HasMany
    {
        return $this->HasMany(customer::class);
    }
    public function offices(): BelongsTo
    {
        return $this->BelongsTo(office::class);
    }
}
