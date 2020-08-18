<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'id_client',
        'machine_id',
        'model',
        'width',
        'cost',
        'value',
    ];
    protected $connection = 'tenant';
}
