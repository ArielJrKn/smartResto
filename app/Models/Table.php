<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = [
        'number', 
        'libelle',
        'places',
        'id_serveur',
        'qr_code',
        'id_etablissement',
        'status',
        'notes',
        'zone'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_serveur');
    }
}
