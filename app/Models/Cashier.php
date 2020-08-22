<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cashier extends Model
{
    protected $fillable = [
        'name_cashier',
        'id_user',
        'class',
        'status',
        'type',
        'setor',
        'value',
        'description',
    ];
    protected $table = "cashiers";
    protected $connection = 'tenant';
}