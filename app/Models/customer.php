<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Employee;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'customerNumber';
    protected $keyType = 'string';
    public $incrementing = false;
    public function employees()
    {
        return $this->belongsTo(Employee::class, 'salesRepEmployeeNumber');
    }

    public function payments(): HasMany
    {
        return $this->HasMany(Payments::class, 'customerNumber');
    }

    public function orders(): HasMany
    {
        return $this->HasMany(Orders::class,'customerNumber');
    }


}
