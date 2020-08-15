<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'id_provider',
        'type',
        'category',
        'color',
        'measure',
        'quantity',
        'size',
    ];
    protected $connection = 'tenant';
}
