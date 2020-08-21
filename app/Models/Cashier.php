<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cashier extends Model
{
    protected $fillable = [
        'name',
    ];
    protected $table = "cashiers";
    protected $connection = 'tenant';
}