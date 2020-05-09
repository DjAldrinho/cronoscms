<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigUsuarios extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'configUsuarios';

    protected $fillable = [
        'nombre', 'apellido','email'
    ];
}
