<?php

namespace App\Models;

class UserTenant extends BaseUser
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'confirm_password',
        'user_type',
        'phone',
        'cep',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
    ];

    protected $connection = 'tenant';
    protected $table = 'tenant_users';
}
