<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    #[Fillable(['libelle', 'salary'])]
    
    public function users(){
        return $this->hasMany(users::class);
    }
}
