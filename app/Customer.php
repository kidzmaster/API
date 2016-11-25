<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customers';
    protected $fillable=[
    'id',
    'username',
    'password',
    'studient_code',
    'full_name',
    'description',
    'status',

    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
