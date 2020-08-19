<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $fillable = [
        'id_service',
        'value',
        'quantity',
        'budget_footage',
        'additional_apply',
        'additional_embroidery',
        'payment_budget',
        'budget_invoice',
        'budget_type',
        'phone',
        'observation',
    ];
    protected $connection = 'tenant';
}
