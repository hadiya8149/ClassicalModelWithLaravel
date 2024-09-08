<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Employee extends Model
{
    use HasFactory;
    // set table name @string
    protected $table = 'employees';
    protected $fillable = ['employeeNumber', 'lastName', 'firstName', 'email'];

    protected $nullable = ['reportsTo'];
    protected $primaryKey='employeeNumber';
    protected $keyType='string';
    public $incrementing = false;
    /*
        get customers related to the employee
    */
    public function customers()
    {
        return $this->hasMany(Customer::class, 'salesRepEmployeeNumber', 'employeeNumber');
    }
    public function offices(): BelongsTo
    {
        return $this->BelongsTo(offices::class, 'officeCode');
    }
}
