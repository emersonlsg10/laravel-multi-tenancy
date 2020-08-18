<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $fillable = [
        'model',
        'width',
        'cost',
        'value',
    ];
    protected $connection = 'tenant';
}
