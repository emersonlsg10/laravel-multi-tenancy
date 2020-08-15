<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'name_company',
        'provider_representant',
        'phone',
        'cep',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
    ];
    protected $connection = 'tenant';
}
