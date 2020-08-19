<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clothing extends Model
{
    protected $fillable = [
        'name',
        'model',
        'cost',
        'value',
        'observation',
        'classification',
        'size',
        'color',
        'quantity',
    ];
    protected $table = "clothings";
    protected $connection = 'tenant';
}
