<?php

namespace App\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use Uuid;
    protected $connection = 'system';
    protected $fillable = [
        'comp_name',
        'comp_document',
        'comp_currency',
        'comp_country',
        'comp_address',
        'comp_phone',
        'comp_whatsapp',
        'comp_email',
        'comp_username',
        'comp_password',
        'comp_language',
        'comp_plan',
        'comp_payed_at',
        'comp_status',
        'connection',
        'database',
        'prefix'
    ];

    public $casts = [
        'id' => 'string'
    ];
}
