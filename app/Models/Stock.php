<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'id_material',
        'quantity',
        'description',
        'payment_form',
        'unit_value',
        'stock_value',
    ];
    protected $connection = 'tenant';
}
