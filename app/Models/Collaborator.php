<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    protected $fillable = [
        'name', 'phone', 'service', 'value', 'type', 'cep',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
    ];
    protected $connection = 'tenant';
}
