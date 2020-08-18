<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    protected $fillable = [
        'name',
        'cost',
        'value',
    ];
    protected $connection = 'tenant';
}
