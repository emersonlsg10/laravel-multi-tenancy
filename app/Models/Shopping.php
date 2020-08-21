<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    protected $fillable = [
        'id_cashier',
        'name_shopping',
        'value',
        'quantity',
        'additional_apply',
        'additional_embroidery',
        'payment',
        'phone',
        'invoice_date',
        'shopping_type',
        'observation',
    ];
    protected $table = "shoppings";
    protected $connection = 'tenant';
}
