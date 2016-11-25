<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    protected $table='helps';
     protected $fillable=[
    'id',
    'name',
    'ruler_id',
    'min',
    'max',
    'content',
    'status',
    'images',
    'created_at',
    'updated_at',

    ];

}
