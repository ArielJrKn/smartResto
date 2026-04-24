<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verre extends Model
{
    protected $fillable = [
        'name',
        'volumeVerre',
        'photo'
    ];
}
