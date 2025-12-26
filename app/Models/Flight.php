<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'name',
        'airline',
        'number_of_seats',
        'price'
    ];
}
