<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password', 'adresse', 'ville' , 'telephone', 'type', 'fidelity_point', 'canalDeDiffusion', 'id_role', 'id_etablissement', 'notes', 'birthDate', 'placeBirth', 'dateApply', 'salary', 'tauxSalary', 'iban', 'contrat', 'photo', 'DAuthExpires', 'DAuth'])]

#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'birthDate' => 'date',
            'dateApply' => 'date',
            'DAuthExpires' => 'datetime',
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function generateDAuthCode():void{
        $this->update([
            'DAuth' => rand(100000, 999999),
            'DAuthExpires' => Carbon::now()->addMinutes(10),

        ]);
    }

    public function resetDAuthCode():void{
        $this->update([
            'DAuth' => null,
            'DAuthExpires' => null,

        ]);
    }

    public function role(){
        return $this->belongsTo(Role::class, 'id_role');
    }

    // Relation one-to-one : un utilisateur a une table
    public function table()
    {
        return $this->hasOne(Table::class);
        // Ou si la clé étrangère n'est pas 'user_id' par défaut :
        // return $this->hasOne(Table::class, 'user_id');
    }
}
