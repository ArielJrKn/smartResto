<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $roles = [
            'Fondateur',
            'Manager',
            'Serveur',
            'Receptionniste',
            'Caissier',
            'Cuisinier',
            'Barman',
            'RH',
            'fournisseur',
            'partenaire'
        ];
        foreach($roles as $role){
            Role::create([
                'libelle' => $role,
            ]);
        }
    }
}
