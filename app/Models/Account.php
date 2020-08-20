<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'status',
        'name',
        'due_date',
        'value',
        'observation',
    ];
    protected $connection = 'tenant';
}
