<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruler extends Model
{
     protected $table='rulers';
    protected $fillable=[
    'id',
    'name',
    'ruler_id',
    'content',
    'status',
    ];
    
}
