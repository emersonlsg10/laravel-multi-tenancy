<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    protected $fillable = ['name', 'phone', 'service', 'value', 'type'];
    protected $connection = 'tenant';
}
