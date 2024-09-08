<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Employee;


class Offices extends Model
{
    use HasFactory;
    protected $table = 'offices';
    protected $primaryKey = 'officeCode';

    /// include relatoinships
    public function employees(): HasMany
    {
        return $this->HasMany(Employee::class, 'officeCode');

    }
}
