<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
    protected $fillable = [
        'name',
        'description',
        'percentAlcohol',
        'priceBottle',
        'stock',
        'volumeBottle',
        'nbreVerre',
        'priceVerre',
        'disponible',
        'cover',
        'id_verre'
    ];
}
